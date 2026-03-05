<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beyond Faith International Church</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#050A19',    // Deep Navy Background
                        cardDark: '#0B1221',   // Slightly lighter for cards
                        accent: '#00B4D8',     // Cyan/Blue Highlight
                        accentDark: '#0077B6', // Hover Blue
                        textGray: '#94A3B8',
                        textLight: '#E2E8F0'
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        serif: ['Playfair Display', 'serif'],
                    },
                    backgroundImage: {
                        'hero-pattern': "linear-gradient(to bottom, rgba(5,10,25,0.3), rgba(5,10,25,1)), url('gallery/banner-2.JPG')",
                        'kids-pattern': "linear-gradient(to top, rgba(5,10,25,0.9), transparent), url('https://images.unsplash.com/photo-1484820540004-1426a1f5999f?q=80&w=2069&auto=format&fit=crop')",
                        'youth-pattern': "linear-gradient(to top, rgba(5,10,25,0.9), transparent), url('https://images.unsplash.com/photo-1523580494863-6f3031224c94?q=80&w=2070&auto=format&fit=crop')",
                        'worship-pattern': "linear-gradient(to top, rgba(5,10,25,0.9), transparent), url('https://images.unsplash.com/photo-1511632765486-a01980e01a18?q=80&w=2070&auto=format&fit=crop')",
                        'outreach-pattern': "linear-gradient(to top, rgba(5,10,25,0.9), transparent), url('https://images.unsplash.com/photo-1469571486292-0ba58a3f068b?q=80&w=2070&auto=format&fit=crop')",
                    }
                }
            }
        }
    </script>

    <style>
        /* Loader Styles */
        #loader {
            position: fixed; inset: 0; background-color: #050A19; z-index: 9999;
            display: flex; justify-content: center; align-items: center; transition: opacity 0.5s ease-out;
        }
        .spinner {
            width: 50px; height: 50px; border: 3px solid rgba(255,255,255,0.1); border-radius: 50%;
            border-top-color: #00B4D8; animation: spin 1s ease-in-out infinite;
        }
        @keyframes spin { to { transform: rotate(360deg); } }

@keyframes pulse {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.7; }
}

        /* Scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #050A19; }
        ::-webkit-scrollbar-thumb { background: #1e293b; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #00B4D8; }
        
        .nav-link { position: relative; }
        .nav-link::after {
            content: ''; position: absolute; width: 0; height: 2px; bottom: -4px; left: 0;
            background-color: #00B4D8; transition: width 0.3s;
        }
        .nav-link:hover::after { width: 100%; }

        /* Mobile Menu Animation */
        #mobile-menu {
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            transform: translateX(100%); /* Start hidden to the right */
        }
        #mobile-menu.open {
            transform: translateX(0); /* Slide in */
        }
        
    </style>
    <style>
.book-3d-container {
    perspective: 1000px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    padding: 2rem;
}

.book-cover {
    width: 100%;
    max-width: 300px;
    height: auto;
    border-radius: 8px;
    box-shadow: 
        0 20px 60px rgba(0, 180, 216, 0.3),
        0 0 40px rgba(0, 180, 216, 0.2),
        -10px 0 30px rgba(0, 0, 0, 0.5);
    transform: rotateY(-15deg) rotateX(5deg);
    transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
}

.book-3d-container:hover .book-cover {
    transform: rotateY(0deg) rotateX(0deg) scale(1.05);
    box-shadow: 
        0 30px 80px rgba(0, 180, 216, 0.4),
        0 0 60px rgba(0, 180, 216, 0.3),
        0 0 30px rgba(0, 0, 0, 0.5);
}

.preview-btn {
    position: absolute;
    bottom: 2rem;
    left: 50%;
    transform: translateX(-50%);
    background: rgba(0, 180, 216, 0.9);
    backdrop-filter: blur(10px);
    color: white;
    padding: 0.75rem 1.5rem;
    border-radius: 9999px;
    font-size: 0.875rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    opacity: 0;
    transition: all 0.3s;
    border: none;
    cursor: pointer;
}

