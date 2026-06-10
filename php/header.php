<?php

$page_title = $page_title ?? 'Carter\'s Academy for Remarkable Excellence | CARE Academy';
$page_desc  = $page_desc  ?? 'A faith-based Primary & Secondary school in Liberia dedicated to academic excellence, integrity, and holistic child development. Light Beyond Darkness.';
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?= htmlspecialchars($page_desc) ?>">
<meta name="keywords" content="CARE Academy, Carter's Academy, Liberia school, primary school Liberia, secondary school Liberia, faith-based school Monrovia">
<title><?= htmlspecialchars($page_title) ?></title>

<link rel="icon" type="image/png" href="/assets/images/carter-logo.jpeg">

<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome 6 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<!-- Main Stylesheet -->
<link rel="stylesheet" href="assets/css/style.css">

<?php
$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>
<!-- ===== TOP BAR ===== -->
<div class="topbar d-none d-md-block">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <div class="d-flex align-items-center gap-3">
        <span><i class="fas fa-phone-alt me-1"></i> +231 880-469-995</span>
        <span class="divider-v"></span>
        <span><i class="fas fa-envelope me-1"></i> info@careacademy.edu.lr</span>
      </div>
      <div class="d-flex align-items-center gap-3">
        <span><i class="fas fa-clock me-1"></i> Mon–Fri: 7:30am – 4:00pm</span>
        <span class="divider-v"></span>
        <a href="portal.php"><i class="fas fa-user-circle me-1"></i> Student Portal</a>
      </div>
    </div>
  </div>
</div>

<!-- ===== MAIN NAV ===== -->
<nav class="navbar navbar-expand-lg main-nav" id="mainNav">
  <div class="container">
    <!-- Brand -->
    <a class="navbar-brand nav-brand" href="index.php">
      <img src="assets/images/carter-logo.jpeg" alt="CARE Academy Logo" class="brand-logo">
      <div class="brand-text">
        <div class="school-name">Carter's Academy</div>
        <div class="school-tag">Light Beyond Darkness</div>
      </div>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarMain">
      <ul class="navbar-nav align-items-lg-center gap-lg-1">
        <li class="nav-item">
          <a class="nav-link <?= $current_page === 'index' ? 'active' : '' ?>" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $current_page === 'about' ? 'active' : '' ?>" href="about.php">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?= in_array($current_page, ['academics','curriculum','timetable']) ? 'active' : '' ?>"
             href="#" data-bs-toggle="dropdown">Academics</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="academics.php">Overview</a></li>
            <li><a class="dropdown-item" href="academics.php#primary">Primary School</a></li>
            <li><a class="dropdown-item" href="academics.php#secondary">Secondary School</a></li>
            <li><a class="dropdown-item" href="academics.php#curriculum">Curriculum</a></li>
            <li><a class="dropdown-item" href="academics.php#skills">Skills Training</a></li>

          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $current_page === 'admissions' ? 'active' : '' ?>" href="admissions.php">Admissions</a>
        </li>
        <li class="nav-item">
  <a class="nav-link <?= $current_page === 'calendar' ? 'active' : '' ?>" href="calendar.php">Calendar</a>
</li>
        <li class="nav-item">
          <a class="nav-link <?= $current_page === 'gallery' ? 'active' : '' ?>" href="gallery.php">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $current_page === 'faculty' ? 'active' : '' ?>" href="faculty.php">Faculty</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $current_page === 'news' ? 'active' : '' ?>" href="news.php">News</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link <?= $current_page === 'contact' ? 'active' : '' ?>" href="contact.php">Contact</a>
        </li>
        <li class="nav-item ms-lg-2">
          <a class="nav-link nav-admit-btn btn-care" href="admissions.php#apply">Apply Now</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
