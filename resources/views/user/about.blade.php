<!-- About Page - BeyondFaith International -->
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About • BeyondFaith International</title>
  <script src="https://cdn.tailwindcss.com"></script>
   @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-white text-slate-900">

  <!-- Site Header & Navigation (fixed, white + sky-blue theme) -->
  <header class="fixed inset-x-0 top-0 z-50">
    <div class="backdrop-blur bg-white/95 border-b border-slate-200">
      <div class="max-w-7xl mx-auto px-5 lg:px-8 h-16 flex items-center justify-between">
        <a href="/" class="flex items-center gap-3">
          <div class="w-11 h-11 rounded-lg flex items-center justify-center bg-gradient-to-br from-sky-400 to-white shadow">
            <span class="text-sky-700 font-semibold" style="font-family:Merriweather, serif">BF</span>
          </div>
          <div class="hidden sm:block">
            <div class="font-semibold text-slate-800">BeyondFaith</div>
            <div class="text-xs text-slate-500 -mt-0.5">Online Worship</div>
          </div>
        </a>

        <nav class="hidden md:flex items-center gap-6 text-sm font-medium" aria-label="Primary">
          <a href="{{url('/')}}" class="nav-link text-slate-700 hover:text-sky-600">Home</a>
          <a href="{{url('/#ministries')}}" class="nav-link text-slate-700 hover:text-sky-600">Ministries</a>
          <a href="{{url('about')}}" class="nav-link text-slate-700 hover:text-sky-600">About</a>
          <a href="#gallery" class="nav-link text-slate-700 hover:text-sky-600">Gallery</a>
          <a href="#contact" class="nav-link text-slate-700 hover:text-sky-600">Contact</a>
          <a href="{{url('ebooks_user')}}" class="ml-3 px-3 py-2 rounded-full bg-sky-600 text-white">Media</a>
        </nav>

        <div class="md:hidden">
          <button id="mobileToggle" aria-expanded="false" aria-controls="mobileMenu"
                  class="md:hidden flex flex-col justify-center w-8 h-8 gap-[6px] p-1 focus:outline-none" aria-label="Open menu">
            <span class="block w-full h-[2px] bg-slate-800 rounded"></span>
            <span class="block w-full h-[2px] bg-slate-800 rounded"></span>
            <span class="block w-full h-[2px] bg-slate-800 rounded"></span>
          </button>
        </div>
      </div>
    </div>

    <div id="mobileMenu" class="hidden md:hidden border-t border-slate-100 bg-white">
      <div class="px-4 py-4 space-y-2">
        <a href="{{url('/')}}" class="mobile-link block px-3 py-2 rounded-md hover:bg-sky-50 text-slate-800">Home</a>
        <a href="{{url('/#ministries')}}" class="mobile-link block px-3 py-2 rounded-md hover:bg-sky-50 text-slate-800">Ministries</a>
        <a href="{{url('about')}}" class="mobile-link block px-3 py-2 rounded-md hover:bg-sky-50 text-slate-800">About</a>
        <a href="#gallery" class="mobile-link block px-3 py-2 rounded-md hover:bg-sky-50 text-slate-800">Gallery</a>
        <a href="#contact" class="mobile-link block px-3 py-2 rounded-md hover:bg-sky-50 text-slate-800">Contact</a>
        <a href="{{url('ebooks_user')}}" class="block mt-2 px-3 py-2 rounded-full bg-sky-600 text-white text-center">Media</a>
      </div>
    </div>

    <script>
      const btn = document.getElementById('mobileToggle');
      const menu = document.getElementById('mobileMenu');
      btn.addEventListener('click', () => {
        const expanded = btn.getAttribute('aria-expanded') === 'true';
        btn.setAttribute('aria-expanded', String(!expanded));
        menu.classList.toggle('hidden');
        // Prevent body scroll when menu open on small screens
        if (!expanded) {
          document.body.style.overflow = 'hidden';
        } else {
          document.body.style.overflow = '';
        }
      });

      // Close mobile menu on link click (improves UX)
      document.querySelectorAll('#mobileMenu a').forEach(a => {
        a.addEventListener('click', () => {
          menu.classList.add('hidden');
          btn.setAttribute('aria-expanded', 'false');
          document.body.style.overflow = '';
        });
      });
    </script>
  </header>

  <main class="pt-20">

    <!-- About Section -->
    <section id="about" class="max-w-5xl mx-auto px-6 py-16">
      <div class="grid md:grid-cols-2 gap-14 items-center">

        <!-- Image -->
        <div>
          <img src="img/ab-page.jpg" 
               alt="Church community" 
               class="rounded-2xl shadow-xl" />
        </div>

        <!-- Content -->
        <div>
          <h2 class="text-3xl md:text-4xl font-semibold mb-6 text-sky-600">Who We Are</h2>
          <p class="text-lg leading-relaxed text-slate-700 mb-6">
            BeyondFaith International is a Christ-centered church committed to transforming lives,
            raising leaders, and bringing the light of Jesus to communities across the world.
            We exist to guide people into a deeper relationship with God and empower them to
            walk in purpose.
          </p>
          <p class="text-lg leading-relaxed text-slate-700">
            Through worship, teaching, outreach, and spiritual growth, we build a family rooted
            in love, unity, and the power of the Holy Spirit.
          </p>
        </div>

      </div>
    </section>
	<!-- KNOW YOUR CHURCH - implemented from poster -->
