# Beyond Faith International Church Website

> A modern, secure church website with integrated payment system for digital resources, sermon library, event management, and gallery.

![Laravel](https://img.shields.io/badge/Laravel-10.x-red?logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.1+-blue?logo=php)
![Tailwind CSS](https://img.shields.io/badge/Tailwind-3.x-38bdf8?logo=tailwindcss)
![License](https://img.shields.io/badge/License-MIT-green)

## ✨ Features

### 🎯 Core Features
- **Single Page Application (SPA)** - Smooth navigation with hash-based routing
- **Responsive Design** - Mobile-first design with Tailwind CSS
- **Sermon Library** - Audio sermons with search and pagination
- **Digital Bookstore** - Secure ebook sales with Paystack integration
- **Event Management** - Church events with detailed information
- **Photo Gallery** - Image galleries with lightbox viewer
- **Contact System** - Contact form with database storage

### 🔒 Security Features
- **Encrypted URLs** - Database IDs hidden using Laravel encryption
- **Signed Download URLs** - Time-limited, tamper-proof download links
- **Payment Verification** - Server-side verification with Paystack API
- **Rate Limiting** - 20 requests/minute on payment endpoints
- **Webhook Security** - HMAC signature verification
- **CSRF Protection** - All forms protected
- **File Path Sanitization** - Prevents directory traversal attacks

### 💳 Payment System
- **Paystack Integration** - Secure payment gateway
- **Automatic Downloads** - Instant ebook delivery after payment
- **Payment Tracking** - Transaction history in database
- **Webhook Support** - Real-time payment notifications

### 📱 User Interface
- **3D Book Covers** - Interactive ebook previews
- **Audio Player** - Built-in sermon player
- **Search & Filter** - Find sermons and ebooks easily
- **Pagination** - 6 items per page for optimal performance
- **Toast Notifications** - User-friendly feedback messages
- **Loading States** - Smooth loading animations

### 🛠️ Admin Dashboard
- **Event Management** - Create, edit, delete events
- **Sermon Management** - Upload audio sermons with metadata
- **Ebook Management** - Upload PDFs with covers and pricing
- **Gallery Management** - Upload multiple images
- **Contact Management** - View contact form submissions
- **Search & Sort** - Find and organize content easily

## 🚀 Tech Stack

- **Backend**: Laravel 10.x
- **Frontend**: Tailwind CSS, Alpine.js, AOS (Animate On Scroll)
- **Database**: MySQL
- **Payment**: Paystack
- **Authentication**: Laravel Jetstream
- **Icons**: Font Awesome 6

## 📋 Requirements

- PHP >= 8.1
- Composer
- MySQL >= 5.7
- Node.js & NPM (for asset compilation)
- SSL Certificate (required for payments)

## ⚙️ Installation

### 1. Clone Repository
```bash
git clone https://github.com/salvationndu-png/Beyond-Faith-Church.git
cd Beyond-Faith-Church
```

### 2. Install Dependencies
```bash
composer install
npm install
```

### 3. Environment Setup
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Configure Database
Edit `.env` file:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 5. Configure Paystack
Add your Paystack keys to `.env`:
```env
PAYSTACK_PUBLIC_KEY=your_public_key
PAYSTACK_SECRET_KEY=your_secret_key
```

### 6. Run Migrations
```bash
php artisan migrate
```

### 7. Create Storage Link
```bash
php artisan storage:link
```

### 8. Start Development Server
```bash
php artisan serve
```

Visit: `http://localhost:8000`

## 📁 Project Structure

```
beyond/
├── app/
│   ├── Http/Controllers/
│   │   ├── AdminController.php       # Admin CRUD operations
│   │   ├── HomeController.php        # Public pages
│   │   └── EbookPaymentController.php # Payment handling
│   └── Models/
│       ├── Events.php
│       ├── Messages.php              # Sermons
│       ├── Ebooks.php
│       ├── Payments.php
│       └── GalleryItem.php
├── database/migrations/              # Database schema
├── resources/views/
│   ├── user/                        # Public pages
│   └── admin/                       # Admin dashboard
├── routes/web.php                   # Application routes
└── public/
    ├── images/                      # Event images
    ├── ebook_images/                # Ebook covers
    ├── ebooks/                      # PDF files
    ├── audio_messages/              # Sermon audio
    └── galleries/                   # Gallery photos
```

## 🔐 Security Best Practices

### Production Deployment
1. Set `APP_ENV=production` and `APP_DEBUG=false`
2. Use Paystack **LIVE** keys (not test keys)
3. Configure webhook URL in Paystack dashboard
4. Install SSL certificate (required for payments)
5. Run optimization commands:
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   php artisan optimize
   ```

### File Permissions
```bash
chmod -R 755 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

## 📚 Documentation

- [Payment Security Guide](PAYMENT_SECURITY.md)
- [Production Checklist](PRODUCTION_CHECKLIST.md)
- [Security Summary](SECURITY_SUMMARY.md)
- [Final Code Review](FINAL_CODE_REVIEW.md)

## 🎨 Key Features Breakdown

### Ebook Detail Page
- 3D book cover with hover effects
- Stats display (pages, file size, reading time, downloads)
- Star ratings and reviews count
- Discount badges for sales
- Secure payment integration
- Automatic download after payment

### Sermon Library
- Audio player with controls
- Search functionality
- Pagination (6 per page)
- Filter by category
- Download option
- Duration and file size display

### Admin Dashboard
- Clean, modern interface
- Search and sort functionality
- Bulk operations
- Image upload with validation
- PDF upload for ebooks
- Audio upload for sermons

## 🔧 Configuration

### Paystack Webhook
Set webhook URL in Paystack dashboard:
```
https://yourdomain.com/paystack/webhook
```

### Session Configuration
Recommended for production:
```env
SESSION_DRIVER=database
SESSION_LIFETIME=120
```

## 🧪 Testing

### Payment Flow Test
1. Browse to ebook detail page
2. Click "Pay & Download"
3. Complete payment with test card
4. Verify download starts automatically
5. Check payment record in database

### Test Cards (Paystack)
- **Success**: 4084084084084081
- **Insufficient Funds**: 5060666666666666666

## 🤝 Contributing

Contributions are welcome! Please follow these steps:
1. Fork the repository
2. Create a feature branch
3. Commit your changes
4. Push to the branch
5. Open a Pull Request

## 📝 License

This project is open-sourced software licensed under the [MIT license](LICENSE).

## 👥 Credits

- **Laravel Framework** - [laravel.com](https://laravel.com)
- **Tailwind CSS** - [tailwindcss.com](https://tailwindcss.com)
- **Paystack** - [paystack.com](https://paystack.com)
- **Font Awesome** - [fontawesome.com](https://fontawesome.com)

## 📧 Support

For issues and questions:
- Open an issue on GitHub
- Check documentation files
- Review Paystack documentation

## 🎯 Roadmap

- [ ] Email notifications after purchase
- [ ] User authentication for purchase history
- [ ] Ebook preview (first few pages)
- [ ] User reviews and ratings system
- [ ] Wishlist functionality
- [ ] Coupon/discount codes
- [ ] Admin analytics dashboard
- [ ] Social media sharing

---

**Built with ❤️ for Beyond Faith International Church**

*"Taking the limits off your faith and experiencing the greatest love of God."*