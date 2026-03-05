# Production Deployment Checklist

## ✅ Payment Security - READY FOR PRODUCTION

### Security Features Implemented
- ✅ **Encrypted IDs**: All ebook URLs use encrypted IDs (no database ID exposure)
- ✅ **Signed Download URLs**: Time-limited, tamper-proof download links
- ✅ **Server-side Verification**: Payment verification done server-side only
- ✅ **Rate Limiting**: 20 requests/minute on payment endpoints
- ✅ **Webhook Signature Verification**: HMAC validation for Paystack webhooks
- ✅ **CSRF Protection**: All forms protected with Laravel CSRF tokens
- ✅ **File Path Validation**: Download paths validated before serving files

### Pre-Deployment Configuration

#### 1. Environment Variables (.env)
```env
APP_ENV=production
APP_DEBUG=false
APP_KEY=base64:xxxxx  # Generate with: php artisan key:generate
APP_URL=https://yourdomain.com

# Database
DB_CONNECTION=mysql
DB_HOST=your_db_host
DB_DATABASE=your_db_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_secure_password

# Paystack (PRODUCTION KEYS)
PAYSTACK_PUBLIC_KEY=pk_live_xxxxx
PAYSTACK_SECRET_KEY=sk_live_xxxxx

# Session
SESSION_DRIVER=database
SESSION_LIFETIME=120
```

#### 2. Paystack Configuration
1. Login to [Paystack Dashboard](https://dashboard.paystack.com)
2. Go to Settings → API Keys & Webhooks
3. Copy **Live Public Key** → Add to `PAYSTACK_PUBLIC_KEY`
4. Copy **Live Secret Key** → Add to `PAYSTACK_SECRET_KEY`
5. Set Webhook URL: `https://yourdomain.com/paystack/webhook`

#### 3. Database Setup
```bash
php artisan migrate --force
php artisan db:seed  # If you have seeders
```

#### 4. Optimize for Production
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan optimize
```

#### 5. File Permissions
```bash
chmod -R 755 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

#### 6. SSL Certificate
- ✅ Install SSL certificate (Let's Encrypt recommended)
- ✅ Force HTTPS in `.htaccess` or web server config
- ✅ Update `APP_URL` to use `https://`

### Security Checklist

- [ ] `APP_DEBUG=false` in production
- [ ] `APP_ENV=production` set
- [ ] Strong `APP_KEY` generated
- [ ] Database credentials secured
- [ ] Paystack LIVE keys configured (not test keys)
- [ ] Webhook URL configured in Paystack dashboard
- [ ] SSL certificate installed and working
- [ ] File upload directory secured (not web-accessible)
- [ ] Error logging configured
- [ ] Backup strategy in place

### Testing Before Go-Live

#### Payment Flow Test
1. [ ] Test ebook purchase with real Paystack account
2. [ ] Verify payment callback works
3. [ ] Confirm download link is generated
4. [ ] Test download link expires after time limit
5. [ ] Verify webhook receives payment notifications
6. [ ] Test failed payment handling
7. [ ] Verify duplicate payment prevention

#### Security Test
1. [ ] Try accessing ebook with invalid encrypted ID → Should return 404
2. [ ] Try accessing download without payment → Should return 403
3. [ ] Try accessing expired signed URL → Should return 403
4. [ ] Test rate limiting (make 21+ requests in 1 minute) → Should throttle
5. [ ] Verify CSRF protection on forms
6. [ ] Test webhook with invalid signature → Should return 403

### Monitoring & Maintenance

#### Log Files to Monitor
- `storage/logs/laravel.log` - Application errors
- Web server error logs - Server issues
- Paystack dashboard - Payment transactions

#### Regular Tasks
- [ ] Monitor payment success rate
- [ ] Check for failed transactions
- [ ] Review error logs weekly
- [ ] Update dependencies monthly
- [ ] Backup database daily
- [ ] Test payment flow monthly

### Rollback Plan

If issues occur:
1. Switch `APP_ENV=local` and `APP_DEBUG=true` temporarily
2. Check `storage/logs/laravel.log` for errors
3. Verify Paystack webhook is receiving requests
4. Test with Paystack test keys first
5. Contact Paystack support if payment gateway issues

### Support Contacts

- **Paystack Support**: support@paystack.com
- **Paystack Docs**: https://paystack.com/docs
- **Laravel Docs**: https://laravel.com/docs

---

## 🎉 Your Payment System is Production-Ready!

All security measures are in place. Follow this checklist to deploy safely.
