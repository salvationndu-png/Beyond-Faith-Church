<!DOCTYPE html>
<html lang="en" class="scroll-smooth overflow-x-hidden">
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
        width: 100vw;
        max-width: 100vw;
        transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        transform: translateX(100vw);
    }

    #mobile-menu.open {
        transform: translateX(0);
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
<body class="bg-primary text-textLight font-sans antialiased overflow-x-hidden ">

    <div id="loader">
        <div class="text-center">
            <div class="spinner mx-auto mb-4"></div>
            <h2 class="font-serif text-xl tracking-[0.3em] uppercase text-white">Beyond Faith</h2>
        </div>
    </div>

    <nav class="fixed w-full max-w-[100vw] overflow-x-hidden z-50 bg-primary/80 backdrop-blur-md border-b border-white/5 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex-shrink-0 cursor-pointer" onclick="switchPage('home')">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 border border-white/20 rounded-full flex items-center justify-center">
                             <i class="fa-solid fa-church text-lg text-white"></i>
                        </div>
                        <div class="flex flex-col">
                            <span class="font-serif font-bold text-lg tracking-widest leading-none text-white">BEYOND FAITH</span>
                            <span class="text-[0.6rem] text-textGray tracking-[0.2em] uppercase">International Church</span>
                        </div>
                    </div>
                </div>
                
                <div class="hidden md:flex space-x-8 text-xs font-bold tracking-widest uppercase text-textGray">
                    <a onclick="switchPage('home')" class="nav-link cursor-pointer hover:text-white transition-colors">Home</a>
                    <a onclick="switchPage('about')" class="nav-link cursor-pointer hover:text-white transition-colors">About Us</a>
                    <a onclick="switchPage('events')" class="nav-link cursor-pointer hover:text-white transition-colors">Events</a>
                    <a onclick="switchPage('media')" class="nav-link cursor-pointer hover:text-white transition-colors">Media</a>
                    <a onclick="switchPage('gallery')" class="nav-link cursor-pointer hover:text-white transition-colors">Gallery</a>
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



        <div
        id="mobile-menu"
        class="fixed top-0 right-0 z-[60] bg-cardDark h-screen w-screen max-w-[100vw] flex flex-col pt-24 px-8 md:hidden overflow-x-hidden"
        >
            <button
            onclick="toggleMobileMenu()"
            class="md:hidden flex items-center justify-center
                    w-10 h-10 shrink-0
                    text-white text-xl
                    relative z-50
                    leading-none"
            >
         <i class="fa-solid fa-xmark"></i>
            </button>


        <div class="flex flex-col gap-8 text-center">
            <a onclick="switchPage('home'); toggleMobileMenu()" class="text-2xl font-serif text-white hover:text-accent transition">Home</a>
            <a onclick="switchPage('about'); toggleMobileMenu()" class="text-2xl font-serif text-white hover:text-accent transition">About Us</a>
            <a onclick="switchPage('events'); toggleMobileMenu()" class="text-2xl font-serif text-white hover:text-accent transition">Events</a>
            <a onclick="switchPage('media'); toggleMobileMenu()" class="text-2xl font-serif text-white hover:text-accent transition">Media</a>
            <a onclick="switchPage('gallery'); toggleMobileMenu()" class="text-2xl font-serif text-white hover:text-accent transition">Gallery</a>
        </div>

        <div class="mt-auto mb-12 border-t border-white/10 pt-8 flex flex-col gap-6 items-center">
            <!-- <button class="w-full bg-accent text-white px-6 py-3 rounded-full text-xs font-bold uppercase tracking-widest">Give Online</button> -->
            <div class="flex gap-6 text-2xl text-textGray">
                <i class="fa-brands fa-facebook hover:text-white"></i>
                <i class="fa-brands fa-instagram hover:text-white"></i>
                <i class="fa-brands fa-youtube hover:text-white"></i>
            </div>
        </div>
    </div>

    <main class="min-h-screen">

        <section id="home-page" class="page-section block">
            
            <div class="relative h-screen flex items-center justify-center bg-hero-pattern bg-cover bg-center bg-no-repeat bg-fixed">
                <div class="text-center px-4 max-w-5xl mx-auto mt-10" data-aos="fade-up">
                    <div class="inline-block px-4 py-1 border border-white/20 rounded-full text-[10px] tracking-[0.2em] uppercase mb-6 backdrop-blur-sm bg-white/5">Experience God's Love</div>
                    <h1 class="font-serif text-5xl md:text-7xl lg:text-8xl font-medium mb-2 leading-tight text-white">
                        Welcome to <br> <span class="text-accent">Beyond Faith</span> International
                    </h1>
                    <p class="font-serif italic text-2xl md:text-3xl text-gray-300 mb-10">(Greatest Love Abode)</p>
                    
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <button onclick="switchPage('events')" class="bg-accent text-white px-8 py-3 rounded-full text-xs font-bold uppercase tracking-widest hover:bg-accentDark transition shadow-[0_0_25px_rgba(0,180,216,0.4)]">Get Started</button>
                        <button onclick="switchPage('about')" class="border border-white/30 text-white px-8 py-3 rounded-full text-xs font-bold uppercase tracking-widest hover:bg-white hover:text-primary transition flex items-center justify-center gap-2"><i class="fa-solid fa-play"></i> Contact Us</button>
                    </div>
                </div>
            </div>

            <div class="max-w-7xl mx-auto px-4 -mt-24 relative z-20 pb-20">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-cardDark/95 backdrop-blur border border-white/5 p-8 rounded-xl shadow-xl hover:-translate-y-2 transition duration-300" data-aos="fade-up" data-aos-delay="0">
                        <div class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center mb-4 text-accent"><i class="fa-regular fa-clock"></i></div>
                        <h3 class="font-serif text-xl mb-1 text-white">Service Times</h3>
                        <p class="text-textGray text-xs uppercase tracking-wide mb-4">Sundays at 9AM & 11AM<br>Wednesdays at 7PM</p>
                    </div>
                    <div class="bg-cardDark/95 backdrop-blur border border-white/5 p-8 rounded-xl shadow-xl hover:-translate-y-2 transition duration-300" data-aos="fade-up" data-aos-delay="100">
                        <div class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center mb-4 text-accent"><i class="fa-solid fa-location-dot"></i></div>
                        <h3 class="font-serif text-xl mb-1 text-white">Location</h3>
                        <p class="text-textGray text-xs uppercase tracking-wide mb-4">Iwaya<br> Lagos Mainland</p>
                    </div>
                    <div class="bg-cardDark/95 backdrop-blur border border-white/5 p-8 rounded-xl shadow-xl hover:-translate-y-2 transition duration-300 group cursor-pointer" data-aos="fade-up" data-aos-delay="200">
                        <div class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center mb-4 text-accent"><i class="fa-regular fa-user"></i></div>
                        <h3 class="font-serif text-xl mb-1 text-white">New Here?</h3>
                        <p class="text-textGray text-xs uppercase tracking-wide mb-4">We'd love to meet you</p>
                        <a href="#confession">
                        <span class="text-accent text-xs font-bold uppercase tracking-wider group-hover:underline">Get Started &rarr;</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- <div class="max-w-7xl mx-auto px-4 py-16 flex flex-col lg:flex-row items-center gap-16">
                <div class="w-full lg:w-1/2" data-aos="fade-right">
                    <div class="inline-block px-3 py-1 bg-white/5 rounded-full text-[10px] text-textGray mb-4 uppercase tracking-widest">Welcome Home</div>
                    <h2 class="font-serif text-5xl md:text-6xl text-accent mb-2">Who We Are</h2>
                    <h3 class="font-serif text-3xl text-white mb-6">FAITH BEYOND WALLS.</h3>
                    <p class="text-textGray leading-relaxed mb-8 text-sm">
                        Beyond Faith International is more than just a place of worship; it is a movement of love, grace, and transformation. We believe in a God who breaks barriers and builds bridges. Whether you are just beginning your spiritual journey or have been walking with Jesus for years, you have a place here.
                    </p>
                    <button onclick="switchPage('about')" class="bg-accent text-white px-8 py-3 rounded-full text-xs font-bold uppercase tracking-widest hover:bg-accentDark transition">Read Our Full Story</button>
                </div>
                <div class="w-full lg:w-1/2 relative h-[400px] md:h-[500px]" data-aos="fade-left">
                    <div class="absolute inset-0 bg-white/5 border border-white/10 p-2 transform rotate-3 rounded-lg"></div>
                    <img src="/gallery/pastor.JPG" class="relative z-10 w-full h-full object-cover rounded-lg shadow-2xl grayscale hover:grayscale-0 transition duration-700" alt="Worship">
                </div>
            </div> -->

            
                 <div class="relative py-16 px-4 text-center">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/5 border border-white/10 rounded-full text-brand-accent text-xs font-bold tracking-widest uppercase mb-6" data-aos="fade-down">
                        <i class="fas fa-heart text-red-500"></i> Identity In Christ
                    </div>
                    <h1 id="confession" class="font-serif text-5xl md:text-7xl text-white mb-6 leading-tight" data-aos="fade-up">
                        Beyond Faith <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-500">Confession</span>
                    </h1>
                    <p class="text-gray-400 max-w-2xl mx-auto text-lg" data-aos="fade-up" data-aos-delay="100">
                        Speak these words over your life. Faith comes by hearing.
                    </p>
                </div>

                <div class="relative w-full bg-[#050a14] pb-24" data-aos="fade-in">
                    
                    <div class="absolute inset-0 pointer-events-none flex items-center justify-between px-4 md:px-12 max-w-8xl mx-auto z-20">
                        <button onclick="scrollConfession(-1)" class="pointer-events-auto w-14 h-14 bg-white/5 hover:bg-brand-accent text-white rounded-full flex items-center justify-center backdrop-blur-md transition border border-white/10 group shadow-2xl">
                            <i class="fas fa-arrow-left group-hover:-translate-x-1 transition"></i>
                        </button>
                        <button onclick="scrollConfession(1)" class="pointer-events-auto w-14 h-14 bg-white/5 hover:bg-brand-accent text-white rounded-full flex items-center justify-center backdrop-blur-md transition border border-white/10 group shadow-2xl">
                            <i class="fas fa-arrow-right group-hover:translate-x-1 transition"></i>
                        </button>
                    </div>

                    <div id="confession-track" class="flex gap-8 overflow-x-auto snap-x snap-mandatory px-4 md:px-[calc(50vw-300px)] pb-12 hide-scrollbar scroll-smooth pt-10">
                        
                        <div class="snap-center shrink-0 w-[85vw] md:w-[600px] relative group transition-all duration-500 hover:scale-[1.02]">
                            <div class="h-full bg-[#0f172a] border border-brand-accent/30 p-10 md:p-14 rounded-3xl flex flex-col justify-center items-center text-center shadow-[0_0_50px_rgba(14,165,233,0.1)] relative overflow-hidden">
                                <div class="absolute -top-10 -left-10 text-[150px] text-white/5 font-serif leading-none">“</div>
                                <i class="fas fa-book-bible text-4xl text-brand-accent mb-8 relative z-10"></i>
                                <h3 class="font-serif text-2xl md:text-3xl text-white leading-relaxed relative z-10">
                                    "I believe the word of God more than my own eyes, ears, nose, feelings, thoughts, or the report of men and angels."
                                </h3>
                                <div class="mt-8 text-xs font-bold tracking-widest text-brand-accent uppercase relative z-10">My Foundation</div>
                            </div>
                        </div>

                        <div class="snap-center shrink-0 w-[85vw] md:w-[500px] relative group">
                            <div class="h-full bg-white/5 backdrop-blur-sm border border-white/10 p-12 rounded-3xl flex flex-col justify-center items-center text-center group-hover:border-white/30 transition duration-500">
                                <i class="fas fa-quote-left text-2xl text-gray-500 mb-6"></i>
                                <h3 class="font-serif text-3xl md:text-4xl text-white mb-4">"I am born again..."</h3>
                                <p class="text-gray-300 text-xl font-serif italic">...by the living word of God.</p>
                            </div>
                        </div>

                        <div class="snap-center shrink-0 w-[85vw] md:w-[500px] relative group">
                            <div class="h-full bg-white/5 backdrop-blur-sm border border-white/10 p-12 rounded-3xl flex flex-col justify-center items-center text-center group-hover:border-purple-500/30 transition duration-500">
                                <i class="fas fa-quote-left text-2xl text-purple-400 mb-6"></i>
                                <h3 class="font-serif text-3xl md:text-4xl text-white mb-4">"I am the righteousness..."</h3>
                                <p class="text-gray-300 text-xl font-serif italic">...of God in Christ Jesus.</p>
                            </div>
                        </div>

                        <div class="snap-center shrink-0 w-[85vw] md:w-[500px] relative group">
                            <div class="h-full bg-white/5 backdrop-blur-sm border border-white/10 p-12 rounded-3xl flex flex-col justify-center items-center text-center group-hover:border-yellow-500/30 transition duration-500">
                                <i class="fas fa-quote-left text-2xl text-yellow-400 mb-6"></i>
                                <h3 class="font-serif text-3xl md:text-4xl text-white mb-4">"I am seated with Christ..."</h3>
                                <p class="text-gray-300 text-xl font-serif italic">...in the heavenly places.</p>
                            </div>
                        </div>

                        <div class="snap-center shrink-0 w-[85vw] md:w-[500px] relative group">
                            <div class="h-full bg-white/5 backdrop-blur-sm border border-white/10 p-12 rounded-3xl flex flex-col justify-center items-center text-center group-hover:border-red-500/30 transition duration-500">
                                <i class="fas fa-quote-left text-2xl text-red-400 mb-6"></i>
                                <h3 class="font-serif text-3xl md:text-4xl text-white mb-4">"I am strong in the Lord..."</h3>
                                <p class="text-gray-300 text-xl font-serif italic">...and in the power of his might.</p>
                            </div>
                        </div>

                        <div class="snap-center shrink-0 w-[85vw] md:w-[500px] relative group">
                            <div class="h-full bg-white/5 backdrop-blur-sm border border-white/10 p-12 rounded-3xl flex flex-col justify-center items-center text-center group-hover:border-green-500/30 transition duration-500">
                                <i class="fas fa-quote-left text-2xl text-green-400 mb-6"></i>
                                <h3 class="font-serif text-3xl md:text-4xl text-white mb-4">"I am more than a conqueror..."</h3>
                                <p class="text-gray-300 text-xl font-serif italic">...in every battle.</p>
                            </div>
                        </div>

                        <div class="snap-center shrink-0 w-[85vw] md:w-[500px] relative group">
                            <div class="h-full bg-white/5 backdrop-blur-sm border border-white/10 p-12 rounded-3xl flex flex-col justify-center items-center text-center group-hover:border-teal-500/30 transition duration-500">
                                <i class="fas fa-quote-left text-2xl text-teal-400 mb-6"></i>
                                <h3 class="font-serif text-3xl md:text-4xl text-white mb-4">"I am richly blessed..."</h3>
                                <p class="text-gray-300 text-xl font-serif italic">...beyond the curse.</p>
                            </div>
                        </div>

                        <div class="snap-center shrink-0 w-[85vw] md:w-[500px] relative group">
                            <div class="h-full bg-white/5 backdrop-blur-sm border border-white/10 p-12 rounded-3xl flex flex-col justify-center items-center text-center group-hover:border-indigo-500/30 transition duration-500">
                                <i class="fas fa-quote-left text-2xl text-indigo-400 mb-6"></i>
                                <h3 class="font-serif text-3xl md:text-4xl text-white mb-4">"I am a preacher..."</h3>
                                <p class="text-gray-300 text-xl font-serif italic">...of good news.</p>
                            </div>
                        </div>

                        <div class="snap-center shrink-0 w-[85vw] md:w-[500px] relative group">
                            <div class="h-full bg-white/5 backdrop-blur-sm border border-white/10 p-12 rounded-3xl flex flex-col justify-center items-center text-center group-hover:border-pink-500/30 transition duration-500">
                                <i class="fas fa-quote-left text-2xl text-pink-400 mb-6"></i>
                                <h3 class="font-serif text-3xl md:text-4xl text-white mb-4">"I am the apple..."</h3>
                                <p class="text-gray-300 text-xl font-serif italic">...of God’s eyes.</p>
                            </div>
                        </div>

                        <div class="snap-center shrink-0 w-[85vw] md:w-[500px] relative group">
                            <div class="h-full bg-white/5 backdrop-blur-sm border border-white/10 p-12 rounded-3xl flex flex-col justify-center items-center text-center group-hover:border-orange-500/30 transition duration-500">
                                <i class="fas fa-quote-left text-2xl text-orange-400 mb-6"></i>
                                <h3 class="font-serif text-2xl md:text-3xl text-white mb-4 leading-relaxed">
                                    "I am who God says I am,<br>and I have what God says I have."
                                </h3>
                            </div>
                        </div>

                        <div class="snap-center shrink-0 w-[85vw] md:w-[600px] relative group">
                            <div class="h-full bg-gradient-to-br from-blue-900/20 to-purple-900/20 backdrop-blur-sm border border-white/10 p-12 rounded-3xl flex flex-col justify-center items-center text-center group-hover:border-white/30 transition duration-500">
                                <i class="fas fa-users text-4xl text-white/20 mb-6"></i>
                                <p class="font-serif text-xl md:text-2xl text-white leading-relaxed italic">
                                    "I am a partaker in greatest love abode and we are growing spiritually, numerically and in all ramification."
                                </p>
                            </div>
                        </div>

                        <div class="snap-center shrink-0 w-[85vw] md:w-[600px] relative group">
                            <div class="h-full bg-[#0ea5e9] p-12 rounded-3xl flex flex-col justify-center items-center text-center shadow-[0_0_50px_rgba(14,165,233,0.3)]">
                                <i class="fas fa-hands-praying text-4xl text-white mb-6"></i>
                                <h3 class="font-serif text-3xl md:text-4xl text-white leading-relaxed font-bold">
                                    "I believe that Jesus has worked and he’s still working for my good."
                                </h3>
                                <div class="mt-6 text-4xl font-serif font-black text-blue-900 uppercase tracking-widest">Amen</div>
                            </div>
                        </div>

                    </div>
                    
                    <div class="w-full max-w-md mx-auto h-1 bg-white/10 rounded-full mt-8 overflow-hidden">
                        <div id="confession-progress" class="h-full bg-brand-accent w-1/12 transition-all duration-300"></div>
                    </div>
                    <p class="text-center text-xs text-gray-500 mt-4">Scroll or Swipe to continue</p>
                </div>
      
            <script>
                // --- CAROUSEL LOGIC ---
                function scrollConfession(direction) {
                    const track = document.getElementById('confession-track');
                    const progress = document.getElementById('confession-progress');
                    if (track) {
                        // Scroll by roughly one card width
                        const scrollAmount = 500 * direction;
                        track.scrollBy({ left: scrollAmount, behavior: 'smooth' });
                        
                        // Update Progress Bar
                        setTimeout(() => {
                            const maxScroll = track.scrollWidth - track.clientWidth;
                            const currentScroll = track.scrollLeft;
                            const percentage = (currentScroll / maxScroll) * 100;
                            if(progress) progress.style.width = Math.max(8, percentage) + '%';
                        }, 500); 
                    }
                }
            </script>
                        <div class="bg-cardDark py-20 border-y border-white/5">
                <div class="max-w-7xl mx-auto px-4">
                    <div class="bg-[#111827] rounded-3xl p-8 md:p-12 border border-white/5 flex flex-col lg:flex-row gap-12 items-center">
                        <div class="w-full lg:w-1/2" data-aos="zoom-in">
                            <img src="/gallery/banner-2.JPG" class="w-full h-[400px] object-cover rounded-xl shadow-2xl opacity-80 hover:opacity-100 transition">
                        </div>
                        <div class="w-full lg:w-1/2" data-aos="fade-up">
                            <span class="text-accent text-xs font-bold uppercase tracking-widest mb-2 block">Core Philosophy</span>
                            <h2 class="font-serif text-4xl md:text-5xl text-white mb-6 italic">Taking the limits off your faith.</h2>
                            <p class="text-textGray mb-8 text-sm leading-relaxed">
                                At Beyond Faith International, we believe that God isn't done writing your story. We are a multicultural, multigenerational church committed to helping people know God, find freedom, discover their purpose, and make a difference.
                            </p>
                            <div class="flex gap-4">
                                <div class="bg-white/5 p-4 rounded-lg flex items-center gap-3 w-1/2">
                                    <div class="w-8 h-8 rounded-full bg-accent/20 flex items-center justify-center text-accent"><i class="fa-solid fa-heart"></i></div>
                                    <div>
                                        <div class="font-bold text-white text-sm">Love God</div>
                                        <div class="text-[10px] text-textGray">Vertical Relationship</div>
                                    </div>
                                </div>
                                <div class="bg-white/5 p-4 rounded-lg flex items-center gap-3 w-1/2">
                                    <div class="w-8 h-8 rounded-full bg-accent/20 flex items-center justify-center text-accent"><i class="fa-solid fa-users"></i></div>
                                    <div>
                                        <div class="font-bold text-white text-sm">Love People</div>
                                        <div class="text-[10px] text-textGray">Horizontal Relationship</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="max-w-7xl mx-auto px-4 py-24">
                <div class="text-center mb-12" data-aos="fade-up">
                    <h2 class="font-serif text-4xl text-white italic">Connect With Us</h2>
                    <p class="text-textGray text-xs mt-2 uppercase tracking-wider">There's a place for you here.</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 h-auto md:h-[300px]">
                    <div class="relative group overflow-hidden rounded-xl cursor-pointer h-64 md:h-full" data-aos="fade-up" data-aos-delay="0">
                        <div class="absolute inset-0 bg-kids-pattern bg-cover bg-center transition duration-700 group-hover:scale-110"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
                        <div class="absolute bottom-6 left-6">
                            <h3 class="font-serif text-2xl text-white group-hover:text-accent transition">BF Kids</h3>
                            <div class="w-8 h-0.5 bg-accent mt-2 group-hover:w-full transition-all duration-300"></div>
                        </div>
                    </div>
                    <div class="relative group overflow-hidden rounded-xl cursor-pointer h-64 md:h-full" data-aos="fade-up" data-aos-delay="100">
                        <div class="absolute inset-0 bg-youth-pattern bg-cover bg-center transition duration-700 group-hover:scale-110"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
                        <div class="absolute bottom-6 left-6">
                            <h3 class="font-serif text-2xl text-white group-hover:text-accent transition">Youth</h3>
                            <div class="w-8 h-0.5 bg-accent mt-2 group-hover:w-full transition-all duration-300"></div>
                        </div>
                    </div>
                     <div class="relative group overflow-hidden rounded-xl cursor-pointer h-64 md:h-full" data-aos="fade-up" data-aos-delay="200">
                        <div class="absolute inset-0 bg-worship-pattern bg-cover bg-center transition duration-700 group-hover:scale-110"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
                        <div class="absolute bottom-6 left-6">
                            <h3 class="font-serif text-2xl text-white group-hover:text-accent transition">Worship</h3>
                            <div class="w-8 h-0.5 bg-accent mt-2 group-hover:w-full transition-all duration-300"></div>
                        </div>
                    </div>
                     <div class="relative group overflow-hidden rounded-xl cursor-pointer h-64 md:h-full" data-aos="fade-up" data-aos-delay="300">
                        <div class="absolute inset-0 bg-outreach-pattern bg-cover bg-center transition duration-700 group-hover:scale-110"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
                        <div class="absolute bottom-6 left-6">
                            <h3 class="font-serif text-2xl text-white group-hover:text-accent transition">Outreach</h3>
                            <div class="w-8 h-0.5 bg-accent mt-2 group-hover:w-full transition-all duration-300"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about-page" class="page-section hidden">
            <div class="pt-32 pb-20 bg-primary">
                <!-- <div class="text-center mb-20" data-aos="fade-down">
                    <h1 class="font-serif text-6xl text-white mb-4">Who We Are</h1>
                    <div class="w-16 h-1 bg-accent mx-auto rounded-full mb-6"></div>
                    <p class="text-textGray max-w-lg mx-auto text-sm uppercase tracking-wide">Founded on faith, fueled by love, and focused on the future.</p>
                </div> -->
                

