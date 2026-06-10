<?php
$page_title = "Home | Carter's Academy for Remarkable Excellence — CARE Academy";
$page_desc  = "CARE Academy: A faith-based Primary & Secondary school in Liberia. Light Beyond Darkness — quality, inclusive education for every child.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="assets/css/home.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

  <?php include 'php/header.php'; ?>


    <section class="hero-slider">
        <div class="slide slide-one active">
            <img class="slide-bg" src="assets/images/banner1.jpeg" alt="Students learning">
            <div class="container slide-content">
                <span class="slide-kicker">Welcome to CARE Academy</span>
                <h1>Carter's Academy for Remarkable Excellence</h1>
                <p>Light Beyond Darkness - quality, affordable and inclusive education for every child.</p>
                <div class="hero-ctas">
                    <a class="btn btn-care" href="admission.php">Apply Now</a>
                    <a class="btn btn-outline" href="about.php">Learn More</a>
                </div>
            </div>
        </div>
        <div class="slide slide-two">
            <img class="slide-bg" src="assets/images/banner2.jpeg" alt="School event">
            <div class="container slide-content">
                <span class="slide-kicker">Learning, Faith and Character</span>
                <h1>Shaping future leaders with strong values</h1>
                <p>We combine excellence in academics with discipline, respect and innovation.</p>
                <div class="hero-ctas">
                    <a class="btn btn-care" href="contact.php">Contact Us</a>
                    <a class="btn btn-outline" href="gallery.php">See Gallery</a>
                </div>
            </div>
        </div>
        <div class="slide slide-three">
            <img class="slide-bg" src="assets/images/banner3.jpeg" alt="Classroom">
            <div class="container slide-content">
                <span class="slide-kicker">Primary and Secondary School</span>
                <h1>A supportive place where every learner can thrive</h1>
                <p>We welcome families and partners who believe in child development and community impact.</p>
                <div class="hero-ctas">
                    <a class="btn btn-care" href="donation.php">Support Our Work</a>
                    <a class="btn btn-outline" href="eportal.php">E-Portal</a>
                </div>
            </div>
        </div>
        <div class="slider-dots" aria-hidden="true">
            <span></span><span></span><span></span>
        </div>
    </section>
<!-- ===== HERO ===== -->
<!-- <section class="hero-section" id="home">
  <div class="hero-overlay"></div>
  <div class="hero-particles"></div>
  <div class="container hero-content">
    <div class="row align-items-center min-vh-hero">
      <div class="col-lg-7">
        <div class="hero-badge reveal">
          <i class="fas fa-star"></i> Faith-Based Excellence in Liberia
        </div>
        <h1 class="hero-title reveal reveal-delay-1">
          Where Every Child's<br>
          <span class="hero-accent">Light Shines</span><br>
          Beyond Darkness
        </h1>
        <p class="hero-sub reveal reveal-delay-2">
          Carter's Academy for Remarkable Excellence (CARE Academy) is committed to nurturing young minds with faith, knowledge, and character — preparing tomorrow's leaders today.
        </p>
        <div class="d-flex flex-wrap gap-3 mt-4 reveal reveal-delay-3">
          <a href="admissions.php" class="btn-care btn-primary-care btn-lg-care">
            <i class="fas fa-file-alt"></i> Apply for Admission
          </a>
          <a href="about.php" class="btn-care btn-outline-care btn-lg-care">
            <i class="fas fa-play-circle"></i> Discover Our School
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="hero-scroll-hint">
    <span>Scroll Down</span>
    <i class="fas fa-chevron-down"></i>
  </div>
</section> -->

