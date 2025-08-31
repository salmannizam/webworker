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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="/assets/css/custom.css" rel="stylesheet">

  <style>
    /* Gradient navbar */
    .navbar-custom {
      background: linear-gradient(90deg, #0d6efd, #6610f2);
    }
    .navbar-custom .nav-link {
      color: #fff !important;
      transition: 0.3s;
    }
    .navbar-custom .nav-link:hover {
      color: #ffc107 !important;
    }
    .navbar-brand {
      color: #fff !important;
    }
    /* Hero gradient */
    .hero {
      background: linear-gradient(135deg, #f8f9fa, #e9ecef, #dee2e6);
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom shadow sticky-top">
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
      <a href="#" class="btn btn-warning text-dark fw-semibold ms-lg-3 shadow-sm">Get Started</a>
    </div>
  </div>
</nav>