.group:hover .preview-btn {
    opacity: 1;
    bottom: 2.5rem;
}

.preview-btn:hover {
    background: rgba(0, 119, 182, 1);
    transform: translateX(-50%) scale(1.05);
}

#previewModal {
    display: none;
    position: fixed;
    inset: 0;
    z-index: 9999;
    background: rgba(5, 10, 25, 0.95);
    backdrop-filter: blur(10px);
    justify-content: center;
    align-items: center;
    padding: 2rem;
}

#previewModal.active {
    display: flex;
}

.preview-content {
    background: #0B1221;
    border-radius: 16px;
    max-width: 600px;
    width: 100%;
    padding: 2rem;
    position: relative;
}
    </style>
    <style>
.lightbox {
    display: none;
    position: fixed;
    z-index: 5000;
    inset: 0;
    background-color: rgba(5, 10, 25, 0.95);
    justify-content: center;
    align-items: center;
    padding: 2rem;
    opacity: 0;
    transition: opacity 0.3s ease;
}
.lightbox.active {
    display: flex;
    opacity: 1;
}
.lightbox img {
    max-height: 90vh;
    max-width: 90vw;
    border-radius: 8px;
    box-shadow: 0 0 30px rgba(0,180,216,0.3);
    transform: scale(0.9);
    transition: transform 0.3s ease;
}
.lightbox.active img {
    transform: scale(1);
}
.lightbox button {
    position: absolute;
    top: 2rem;
    right: 2rem;
    color: white;
    font-size: 2rem;
}
    </style>
</head>


@php
use App\Models\Payments;

$hasPaid = Payments::where('email', auth()->user()->email ?? 'guest@example.com')
    ->where('ebook_id', $ebook->id)
    ->where('status', 'paid')
    ->exists();

$reference = 'ebook_' . bin2hex(random_bytes(8));
@endphp

<body class="bg-primary text-textLight font-sans antialiased overflow-x-hidden">

    <div id="loader">
        <div class="text-center">
            <div class="spinner mx-auto mb-4"></div>
            <h2 class="font-serif text-xl tracking-[0.3em] uppercase text-white">Beyond Faith</h2>
        </div>
    </div>

    <nav class="fixed w-full z-50 bg-primary/80 backdrop-blur-md border-b border-white/5 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <a href="{{url('/')}}" class="flex-shrink-0">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 border border-white/20 rounded-full flex items-center justify-center">
                             <i class="fa-solid fa-church text-lg text-white"></i>
                        </div>
                        <div class="flex flex-col">
                            <span class="font-serif font-bold text-lg tracking-widest leading-none text-white">BEYOND FAITH</span>
                            <span class="text-[0.6rem] text-textGray tracking-[0.2em] uppercase">International</span>
                        </div>
                    </div>
                </a>
                
                <div class="hidden md:flex space-x-8 text-xs font-bold tracking-widest uppercase text-textGray">
                    <a href="{{url('/')}}" class="nav-link hover:text-white transition-colors">Home</a>
                    <a href="{{url('/')}}#about-page" class="nav-link hover:text-white transition-colors">About Us</a>
                    <a href="{{url('/')}}#events-page" class="nav-link hover:text-white transition-colors">Events</a>
                    <a href="{{url('/')}}#media-page" class="nav-link hover:text-white transition-colors">Media</a>
                    <a href="{{url('/')}}#gallery-page" class="nav-link hover:text-white transition-colors">Gallery</a>
                </div>

                <div class="hidden md:flex items-center gap-4">
                    <button class="text-yellow-500 hover:text-white transition"><i class="fa-solid fa-sun"></i></button>
                    <!-- <button class="border border-accent text-accent px-6 py-2 rounded-full text-xs font-bold uppercase hover:bg-accent hover:text-white transition duration-300">Give Online</button> -->
                </div>
                
                <button onclick="toggleMobileMenu()" class="md:hidden text-white text-2xl z-50 relative">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </div>
    </nav>

    <div id="mobile-menu" class="fixed inset-0 z-[60] bg-cardDark w-full h-full flex flex-col pt-24 px-8 md:hidden">
        <button onclick="toggleMobileMenu()" class="absolute top-6 right-6 text-white text-3xl hover:text-accent transition">
            <i class="fa-solid fa-xmark"></i>
        </button>

        <div class="flex flex-col gap-8 text-center">
            <a href="{{url('/')}}" class="text-2xl font-serif text-white hover:text-accent transition">Home</a>
            <a href="{{url('/')}}#about-page" class="text-2xl font-serif text-white hover:text-accent transition">About Us</a>
            <a href="{{url('/')}}#events-page" class="text-2xl font-serif text-white hover:text-accent transition">Events</a>
            <a href="{{url('/')}}#media-page" class="text-2xl font-serif text-white hover:text-accent transition">Media</a>
            <a href="{{url('/')}}#gallery-page" class="text-2xl font-serif text-white hover:text-accent transition">Gallery</a>
        </div>

        <div class="mt-auto mb-12 border-t border-white/10 pt-8 flex flex-col gap-6 items-center">
            <button class="w-full bg-accent text-white px-6 py-3 rounded-full text-xs font-bold uppercase tracking-widest">Give Online</button>
            <div class="flex gap-6 text-2xl text-textGray">
                <i class="fa-brands fa-facebook hover:text-white"></i>
                <i class="fa-brands fa-instagram hover:text-white"></i>
                <i class="fa-brands fa-youtube hover:text-white"></i>                
            </div>
        </div>
    </div>
    @if(session('success'))
