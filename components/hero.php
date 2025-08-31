<!-- Hero Section -->
<header class="hero-section text-white text-center d-flex align-items-center">
  <div class="container">
    <h1 class="display-4 fw-bold mb-3">We Build Modern Web Solutions</h1>
    <p class="lead mb-4 text-light opacity-75">
      Powering businesses with <span class="fw-semibold">Next.js</span>, <span class="fw-semibold">React</span>, 
      <span class="fw-semibold">Node.js</span>, <span class="fw-semibold">NestJS</span>, 
      <span class="fw-semibold">MongoDB</span>, <span class="fw-semibold">SQL</span> and more.
    </p>
    <div class="d-flex justify-content-center gap-3">
      <a href="#services" class="btn btn-primary btn-lg shadow px-4">Our Services</a>
      <a href="#contact" class="btn btn-outline-light btn-lg shadow px-4">Get in Touch</a>
    </div>

    <!-- Floating Tech Logos -->
    <div class="tech-icons mt-5 d-flex justify-content-center flex-wrap gap-4">
      <i class="bi bi-react fs-1 text-info"></i>
      <i class="bi bi-node-plus-fill fs-1 text-success"></i>
      <i class="bi bi-database fs-1 text-warning"></i>
      <i class="bi bi-stack fs-1 text-danger"></i>
      <i class="bi bi-code-slash fs-1 text-primary"></i>
    </div>
  </div>
</header>

<style>
  .hero-section {
    min-height: 90vh;
    background: linear-gradient(135deg, #0d1117, #1f2937, #111827);
    position: relative;
    overflow: hidden;
  }

  /* Floating animation */
  .tech-icons i {
    animation: float 4s ease-in-out infinite;
  }
  .tech-icons i:nth-child(2) { animation-delay: 0.2s; }
  .tech-icons i:nth-child(3) { animation-delay: 0.4s; }
  .tech-icons i:nth-child(4) { animation-delay: 0.6s; }
  .tech-icons i:nth-child(5) { animation-delay: 0.8s; }

  @keyframes float {
    0%   { transform: translateY(0px); }
    50%  { transform: translateY(-10px); }
    100% { transform: translateY(0px); }
  }
</style>