<section id="know-your-church" class="max-w-6xl mx-auto px-6 py-16">
  <!-- Banner / Header -->
  <div class="text-center mb-10">
    <div class="inline-flex items-center gap-3">
      <!-- small logo placeholder; replace src with your actual logo -->
      <img src="img/logo.png" alt="BeyondFaith Intl. logo" class="w-12 h-12 rounded bg-white shadow-sm" />
      <div class="text-left">
        <div class="text-xs uppercase tracking-wider text-slate-500">Greatest Love Abode</div>
        <h1 class="text-3xl md:text-4xl font-bold tracking-tight text-sky-600">Know Your Church</h1>
        <div class="text-sm text-slate-500 mt-1">Motto: Raising a person from humanity to divinity.</div>
      </div>
    </div>
  </div>

  <!-- Vision & Mission cards -->
  <div class="grid md:grid-cols-2 gap-8 mb-10 items-start">
    <!-- Our Vision -->
    <div class="relative">
      <div class="absolute -left-4 -top-4">
        <div class="inline-block bg-red-700 text-white text-xs font-semibold px-4 py-2 rounded-r-md">OUR VISION</div>
      </div>
      <div class="mt-6 p-6 rounded-2xl bg-white border border-slate-100 shadow-lg">
        <p class="text-slate-700 leading-relaxed text-lg">
          To restore priesthood and spirituality in the body of Christ through the preaching and
          teaching of the message of Love.
        </p>
        <p class="mt-4 text-sm text-slate-500">
          (1 Cor.13:13, 2 Cor.3:6 &amp; Heb.7:26-28)
        </p>
      </div>
    </div>

    <!-- Our Mission -->
    <div class="relative">
      <div class="absolute -left-4 -top-4">
        <div class="inline-block bg-red-700 text-white text-xs font-semibold px-4 py-2 rounded-r-md">OUR MISSION</div>
      </div>
      <div class="mt-6 p-6 rounded-2xl bg-white border border-slate-100 shadow-lg">
        <p class="text-slate-700 leading-relaxed text-lg">
          To bring order out of the chaotic condition of the Church as it is written in Isaiah.
        </p>
        <p class="mt-4 text-sm text-slate-500">(Refer: Isa. 56)</p>
      </div>
    </div>
  </div>

  <!-- Physical & Spiritual columns -->
  <div class="grid md:grid-cols-2 gap-8">
    <!-- Physical -->
    <div class="relative">
      <div class="absolute -left-4 -top-4">
        <div class="inline-block bg-red-700 text-white text-xs font-semibold px-4 py-2 rounded-r-md">PHYSICAL</div>
      </div>

      <div class="mt-6 p-6 rounded-2xl bg-white border border-slate-100 shadow">
        <ul class="list-disc list-inside space-y-3 text-slate-700 leading-relaxed">
          <li>To share with the hungry.</li>
          <li>To house the homeless.</li>
          <li>To cover the naked.</li>
          <li>To avail myself to the needs of my own flesh and blood.</li>
          <li>To stop false accusations and spreading vicious rumors.</li>
          <li>To build the old waste places.</li>
        </ul>
      </div>
    </div>

    <!-- Spiritual -->
    <div class="relative">
      <div class="absolute -left-4 -top-4">
        <div class="inline-block bg-red-700 text-white text-xs font-semibold px-4 py-2 rounded-r-md">SPIRITUAL</div>
      </div>

      <div class="mt-6 p-6 rounded-2xl bg-white border border-slate-100 shadow">
        <ul class="list-disc list-inside space-y-3 text-slate-700 leading-relaxed">
          <li>To loose the bands of wickedness.</li>
          <li>To undo heavy burdens.</li>
          <li>To let the oppressed go free.</li>
          <li>To break every satanic yoke.</li>
          <li>To raise up the foundations of many generations.</li>
          <li>Honoring the Lord in every service by doing His pleasure.</li>
        </ul>
      </div>
    </div>
  </div>
