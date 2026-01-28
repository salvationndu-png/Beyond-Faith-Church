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
                <div class="flex-shrink-0 cursor-pointer" onclick="switchPage('home')">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 border border-white/20 rounded-full flex items-center justify-center">
                             <i class="fa-solid fa-church text-lg text-white"></i>
                        </div>
                        <div class="flex flex-col">
                            <span class="font-serif font-bold text-lg tracking-widest leading-none text-white">BEYOND FAITH</span>
                            <span class="text-[0.6rem] text-textGray tracking-[0.2em] uppercase">International</span>
                        </div>
                    </div>
                </div>
                
                <div class="hidden md:flex space-x-8 text-xs font-bold tracking-widest uppercase text-textGray">
                    <a href="{{url('/')}}" class="nav-link cursor-pointer hover:text-white transition-colors">Home</a>
                    <a href="{{url('/#about-page')}}" class="nav-link cursor-pointer hover:text-white transition-colors">About Us</a>
                    <a href="{{url('/#events-page')}}" class="nav-link cursor-pointer hover:text-white transition-colors">Events</a>
                    <a href="{{url('/#media-page')}}" class="nav-link cursor-pointer hover:text-white transition-colors">Media</a>
                    <a href="{{url('/#gallery-page')}}" class="nav-link cursor-pointer hover:text-white transition-colors">Gallery</a>
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
            <a href="{{url('/')}}"  class="text-2xl font-serif text-white hover:text-accent transition">Home</a>
            <a href="{{url('/#about-page')}}"  class="text-2xl font-serif text-white hover:text-accent transition">About Us</a>
            <a href="{{url('/#events-page')}}"  class="text-2xl font-serif text-white hover:text-accent transition">Events</a>
            <a href="{{url('/#media-page')}}"  class="text-2xl font-serif text-white hover:text-accent transition">Media</a>
            <a href="{{url('/#gallery-page')}}"  class="text-2xl font-serif text-white hover:text-accent transition">Gallery</a>
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


<section id="media-detail-page" class="page-section">
    <div class="pt-28 px-4 max-w-7xl mx-auto min-h-screen">

        <!-- Back button -->
        <a href="{{url('/#media-page')}}"
            class="text-textGray hover:text-white mb-6 flex items-center gap-2
                   text-xs uppercase tracking-widest">
            <i class="fa-solid fa-arrow-left"></i> Back to Library
         </a>

        <div
            class="bg-cardDark rounded-2xl border border-white/5 overflow-hidden
                   flex flex-col md:flex-row shadow-2xl">

            <!-- Media / thumbnail -->
            <div
                class="w-full md:w-1/3 bg-black relative
                       min-h-[240px] sm:min-h-[300px]
                       flex items-center justify-center group">

                <img
                    src="{{ asset($data->images) }}"
                    class="absolute inset-0 w-full h-full object-cover opacity-60">

                <button
                    class="relative z-10 w-16 h-16 sm:w-20 sm:h-20
                           rounded-full bg-white/10 backdrop-blur
                           border border-white/30
                           flex items-center justify-center
                           active:scale-95 transition
                           group-hover:bg-white/20">
                    <i class="fa-solid fa-play text-white text-xl sm:text-2xl ml-1"></i>
                </button>
            </div>

            <!-- Content -->
            <div class="w-full md:w-2/3 p-5 sm:p-8 md:p-12">

                <span
                    class="bg-white/10 text-white px-3 py-1
                           text-[10px] font-bold uppercase rounded-full">
                    Audio Sermon
                </span>

                <h1
                    class="font-serif text-2xl sm:text-3xl md:text-5xl
                           text-white mt-4 mb-3 leading-snug">
                   {{$data->header}}
                </h1>

                <!-- Meta info -->
                <div
                    class="flex flex-wrap gap-x-4 gap-y-2
                           text-textGray text-[11px]
                           uppercase tracking-wide mb-6">

                    <span><i class="fa-regular fa-user mr-1 text-accent"></i> Pastor Livinus Nneji</span>
                    <span><i class="fa-regular fa-calendar mr-1 text-accent"></i>{{$data->created_at->format('d M Y, H:i')}}</span>
                    <span><i class="fa-regular fa-clock mr-1 text-accent"></i> 42 min</span>
                </div>

                <h4 class="font-bold text-white mb-2 text-sm">Description</h4>

                <p
                    class="text-textGray text-sm leading-relaxed
                           mb-8 max-w-none md:max-w-2xl">
                    {{$data->message}}
                </p>

                <!-- Action buttons -->
                <div class="flex flex-col sm:flex-row gap-4">
        <div class="w-full max-w-3xl mx-auto">
            <audio controls class="w-full rounded-lg  p-2 ">
                <source src="{{ asset($data->audio) }}" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
        </div>






                    <a href="{{ asset($data->audio) }}" download
                        class="w-full sm:w-auto border border-white/20
                               text-textLight px-6 py-3 rounded-full
                               text-xs font-bold uppercase tracking-widest
                               hover:bg-white hover:text-primary transition
                               flex items-center justify-center gap-2">
                        <i class="fa-solid fa-download"></i> Download MP3
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>





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
    if (event.key === 'Escape') closeLightbox();
});
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