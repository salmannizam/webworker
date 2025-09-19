<?php
$pageTitle = "Home - WebWorker";
include 'components/header.php';
?>
<?php include 'components/hero.php'; ?>

<main class="py-5 bg-light">

  <!-- About Section -->
  <section class="container text-center mb-5">
    <h2 class="fw-bold mb-3 text-gradient">Why Choose <span class="fw-bold">WebWorker</span>?</h2>
    <p class="fs-5 text-muted mx-auto" style="max-width: 800px;">
      At WebWorker, we specialize in <strong>full-stack web development</strong> using
      <em>React, Next.js, Node.js, NestJS, MongoDB & SQL</em>.
      Our solutions are built to be <strong>scalable, secure, SEO-friendly</strong>, and ready for the future.
    </p>
  </section>

  <!-- Services Section -->
  <section id="services" class="container mb-5">
    <h2 class="fw-bold text-center mb-4">Our Core Services</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card h-100 shadow border-0 rounded-4">
          <div class="card-body text-center p-4">
            <i class="bi bi-code-slash fs-1 text-primary mb-3"></i>
            <h5 class="card-title fw-semibold">Full-Stack Development</h5>
            <p class="card-text text-muted">
              Building modern web apps with React, Next.js, Node.js, and NestJS that are fast, secure & scalable.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 shadow border-0 rounded-4">
          <div class="card-body text-center p-4">
            <i class="bi bi-laptop fs-1 text-success mb-3"></i>
            <h5 class="card-title fw-semibold">Frontend & UI/UX Design</h5>
            <p class="card-text text-muted">
              Responsive and visually stunning interfaces with Next.js & React, optimized for SEO and user engagement.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 shadow border-0 rounded-4">
          <div class="card-body text-center p-4">
            <i class="bi bi-database fs-1 text-warning mb-3"></i>
            <h5 class="card-title fw-semibold">Database & API Solutions</h5>
            <p class="card-text text-muted">
              Secure, high-performance backend solutions with MongoDB, MySQL, PostgreSQL & REST/GraphQL APIs.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SEO Section -->
  <section class="py-5 bg-dark text-white text-center">
    <div class="container">
      <h2 class="fw-bold mb-3">Grow Your Business with <span class="text-primary">WebWorker</span></h2>
      <p class="fs-5 opacity-75 mx-auto" style="max-width: 850px;">
        We don’t just build websites — we build <strong>digital experiences</strong> that rank high in Google,
        load lightning fast, and give your business the competitive edge.
      </p>
      <a href="#contact" class="btn btn-primary btn-lg px-4 mt-3 shadow">Get a Free Consultation</a>
    </div>
  </section>

</main>

<style>
  .text-gradient {
    background: linear-gradient(90deg, #06b6d4, #3b82f6, #9333ea);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }
</style>



<?php include 'components/footer.php'; ?>