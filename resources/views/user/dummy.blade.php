<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beyond Faith International Church</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#050A19',
                        cardDark: '#0B1221',
                        accent: '#00B4D8',
                        textGray: '#94A3B8'
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        serif: ['Playfair Display', 'serif'],
                    }
                }
            }
        }
    </script>

    <style>
        #loader {
            position: fixed;
            inset: 0;
            background: #050A19;
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: opacity 0.5s ease-out;
        }
        .nav-link { position: relative; cursor: pointer; }
        .nav-link::after {
            content: ''; position: absolute; width: 0; height: 2px;
            bottom: -4px; left: 0; background: #00B4D8; transition: width 0.3s;
        }
        .nav-link:hover::after { width: 100%; }
        .glass { background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.05); }
    </style>
</head>
<body class="bg-primary text-slate-200 font-sans overflow-x-hidden">

    <div id="loader"><div class="animate-spin rounded-full h-12 w-12 border-t-2 border-accent"></div></div>

    <nav class="fixed w-full z-50 glass border-b border-white/5 py-4">
        <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
            <div class="flex items-center gap-3 cursor-pointer" onclick="switchPage('home')">
                <div class="w-10 h-10 border border-white/20 rounded-full flex items-center justify-center"><i class="fa-solid fa-church"></i></div>
                <div>
                    <h1 class="font-serif font-bold tracking-widest text-lg leading-none">BEYOND FAITH</h1>
                    <p class="text-[0.6rem] uppercase tracking-widest text-textGray">International</p>
                </div>
            </div>
            <div class="hidden md:flex gap-8 text-[10px] font-bold uppercase tracking-[0.2em] text-textGray">
                <a onclick="switchPage('home')" class="nav-link hover:text-white">Home</a>
                <a onclick="switchPage('about')" class="nav-link hover:text-white">About Us</a>
                <a onclick="switchPage('events')" class="nav-link hover:text-white">Events</a>
                <a onclick="switchPage('media')" class="nav-link hover:text-white">Media</a>
                <a onclick="switchPage('gallery')" class="nav-link hover:text-white">Gallery</a>
            </div>
            <button class="border border-accent text-accent px-6 py-2 rounded-full text-[10px] font-bold uppercase hover:bg-accent hover:text-white transition">Give Online</button>
        </div>
    </nav>

    <main class="min-h-screen">

        <section id="home-page" class="page-section">
            <div class="relative h-screen flex items-center justify-center text-center px-4 bg-[url('https://images.unsplash.com/photo-1438232992991-995b7058bbb3?q=80&w=2073&auto=format&fit=crop')] bg-cover bg-center">
                <div class="absolute inset-0 bg-primary/60"></div>
                <div class="relative z-10" data-aos="fade-up">
                    <span class="text-[10px] uppercase tracking-[0.4em] text-accent mb-4 block">Experience God's Love</span>
                    <h1 class="font-serif text-5xl md:text-8xl mb-2">Welcome to <br><span class="text-accent italic">Beyond Faith</span></h1>
                    <p class="font-serif italic text-2xl text-textGray mb-10">(Greatest Love Abode)</p>
                    <div class="flex justify-center gap-4">
                        <button onclick="switchPage('events')" class="bg-accent text-white px-8 py-4 rounded-full text-[10px] font-bold uppercase tracking-widest hover:scale-105 transition">Plan Your Visit</button>
                        <button onclick="switchPage('media')" class="glass text-white px-8 py-4 rounded-full text-[10px] font-bold uppercase tracking-widest hover:bg-white hover:text-primary transition">Watch Online</button>
                    </div>
                </div>
            </div>

            <div class="py-24 bg-cardDark">
                <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
                    <div data-aos="fade-right">
                        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2070&auto=format&fit=crop" class="rounded-2xl shadow-2xl grayscale hover:grayscale-0 transition duration-700">
                    </div>
                    <div data-aos="fade-left">
                        <span class="text-accent font-bold text-[10px] uppercase tracking-widest">Core Philosophy</span>
                        <h2 class="font-serif text-4xl md:text-5xl my-6 italic">Taking the limits off your faith.</h2>
                        <p class="text-textGray leading-relaxed mb-8">Beyond Faith International is a movement of love, grace, and transformation. We believe in a God who breaks barriers and builds bridges.</p>
                        <button onclick="switchPage('about')" class="border-b border-accent text-accent pb-1 text-xs font-bold uppercase">Learn More &rarr;</button>
                    </div>
                </div>
            </div>
        </section>

        <section id="event-id-page" class="page-section hidden">
            <div class="relative h-[60vh] flex items-end">
                <img src="https://images.unsplash.com/photo-1477322524744-0eece9e79640?q=80&w=1500&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover opacity-40">
                <div class="absolute inset-0 bg-gradient-to-t from-primary via-primary/50 to-transparent"></div>
                <div class="relative z-10 max-w-7xl mx-auto px-6 w-full pb-12">
                    <button onclick="switchPage('events')" class="text-textGray hover:text-white mb-6 text-[10px] font-bold uppercase tracking-widest"><i class="fa-solid fa-arrow-left mr-2"></i> Back to Events</button>
                    <span class="bg-accent text-white px-3 py-1 text-[10px] font-bold rounded uppercase">Outreach</span>
                    <h1 class="font-serif text-5xl md:text-7xl mt-4">Thanksgiving Outreach</h1>
                </div>
            </div>
            <div class="max-w-7xl mx-auto px-6 py-20 grid lg:grid-cols-3 gap-12">
                <div class="lg:col-span-2">
                    <h2 class="font-serif text-3xl mb-6">About This Event</h2>
                    <p class="text-xl text-white mb-6">Help us distribute 500 turkey baskets to families in need in our city.</p>
                    <p class="text-textGray leading-relaxed mb-6">Be the hands and feet of Jesus this Thanksgiving. We are packing and distributing over 500 baskets containing turkeys, sides, and pies to underprivileged families in our district.</p>
                </div>
                <div>
                    <div class="glass p-8 rounded-2xl sticky top-32">
                        <h3 class="font-serif text-xl mb-6">Event Details</h3>
                        <div class="space-y-6 mb-10">
                            <div class="flex gap-4">
                                <i class="fa-regular fa-calendar text-accent text-xl"></i>
                                <div><p class="text-[10px] text-textGray uppercase font-bold">Date</p><p class="font-bold">NOV 23</p></div>
                            </div>
                            <div class="flex gap-4">
                                <i class="fa-regular fa-clock text-accent text-xl"></i>
                                <div><p class="text-[10px] text-textGray uppercase font-bold">Time</p><p class="font-bold">8:00 AM</p></div>
                            </div>
                            <div class="flex gap-4">
                                <i class="fa-solid fa-location-dot text-accent text-xl"></i>
                                <div><p class="text-[10px] text-textGray uppercase font-bold">Location</p><p class="font-bold">City Center</p><p class="text-xs text-textGray">123 Faith Avenue</p></div>
                            </div>
                        </div>
                        <button class="w-full bg-accent text-white py-4 rounded-full text-[10px] font-bold uppercase tracking-widest shadow-lg shadow-accent/20">Register Now</button>
                    </div>
                </div>
            </div>
        </section>

        <section id="sermon-id-page" class="page-section hidden pt-32 pb-20">
            <div class="max-w-6xl mx-auto px-6">
                <button onclick="switchPage('media')" class="text-textGray hover:text-white mb-8 text-[10px] font-bold uppercase tracking-widest"><i class="fa-solid fa-arrow-left mr-2"></i> Back to Library</button>
                <div class="glass rounded-3xl overflow-hidden flex flex-col md:flex-row min-h-[500px]">
                    <div class="md:w-1/2 relative bg-black group">
                        <img src="https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?q=80&w=2174&auto=format&fit=crop" class="w-full h-full object-cover opacity-60">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-20 h-20 bg-accent/20 backdrop-blur rounded-full flex items-center justify-center border border-accent/30 cursor-pointer hover:scale-110 transition">
                                <i class="fa-solid fa-play text-white text-2xl ml-1"></i>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 p-12 flex flex-col justify-center">
                        <span class="bg-white text-primary px-3 py-1 text-[10px] font-bold rounded-full w-fit mb-6">AUDIO SERMON</span>
                        <h1 class="font-serif text-4xl md:text-5xl mb-6">Community Over Competition</h1>
                        <div class="flex flex-wrap gap-6 text-textGray text-xs font-bold uppercase tracking-widest mb-8">
                            <span><i class="fa-regular fa-user text-accent mr-2"></i> Michael Chen</span>
                            <span><i class="fa-regular fa-calendar text-accent mr-2"></i> Oct 08, 2023</span>
                            <span><i class="fa-regular fa-clock text-accent mr-2"></i> 42 min</span>
                        </div>
                        <p class="text-textGray leading-relaxed mb-10">Why the Kingdom of God operates on unity, not rivalry. Explore how the Gospel invites us into a community where your win is my win.</p>
                        <div class="flex flex-wrap gap-4">
                            <button class="bg-accent text-white px-8 py-4 rounded-full text-[10px] font-bold uppercase tracking-widest shadow-lg shadow-accent/20">Play Audio</button>
                            <button class="border border-accent text-accent px-8 py-4 rounded-full text-[10px] font-bold uppercase tracking-widest hover:bg-accent hover:text-white transition">Download MP3</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="events-page" class="page-section hidden pt-32 pb-20">
            <div class="max-w-7xl mx-auto px-6">
                <h1 class="font-serif text-5xl mb-12 text-center">Upcoming Events</h1>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="glass rounded-2xl overflow-hidden cursor-pointer group" onclick="switchPage('event-id')">
                        <div class="h-56 overflow-hidden"><img src="https://images.unsplash.com/photo-1477322524744-0eece9e79640?q=80&w=1500&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition duration-500"></div>
                        <div class="p-6">
                            <span class="text-accent text-[10px] font-bold uppercase">Nov 23</span>
                            <h3 class="font-serif text-2xl my-2">Thanksgiving Outreach</h3>
                            <p class="text-textGray text-sm">Help us distribute turkey baskets to families.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="media-page" class="page-section hidden pt-32 pb-20">
            <div class="max-w-7xl mx-auto px-6">
                <h1 class="font-serif text-5xl mb-12 text-center">Sermon Library</h1>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="glass rounded-2xl overflow-hidden cursor-pointer group" onclick="switchPage('sermon-id')">
                        <div class="aspect-video overflow-hidden relative">
                            <img src="https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?q=80&w=2174&auto=format&fit=crop" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-primary/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition"><i class="fa-solid fa-play text-3xl"></i></div>
                        </div>
                        <div class="p-6">
                            <span class="text-accent text-[10px] font-bold uppercase">Oct 08, 2023</span>
                            <h3 class="font-serif text-2xl my-2">Community Over Competition</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="bg-black py-20 border-t border-white/5">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-4 gap-12">
            <div class="col-span-1">
                <h2 class="font-serif font-bold tracking-widest text-lg mb-6">BEYOND FAITH</h2>
                <p class="text-textGray text-xs leading-relaxed">A place to believe, belong, and become who God created you to be.</p>
            </div>
            <div>
                <h4 class="font-bold text-xs uppercase tracking-widest mb-6">Quick Links</h4>
                <ul class="text-textGray text-xs space-y-4">
                    <li><a onclick="switchPage('about')" class="hover:text-accent cursor-pointer">About Us</a></li>
                    <li><a onclick="switchPage('events')" class="hover:text-accent cursor-pointer">Events</a></li>
                    <li><a onclick="switchPage('media')" class="hover:text-accent cursor-pointer">Media Library</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold text-xs uppercase tracking-widest mb-6">Contact</h4>
                <ul class="text-textGray text-xs space-y-4">
                    <li>123 Faith Avenue, CA</li>
                    <li>hello@beyondfaith.org</li>
                    <li>+1 (555) 123-4567</li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold text-xs uppercase tracking-widest mb-6">Follow Us</h4>
                <div class="flex gap-4 text-textGray">
                    <i class="fa-brands fa-facebook-f hover:text-white cursor-pointer"></i>
                    <i class="fa-brands fa-instagram hover:text-white cursor-pointer"></i>
                    <i class="fa-brands fa-youtube hover:text-white cursor-pointer"></i>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 1000, once: true });

        window.addEventListener('load', () => {
            const loader = document.getElementById('loader');
            loader.style.opacity = '0';
            setTimeout(() => loader.style.display = 'none', 500);
        });

        function switchPage(pageId) {
            document.querySelectorAll('.page-section').forEach(p => p.classList.add('hidden'));
            
            const targetId = pageId.includes('-page') ? pageId : pageId + '-page';
            const target = document.getElementById(targetId);
            
            if (target) {
                target.classList.remove('hidden');
                window.scrollTo(0,0);
                AOS.refresh();
            }
        }
    </script>
</body>
</html>