<!-- Hero Section -->
<header class="hero-section d-flex align-items-center text-white">
  <div class="container text-center position-relative z-2">
    <h1 class="display-3 fw-bold mb-3 text-gradient">
      Building Next-Gen Web Applications
    </h1>
    <p class="lead mb-4 opacity-75">
      Experts in <span class="fw-semibold">React</span>, <span class="fw-semibold">Next.js</span>, 
      <span class="fw-semibold">Node.js</span>, <span class="fw-semibold">NestJS</span>, 
      <span class="fw-semibold">MongoDB</span> & <span class="fw-semibold">SQL</span>.
    </p>
    <div class="d-flex justify-content-center gap-3">
      <a href="#services" class="btn btn-primary btn-lg shadow-lg px-4">🚀 Get Started</a>
      <a href="#contact" class="btn btn-outline-light btn-lg shadow-lg px-4">💬 Contact Us</a>
    </div>

    <!-- Floating Tech Logos -->
    <div class="tech-logos mt-5 d-flex justify-content-center flex-wrap gap-5">
  <img src="https://cdn.worldvectorlogo.com/logos/react-2.svg" class="tech-icon" alt="React" />
  <img src="https://cdn.worldvectorlogo.com/logos/next-js.svg" class="tech-icon invert" alt="Next.js" />
  <img src="https://cdn.worldvectorlogo.com/logos/nodejs-icon.svg" class="tech-icon" alt="Node.js" />
  <img src="https://cdn.worldvectorlogo.com/logos/nestjs.svg" class="tech-icon" alt="NestJS" />
  <img src="https://cdn.worldvectorlogo.com/logos/mongodb-icon-1.svg" class="tech-icon" alt="MongoDB" />
  <img src="https://upload.wikimedia.org/wikipedia/en/d/dd/MySQL_logo.svg" class="tech-icon" alt="MySQL" />
</div>

  </div>

  <!-- Background Blobs -->
  <div class="bg-blur bg-1"></div>
  <div class="bg-blur bg-2"></div>
  <div class="bg-blur bg-3"></div>
</header>

<style>
  .hero-section {
    min-height: 100vh;
    background: radial-gradient(circle at top left, #0f172a, #020617);
    position: relative;
    overflow: hidden;
    padding: 4rem 0;
  }

  /* Gradient Text */
  .text-gradient {
    background: linear-gradient(90deg, #06b6d4, #3b82f6, #9333ea);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: gradientShift 5s infinite alternate;
  }
  @keyframes gradientShift {
    from { background-position: 0% 50%; }
    to   { background-position: 100% 50%; }
  }

  /* Floating logos */
  .tech-icon {
    width: 60px;
    height: 60px;
    animation: float 4s ease-in-out infinite;
    filter: drop-shadow(0 0 10px rgba(255,255,255,0.3));
  }
  .invert { filter: invert(1) drop-shadow(0 0 10px rgba(255,255,255,0.3)); }
  .tech-icon:nth-child(2) { animation-delay: 0.3s; }
  .tech-icon:nth-child(3) { animation-delay: 0.6s; }
  .tech-icon:nth-child(4) { animation-delay: 0.9s; }
  .tech-icon:nth-child(5) { animation-delay: 1.2s; }
  .tech-icon:nth-child(6) { animation-delay: 1.5s; }

  @keyframes float {
    0%   { transform: translateY(0px); }
    50%  { transform: translateY(-12px); }
    100% { transform: translateY(0px); }
  }

  /* Background glowing blobs */
  .bg-blur {
    position: absolute;
    border-radius: 50%;
    filter: blur(120px);
    opacity: 0.6;
    z-index: 1;
  }
  .bg-1 { width: 300px; height: 300px; background: #3b82f6; top: -50px; left: -80px; }
  .bg-2 { width: 400px; height: 400px; background: #9333ea; bottom: -80px; right: -120px; }
  .bg-3 { width: 250px; height: 250px; background: #06b6d4; bottom: 100px; left: 50%; transform: translateX(-50%); }
</style>
