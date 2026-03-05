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

