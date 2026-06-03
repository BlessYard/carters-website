<?php
$page_title = "Academics | CARE Academy — Primary & Secondary School Liberia";
$page_desc  = "Explore CARE Academy's academic programmes — Primary School (Grades 1-6) and Secondary School (Grades 7-12). Rigorous curriculum aligned with Liberian national standards.";
?>

<?php include 'php/header.php'; ?>

<section class="page-hero">
  <div class="hero-glow"></div>
  <div class="container position-relative">
    <span class="section-label">Learning at CARE</span>
    <h1>Academic Programmes</h1>
    <nav aria-label="breadcrumb" class="mt-2">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Academics</li>
      </ol>
    </nav>
  </div>
</section>

<!-- OVERVIEW -->
<section class="section-pad">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <span class="section-label">Our Approach</span>
      <h2 class="section-title">Excellence in Every Classroom</h2>
      <div class="divider center"></div>
      <p class="section-subtitle mx-auto">CARE Academy delivers a structured, faith-centered curriculum aligned with the Liberian Ministry of Education standards — equipping students for higher education and life.</p>
    </div>
    <div class="row g-4 mb-5">
      <?php $pillars=[['fas fa-book','Rigorous Curriculum','Ministry-aligned syllabi with modern pedagogy.'],['fas fa-cross','Faith Integration','Biblical values woven into every subject and school activity.'],['fas fa-users','Small Class Sizes','Personalized attention for every learner at every level.'],['fas fa-chart-line','Continuous Assessment','Regular tests, projects, and performance tracking.']];
      foreach($pillars as $i=>[$icon,$t,$d]): ?>
      <div class="col-sm-6 col-lg-3 reveal reveal-delay-<?=$i+1?>">
        <div class="care-card p-4 text-center h-100">
          <div class="card-icon mx-auto"><i class="<?=$icon?>"></i></div>
          <h6 style="font-weight:700;margin-bottom:.4rem"><?=$t?></h6>
          <p style="font-size:.85rem;color:var(--muted);margin:0"><?=$d?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- PRIMARY -->
<section class="section-pad" style="background:var(--light)" id="primary">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-5 reveal">
        <div class="level-badge-wrap">
          <div class="level-img">
            <img src="images/primary.jpg" alt="Primary School" class="img-fluid rounded-3">
          </div>
          <div class="level-badge">Grades 1–6</div>
        </div>
      </div>
      <div class="col-lg-7 reveal reveal-delay-2">
        <span class="section-label">Foundation Stage</span>
        <h2 class="section-title">Primary School</h2>
        <div class="divider"></div>
        <p style="color:var(--muted);margin-bottom:1.25rem">Our primary programme builds strong foundations in literacy, numeracy, and moral character. We create a safe, nurturing environment where every child feels valued and grows confidently in knowledge and faith.</p>
        <div class="row g-3">
          <?php $subjects=['English Language','Mathematics','Science','Social Studies','Religious & Moral Education','Physical Education','Creative Arts','ICT Basics'];
          foreach($subjects as $s): ?>
          <div class="col-6">
            <div class="subject-item"><i class="fas fa-check-circle"></i><?=$s?></div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECONDARY -->
<section class="section-pad" id="secondary">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-7 reveal">
        <span class="section-label">Advanced Stage</span>
        <h2 class="section-title">Secondary School</h2>
        <div class="divider"></div>
        <p style="color:var(--muted);margin-bottom:1.25rem">Our secondary programme provides a comprehensive, rigorous education that prepares students for national examinations, university entrance, and professional life. Students choose from Science, General Arts, or Business tracks.</p>
        <div class="row g-3">
          <?php $subs2=['English Language','Mathematics','Biology','Chemistry','Physics','Economics','History','Geography','Business Studies','ICT','Literature','Religious Studies'];
          foreach($subs2 as $s): ?>
          <div class="col-6 col-md-4">
            <div class="subject-item"><i class="fas fa-check-circle"></i><?=$s?></div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="col-lg-5 reveal reveal-delay-2">
        <div class="level-badge-wrap">
          <div class="level-img">
            <img src="images/secondary.jpg" alt="Secondary School" class="img-fluid rounded-3">
          </div>
          <div class="level-badge" style="background:var(--dark);color:var(--white)">Grades 7–12</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CURRICULUM -->
<section class="section-pad" style="background:var(--dark)" id="curriculum">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <span class="section-label" style="color:var(--gold)">How We Teach</span>
      <h2 class="section-title light">Our Curriculum Approach</h2>
      <div class="divider center"></div>
    </div>
    <div class="row g-4">
      <?php $approaches=[
        ['fas fa-book-reader','National Standards','Aligned with the Liberian Ministry of Education curriculum for all grade levels.'],
        ['fas fa-pray','Faith Integration','Christian values and biblical principles woven naturally into all subjects.'],
        ['fas fa-flask','Hands-On Learning','Practical experiments, projects, and activities that make concepts come alive.'],
        ['fas fa-laptop','Technology Access','Introduction to computing and digital skills from an early age.'],
        ['fas fa-trophy','Co-Curricular','Sports, arts, clubs, and community service to develop the whole child.'],
        ['fas fa-headset','Pastoral Care','Dedicated support systems ensuring every student thrives emotionally and spiritually.'],
      ];
      foreach($approaches as $i=>[$icon,$t,$d]): ?>
      <div class="col-md-6 col-lg-4 reveal reveal-delay-<?=($i%3)+1?>">
        <div style="background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1);border-radius:var(--radius-lg);padding:1.75rem;height:100%;transition:var(--transition)" class="curr-card">
          <div style="width:48px;height:48px;background:rgba(200,167,78,.15);border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:1.3rem;color:var(--gold);margin-bottom:1rem"><i class="<?=$icon?>"></i></div>
          <h6 style="font-weight:700;color:var(--white);margin-bottom:.5rem"><?=$t?></h6>
          <p style="font-size:.875rem;color:rgba(255,255,255,.65);margin:0;line-height:1.75"><?=$d?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
.level-badge-wrap{position:relative;padding-bottom:1.5rem}
.level-img img{width:100%;aspect-ratio:4/3;object-fit:cover;background:var(--light);box-shadow:var(--shadow-lg)}
.level-badge{position:absolute;bottom:0;right:1.5rem;background:var(--gold);color:var(--dark-deep);font-family:var(--font-head);font-size:1rem;font-weight:700;padding:.6rem 1.4rem;border-radius:100px;box-shadow:var(--shadow-md)}
.subject-item{display:flex;align-items:center;gap:.5rem;font-size:.88rem;font-weight:600;color:var(--dark);padding:.55rem .75rem;background:var(--white);border:1px solid var(--border-light);border-radius:var(--radius)}
.subject-item i{color:var(--gold);font-size:.85rem;flex-shrink:0}
.curr-card:hover{background:rgba(255,255,255,.1)!important;transform:translateY(-3px)}
</style>

<?php include 'php/footer.php'; ?>
<?php include 'php/scripts.php'; ?>
</body>
</html>