</section>



    <!-- <section class="max-w-6xl mx-auto px-6 py-12">
      <h3 class="text-2xl font-semibold text-sky-600 mb-8 text-center">Our Core Values</h3>
      <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="p-6 rounded-2xl bg-sky-50 border border-sky-100 shadow-sm">
          <h4 class="font-semibold text-slate-800 mb-2">Worship</h4>
          <p class="text-sm text-slate-600">Passionate, Christ-centered worship that invites God's presence.</p>
        </div>
        <div class="p-6 rounded-2xl bg-white border border-sky-100 shadow-sm">
          <h4 class="font-semibold text-slate-800 mb-2">Discipleship</h4>
          <p class="text-sm text-slate-600">Training believers to grow, lead, and serve effectively.</p>
        </div>
        <div class="p-6 rounded-2xl bg-sky-50 border border-sky-100 shadow-sm">
          <h4 class="font-semibold text-slate-800 mb-2">Community</h4>
          <p class="text-sm text-slate-600">Building authentic relationships and caring for one another.</p>
        </div>
        <div class="p-6 rounded-2xl bg-white border border-sky-100 shadow-sm">
          <h4 class="font-semibold text-slate-800 mb-2">Outreach</h4>
          <p class="text-sm text-slate-600">Serving our city and sharing the gospel to the nations.</p>
        </div>
      </div>
    </section>


    <section id="ministries" class="max-w-6xl mx-auto px-6 py-12 bg-sky-50 rounded-3xl mx-6">
      <div class="max-w-6xl mx-auto py-6">
        <h3 class="text-2xl font-semibold text-slate-800 mb-6">Programs & Ministries</h3>
        <div class="grid md:grid-cols-3 gap-6">
          <div class="p-6 bg-white rounded-2xl shadow">
            <h4 class="font-semibold mb-2">Youth & Students</h4>
            <p class="text-sm text-slate-600">Engaging the next generation with relevant teaching and community.</p>
          </div>
          <div class="p-6 bg-white rounded-2xl shadow">
            <h4 class="font-semibold mb-2">Community Outreach</h4>
            <p class="text-sm text-slate-600">Food drives, community support and local partnerships.</p>
          </div>
          <div class="p-6 bg-white rounded-2xl shadow">
            <h4 class="font-semibold mb-2">Small Groups</h4>
            <p class="text-sm text-slate-600">Connect, grow and serve together in life-changing groups.</p>
          </div>
        </div>
      </div>
    </section> -->


    <!-- Get Involved (CTA card) -->
    <section class="max-w-5xl mx-auto px-6 py-12">
      <div class="p-8 rounded-2xl bg-gradient-to-r from-sky-600 to-sky-400 text-white shadow-lg">
        <div class="md:flex md:items-center md:justify-between">
          <div>
            <h3 class="text-2xl font-semibold mb-2">Get Involved</h3>
            <p class="text-sm opacity-90">Join a small group, volunteer, or partner with our outreach efforts.</p>
          </div>
          <div class="mt-4 md:mt-0">
            <a href="#contact" class="inline-block px-4 py-2 rounded-full bg-white text-sky-600 font-semibold">Contact Us</a>
          </div>
        </div>
      </div>
    </section>


    <!-- Mission / Vision -->
    <!-- <section class="bg-white py-20">
      <div class="max-w-5xl mx-auto px-6 grid md:grid-cols-2 gap-12">

        <div class="p-8 rounded-2xl bg-sky-50 border border-sky-100 shadow-xl">
          <h3 class="text-2xl font-semibold mb-4 text-sky-600">Our Mission</h3>
          <p class="text-slate-700 leading-relaxed">
            To preach the Gospel, build disciples, strengthen families, and create communities
            where people grow spiritually and thrive in every area of life.
          </p>
        </div>

        <div class="p-8 rounded-2xl bg-sky-50 border border-sky-100 shadow-xl">
          <h3 class="text-2xl font-semibold mb-4 text-sky-600">Our Vision</h3>
          <p class="text-slate-700 leading-relaxed">
            To shine the light of Jesus to the nations and become a global center of faith,
            transformation, and leadership.
          </p>
        </div>

      </div>
    </section> -->


    <!-- Pastors Section -->
    <section class="max-w-5xl mx-auto px-6 py-20">
      <h2 class="text-center text-3xl md:text-4xl font-semibold mb-12 text-slate-800">Our Leadership</h2>

      <div class="grid md:grid-cols-2 gap-12">

        <div class="text-center">
          <img src="img/pastor.jpeg"
               class="w-full h-80 object-cover rounded-2xl shadow-lg mb-6" />
          <h4 class="text-2xl font-semibold">Pastor Livinus Nneji</h4>
          <p class="text-slate-600 mt-2">Senior Pastor</p>
        </div>

        <div class="text-center">
          <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=800&q=80"
               class="w-full h-80 object-cover rounded-2xl shadow-lg mb-6" />
          <h4 class="text-2xl font-semibold">Pastor Kate Nneji</h4>
          <p class="text-slate-600 mt-2">Assistant Pastor</p>
        </div>

      </div>
    </section>


    <!-- Footer -->
    <footer id="contact" class="py-10 text-center text-slate-600 text-sm">
      © 2025 BeyondFaith International. All Rights Reserved.
    </footer>

  </main>

</body>
</html>