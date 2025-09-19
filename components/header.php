<!-- header.php -->
<?php
if (!isset($pageTitle)) {
  $pageTitle = "WebWorker - Next-Gen Web Solutions";
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/theme.css" rel="stylesheet">
    <link href="/assets/css/hero.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  </head>

  <body>

    <!-- Advanced Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-advanced fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <i class="bi bi-code-slash me-2"></i>Web<span>Worker</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto align-items-lg-center">
            <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Portfolio</a></li>
            <li class="nav-item"><a class="nav-link" href="#">About</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
            <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
              <a href="#" class="btn btn-cta shadow-sm d-block d-lg-inline-block">Get Started</a>
            </li>
          </ul>

          <!-- Extra icons -->
          <div class="navbar-icons d-flex ms-lg-3">
            <i class="bi bi-search" title="Search"></i>
            <i class="bi bi-moon-stars" title="Toggle theme"></i>
            <i class="bi bi-person-circle" title="Account"></i>
          </div>
        </div>
      </div>
    </nav>

    <!-- Scroll Script -->
    <script>
      document.addEventListener("scroll", function () {
        const navbar = document.querySelector(".navbar-advanced");
        if (window.scrollY > 30) {
          navbar.classList.add("scrolled");
        } else {
          navbar.classList.remove("scrolled");
        }
      });

      // Simple theme toggle functionality
      document.querySelector('.bi-moon-stars').addEventListener('click', function () {
        if (document.body.getAttribute('data-theme') === 'light') {
          document.body.setAttribute('data-theme', 'dark');
          this.classList.remove('bi-sun');
          this.classList.add('bi-moon-stars');
        } else {
          document.body.setAttribute('data-theme', 'light');
          this.classList.remove('bi-moon-stars');
          this.classList.add('bi-sun');
        }
      });
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>