<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Elegant Church Gallery</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>

  <header class="gallery-header">
    <h1>Grace Fellowship Church</h1>
    <p>Moments of Faith, Worship, and Community</p>
  </header>

  <main class="gallery-container">

    <section class="gallery-section" id="services">
      <h2>Services</h2>
      <div class="gallery-grid">
        <div class="gallery-item" tabindex="0">
          <img src="images/service1.jpg" alt="Service 1" />
          <div class="caption">Sunday Morning Service</div>
        </div>
        <div class="gallery-item" tabindex="0">
          <img src="images/service2.jpg" alt="Service 2" />
          <div class="caption">Midweek Prayer</div>
        </div>
        <div class="gallery-item" tabindex="0">
          <img src="images/service3.jpg" alt="Service 3" />
          <div class="caption">Youth Fellowship</div>
        </div>
      </div>
    </section>

    <section class="gallery-section" id="worship">
      <h2>Worship</h2>
      <div class="gallery-grid">
        <div class="gallery-item" tabindex="0">
          <img src="images/worship1.jpg" alt="Worship 1" />
          <div class="caption">Praise & Worship</div>
        </div>
        <div class="gallery-item" tabindex="0">
          <img src="images/worship2.jpg" alt="Worship 2" />
          <div class="caption">Choir Performance</div>
        </div>
        <div class="gallery-item" tabindex="0">
          <img src="images/worship3.jpg" alt="Worship 3" />
          <div class="caption">Instrumental Session</div>
        </div>
      </div>
    </section>

    <section class="gallery-section" id="events">
      <h2>Events</h2>
      <div class="gallery-grid">
        <div class="gallery-item" tabindex="0">
          <img src="images/event1.jpg" alt="Event 1" />
          <div class="caption">Christmas Celebration</div>
        </div>
        <div class="gallery-item" tabindex="0">
          <img src="images/event2.jpg" alt="Event 2" />
          <div class="caption">Community Outreach</div>
        </div>
        <div class="gallery-item" tabindex="0">
          <img src="images/event3.jpg" alt="Event 3" />
          <div class="caption">Fundraising Gala</div>
        </div>
      </div>
    </section>

    <section class="gallery-section" id="outreach">
      <h2>Outreach</h2>
      <div class="gallery-grid">
        <div class="gallery-item" tabindex="0">
          <img src="images/outreach1.jpg" alt="Outreach 1" />
          <div class="caption">Food Drive</div>
        </div>
        <div class="gallery-item" tabindex="0">
          <img src="images/outreach2.jpg" alt="Outreach 2" />
          <div class="caption">Homeless Shelter Visit</div>
        </div>
        <div class="gallery-item" tabindex="0">
          <img src="images/outreach3.jpg" alt="Outreach 3" />
          <div class="caption">Youth Mentorship</div>
        </div>
      </div>
    </section>

  </main>

  <!-- Lightbox -->
  <div id="lightbox" class="lightbox" aria-hidden="true" role="dialog" aria-label="Image preview">
    <button id="lightbox-close" aria-label="Close image preview">&times;</button>
    <img id="lightbox-img" src="" alt="" />
    <p id="lightbox-caption"></p>
  </div>

  <script src="script.js"></script>











<style>
 /* Reset */
*,
*::before,
*::after {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background: #f5f9fc;
  color: #2c3e50;
  line-height: 1.6;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  overflow-x: hidden;
}

.gallery-header {
  background: #1d3557;
  color: #f1faee;
  text-align: center;
  padding: 50px 20px 40px;
  box-shadow: 0 3px 15px rgba(0, 0, 0, 0.15);
  position: sticky;
  top: 0;
  z-index: 100;
  user-select: none;
}

.gallery-header h1 {
  font-weight: 700;
  font-size: 2.8rem;
  margin-bottom: 8px;
  letter-spacing: 1.2px;
  text-transform: uppercase;
}

.gallery-header p {
  font-size: 1.15rem;
  font-weight: 400;
  letter-spacing: 0.3px;
  font-style: italic;
  color: #a8dadc;
}

/* Main container */
.gallery-container {
  max-width: 1200px;
  margin: 40px auto 60px;
  padding: 0 20px;
}

/* Each section styling */
.gallery-section {
  margin-bottom: 70px;
}

.gallery-section h2 {
  font-size: 2.2rem;
  font-weight: 700;
  color: #457b9d;
  margin-bottom: 25px;
  position: relative;
  padding-bottom: 8px;
  cursor: default;
  user-select: none;
}

/* Underline animation */
.gallery-section h2::after {
  content: '';
  position: absolute;
  width: 50px;
  height: 4px;
  bottom: 0;
  left: 0;
  background: #1d3557;
  border-radius: 2px;
  transition: width 0.35s ease;
}