<div
    id="toast-success"
    class="fixed top-6 right-6 z-[100]
           bg-green-600 text-white px-6 py-4 rounded-xl
           shadow-lg flex items-center gap-3
           transition-opacity duration-300"
> 
    <i class="fa-solid fa-circle-check"></i>
    <span>{{ session('success') }}</span>
</div>
@endif

@if(session('download'))
<script>
document.addEventListener('DOMContentLoaded', () => {
    window.location.href = "{{ URL::signedRoute('ebooks.download', ['encrypted' => $encrypted]) }}";
});
</script>
@endif
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const toast = document.getElementById('toast-success');
        if (!toast) return;

        setTimeout(() => {
            toast.classList.add('opacity-0');
        }, 5000);

        setTimeout(() => {
            toast.remove();
        }, 5500);
    });
</script>




<section id="ebook-detail-page" style="padding-top:100px !important;"  
    class="page-section py-16 bg-gradient-to-b from-primary/5 to-primary/10">

    <div  class="max-w-6xl mx-auto px-4">

        <!-- Back -->
        <a href="{{url('/')}}#media-page"
            
         class="flex items-center gap-2 text-xs uppercase tracking-widest text-white hover:text-accent mb-8">
            <i class="fa-solid fa-arrow-left"></i>
            Back to Library
         </a>

        <!-- Card -->
        <div class="bg-cardDark rounded-3xl shadow-2xl overflow-hidden flex flex-col lg:flex-row">

            <!-- Cover -->
            <div class="relative w-full lg:w-1/3 min-h-[300px] lg:min-h-[500px] group">
                <div class="book-3d-container">
                    <img
                        src="{{ asset($ebook->images) }}"
                        alt="{{ $ebook->header }}"
                        class="book-cover">
                </div>
                <button onclick="openPreview()" class="preview-btn">
                    <i class="fa-solid fa-eye"></i> Preview
                </button>
            </div>

            <!-- Content -->
            <div class="w-full lg:w-2/3 p-6 sm:p-8 lg:p-12 flex flex-col">

                <span class="inline-block bg-white/10 text-white px-4 py-1
                             text-[10px] font-bold uppercase rounded-full mb-4">
                    {{ $ebook->category ?? 'Ebook' }}
                </span>

                <h1 class="font-serif text-3xl lg:text-5xl text-white font-bold mb-4">
                    {{ $ebook->header }}
                </h1>

                <div class="flex flex-wrap gap-4 text-textGray text-xs uppercase mb-6">
                    <span><i class="fa-regular fa-user text-accent"></i> Pastor Livinus Nneji</span>
                    <span><i class="fa-regular fa-calendar text-accent"></i> {{ $ebook->created_at->format('M d, Y') }}</span>
                </div>

                <!-- Rating & Stats -->
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 mb-6 pb-6 border-b border-white/10">
                    @if($ebook->rating > 0 && $ebook->reviews_count > 0)
                    <div class="col-span-2 md:col-span-3 lg:col-span-5 flex items-center gap-2 mb-2">
                        <div class="flex text-yellow-400">
                            @for($i = 1; $i <= 5; $i++)
                                <i class="fa{{ $i <= $ebook->rating ? 's' : 'r' }} fa-star text-lg"></i>
                            @endfor
                        </div>
                        <span class="text-white font-bold text-lg">{{ number_format($ebook->rating, 1) }}</span>
                        <span class="text-textGray text-sm">({{ number_format($ebook->reviews_count) }} reviews)</span>
                    </div>
                    @endif
                    
                    @if($ebook->pages)
                    <div class="bg-primary/50 rounded-lg p-3 text-center border border-accent/20">
                        <i class="fa-solid fa-book-open text-accent text-xl mb-1 block"></i>
                        <div class="text-white font-bold text-sm">{{ $ebook->pages }}</div>
                        <div class="text-textGray text-xs">Pages</div>
                    </div>
                    @endif
                    
                    @if($ebook->file_size)
                    <div class="bg-primary/50 rounded-lg p-3 text-center border border-accent/20">
                        <i class="fa-solid fa-file-pdf text-accent text-xl mb-1 block"></i>
                        <div class="text-white font-bold text-sm">{{ $ebook->file_size }}</div>
                        <div class="text-textGray text-xs">File Size</div>
                    </div>
                    @endif
                    
                    @if($ebook->pages)
                    <div class="bg-primary/50 rounded-lg p-3 text-center border border-accent/20">
                        <i class="fa-solid fa-clock text-accent text-xl mb-1 block"></i>
                        <div class="text-white font-bold text-sm">{{ ceil($ebook->pages / 2) }} min</div>
                        <div class="text-textGray text-xs">Read Time</div>
                    </div>
                    @endif
                    
                    @if($ebook->downloads_count > 0)
                    <div class="bg-primary/50 rounded-lg p-3 text-center border border-accent/20">
                        <i class="fa-solid fa-download text-accent text-xl mb-1 block"></i>
                        <div class="text-white font-bold text-sm">{{ number_format($ebook->downloads_count) }}+</div>
                        <div class="text-textGray text-xs">Downloads</div>
                    </div>
                    @endif
                </div>

                <p class="text-textGray leading-relaxed mb-8 text-base">
                    {{ $ebook->message }}
                </p>

                <!-- What You'll Learn -->
                <div class="bg-gradient-to-br from-accent/10 to-transparent rounded-xl p-6 mb-8 border border-accent/20">
                    <h3 class="text-white font-bold text-lg mb-4 flex items-center gap-2">
                        <i class="fa-solid fa-lightbulb text-accent"></i>
                        What You'll Discover
                    </h3>
                    <ul class="space-y-3 text-textGray">
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-check-circle text-accent mt-1"></i>
                            <span>Deep spiritual insights and biblical teachings</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-check-circle text-accent mt-1"></i>
                            <span>Practical applications for daily Christian living</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-check-circle text-accent mt-1"></i>
                            <span>Transformative wisdom from Pastor Livinus Nneji</span>
                        </li>
                    </ul>
                </div>

                <div class="mb-8">
                    @if($ebook->is_on_sale && $ebook->original_price)
                        <div class="flex items-center gap-3 mb-2">
                            <span class="inline-block bg-red-600 text-white px-3 py-1 text-xs font-bold uppercase rounded-full animate-pulse">
                                <i class="fa-solid fa-fire"></i> Limited Time Offer
                            </span>
                            <span class="text-textGray text-lg line-through">₦{{ number_format($ebook->original_price, 2) }}</span>
                        </div>
                        <div class="text-3xl font-bold text-white mb-3">
                            <span class="text-accent">₦{{ number_format($ebook->price, 2) }}</span>
                            <span class="text-green-500 text-lg ml-2">Save {{ round((($ebook->original_price - $ebook->price) / $ebook->original_price) * 100) }}%</span>
                        </div>
                    @else
                        <div class="text-3xl font-bold text-white mb-3">
                            <span class="text-accent">₦{{ number_format($ebook->price, 2) }}</span>
                        </div>
                    @endif
                    <div class="flex items-center gap-2 text-xs text-textGray">
                        <i class="fa-brands fa-cc-visa text-lg"></i>
                        <i class="fa-brands fa-cc-mastercard text-lg"></i>
                        <span>Secure payment via</span>
                        <img src="https://paystack.com/assets/img/logo/logo.svg" alt="Paystack" class="h-4 brightness-200">
                    </div>
                </div>

                <!-- Action -->
                <div class="mt-auto">
