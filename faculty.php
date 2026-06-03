<?php
$page_title = "Our Faculty | CARE Academy — Meet Our Teachers";
$page_desc  = "Meet the dedicated teaching staff at Carter's Academy for Remarkable Excellence. Qualified, passionate educators committed to student success in Liberia.";
?>
<!DOCTYPE html>
<html lang="en">
<head><?php include 'php/head.php'; ?></head>
<body>

<?php include 'php/header.php'; ?>

<section class="page-hero">
  <div class="hero-glow"></div>
  <div class="container position-relative">
    <span class="section-label">The People Behind the Vision</span>
    <h1>Our Faculty & Staff</h1>
    <nav aria-label="breadcrumb" class="mt-2">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Faculty</li>
      </ol>
    </nav>
  </div>
</section>

<!-- INTRO -->
<section class="section-pad">
  <div class="container">
    <div class="row justify-content-center text-center mb-5 reveal">
      <div class="col-lg-7">
        <span class="section-label">Who We Are</span>
        <h2 class="section-title">Dedicated Educators, Passionate Mentors</h2>
        <div class="divider center"></div>
        <p class="section-subtitle mx-auto">Our faculty are more than teachers — they are mentors, role models, and guides who believe deeply in every child's potential to shine.</p>
      </div>
    </div>

    <!-- Leadership -->
    <div class="text-center mb-4 reveal">
      <span class="section-label">School Leadership</span>
      <h3 class="section-title" style="font-size:1.5rem">Administration</h3>
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

    <!-- Teaching Staff -->
    <div class="text-center mb-4 reveal">
      <span class="section-label">Classroom Excellence</span>
      <h3 class="section-title" style="font-size:1.5rem">Teaching Staff</h3>
    </div>
    <div class="row g-4">
      <?php $staff=[
        ['Primary Teacher','Grades 1–3','fas fa-chalkboard-teacher'],
        ['Primary Teacher','Grades 4–6','fas fa-chalkboard-teacher'],
        ['English Teacher','Secondary','fas fa-book'],
        ['Mathematics Teacher','Secondary','fas fa-calculator'],
        ['Science Teacher','Secondary','fas fa-flask'],
        ['Social Studies','Secondary','fas fa-globe-africa'],
        ['ICT Teacher','All Levels','fas fa-laptop'],
        ['Religious Studies','All Levels','fas fa-cross'],
        ['Physical Education','All Levels','fas fa-running'],
      ];
      foreach($staff as $i=>[$role,$level,$icon]): ?>
      <div class="col-sm-6 col-lg-4 reveal reveal-delay-<?=($i%3)+1?>">
        <div class="faculty-card">
          <div class="fc-avatar"><i class="<?=$icon?>"></i></div>
          <div class="fc-body">
            <h6><?=$role?></h6>
            <div class="fc-role"><?=$level?></div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <p class="text-center mt-4" style="font-size:.88rem;color:var(--muted)">* Full staff profiles and names will be added as the school grows. Contact us for specific enquiries.</p>
  </div>
</section>

<!-- WHY OUR TEACHERS -->
<section class="section-pad" style="background:var(--dark)">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <span class="section-label" style="color:var(--gold)">What Sets Us Apart</span>
      <h2 class="section-title light">Why Our Faculty Make the Difference</h2>
      <div class="divider center"></div>
    </div>
    <div class="row g-4">
      <?php $whys=[
        ['fas fa-certificate','Qualified & Trained','All teaching staff hold recognized qualifications and participate in continuous professional development.'],
        ['fas fa-heart','Passionate About Students','Our teachers genuinely care about every student\'s growth — academically, spiritually, and personally.'],
        ['fas fa-cross','Faith-Centered','Our staff model the Christian values that are central to CARE Academy\'s mission and culture.'],
        ['fas fa-users','Collaborative Team','We operate as a united team, sharing best practices and supporting each other to deliver excellent education.'],
      ];
      foreach($whys as $i=>[$icon,$t,$d]): ?>
      <div class="col-md-6 reveal reveal-delay-<?=$i+1?>">
        <div style="display:flex;gap:1.25rem;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1);border-radius:var(--radius-lg);padding:1.75rem;transition:var(--transition)" class="why-card">
          <div style="width:52px;height:52px;background:rgba(200,167,78,.15);border-radius:12px;display:flex;align-items:center;justify-content:center;font-size:1.3rem;color:var(--gold);flex-shrink:0"><i class="<?=$icon?>"></i></div>
          <div><h6 style="font-weight:700;color:var(--white);margin-bottom:.4rem"><?=$t?></h6><p style="font-size:.875rem;color:rgba(255,255,255,.65);margin:0;line-height:1.75"><?=$d?></p></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- JOIN CTA -->
<section class="section-pad" style="background:var(--light)">
  <div class="container text-center reveal">
    <span class="section-label">Career Opportunities</span>
    <h2 class="section-title" style="max-width:480px;margin:0 auto 1rem">Interested in Joining Our Faculty?</h2>
    <p style="color:var(--muted);max-width:500px;margin:0 auto 1.75rem">CARE Academy welcomes qualified, passionate educators who share our faith and commitment to student excellence. Reach out to us.</p>
    <a href="contact.php" class="btn-care btn-primary-care btn-lg">
      <i class="fas fa-envelope me-2"></i> Send Your Application
    </a>
  </div>
</section>

<style>
.faculty-card{background:var(--white);border:1.5px solid var(--border-light);border-radius:var(--radius-lg);padding:1.75rem;text-align:center;box-shadow:var(--shadow-sm);transition:var(--transition);height:100%}
.faculty-card:hover{box-shadow:var(--shadow-md);transform:translateY(-4px);border-color:var(--gold)}
.faculty-card--lead{border-top:3px solid var(--gold)}
.fc-avatar{width:72px;height:72px;background:var(--gold-pale);border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:1.75rem;color:var(--gold);margin:0 auto 1.25rem;transition:var(--transition)}
.faculty-card:hover .fc-avatar{background:var(--gold);color:var(--white)}
.fc-avatar--lead{width:88px;height:88px;font-size:2rem;background:var(--gold);color:var(--white)}
.faculty-card h5,.faculty-card h6{font-family:var(--font-head);font-weight:700;color:var(--dark);margin-bottom:.25rem}
.fc-role{font-size:.78rem;font-weight:700;letter-spacing:.08em;text-transform:uppercase;color:var(--gold);margin-bottom:.2rem}
.fc-dept{font-size:.82rem;color:var(--muted)}
.why-card:hover{background:rgba(255,255,255,.1)!important;transform:translateY(-3px)}
</style>

<?php include 'php/footer.php'; ?>
<?php include 'php/scripts.php'; ?>
</body>
</html>