.gallery-section h2:hover::after {
  width: 100px;
}

/* Grid layout */
.gallery-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 28px;
}

/* Each gallery item */
.gallery-item {
  background: white;
  border-radius: 12px;
  box-shadow:
    0 3px 6px rgba(0, 0, 0, 0.12),
    0 8px 20px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  cursor: pointer;
  transform: translateY(20px);
  opacity: 0;
  animation-fill-mode: forwards;
  animation-name: fadeInUp;
  animation-duration: 0.8s;
  animation-timing-function: ease;
  transition: box-shadow 0.3s ease, transform 0.3s ease;
  outline-offset: 3px;
  outline-color: transparent;
  position: relative;
}

.gallery-item:focus,
.gallery-item:hover {
  box-shadow:
    0 8px 15px rgba(0, 0, 0, 0.25),
    0 12px 40px rgba(0, 0, 0, 0.22);
  transform: translateY(0) scale(1.04);
  outline-color: #1d3557;
}

/* Stagger animation */
.gallery-item:nth-child(3n+1) {
  animation-delay: 0.15s;
}
.gallery-item:nth-child(3n+2) {
  animation-delay: 0.35s;
}
.gallery-item:nth-child(3n+3) {
  animation-delay: 0.55s;
}

/* Images */
.gallery-item img {
  display: block;
  width: 100%;
  height: 180px;
  object-fit: cover;
  transition: transform 0.35s ease;
  border-bottom: 1px solid #e6e9ed;
}

.gallery-item:hover img,
.gallery-item:focus img {
  transform: scale(1.1);
}

/* Caption under image */
.caption {
  padding: 12px 15px;
  font-weight: 600;
  font-size: 1rem;
  color: #1d3557;
  text-align: center;
  background: #f1f6f9;
  user-select: none;
}

/* Lightbox styles */
.lightbox {
  display: none;
  position: fixed;
  z-index: 1500;
  top: 0; left: 0;
  width: 100vw;
  height: 100vh;
  background-color: rgba(29, 53, 87, 0.9);
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 15px;
  animation: fadeIn 0.3s ease forwards;
}

.lightbox img {
  max-width: 90vw;
  max-height: 75vh;
  border-radius: 16px;
  box-shadow:
    0 10px 40px rgba(0, 0, 0, 0.45);
  user-select: none;
}

#lightbox-close {
  background: transparent;
  border: none;
  font-size: 3.2rem;
  color: #f1faee;
  cursor: pointer;
  position: absolute;
  top: 25px;
  right: 30px;
  font-weight: 700;
  transition: color 0.3s ease;
  user-select: none;
}

#lightbox-close:hover,
#lightbox-close:focus {
  color: #e63946;
  outline: none;
}

#lightbox-caption {
  color: #a8dadc;
  margin-top: 15px;
  font-size: 1.2rem;
  font-style: italic;
  text-align: center;
  max-width: 90vw;
  user-select: none;
}

/* Animations */
@keyframes fadeInUp {
  0% {
    opacity: 0;
    transform: translateY(20px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

/* Scrollbar styling for desktop */
body::-webkit-scrollbar {
  width: 12px;
}
body::-webkit-scrollbar-track {
  background: #f5f9fc;
}
body::-webkit-scrollbar-thumb {
  background-color: #457b9d;
  border-radius: 10px;
  border: 3px solid #f5f9fc;
}


</style>

<script>
const lightbox = document.getElementById('lightbox');
const lightboxImg = document.getElementById('lightbox-img');
const lightboxCaption = document.getElementById('lightbox-caption');
const closeBtn = document.getElementById('lightbox-close');

document.querySelectorAll('.gallery-item img').forEach(img => {
  img.addEventListener('click', () => {
    lightboxImg.src = img.src;
    lightboxImg.alt = img.alt;
    // Get caption text from sibling div.caption
    // const caption = img.nextElementSibling ? img.nextElementSibling.textContent : '';

    const caption = img.parentElement.querySelector('.caption')?.textContent || '';

    lightboxCaption.textContent = caption;
    lightbox.style.display = 'flex';
    lightbox.setAttribute('aria-hidden', 'false');
    closeBtn.focus();
    document.body.style.overflow = 'hidden'; 
  });
});

closeBtn.addEventListener('click', () => {
  lightbox.style.display = 'none';
  lightbox.setAttribute('aria-hidden', 'true');
  document.body.style.overflow = ''; 
});

// Close lightbox on click outside image
lightbox.addEventListener('click', (e) => {
  if (e.target === lightbox || e.target === lightboxCaption) {
    lightbox.style.display = 'none';
    lightbox.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
  }
});

// Close lightbox with ESC key
document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape' && lightbox.style.display === 'flex') {
    lightbox.style.display = 'none';
    lightbox.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
  }
});

</script>







</body>
</html>