<!-- ===== QUICK INFO STRIP ===== -->
<div class="quick-strip">
  <div class="container">
    <div class="row g-0">
      <div class="col-sm-6 col-lg-3">
        <div class="quick-item">
          <i class="fas fa-map-marker-alt"></i>
          <div>
            <strong>Location</strong>
            <span>Monrovia, Liberia</span>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="quick-item">
          <i class="fas fa-book-open"></i>
          <div>
            <strong>School Type</strong>
            <span>Primary & Secondary</span>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="quick-item">
          <i class="fas fa-cross"></i>
          <div>
            <strong>Ownership</strong>
            <span>Faith-Based (Private)</span>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="quick-item">
          <i class="fas fa-calendar-alt"></i>
          <div>
            <strong>Academic Year</strong>
            <span>2025 / 2026</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ===== WELCOME ===== -->
<section class="section-pad">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6 reveal">
        <div class="welcome-img-wrap">
          <img src="assets/images/banner3.jpeg" alt="CARE Academy Campus" class="img-fluid rounded-3">
          <div class="welcome-badge">
            <div class="wb-year">Est.</div>
            <div class="wb-num">2025</div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 reveal reveal-delay-2">
        <span class="section-label">Welcome to CARE Academy</span>
        <h2 class="section-title">Nurturing Young Minds,<br>Building Future Leaders</h2>
        <div class="divider"></div>
        <p class="text-muted mb-3">Carter's Academy for Remarkable Excellence was established with a bold vision: to provide quality, affordable, and inclusive education for children in Liberia. We believe every child deserves a chance to shine.</p>
        <p class="text-muted mb-4">Rooted in faith and driven by excellence, CARE Academy combines rigorous academics with strong moral values and holistic development — ensuring every student is equipped to make a positive impact.</p>
        <div class="row g-3 mb-4">
          <div class="col-6">
            <div class="welcome-feat">
              <i class="fas fa-check-circle text-gold me-2"></i>
              <span>Faith-Centered Values</span>
            </div>
          </div>
          <div class="col-6">
            <div class="welcome-feat">
              <i class="fas fa-check-circle text-gold me-2"></i>
              <span>Qualified Teachers</span>
            </div>
          </div>
          <div class="col-6">
            <div class="welcome-feat">
              <i class="fas fa-check-circle text-gold me-2"></i>
              <span>Safe Environment</span>
            </div>
          </div>
          <div class="col-6">
            <div class="welcome-feat">
              <i class="fas fa-check-circle text-gold me-2"></i>
              <span>Holistic Development</span>
            </div>
          </div>
        </div>
        <a href="about.php" class="btn-care btn-navy">Learn More About Us <i class="fas fa-arrow-right ms-1"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- ===== MESSAGE FROM THE PROPRIETORS ===== -->
<section class="section-pad" style="background:var(--light)">
  <div class="container">
    <div class="row align-items-center g-5">

      <!-- Photo -->
      <div class="col-lg-5 reveal">
        <div class="proprietor-img-wrap">
          <img src="assets/images/mr&mrs-carter.jpeg" alt="Mr. & Mrs. Carter">
          <div class="proprietor-quote-icon"><i class="fas fa-quote-left"></i></div>
        </div>
      </div>

      <!-- Message -->
      <div class="col-lg-7 reveal reveal-delay-2">
        <span class="section-label">A Word From Our Founders</span>
        <h2 class="section-title">Message From the Proprietors</h2>
        <div class="divider"></div>
        <blockquote class="proprietor-quote">
          "Education is the foundation for a brighter future. At CARE Academy, we are not just building a school — we are building a generation. Every child who walks through our doors carries the potential to change Liberia and the world. We started CARE Academy because we believe that when you invest in a child's education, you invest in a community's future. We are dedicated to nurturing not just the minds of our students, but their character, their faith, and their confidence to go out and make a difference. Together, we are committed to ensuring that no child is left behind when it comes to education."
        </blockquote>
        <div class="proprietor-info">
          <div class="proprietor-avatar-group">
            <div class="proprietor-avatar"><i class="fas fa-user"></i></div>
            <div class="proprietor-avatar"><i class="fas fa-user"></i></div>
          </div>
          <div>
            <div class="proprietor-name">Mr. & Mrs. Carter</div>
            <div class="proprietor-role">Proprietors & Co-Founders, CARE Academy</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ===== CORE VALUES ===== -->
