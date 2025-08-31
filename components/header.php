<!-- header.php -->
<?php
// You can set a dynamic title for each page
if (!isset($pageTitle)) {
    $pageTitle = "My Website";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $pageTitle; ?></title>

  <!-- Bootstrap CSS -->
  <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet">

  <!-- Optional: Bootstrap Icons -->
  <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" 
    rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
  <div class="container">
    <a class="navbar-brand fw-bold fs-4" href="#">
      <i class="bi bi-code-slash me-2"></i> WebWorker
    </a>
    <button 
      class="navbar-toggler" 
      type="button" 
      data-bs-toggle="collapse" 
      data-bs-target="#navbarNav" 
      aria-controls="navbarNav" 
      aria-expanded="false" 
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Portfolio</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
      </ul>
      <a href="#" class="btn btn-primary ms-lg-3">Get Started</a>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<header class="bg-light py-5 text-center">
  <div class="container">
    <h1 class="display-4 fw-bold">Welcome to WebWorker</h1>
    <p class="lead text-muted mb-4">
      We build modern, scalable, and beautiful web applications with PHP & Bootstrap.
    </p>
    <a href="#services" class="btn btn-primary btn-lg">Explore Services</a>
    <a href="#contact" class="btn btn-outline-dark btn-lg ms-2">Contact Us</a>
  </div>
</header>
<!-- End of header.php -->