<section class="py-24 bg-[#050a14] relative overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-accent/5 rounded-full blur-[100px]"></div>
    
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-20" data-aos="fade-up">
            <h4 class="text-accent uppercase tracking-[0.3em] text-xs font-bold mb-4">Foundation</h4>
            <h2 class="font-serif text-5xl md:text-6xl text-white mb-6">Know Your Church</h2>
            <p class="text-textGray italic font-serif text-xl">"Raising a person from humanity to divinity."</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
            <div class="group relative bg-[#0f172a] p-12 rounded-3xl border border-white/5 overflow-hidden transition-all duration-500 hover:border-accent/50" data-aos="fade-right">
                <div class="absolute -top-4 -right-4 w-24 h-24 bg-accent/10 rounded-full blur-2xl group-hover:bg-accent/20 transition"></div>
                <div class="relative z-10">
                    <div class="flex items-center gap-4 mb-6">
                        <span class="w-12 h-12 rounded-xl bg-accent/20 flex items-center justify-center text-accent"><i class="fa-regular fa-eye text-xl"></i></span>
                        <h3 class="font-serif text-3xl text-white">Our Vision</h3>
                    </div>
                    <p class="text-textGray text-lg leading-relaxed mb-6">To restore priesthood and spirituality in the body of Christ through the preaching and teaching of the message of Love.</p>
                    <div class="text-accent/50 text-xs font-mono">1 Cor. 13:13, 2 Cor. 3:6 & Heb. 7:26-28</div>
                </div>
            </div>

            <div class="group relative bg-[#0f172a] p-12 rounded-3xl border border-white/5 overflow-hidden transition-all duration-500 hover:border-accent/50" data-aos="fade-left">
                <div class="absolute -top-4 -right-4 w-24 h-24 bg-blue-500/10 rounded-full blur-2xl group-hover:bg-blue-500/20 transition"></div>
                <div class="relative z-10">
                    <div class="flex items-center gap-4 mb-6">
                        <span class="w-12 h-12 rounded-xl bg-blue-500/20 flex items-center justify-center text-blue-400"><i class="fa-solid fa-flag text-xl"></i></span>
                        <h3 class="font-serif text-3xl text-white">Our Mission</h3>
                    </div>
                    <p class="text-textGray text-lg leading-relaxed mb-6">To bring order out of the chaotic condition of the Church as it is written in Isaiah.</p>
                    <div class="text-blue-400/50 text-xs font-mono">Refer: Isa. 56</div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            
            <div class="bg-gradient-to-b from-[#0f172a] to-transparent p-1 rounded-3xl" data-aos="fade-up">
                <div class="bg-[#050a14] p-10 rounded-[22px] h-full border border-white/5">
                    <div class="flex items-center gap-4 mb-8">
                        <div class="w-10 h-1 bg-accent"></div>
                        <h3 class="font-serif text-2xl text-white uppercase tracking-widest">Physical Mandate</h3>
                    </div>
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <li class="flex gap-3 text-textGray text-sm group"><i class="fa-solid fa-check text-accent mt-1 transition group-hover:scale-125"></i> To share with the hungry.</li>
                        <li class="flex gap-3 text-textGray text-sm group"><i class="fa-solid fa-check text-accent mt-1 transition group-hover:scale-125"></i> To house the homeless.</li>
                        <li class="flex gap-3 text-textGray text-sm group"><i class="fa-solid fa-check text-accent mt-1 transition group-hover:scale-125"></i> To cover the naked.</li>
                        <li class="flex gap-3 text-textGray text-sm group"><i class="fa-solid fa-check text-accent mt-1 transition group-hover:scale-125"></i> To avail myself to needs of my own flesh and blood.</li>
                        <li class="flex gap-3 text-textGray text-sm group"><i class="fa-solid fa-check text-accent mt-1 transition group-hover:scale-125"></i> To stop false accusations and spreading vicious rumors.</li>
                        <li class="flex gap-3 text-textGray text-sm group"><i class="fa-solid fa-check text-accent mt-1 transition group-hover:scale-125"></i> To build the old waste places.</li>
                    </ul>
                </div>
            </div>

            <div class="bg-gradient-to-b from-[#0f172a] to-transparent p-1 rounded-3xl" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-[#050a14] p-10 rounded-[22px] h-full border border-white/5">
                    <div class="flex items-center gap-4 mb-8">
                        <div class="w-10 h-1 bg-blue-500"></div>
                        <h3 class="font-serif text-2xl text-white uppercase tracking-widest">Spiritual Mandate</h3>
                    </div>
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <li class="flex gap-3 text-textGray text-sm group"><i class="fa-solid fa-bolt text-blue-500 mt-1 transition group-hover:scale-125"></i> To loose the bands of wickedness.</li>
                        <li class="flex gap-3 text-textGray text-sm group"><i class="fa-solid fa-bolt text-blue-500 mt-1 transition group-hover:scale-125"></i> To undo heavy burdens.</li>
                        <li class="flex gap-3 text-textGray text-sm group"><i class="fa-solid fa-bolt text-blue-500 mt-1 transition group-hover:scale-125"></i> To let the oppressed go free.</li>
                        <li class="flex gap-3 text-textGray text-sm group"><i class="fa-solid fa-bolt text-blue-500 mt-1 transition group-hover:scale-125"></i> To break every satanic yoke.</li>
                        <li class="flex gap-3 text-textGray text-sm group"><i class="fa-solid fa-bolt text-blue-500 mt-1 transition group-hover:scale-125"></i> To raise up the foundations of many generations.</li>
                        <li class="flex gap-3 text-textGray text-sm group"><i class="fa-solid fa-bolt text-blue-500 mt-1 transition group-hover:scale-125"></i> Honoring the Lord in every service by doing his pleasure.</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

                               <div class="max-w-7xl mx-auto px-4 mb-32">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        
        <div class="relative aos-init aos-animate" data-aos="fade-right">
            <div class="h-[500px] rounded-3xl overflow-hidden relative z-10 shadow-2xl">
                <img src="img/history.JPG" 
                     class="w-full h-full object-cover transition-transform duration-700 hover:scale-110" alt="Church History">
                <div class="absolute inset-0 bg-gradient-to-t from-[#050a14] via-transparent to-transparent opacity-60"></div>
            </div>
            
            <div class="absolute -bottom-6 -right-6 bg-accent p-6 rounded-2xl shadow-xl z-20 hidden md:block" data-aos="zoom-in" data-aos-delay="300">
                <div class="text-white">
                    <span class="block text-3xl font-bold">1st</span>
                    <span class="text-[10px] uppercase tracking-widest opacity-80">Convert from Crusade</span>
                </div>
            </div>
            
            <div class="absolute -top-10 -left-10 w-32 h-32 bg-accent/10 rounded-full blur-3xl"></div>
        </div>

        <div data-aos="fade-left" class="aos-init aos-animate relative">
            <span class="text-accent text-xs font-bold uppercase tracking-[0.3em] mb-4 block">The Genesis</span>
            <h2 class="font-serif text-5xl text-white mb-8">Our History</h2>
            
            <div class="space-y-6 relative">
                <div class="absolute left-[-20px] top-2 bottom-2 w-[1px] bg-gradient-to-b from-accent/50 via-white/10 to-transparent"></div>

                <div class="relative">
                    <div class="absolute left-[-24px] top-2 w-2 h-2 rounded-full bg-accent shadow-[0_0_10px_#0ea5e9]"></div>
                    <p class="text-textGray text-base leading-relaxed">
                        Beyond Faith Int'l Church started at <span class="text-white">Iwaya old bus stop</span> by the Iwaya canal following a three-day crusade. Out of eight who gave their lives, only one convert remained to seed what would become this global mandate.
                    </p>
                </div>

                <div class="relative bg-white/5 p-6 rounded-2xl border border-white/5 italic">
                    <p class="text-textGray text-base leading-relaxed">
                        "It took a month for that convert to gain the boldness to sit in our circle of twelve chairs. I remember preaching in light rain when a passerby stopped to cover me with an umbrella. Moved by this act, my only member finally stepped forward to take the umbrella while the stranger sat to listen. We became three that day."
                    </p>
                </div>

                <div class="relative">
                    <div class="absolute left-[-24px] top-2 w-2 h-2 rounded-full bg-white/20"></div>
                    <p class="text-textGray text-base leading-relaxed">
                        From those humble beginnings in the open space, where the faithful would often watch from 20 feet away, we grew to eight adults and eventually transitioned to our first indoor space—a room in a primary school at <span class="text-white">Okoagbon</span>.
                    </p>
                </div>
            </div>

            <div class="mt-10 flex items-center gap-6">
                <div class="flex -space-x-3">
                    <div class="w-10 h-10 rounded-full border-2 border-[#050a14] bg-gray-800 flex items-center justify-center text-[10px] text-white">BFIC</div>
                    <div class="w-10 h-10 rounded-full border-2 border-[#050a14] bg-accent flex items-center justify-center text-[10px] text-white italic font-serif">Love</div>
                </div>
                <p class="text-[10px] text-textGray uppercase tracking-widest font-bold">From humanity to divinity</p>
            </div>
        </div>
    </div>
</div>
                
                <!--<div class="max-w-7xl mx-auto px-4 text-center">-->
                <!--    <h2 class="font-serif text-4xl text-white mb-16">Our Leadership</h2>-->
                <!--    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">-->
                <!--        <div class="group" data-aos="fade-up">-->
                <!--            <div class="overflow-hidden rounded-lg mb-4">-->
                <!--                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=1974&auto=format&fit=crop" class="w-full h-80 object-cover transition duration-500 group-hover:scale-110">-->
                <!--            </div>-->
                <!--            <h4 class="font-serif text-xl text-white">Dr. James Sterling</h4>-->
                <!--            <span class="text-accent text-[10px] uppercase tracking-widest">Senior Pastor</span>-->
                <!--        </div>-->
                <!--        <div class="group" data-aos="fade-up" data-aos-delay="100">-->
                <!--            <div class="overflow-hidden rounded-lg mb-4">-->
                <!--                <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=1976&auto=format&fit=crop" class="w-full h-80 object-cover transition duration-500 group-hover:scale-110">-->
                <!--            </div>-->
                <!--            <h4 class="font-serif text-xl text-white">Sarah Sterling</h4>-->
                <!--            <span class="text-accent text-[10px] uppercase tracking-widest">Co-Pastor & Worship</span>-->
                <!--        </div>-->
                         <!-- <div class="group" data-aos="fade-up" data-aos-delay="200">
                <!--            <div class="overflow-hidden rounded-lg mb-4">-->
                <!--                <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?q=80&w=1974&auto=format&fit=crop" class="w-full h-80 object-cover transition duration-500 group-hover:scale-110">-->
                <!--            </div>-->
                <!--            <h4 class="font-serif text-xl text-white">Michael Chen</h4>-->
                <!--            <span class="text-accent text-[10px] uppercase tracking-widest">Youth Pastor</span>-->
                <!--        </div> -->-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </section>

        
        <section id="events-page" class="page-section hidden">
            <div class="pt-32 pb-20">
                <!-- <div class="text-center mb-16" data-aos="fade-down">
                    <span class="text-accent tracking-widest text-[10px] uppercase font-bold">Schedule</span>
                    <h1 class="font-serif text-5xl md:text-6xl text-white mt-2">Upcoming Events</h1>
                </div> -->
                
<div class="max-w-7xl mx-auto px-4 mb-24" data-aos="fade-up">
    <div class="relative rounded-3xl overflow-hidden bg-[#0f172a] border border-white/5 flex flex-col md:flex-row h-auto md:h-[500px] shadow-2xl">
        
        <div class="w-full md:w-3/5 relative group">
            <img src="https://images.unsplash.com/photo-1510936111840-65e151ad71bb?q=80&w=2090&auto=format&fit=crop" 
                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-r from-transparent to-[#0f172a]/80 hidden md:block"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-[#0f172a]/80 md:hidden"></div>
            
            <div class="absolute top-0 left-0 bg-brand-accent text-white text-[10px] font-bold px-6 py-3 uppercase tracking-[0.2em]">
                Church Calendar
            </div>
        </div>

        <div class="w-full md:w-2/5 p-12 md:p-16 flex flex-col justify-center bg-[#0f172a]">
            <div class="text-brand-accent font-bold text-xs mb-4 flex items-center gap-3">
                <span class="w-8 h-[1px] bg-brand-accent"></span> 
                SCHEDULED
            </div>
            
             <h1 class="font-serif text-6xl md:text-8xl text-white mb-6 leading-tight" data-aos="zoom-out" data-aos-delay="100">
            Upcoming <span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white/80 to-white/40">Events</span>
        </h1>
            
            <p class="text-gray-400 text-lg mb-8 leading-relaxed font-serif italic">
                "Capturing the life, love, and community of Beyond Faith."
            </p>

            <div class="flex items-center gap-4 py-6 border-t border-white/10">
                <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-brand-accent">
                    <i class="fa-solid fa-earth-africa"></i>
                </div>
                <p class="text-xs text-gray-500 uppercase tracking-widest leading-loose">
                    Growing spiritually, numerically <br>and in all ramification.
                </p>
            </div>
        </div>
    </div>
</div>



                <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8 pb-20">
                    @foreach ($events as $event)
                    <div class="bg-cardDark rounded-xl overflow-hidden border border-white/5 group hover:border-accent/50 transition duration-300 cursor-pointer"  data-aos="fade-up">
                        <div class="h-48 overflow-hidden relative">
                             <span class="absolute top-3 right-3 bg-black/60 backdrop-blur px-2 py-1 text-[10px] font-bold text-white rounded uppercase">Community</span>
                            <img src="images/{{ $event->image }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        </div>
                        <div class="p-6">
                            <div class="text-accent text-[10px] font-bold mb-2 uppercase tracking-wide">{{ $event->date }}</div>
                            <h3 class="font-serif text-xl text-white mb-2 group-hover:text-accent transition">{{ $event->header }}</h3>
                            <p class="text-textGray text-xs mb-4"></p>
                            <a href="{{ url('eventid', $event->id) }}" class="text-[10px] font-bold text-accent uppercase tracking-widest">View Details &nearr;</a>
                            <!-- <span class="text-[10px] font-bold text-accent uppercase tracking-widest">View Details &nearr;</span> -->
                        </div>
                    </div>
                    @endforeach
                    
                    <!-- <div class="bg-cardDark rounded-xl overflow-hidden border border-white/5 group hover:border-accent/50 transition duration-300" data-aos="fade-up" data-aos-delay="100">
                        <div class="h-48 overflow-hidden relative">
                            <span class="absolute top-3 right-3 bg-black/60 backdrop-blur px-2 py-1 text-[10px] font-bold text-white rounded uppercase">Fun</span>
                           <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?q=80&w=2064&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                       </div>
                       <div class="p-6">
                           <div class="text-accent text-[10px] font-bold mb-2 uppercase tracking-wide">Oct 28</div>
                           <h3 class="font-serif text-xl text-white mb-2 group-hover:text-accent transition">Fall Family Festival</h3>
                           <p class="text-textGray text-xs mb-4">Free food, games, and fun for the whole family.</p>
                           <span class="text-[10px] font-bold text-accent uppercase tracking-widest">View Details &nearr;</span>
                       </div>
                   </div> -->
                </div>
            </div>
        </section>





<!-- TOAST -->
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







<section id="media-page" class="page-section hidden">
    <div class="pt-32 pb-10 text-center">
        <h1 class="font-serif text-5xl md:text-6xl text-white mb-4">Media Library</h1>
        <p class="text-textGray max-w-2xl mx-auto">Grow in your faith with our collection of sermons, teachings, and spiritual resources.</p>
        
        <div class="mt-10 flex justify-center gap-2 flex-wrap">
            <button id="filterAll" class="filter-btn px-6 py-2 rounded-full bg-accent text-white text-[10px] font-bold uppercase tracking-widest shadow-lg shadow-accent/30">All</button>
            <button id="filterSermons" class="filter-btn px-6 py-2 rounded-full bg-cardDark text-textGray hover:text-white hover:bg-accent/20 border border-white/10 text-[10px] font-bold uppercase tracking-widest transition">Sermons</button>
            <button id="filterEbooks" class="filter-btn px-6 py-2 rounded-full bg-cardDark text-textGray hover:text-white hover:bg-accent/20 border border-white/10 text-[10px] font-bold uppercase tracking-widest transition">Ebooks</button>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 pb-20">
        <div id="sermonsSection">
            <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-8 gap-4">
                <h3 class="text-white text-2xl font-serif flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-accent/20 flex items-center justify-center">
                        <i class="fa-solid fa-headphones text-accent"></i>
                    </div>
                    Latest Sermons
                </h3>
                <form method="GET" action="{{ url('/#media-page') }}" class="flex gap-2">
                    <input type="text" name="search_sermons" value="{{ request('search_sermons') }}" placeholder="Search sermons..." class="bg-cardDark border border-white/10 rounded-full px-4 py-2 text-white text-sm focus:outline-none focus:border-accent w-64">
                    <button type="submit" class="bg-accent text-white px-4 py-2 rounded-full text-sm hover:bg-accentDark transition"><i class="fa-solid fa-search"></i></button>
                </form>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-8">
               @foreach ($messages as $message)
               <a href="{{ url('audio_id', $message->id) }}">
                <div class="bg-cardDark rounded-2xl overflow-hidden border border-white/5 hover:border-accent hover:shadow-xl hover:shadow-accent/20 transition-all duration-300 group cursor-pointer">
                    <div class="aspect-video relative overflow-hidden">
                        @if($message->images)
                            <img src="{{ asset($message->images) }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent flex items-center justify-center opacity-0 group-hover:opacity-100 transition">
                            <div class="w-16 h-16 rounded-full bg-accent flex items-center justify-center transform scale-75 group-hover:scale-100 transition">
                                <i class="fa-solid fa-play text-white text-xl ml-1"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between text-[10px] text-textGray mb-3 uppercase tracking-wide">
                            <span class="text-accent font-bold">{{ $message->created_at->format('M d, Y') }}</span>
                            <span><i class="fa-solid fa-clock mr-1"></i>42 min</span>
                        </div>
                        <h3 class="font-serif text-xl text-white mb-2 group-hover:text-accent transition line-clamp-2">{{ $message->header}}</h3>
                        <p class="text-xs text-textGray flex items-center gap-2">
                            <i class="fa-solid fa-user-tie text-accent"></i>
                            Pastor Livinus Nneji
                        </p>
                        <div class="mt-4 pt-4 border-t border-white/5 flex items-center justify-between">
                            <span class="text-[10px] text-accent font-bold uppercase tracking-wider">Listen Now</span>
                            <i class="fa-solid fa-arrow-right text-accent group-hover:translate-x-1 transition"></i>
                        </div>
                    </div>
                </div>
                </a>
                @endforeach
            </div>
            @if($messages->hasPages())
                <div class="flex justify-center mt-8">
                    {{ $messages->links('pagination::tailwind') }}
                </div>
            @endif
        </div>

        <div id="ebooksSection" class="mt-20">
            <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-8 gap-4">
                <h3 class="text-white text-2xl font-serif flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-accent/20 flex items-center justify-center">
                        <i class="fa-solid fa-book-open text-accent"></i>
                    </div>
                    E-Books & Guides
                </h3>
                <form method="GET" action="{{ url('/#media-page') }}" class="flex gap-2">
                    <input type="text" name="search_ebooks" value="{{ request('search_ebooks') }}" placeholder="Search ebooks..." class="bg-cardDark border border-white/10 rounded-full px-4 py-2 text-white text-sm focus:outline-none focus:border-accent w-64">
                    <button type="submit" class="bg-accent text-white px-4 py-2 rounded-full text-sm hover:bg-accentDark transition"><i class="fa-solid fa-search"></i></button>
                </form>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                @foreach($ebooks as $ebook)
                <div class="bg-cardDark p-6 rounded-2xl border border-white/5 hover:border-accent hover:shadow-xl hover:shadow-accent/20 transition-all duration-300 flex gap-6 items-center group">
                    @if($ebook->images)
                        <div class="w-28 h-36 flex-shrink-0 rounded-lg overflow-hidden shadow-lg relative">
                            <img src="{{ asset($ebook->images) }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        </div>
                    @endif
                    <div class="flex-1">
                        <h4 class="font-serif text-xl text-white mb-2 group-hover:text-accent transition">{{$ebook->header}}</h4>
                        @if($ebook->category)
                            <span class="inline-block bg-accent/20 text-accent px-2 py-1 rounded text-[10px] font-bold uppercase mb-3">{{$ebook->category}}</span>
                        @endif
                        <div class="flex items-center justify-between mt-4">
                            <div>
                                <span class="text-accent text-2xl font-bold">₦{{ number_format($ebook->price, 2) }}</span>
                                @if($ebook->rating > 0)
                                    <div class="flex items-center gap-1 mt-1">
                                        @for($i = 1; $i <= 5; $i++)
                                            <i class="fa{{ $i <= $ebook->rating ? 's' : 'r' }} fa-star text-yellow-400 text-xs"></i>
                                        @endfor
                                        <span class="text-textGray text-xs ml-1">({{ $ebook->reviews_count }})</span>
                                    </div>
                                @endif
                            </div>
                            <a href="{{ route('ebooks.show', encrypt($ebook->id)) }}" class="bg-accent text-white px-6 py-2 rounded-full text-[10px] font-bold uppercase hover:bg-accentDark hover:shadow-lg hover:shadow-accent/30 transition flex items-center gap-2">
                                Get Copy <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @if($ebooks->hasPages())
                <div class="flex justify-center mt-8">
                    {{ $ebooks->links('pagination::tailwind') }}
                </div>
            @endif
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterAll = document.getElementById('filterAll');
    const filterSermons = document.getElementById('filterSermons');
    const filterEbooks = document.getElementById('filterEbooks');
    const sermonsSection = document.getElementById('sermonsSection');
    const ebooksSection = document.getElementById('ebooksSection');
    const filterBtns = document.querySelectorAll('.filter-btn');

    function setActive(btn) {
        filterBtns.forEach(b => {
            b.classList.remove('bg-accent', 'text-white', 'shadow-lg', 'shadow-accent/30');
            b.classList.add('bg-cardDark', 'text-textGray');
        });
        btn.classList.add('bg-accent', 'text-white', 'shadow-lg', 'shadow-accent/30');
        btn.classList.remove('bg-cardDark', 'text-textGray');
    }

    filterAll.addEventListener('click', function() {
        sermonsSection.style.display = 'block';
        ebooksSection.style.display = 'block';
        setActive(this);
    });

    filterSermons.addEventListener('click', function() {
        sermonsSection.style.display = 'block';
        ebooksSection.style.display = 'none';
        setActive(this);
    });

    filterEbooks.addEventListener('click', function() {
        sermonsSection.style.display = 'none';
        ebooksSection.style.display = 'block';
        setActive(this);
    });
});
</script>


             <section id="media-detail-page" class="page-section hidden">
            <div class="pt-32 px-4 max-w-7xl mx-auto min-h-screen">
                <button onclick="switchPage('media')" class="text-textGray hover:text-white mb-8 flex items-center gap-2 text-xs uppercase tracking-widest"><i class="fa-solid fa-arrow-left"></i> Back to Library</button>
                
                <div class="bg-cardDark rounded-2xl border border-white/5 overflow-hidden flex flex-col md:flex-row shadow-2xl">
                    <div class="w-full md:w-1/3 bg-black relative min-h-[350px] flex items-center justify-center group">
                        <img src="https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?q=80&w=2174&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover opacity-60">
                         <button class="relative z-10 w-20 h-20 rounded-full bg-white/10 backdrop-blur border border-white/30 flex items-center justify-center hover:scale-110 transition group-hover:bg-white/20"><i class="fa-solid fa-play text-white text-2xl ml-1"></i></button>
                    </div>
                    
                    <div class="w-full md:w-2/3 p-12">
                        <span class="bg-white/10 text-white px-3 py-1 text-[10px] font-bold uppercase rounded-full">Audio Sermon</span>
                        <h1 class="font-serif text-3xl md:text-5xl text-white mt-4 mb-2">Community Over Competition</h1>
                        <div class="flex gap-6 text-textGray text-xs uppercase tracking-wide mb-8">
                            <span><i class="fa-regular fa-user mr-1 text-accent"></i> Michael Chen</span>
                            <span><i class="fa-regular fa-calendar mr-1 text-accent"></i> Oct 08, 2023</span>
                            <span><i class="fa-regular fa-clock mr-1 text-accent"></i> 42 min</span>
                        </div>

                        <h4 class="font-bold text-white mb-3">Description</h4>
                        <p class="text-textGray text-sm leading-relaxed mb-10 max-w-2xl">
                            Why the Kingdom of God operates on unity, not rivalry. In a world that tells us we need to be better than our neighbor to succeed, the Gospel invites us into a community where your win is my win.
                        </p>

                        <div class="flex gap-4">
                            <button class="bg-accent text-white px-8 py-3 rounded-full text-xs font-bold uppercase tracking-widest hover:bg-accentDark transition flex items-center gap-2 shadow-[0_0_20px_rgba(0,180,216,0.3)]"><i class="fa-solid fa-play"></i> Play Audio</button>
                            <button class="border border-white/20 text-textLight px-8 py-3 rounded-full text-xs font-bold uppercase tracking-widest hover:bg-white hover:text-primary transition flex items-center gap-2"><i class="fa-solid fa-download"></i> Download MP3</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <section id="gallery-page" class="page-section hidden">
            <div class="text-center pt-32 pb-16">
                <h1 class="font-serif text-5xl md:text-6xl text-white mb-4">Moments</h1>
                <p class="text-textGray">Capturing the life, love, and community of Beyond Faith.</p>
            </div>

            @foreach($gallery as $item)
            <div class="max-w-7xl mx-auto px-4 mb-20" data-aos="fade-up">
                <h3 class="font-serif text-3xl text-white mb-6 flex items-baseline gap-4">{{$item->header}} <span class="text-sm font-sans text-textGray font-normal italic">/ {{$item->subject}}</span></h3>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                      
                                          
                           @if($item->images)
                         @foreach($item->images as $image)            
                                
                    <div class="aspect-square relative overflow-hidden group cursor-pointer rounded-lg" onclick="openLightbox(this)">
                        <img src="{{ asset($image) }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                         <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                            <i class="fa-solid fa-magnifying-glass-plus text-2xl text-white"></i>
                        </div>
                    </div>
                        @endforeach
                          @else
                     <span>No images</span>
                            @endif          
                    
                </div>
            </div>
            @endforeach

            <!-- <div class="max-w-7xl mx-auto px-4 mb-20" data-aos="fade-up">
                <h3 class="font-serif text-3xl text-white mb-6 flex items-baseline gap-4">Community Life <span class="text-sm font-sans text-textGray font-normal italic">/ Doing life together</span></h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                     <div class="md:row-span-2 aspect-[1/2] relative overflow-hidden group cursor-pointer rounded-lg" onclick="openLightbox(this)">
                        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                         <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                            <i class="fa-solid fa-magnifying-glass-plus text-2xl text-white"></i>
                        </div>
                    </div>
                    <div class="aspect-square relative overflow-hidden group cursor-pointer rounded-lg" onclick="openLightbox(this)">
                        <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                         <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                            <i class="fa-solid fa-magnifying-glass-plus text-2xl text-white"></i>
                        </div>
                    </div>
                    <div class="aspect-square relative overflow-hidden group cursor-pointer rounded-lg" onclick="openLightbox(this)">
                        <img src="https://images.unsplash.com/photo-1523580494863-6f3031224c94?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                         <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                            <i class="fa-solid fa-magnifying-glass-plus text-2xl text-white"></i>
                        </div>
                    </div>
                    <div class="md:col-span-2 aspect-video relative overflow-hidden group cursor-pointer rounded-lg" onclick="openLightbox(this)">
                         <img src="https://images.unsplash.com/photo-1469571486292-0ba58a3f068b?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                         <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                            <i class="fa-solid fa-magnifying-glass-plus text-2xl text-white"></i>
                        </div>
                    </div>
                </div>
            </div> -->

             <!-- <div class="max-w-7xl mx-auto px-4 mb-20" data-aos="fade-up">
                <h3 class="font-serif text-3xl text-white mb-6 flex items-baseline gap-4">Outreach <span class="text-sm font-sans text-textGray font-normal italic">/ Being the hands and feet</span></h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="aspect-square relative overflow-hidden group cursor-pointer rounded-lg" onclick="openLightbox(this)">
                        <img src="https://images.unsplash.com/photo-1593113598332-cd288d649433?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                         <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                            <i class="fa-solid fa-magnifying-glass-plus text-2xl text-white"></i>
                        </div>
                    </div>
                     <div class="aspect-square relative overflow-hidden group cursor-pointer rounded-lg" onclick="openLightbox(this)">
                        <img src="https://images.unsplash.com/photo-1509099836639-18ba1795216d?q=80&w=2062&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                         <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                            <i class="fa-solid fa-magnifying-glass-plus text-2xl text-white"></i>
                        </div>
                    </div>
                     <div class="aspect-square relative overflow-hidden group cursor-pointer rounded-lg" onclick="openLightbox(this)">
                        <img src="https://images.unsplash.com/photo-1519068737630-e5db1b71af17?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                         <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                            <i class="fa-solid fa-magnifying-glass-plus text-2xl text-white"></i>
                        </div>
                    </div>
                </div>
            </div> -->
        </section>
        <!-- LIGHTBOX -->
