<!-- Media Library - BeyondFaith International (Compact audio cards + ebook covers) -->
<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Media • BeyondFaith International</title>
  <meta name="description" content="Listen to sermons, download e-books, read transcripts and follow reading plans from BeyondFaith International." />
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
   @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-white text-slate-900">

  <!-- Header (site-wide) -->
  <header class="fixed inset-x-0 top-0 z-50">
    <div class="backdrop-blur bg-white/95 border-b border-slate-200">
      <div class="max-w-7xl mx-auto px-5 lg:px-8 h-16 flex items-center justify-between">
        <a href="/" class="flex items-center gap-3">
          <div class="w-11 h-11 rounded-lg flex items-center justify-center bg-gradient-to-br from-sky-400 to-white shadow">
            <span class="text-sky-700 font-semibold">BF</span>
          </div>
          <div class="hidden sm:block">
            <div class="font-semibold text-slate-800">BeyondFaith</div>
            <div class="text-xs text-slate-500 -mt-0.5">Media Library</div>
          </div>
        </a>

        <nav class="hidden md:flex items-center gap-6 text-sm font-medium" aria-label="Primary">
          <a href="/" class="text-slate-700 hover:text-sky-600">Home</a>
          <a href="/about" class="text-slate-700 hover:text-sky-600">About</a>
          <a href="/media" class="text-sky-600 font-medium">Media</a>
          <a href="/events" class="text-slate-700 hover:text-sky-600">Events</a>
          <a href="/contact" class="text-slate-700 hover:text-sky-600">Contact</a>
          <a href="/donate.html" class="ml-3 px-3 py-2 rounded-full bg-sky-600 text-white">Give</a>
        </nav>

        <div class="md:hidden">
          <button id="mobileToggle2" aria-expanded="false" aria-controls="mobileMenu2"
                  class="md:hidden flex flex-col justify-center w-8 h-8 gap-[6px] p-1 focus:outline-none" aria-label="Open menu">
            <span class="block w-full h-[2px] bg-slate-800 rounded"></span>
            <span class="block w-full h-[2px] bg-slate-800 rounded"></span>
            <span class="block w-full h-[2px] bg-slate-800 rounded"></span>
          </button>
        </div>
      </div>
    </div>

    <div id="mobileMenu2" class="hidden md:hidden border-t border-slate-100 bg-white">
      <div class="px-4 py-4 space-y-2">
        <a href="/" class="block px-3 py-2 rounded-md">Home</a>
        <a href="{{url('about')}}" class="block px-3 py-2 rounded-md">About</a>
        <a href="{{url('ebooks_user')}}" class="block px-3 py-2 rounded-md font-medium text-sky-600">Media</a>
        <a href="/events" class="block px-3 py-2 rounded-md">Events</a>
        <a href="/contact" class="block px-3 py-2 rounded-md">Contact</a>
       </div>
    </div>
  </header>

  <main class="pt-20 max-w-7xl mx-auto px-4 lg:px-8">

    <!-- Intro -->
    <section class="py-12">
      <div class="grid md:grid-cols-2 gap-8 items-center">
        <div>
          <h1 class="text-3xl md:text-4xl font-bold">Sermons & Resources</h1>
          <p class="text-slate-700 mt-3">Stream audio sermons, download e-books, follow reading plans, and find transcripts — all in one place.</p>
        </div>
        <div class="flex gap-3 justify-end">
          <a href="#audio" class="px-4 py-2 rounded-full bg-sky-600 text-white">Browse Audio</a>
          <a href="#ebooks" class="px-4 py-2 rounded-full border border-sky-600 text-sky-600">Browse E‑books</a>
        </div>
      </div>
    </section>

    <!-- Search & Filters -->
    <section class="py-4">
      <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
        <div class="flex-1">
          <label for="search" class="sr-only">Search media</label>
          <div class="relative">
            <input id="search" type="search" placeholder="Search by title, speaker, tag or keyword" class="w-full md:w-96 rounded-full border px-4 py-2" />
          </div>
        </div>

        <div class="flex gap-3 items-center">
          <select id="categoryFilter" class="rounded-full border px-3 py-2">
            <option value="all">All Categories</option>
            <option>Sunday Sermon</option>
            <option>Bible Study</option>
            <option>Testimony</option>
            <option>Special Event</option>
          </select>
          <select id="sort" class="rounded-full border px-3 py-2">
            <option value="newest">Newest</option>
            <option value="oldest">Oldest</option>
            <option value="popular">Most Played</option>
            <option value="alpha">A → Z</option>
          </select>
        </div>
      </div>
    </section>

    <!-- AUDIO SECTION: compact cards grid -->
    <section id="audio" class="py-8">
      <div class="flex items-center justify-between mb-4">
        <h2 class="text-2xl font-semibold">Audio Messages</h2>
        <div class="text-sm text-slate-600">Stream • Download • Transcript</div>
      </div>

      <!-- compact featured row (optional small player) -->