@if(!$hasPaid)
    <button
        id="payBtn"
        data-callback-url="{{ route('ebooks.callback', $encrypted) }}"
        class="w-full bg-gradient-to-r from-accent to-accentDark px-8 py-4 rounded-full text-white font-bold uppercase text-lg shadow-lg shadow-accent/30 hover:shadow-accent/50 hover:scale-105 transition-all duration-300 flex items-center justify-center gap-3">
        <i class="fa-solid fa-lock"></i>
        Pay & Download Now
    </button>
    <p class="text-center text-textGray text-xs mt-3">
        <i class="fa-solid fa-shield-halved text-accent"></i> Secure checkout • Instant download
    </p>
@else
    <div class="bg-gradient-to-r from-green-600/20 to-green-600/10 border-2 border-green-600 text-green-400 px-6 py-5 rounded-xl flex items-center gap-4 shadow-lg">
        <i class="fa-solid fa-circle-check text-3xl"></i>
        <div>
            <p class="font-bold text-lg">Payment Successful!</p>
            <p class="text-sm text-green-300">Your ebook has been downloaded automatically.</p>
        </div>
    </div>
@endif


                </div>
            </div>
        </div>
    </div>
</section>

<!-- Preview Modal -->
<div id="previewModal">
    <div class="preview-content">
        <button onclick="closePreview()" class="absolute top-4 right-4 text-white text-2xl hover:text-accent transition">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <h3 class="font-serif text-2xl text-white mb-4">Book Preview</h3>
        <div class="text-textGray mb-4">
            <p class="mb-3">Get a glimpse of what's inside:</p>
            <ul class="space-y-2">
                <li><i class="fa-solid fa-check text-accent"></i> {{ $ebook->pages ?? 'Multiple' }} pages of inspiring content</li>
                <li><i class="fa-solid fa-check text-accent"></i> Written by Pastor Livinus Nneji</li>
                <li><i class="fa-solid fa-check text-accent"></i> {{ $ebook->category ?? 'Spiritual' }} teachings</li>
                <li><i class="fa-solid fa-check text-accent"></i> Downloadable PDF format</li>
            </ul>
        </div>
        <div class="bg-primary/50 p-4 rounded-lg border border-accent/20">
            <p class="text-sm text-textGray italic">"{{ Str::limit($ebook->message, 150) }}"</p>
        </div>
        <button onclick="closePreview()" class="mt-6 w-full bg-accent text-white py-3 rounded-full font-bold uppercase hover:bg-accentDark transition">
            Close Preview
        </button>
    </div>
