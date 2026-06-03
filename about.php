<?php
$page_title = "About Us | CARE Academy — Carter's Academy for Remarkable Excellence";
$page_desc  = "Learn about CARE Academy's history, mission, vision, and core values. A faith-based school in Liberia committed to Light Beyond Darkness.";
?>
<!DOCTYPE html>
<html lang="en">
<head><?php include 'php/head.php'; ?></head>
<body>

<?php include 'php/header.php'; ?>

<!-- PAGE HERO -->
<section class="page-hero">
  <div class="hero-glow"></div>
  <div class="container position-relative">
    <span class="section-label">Know Us Better</span>
    <h1>About CARE Academy</h1>
    <nav aria-label="breadcrumb" class="mt-2">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">About Us</li>
      </ol>
    </nav>
  </div>
</section>

<!-- WHO WE ARE -->
<section class="section-pad">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6 reveal">
        <span class="section-label">Our Story</span>
        <h2 class="section-title">Carter's Academy for Remarkable Excellence</h2>
        <div class="divider"></div>
        <p class="mb-3" style="color:var(--muted)">Carter's Academy for Remarkable Excellence (CARE Academy) was established with the vision of providing quality, affordable, and inclusive education for children in Liberia. The school was founded to nurture young minds, develop strong character, and prepare learners to become responsible citizens and future leaders.</p>
        <p style="color:var(--muted)">Since its establishment, CARE Academy has remained committed to academic excellence, moral values, and the holistic development of every child. We are a faith-based institution that believes in the full potential of every learner, guided by our motto — <strong style="color:var(--dark);font-style:italic">"Light Beyond Darkness."</strong></p>
        <div class="row g-3 mt-3">
          <div class="col-6">
            <div class="about-fact">
              <i class="fas fa-calendar-check"></i>
              <div><strong>Founded</strong><span>2025 / 2026</span></div>
            </div>
          </div>
          <div class="col-6">
            <div class="about-fact">
              <i class="fas fa-cross"></i>
              <div><strong>Type</strong><span>Faith-Based (Private)</span></div>
            </div>
          </div>
          <div class="col-6">
            <div class="about-fact">
              <i class="fas fa-school"></i>
              <div><strong>Levels</strong><span>Primary & Secondary</span></div>
            </div>
          </div>
          <div class="col-6">
            <div class="about-fact">
              <i class="fas fa-map-marker-alt"></i>
              <div><strong>Location</strong><span>Monrovia, Liberia</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 reveal reveal-delay-2">
        <div class="about-img-wrap">
          <img src="images/about-school.jpg" alt="CARE Academy" class="img-fluid rounded-3">
          <div class="about-motto-badge">
            <i class="fas fa-quote-left"></i>
            <span>"Light Beyond<br>Darkness"</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MISSION / VISION -->
<section class="section-pad" style="background:var(--light)">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <span class="section-label">Our Direction</span>
      <h2 class="section-title">Mission & Vision</h2>
      <div class="divider center"></div>
    </div>
    <div class="row g-4">
      <div class="col-md-6 reveal reveal-delay-1">
        <div class="mv-card">
          <div class="mv-icon"><i class="fas fa-bullseye"></i></div>
          <h4>Mission Statement</h4>
          <p>To provide a safe, caring, and stimulating learning environment where every child is empowered with knowledge, skills, values, and confidence to achieve academic excellence and become productive members of society.</p>
        </div>
      </div>
      <div class="col-md-6 reveal reveal-delay-2">
        <div class="mv-card mv-card--gold">
          <div class="mv-icon"><i class="fas fa-eye"></i></div>
          <h4>Vision Statement</h4>
          <p>To be a leading educational institution that inspires lifelong learning, promotes innovation, and develops future leaders who positively impact their communities and the world.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CORE VALUES -->
<section class="section-pad">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <span class="section-label">What We Stand For</span>
      <h2 class="section-title">Our Core Values</h2>
      <div class="divider center"></div>
    </div>
    <div class="row g-4">
      <?php
      $values = [
        ['fas fa-trophy',    'Excellence',  'Striving for the highest standards in teaching and learning at every level of education.'],
        ['fas fa-shield-alt','Integrity',   'Promoting honesty, accountability, and strong moral character in all students and staff.'],
        ['fas fa-hands',     'Respect',     'Valuing every individual and embracing diversity within our school community.'],
        ['fas fa-user-check','Discipline',  'Encouraging self-control, responsibility, and consistently good behavior.'],
        ['fas fa-lightbulb', 'Innovation',  'Fostering creativity, critical thinking, and bold problem-solving skills.'],
        ['fas fa-heart',     'Service',     'Developing a spirit of compassion and meaningful community engagement.'],
      ];
      foreach ($values as $i => [$icon, $title, $desc]):
      ?>
      <div class="col-sm-6 col-lg-4 reveal reveal-delay-<?= ($i % 3)+1 ?>">
        <div class="care-card p-4 h-100">
          <div class="card-icon"><i class="<?= $icon ?>"></i></div>
          <h5 style="font-weight:700;margin-bottom:.5rem"><?= $title ?></h5>
          <p style="font-size:.9rem;color:var(--muted);margin:0"><?= $desc ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ACCREDITATION -->