<div class="mb-6 p-4 rounded-lg bg-sky-50 border border-sky-100 flex items-center gap-4">

  <!-- Thumbnail -->
  <img 
    src="https://images.unsplash.com/photo-1506126613408-eca07ce68773?auto=format&fit=crop&w=200&q=60" 
    alt="featured" 
    class="w-20 h-20 object-cover rounded-lg"
  />

  <!-- Title + Meta -->
  <div class="flex-1">
    <div class="font-semibold text-slate-900">Featured: The Power of Prayer</div>
    <div class="text-xs text-slate-600">Pastor John Doe • Jan 14, 2025 • 42:13</div>

    <!-- Progress bar -->
    <input 
      type="range" 
      class="featured-progress w-full mt-2 accent-sky-500" 
      value="0"
    />
  </div>

  <!-- Buttons -->
  <div class="flex items-center gap-3">
    <button 
      class="play-feature px-4 py-1 rounded-full bg-sky-500 text-white text-sm"
    >
      ▶
    </button>

    <a 
      href="04-Drake-Fear-Of-Heights-(JustNaija.com).mp3" 
      download 
      class="text-sm underline"
    >
      Download
    </a>
  </div>



  <!-- Hidden audio element -->
  <audio class="featured-audio">
    <source src="04-Drake-Fear-Of-Heights-(JustNaija.com).mp3" type="audio/mpeg" />
  </audio>