<section class="section-pad bg-off-white">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <span class="section-label">What We Stand For</span>
      <h2 class="section-title">Our Core Values</h2>
      <div class="divider center"></div>
      <p class="section-subtitle mx-auto">Every lesson, every interaction, every achievement at CARE Academy is grounded in these six pillars.</p>
    </div>
    <div class="row g-4">
      <?php
      $values = [
        ['fas fa-trophy',       'Excellence',  'Striving for the highest standards in teaching, learning, and character at every level.'],
        ['fas fa-shield-alt',   'Integrity',   'Promoting honesty, accountability, and strong moral character in all we do.'],
        ['fas fa-hands',        'Respect',     'Valuing every individual, embracing diversity, and treating others with dignity.'],
        ['fas fa-user-check',   'Discipline',  'Encouraging self-control, responsibility, and consistently good behavior.'],
        ['fas fa-lightbulb',    'Innovation',  'Fostering creativity, critical thinking, and bold problem-solving skills.'],
        ['fas fa-heart',        'Service',     'Developing a spirit of compassion and meaningful community engagement.'],
      ];
      foreach ($values as $i => [$icon, $title, $desc]):
      ?>
      <div class="col-sm-6 col-lg-4 reveal reveal-delay-<?= ($i % 3) + 1 ?>">
        <div class="care-card p-4 h-100">
          <div class="card-icon"><i class="<?= $icon ?>"></i></div>
          <h5 class="fw-700 mb-2"><?= $title ?></h5>
          <p class="text-muted mb-0" style="font-size:.9rem"><?= $desc ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ===== STATS ===== -->
<div class="stats-strip reveal">
  <div class="container">
    <div class="row g-0">
      <div class="col-6 col-md-3">
        <div class="stat-item">
          <div class="stat-num"><span class="counter" data-target="350" data-suffix="+">0</span></div>
          <div class="stat-label">Students Enrolled</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="stat-item">
          <div class="stat-num"><span class="counter" data-target="20" data-suffix="+">0</span></div>
          <div class="stat-label">Qualified Teachers</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="stat-item">
          <div class="stat-num"><span class="counter" data-target="8" data-suffix="">0</span></div>
          <div class="stat-label">Grade Levels</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="stat-item">
          <div class="stat-num"><span class="counter" data-target="1" data-suffix="">0</span></div>
          <div class="stat-label">Year Established</div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ===== PROGRAMMES ===== -->
<section class="section-pad">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <span class="section-label">Academic Programmes</span>
      <h2 class="section-title">Quality Education at Every Stage</h2>
      <div class="divider center"></div>
    </div>
    <div class="row g-4">
      <div class="col-md-6 reveal reveal-delay-1">
        <div class="programme-card">
          <div class="prog-icon"><i class="fas fa-child"></i></div>
          <div class="prog-body">
            <div class="prog-level">Grades 1 – 3</div>
            <h4>Primary School</h4>
            <p>Our primary programme builds foundational literacy, numeracy, and life skills in a nurturing, faith-filled environment where every child is known and valued.</p>
            <a href="academics.php#primary" class="prog-link">Explore Programme <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-6 reveal reveal-delay-2">
        <div class="programme-card">
          <div class="prog-icon"><i class="fas fa-graduation-cap"></i></div>
          <div class="prog-body">
            <div class="prog-level">Grades 4 – 8</div>
            <h4>Secondary School</h4>
            <p>Our secondary programme prepares students for higher education and life, offering a rigorous curriculum aligned with Liberian national standards and global best practices.</p>
            <a href="academics.php#secondary" class="prog-link">Explore Programme <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== MOTTO BANNER ===== -->
<section class="motto-banner reveal">
  <div class="container text-center">
    <i class="fas fa-quote-left motto-quote-icon"></i>
    <h2 class="motto-text">"Light Beyond Darkness"</h2>
    <p class="motto-sub">— School Motto, Carter's Academy for Remarkable Excellence</p>
    <a href="admissions.php" class="btn-care btn-primary-care mt-4">
      <i class="fas fa-file-alt me-2"></i>Begin Your Journey With Us
    </a>
  </div>