<section class="section-pad" style="background:var(--dark)">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-7 reveal">
        <span class="section-label" style="color:var(--gold)">Recognition</span>
        <h2 class="section-title light">Accreditation & Affiliation</h2>
        <div class="divider"></div>
        <p style="color:rgba(255,255,255,.75);font-size:1rem;line-height:1.85">CARE Academy operates in accordance with the educational standards and regulations established by the Ministry of Education, Republic of Liberia. The school is committed to maintaining quality educational practices and welcomes partnerships with local and international educational organizations that support academic excellence and child development.</p>
      </div>
      <div class="col-lg-5 reveal reveal-delay-2">
        <div class="accred-box">
          <div class="accred-item"><i class="fas fa-check-circle"></i><span>Ministry of Education Compliant</span></div>
          <div class="accred-item"><i class="fas fa-check-circle"></i><span>National Curriculum Aligned</span></div>
          <div class="accred-item"><i class="fas fa-check-circle"></i><span>Open to International Partnerships</span></div>
          <div class="accred-item"><i class="fas fa-check-circle"></i><span>Faith-Based Governance</span></div>
          <div class="accred-item"><i class="fas fa-check-circle"></i><span>Child-Safe Environment Certified</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
.about-fact{display:flex;align-items:center;gap:.75rem;padding:.85rem 1rem;background:var(--light);border-radius:var(--radius);border:1px solid var(--border-light)}
.about-fact i{font-size:1.2rem;color:var(--gold);width:36px;text-align:center;flex-shrink:0}
.about-fact strong{display:block;font-size:.75rem;font-weight:700;letter-spacing:.06em;text-transform:uppercase;color:var(--muted)}
.about-fact span{display:block;font-size:.88rem;font-weight:600;color:var(--dark)}
.about-img-wrap{position:relative}
.about-img-wrap img{width:100%;aspect-ratio:4/3;object-fit:cover;background:var(--light)}
.about-motto-badge{position:absolute;bottom:-16px;left:24px;background:var(--gold);color:var(--dark-deep);padding:.85rem 1.25rem;border-radius:var(--radius);font-family:var(--font-head);font-size:.95rem;font-weight:700;font-style:italic;box-shadow:var(--shadow-md);display:flex;align-items:center;gap:.65rem;line-height:1.3}
.about-motto-badge i{font-size:.8rem;opacity:.6}
.mv-card{background:var(--white);border:1.5px solid var(--border-light);border-radius:var(--radius-lg);padding:2.5rem;height:100%;box-shadow:var(--shadow-sm);transition:var(--transition)}
.mv-card:hover{box-shadow:var(--shadow-md)}
.mv-card--gold{background:var(--dark);border-color:var(--dark)}
.mv-card--gold h4,.mv-card--gold p{color:rgba(255,255,255,.85)}
.mv-card--gold .mv-icon{background:rgba(200,167,78,.15);color:var(--gold)}
.mv-icon{width:56px;height:56px;background:var(--gold-pale);border-radius:12px;display:flex;align-items:center;justify-content:center;font-size:1.5rem;color:var(--gold);margin-bottom:1.25rem}
.mv-card h4{font-family:var(--font-head);font-size:1.3rem;font-weight:700;margin-bottom:.85rem;color:var(--dark)}
.mv-card p{color:var(--muted);font-size:.95rem;line-height:1.8;margin:0}
.accred-box{background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.12);border-radius:var(--radius-lg);padding:2rem}
.accred-item{display:flex;align-items:center;gap:.85rem;padding:.75rem 0;border-bottom:1px solid rgba(255,255,255,.08);font-size:.95rem;color:rgba(255,255,255,.8)}
.accred-item:last-child{border-bottom:none}
.accred-item i{color:var(--gold);font-size:1rem;flex-shrink:0}
</style>

<?php include 'php/footer.php'; ?>
<?php include 'php/scripts.php'; ?>
</body>
</html>