</div>

      <!-- grid of very small compact audio cards -->
      <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <!-- Example card (repeat server-side) -->
        <article class="flex items-center gap-3 p-3 bg-white border rounded-lg shadow-sm">
          <img src="https://images.unsplash.com/photo-1519642918688-7e43b1922f96?auto=format&fit=crop&w=120&q=60" alt="talk" class="w-14 h-14 object-cover rounded" />
          <div class="flex-1">
            <div class="text-sm font-semibold truncate">Walking in Purpose</div>
            <div class="text-xs text-slate-500">Pastor Jane • 35:21</div>
            <div class="mt-2 flex gap-2">
              <button class="play-btn-xs px-2 py-0.5 rounded-full border text-xs">▶</button>
              <a href="#" class="text-xs underline">Details</a>
            </div>
          </div>
        </article>

        <!-- more compact cards... -->
      </div>

      <div class="mt-6 text-center">
        <button id="loadMoreAudio" class="px-4 py-2 rounded-full border">Load more</button>
      </div>

      <!-- mini sticky player (mobile & desktop) -->
      <!-- <div id="miniPlayer" class="fixed left-4 right-4 bottom-4 md:left-auto md:right-8 md:bottom-8 bg-white rounded-full shadow-lg p-3 hidden md:flex items-center gap-4 z-50">
        <div class="w-12 h-12 rounded-lg overflow-hidden bg-slate-200">
          <img id="miniCover" src="https://images.unsplash.com/photo-1519642918688-7e43b1922f96?auto=format&fit=crop&w=200&q=80" alt="cover" class="w-full h-full object-cover" />
        </div>
        <div class="flex-1">
          <div id="miniTitle" class="font-semibold">Now Playing</div>
          <div id="miniMeta" class="text-xs text-slate-500">Pastor • 00:00 / 00:00</div>
        </div>
        <div class="flex items-center gap-2">
          <button id="miniPrev" class="p-2">◀◀</button>
          <button id="miniPlay" class="p-2">▶️</button>
          <button id="miniNext" class="p-2">▶▶</button>
        </div>
      </div> -->
    </section>

    <!-- EBOOKS SECTION: each card with a prominent cover image -->
    <section id="ebooks" class="py-8">
      <div class="flex items-center justify-between mb-4">
        <h2 class="text-2xl font-semibold">E‑books & Reading Plans</h2>
        <div class="text-sm text-slate-600">Preview • Download • Read Online</div>
      </div>

      <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <!-- ebook card -->
		 @foreach($data as $data)
        <article class="bg-white p-3 rounded-2xl border shadow-sm flex flex-col">
          <img src="images/{{$data->images}}" alt="ebook cover" class="w-full h-44 object-cover rounded-md mb-3" />
          <div class="flex-1">
            <h4 class="font-semibold text-sm">{{$data->header}}</h4>
            <div class="text-xs text-slate-500 mt-1">Pastoral Team • 48 pages</div>
            <p class="text-xs text-slate-600 mt-2">A short devotional and study guide for new believers.</p>
          </div>
          <div class="mt-3 flex gap-2">
            <!-- <button data-pdf="/media/ebooks/growing-in-christ.pdf" class="pdf-preview px-3 py-1 rounded-full border text-xs">Preview</button> -->
            <a href="/media/ebooks/growing-in-christ.pdf" download class="px-3 py-1 rounded-full border text-xs">Get</a>
            <!-- <a href="#" class="px-3 py-1 rounded-full bg-sky-600 text-white text-xs">Read</a> -->
          </div>
        </article>
		@endforeach

        <!-- more ebook cards... -->
      </div>

      <!-- PDF modal -->
      <div id="pdfModal" class="fixed inset-0 bg-black/60 flex items-center justify-center p-4 hidden z-50">
        <div class="bg-white w-full max-w-4xl h-[80vh] rounded-lg overflow-hidden">
          <div class="flex items-center justify-between p-3 border-b">
            <div class="font-semibold">E‑book Preview</div>
            <button id="closePdf" class="px-3 py-1 rounded border">Close</button>
          </div>
          <iframe id="pdfFrame" src="" class="w-full h-[calc(100%-48px)]"></iframe>
        </div>
      </div>

    </section>

    <!-- Footer CTA -->
    <section class="mt-12 p-8 rounded-2xl bg-gradient-to-r from-sky-600 to-sky-400 text-white">
      <div class="md:flex md:items-center md:justify-between">
        <div>
          <h3 class="text-lg font-semibold">Support this ministry</h3>
          <p class="text-sm opacity-90">Help us keep resources free and accessible. Your gifts support production and outreach.</p>
        </div>
        <div class="mt-4 md:mt-0 flex gap-3">
          <a href="/donate.html" class="px-4 py-2 rounded-full bg-white text-sky-600 font-semibold">Give</a>
          <a href="/subscribe.html" class="px-4 py-2 rounded-full border">Subscribe</a>
        </div>
      </div>
    </section>

  </main>

  <!-- Lightweight JS for interactions -->
  <!-- <script>
    // mobile menu
    const mtBtn = document.getElementById('mobileToggle2');
    const mtMenu = document.getElementById('mobileMenu2');
    if (mtBtn) mtBtn.addEventListener('click', () => {
      const expanded = mtBtn.getAttribute('aria-expanded') === 'true';
      mtBtn.setAttribute('aria-expanded', String(!expanded));
      mtMenu.classList.toggle('hidden');
      document.body.style.overflow = expanded ? '' : 'hidden';
    });

    // compact play and featured play (placeholder behaviours)
    document.querySelectorAll('.play-btn-xs, .play-feature').forEach(btn => {
      btn.addEventListener('click', () => {
        alert('Would play the selected message or load it into the mini player.');
      });
    });

    // pdf preview modal
    document.querySelectorAll('.pdf-preview').forEach(btn => {
      btn.addEventListener('click', (e) => {
        const url = btn.getAttribute('data-pdf');
        document.getElementById('pdfFrame').src = url;
        document.getElementById('pdfModal').classList.remove('hidden');
      });
    });
    const closePdf = document.getElementById('closePdf');
    if (closePdf) closePdf.addEventListener('click', () => {
      document.getElementById('pdfFrame').src = '';
      document.getElementById('pdfModal').classList.add('hidden');
    });
  </script> -->
  
  <script>
  const audio = document.querySelector('.featured-audio');
  const playBtn = document.querySelector('.play-feature');
  const progress = document.querySelector('.featured-progress');

  playBtn.addEventListener('click', () => {
    if (audio.paused) {
      audio.play();
      playBtn.textContent = "⏸";
    } else {
      audio.pause();
      playBtn.textContent = "▶";
    }
  });

  audio.addEventListener('timeupdate', () => {
    if (audio.duration) {
      progress.value = (audio.currentTime / audio.duration) * 100;
    }
  });

  progress.addEventListener('input', () => {
    audio.currentTime = (progress.value / 100) * audio.duration;
  });
</script>

</body>
</html>