</section>

<section class="section-pad">
  <div class="container">
    <div class="row justify-content-center text-center mb-5 reveal">
     
    <!-- Leadership -->
    <div class="text-center mb-4 reveal">
       <span class="section-label">Our Leadership</span>
        <h2 class="section-title">Administration</h2>
         <div class="divider center"></div>
    </div>
    <div class="row g-4 justify-content-center mb-5">
      <?php $leaders=[
        ['Principal','Carter\'s Academy','Founder & Principal','fas fa-user-tie'],
        ['Vice Principal','Deputy Academic','Vice Principal','fas fa-user-graduate'],
        ['Administrator','Admin Office','School Administrator','fas fa-briefcase'],
      ];
      foreach($leaders as $i=>[$name,$dept,$role,$icon]): ?>
      <div class="col-sm-6 col-lg-4 reveal reveal-delay-<?=$i+1?>">
        <div class="faculty-card faculty-card--lead">
          <div class="fc-avatar fc-avatar--lead"><i class="<?=$icon?>"></i></div>
          <div class="fc-body">
            <h5><?=$name?></h5>
            <div class="fc-role"><?=$role?></div>
            <div class="fc-dept"><?=$dept?></div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ===== NO CHILD LEFT BEHIND ===== -->
<section class="nclb-section reveal">
  <div class="container">
    <div class="nclb-inner">
      <div class="nclb-badge"><i class="fas fa-star me-1"></i> Special Programme</div>
      <div class="row align-items-center g-4">
        <div class="col-lg-7">
          <h2 class="nclb-title">"No Child Should Be Left Behind<br class="d-none d-md-block"> When It Comes to Education"</h2>
          <p class="nclb-sub">Mr. & Mrs. Carter believe education is the foundation for a brighter future. CARE Academy is committed to helping every child access quality education — right now, at a special rate.</p>
          <div class="nclb-highlights">
            <div class="nclb-hi"><i class="fas fa-tag"></i><div><strong>LRD $10,000</strong><span>Registration & Tuition — one-time payment only</span></div></div>
            <div class="nclb-hi"><i class="fas fa-calendar-times"></i><div><strong>Deadline: End of July 2026</strong><span>Regular rates apply after July 2026</span></div></div>
            <div class="nclb-hi"><i class="fas fa-graduation-cap"></i><div><strong>Grades 1 – 8</strong><span>Only 10 students accepted per class</span></div></div>
          </div>
          <div class="d-flex flex-wrap gap-3 mt-4">
            <a href="admissions.php#nclb" class="btn-care btn-primary-care"><i class="fas fa-file-alt"></i> Register Before July 2026</a>
            <a href="admissions.php#nclb" class="btn-care btn-outline-care">Learn More</a>
          </div>
        </div>
        <div class="col-lg-5 d-none d-lg-block">
          <div class="nclb-deco">
            <div class="nclb-deco-ring"></div>
            <div class="nclb-deco-inner">
              <i class="fas fa-child"></i>
              <span>Limited Spaces</span>
              <strong>First-Come,<br>First-Served</strong>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== CTA STRIP ===== -->
<section class="cta-strip reveal">
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-lg-8">
        <h3 class="cta-title">Ready to Join the CARE Academy Family?</h3>
        <p class="cta-sub">Give your child the gift of quality, faith-based education. Admissions for 2025/2026 are now open.</p>
      </div>
      <div class="col-lg-4 text-lg-end">
        <div class="d-flex flex-wrap gap-3 justify-content-lg-end">
          <a href="admissions.php" class="btn-care btn-primary-care">Apply Now</a>
          <a href="contact.php" class="btn-care btn-outline-care">Contact Us</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'php/footer.php'; ?>
</body>
</html>