</div>


@if(!$hasPaid)
<script src="https://js.paystack.co/v1/inline.js"></script>
<script>
const payBtn = document.getElementById('payBtn');
const callbackUrl = payBtn?.dataset.callbackUrl;

payBtn?.addEventListener('click', function () {
    this.disabled = true;
    this.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Processing…';

    PaystackPop.setup({
        key: "{{ config('paystack.publicKey') }}",
        email: "{{ auth()->user()->email ?? 'guest@example.com' }}",
        amount: {{ $ebook->price * 100 }},
        currency: "NGN",
        ref: "{{ $reference }}",
        callback: function (response) {
            payBtn.innerHTML = '<i class="fa-solid fa-check"></i> Download Starting...';
            setTimeout(() => {
                window.location.href = callbackUrl + "?reference=" + response.reference;
            }, 1000);
        },
        onClose: function () {
            payBtn.disabled = false;
            payBtn.innerHTML = '<i class="fa-solid fa-lock"></i> Pay & Download Now';
        }
    }).openIframe();
});
</script>
@endif









    <footer class="bg-black py-20 border-t border-white/5">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-12">
            <div class="col-span-1">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-8 h-8 border border-white/20 rounded-full flex items-center justify-center"><i class="fa-solid fa-church text-xs"></i></div>
                    <span class="font-serif font-bold text-sm tracking-widest">BEYOND FAITH</span>
                </div>
                <p class="text-textGray text-xs leading-relaxed">Taking the limits off your faith and experiencing the greatest love of God.</p>
            </div>
            <div>
                <h4 class="text-white font-bold text-[10px] uppercase tracking-[0.3em] mb-6">Quick Links</h4>
                <ul class="text-textGray text-xs space-y-4 font-medium uppercase tracking-widest">
                    <li><a onclick="switchPage('about')" class="hover:text-accent cursor-pointer">About Us</a></li>
                    <li><a onclick="switchPage('events')" class="hover:text-accent cursor-pointer">Events</a></li>
                    <li><a onclick="switchPage('media')" class="hover:text-accent cursor-pointer">Media Library</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold text-[10px] uppercase tracking-[0.3em] mb-6">Service Times</h4>
                <ul class="text-textGray text-xs space-y-4 font-medium uppercase tracking-widest">
                    <li>Sundays: 9:00 AM & 11:30 AM</li>
                    <li>Wednesdays: 6:30 PM</li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold text-[10px] uppercase tracking-[0.3em] mb-6">Connect</h4>
                <div class="flex gap-4 text-textGray mb-6">
                    <i class="fa-brands fa-facebook-f hover:text-white cursor-pointer transition"></i>
                    <i class="fa-brands fa-instagram hover:text-white cursor-pointer transition"></i>
                    <i class="fa-brands fa-youtube hover:text-white cursor-pointer transition"></i>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 1000, once: true });

        // Remove Loader on Load
        window.addEventListener('load', () => {
            const loader = document.getElementById('loader');
            loader.style.opacity = '0';
            setTimeout(() => loader.style.display = 'none', 500);
        });

        // Toggle Mobile Menu
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('open');
            
            // Toggle Body Scrolling
            if (menu.classList.contains('open')) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = 'auto';
            }
        }

     

// Lightbox Logic
function openLightbox(element) {
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const src = element.querySelector('img').src;

    lightboxImg.src = src;
    lightbox.classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closeLightbox() {
    const lightbox = document.getElementById('lightbox');
    lightbox.classList.remove('active');
    document.body.style.overflow = 'auto';
}

// Close with Escape key
document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape') {
        closeLightbox();
        closePreview();
    }
});

function openPreview() {
    document.getElementById('previewModal').classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closePreview() {
    document.getElementById('previewModal').classList.remove('active');
    document.body.style.overflow = 'auto';
}
    </script>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const section = window.location.hash.replace('#', '');

    if (section) {
        switchPage(section);
    }
});
</script>

</body>
</html>