<div id="lightbox" class="lightbox" onclick="closeLightbox()">
    <button>&times;</button>
    <img id="lightbox-img" src="" alt="Expanded image" onclick="event.stopPropagation()">
</div>

    </main>
   <section class="py-20 px-4 bg-[#050a14]" id="contact">
    <div class="max-w-7xl mx-auto">
        
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="font-serif text-5xl text-white mb-4">Get in Touch</h2>
            <p class="text-gray-400 text-lg">We'd love to hear from you. Fill out the form below or visit us.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 bg-[#0f172a] p-8 md:p-12 rounded-2xl border border-white/5 shadow-2xl" data-aos="fade-up" data-aos-delay="100">
            
            <div>
                <h3 class="text-2xl text-white font-serif mb-6">Send a Message</h3>
                <form method="POST" action="{{url('/contact_upload')}}" class="space-y-6">
                    @csrf
                    
                    <div>
                        <label class="block text-gray-500 text-xs uppercase tracking-wide mb-2">Name</label>
                        <input type="text" name="name" required 
                               class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-[#0ea5e9] focus:ring-1 focus:ring-[#0ea5e9] transition" 
                               placeholder="John Doe">
                    </div>

                    <div>
                        <label class="block text-gray-500 text-xs uppercase tracking-wide mb-2">Email</label>
                        <input type="email" required name="email"
                               class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-[#0ea5e9] focus:ring-1 focus:ring-[#0ea5e9] transition" 
                               placeholder="john@example.com">
                    </div>

                    <div>
                        <label class="block text-gray-500 text-xs uppercase tracking-wide mb-2">Message</label>
                        <textarea required name="message"
                                  class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-[#0ea5e9] focus:ring-1 focus:ring-[#0ea5e9] transition h-32 resize-none" 
                                  placeholder="How can we help you?"></textarea>
                    </div>

                    <button type="submit" 
                            class="bg-[#0ea5e9] text-white px-8 py-3 rounded-lg font-bold hover:bg-blue-600 transition w-full md:w-auto shadow-lg shadow-blue-500/20">
                        Send Message
                    </button>
                </form>
            </div>
            
            <div class="space-y-8 md:pl-8 md:border-l border-white/5">
                
                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#0ea5e9]">
                            <i class="fas fa-map-pin"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-bold mb-1">Our Location</h4>
                            <p class="text-gray-400 text-sm leading-relaxed">
                                35 Owoduni Street,<br>
                                Opposite Iwaya Market,<br>
                                Iwaya, Yaba, Lagos.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#0ea5e9]">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-bold mb-1">Contact Info</h4>
                            <p class="text-gray-400 text-sm">hello@beyondfaith.org</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#0ea5e9]">
                            <i class="far fa-clock"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-bold mb-1">Service Times</h4>
                            <p class="text-gray-400 text-sm">Sunday: 8:00 AM — Main Service<br>Wednesday: 6:00 PM — Midweek</p>
                        </div>
                    </div>
                </div>

                <div class="h-64 rounded-xl overflow-hidden border border-white/10 shadow-inner bg-gray-800 relative group">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.123456!2d3.385!3d6.505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8c5f5f5f5f5f%3A0x5f5f5f5f5f5f5f5f!2sOwodunni%20St%2C%20Iwaya%2C%20Lagos!5e0!3m2!1sen!2sng!4v1700000000000!5m2!1sen!2sng" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"
                        class="grayscale contrast-125 group-hover:grayscale-0 transition duration-700">
                    </iframe>
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
            
            // Handle hash navigation on page load
            const hash = window.location.hash.replace('#', '');
            if (hash && hash.endsWith('-page')) {
                switchPage(hash.replace('-page', ''));
            }
        });

        // Handle hash changes (browser back/forward)
        window.addEventListener('hashchange', () => {
            const hash = window.location.hash.replace('#', '');
            if (hash && hash.endsWith('-page')) {
                switchPage(hash.replace('-page', ''));
            } else if (!hash) {
                switchPage('home');
            }
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

        // SPA Page Switcher Logic
        function switchPage(pageId) {
            // 1. Hide all page sections
            document.querySelectorAll('.page-section').forEach(p => p.classList.add('hidden'));
            
            // 2. Ensure ID string matches HTML (e.g., 'home' -> 'home-page')
            const targetId = pageId.endsWith('-page') ? pageId : pageId + '-page';
            const target = document.getElementById(targetId);
            
            // 3. Show target section
            if (target) {
                target.classList.remove('hidden');
                
                // 4. Update URL hash without triggering hashchange
                if (history.pushState) {
                    history.pushState(null, null, '#' + targetId);
                } else {
                    window.location.hash = targetId;
                }
                
                // 5. Scroll to top
                window.scrollTo({top: 0, behavior: 'smooth'});
                
                // 6. Refresh animations
                AOS.refresh();
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
document.addEventListener('DOMContentLoaded', function () {

    // Buttons
    const buttons = document.querySelectorAll('#media-page button');

    // Sermons elements
    const sermonsHeading = document.querySelector(
        '#media-page h3:nth-of-type(1)'
    );
    const sermonsGrid = sermonsHeading.nextElementSibling;

    // Ebooks elements
    const ebooksHeading = document.querySelector(
        '#media-page h3:nth-of-type(2)'
    );
    const ebooksGrid = ebooksHeading.nextElementSibling;

    function setActiveButton(activeBtn) {
        buttons.forEach(btn => {
            btn.classList.remove('bg-accent', 'text-white');
            btn.classList.add('bg-cardDark', 'text-textGray');
        });

        activeBtn.classList.add('bg-accent', 'text-white');
        activeBtn.classList.remove('bg-cardDark', 'text-textGray');
    }

    // ALL
    buttons[0].addEventListener('click', function () {
        sermonsHeading.style.display = '';
        sermonsGrid.style.display = '';

        ebooksHeading.style.display = '';
        ebooksGrid.style.display = '';

        setActiveButton(this);
    });

    // SERMONS
    buttons[1].addEventListener('click', function () {
        sermonsHeading.style.display = '';
        sermonsGrid.style.display = '';

        ebooksHeading.style.display = 'none';
        ebooksGrid.style.display = 'none';

        setActiveButton(this);
    });

    // EBOOKS
    buttons[2].addEventListener('click', function () {
        sermonsHeading.style.display = 'none';
        sermonsGrid.style.display = 'none';

        ebooksHeading.style.display = '';
        ebooksGrid.style.display = '';

        setActiveButton(this);
    });

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

    <script>

    </script>
</body>
</html>