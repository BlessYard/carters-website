<?php
$page_title = "Gallery | CARE Academy — School Life in Pictures";
$page_desc  = "Browse the CARE Academy photo gallery — school life, events, classrooms, and campus moments at Carter's Academy for Remarkable Excellence.";
?>
<?php include 'php/header.php'; ?>

<section class="page-hero">
  <div class="hero-glow"></div>
  <div class="container position-relative">
    <span class="section-label">Life at CARE Academy</span>
    <h1>Photo Gallery</h1>
    <nav aria-label="breadcrumb" class="mt-2">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Gallery</li>
      </ol>
    </nav>
  </div>
</section>

<section class="section-pad">
  <div class="container">
    <!-- Filter Tabs -->
    <div class="gallery-filters text-center mb-5 reveal">
      <button class="filter-btn active" data-filter="all">All</button>
      <button class="filter-btn" data-filter="campus">Campus</button>
      <button class="filter-btn" data-filter="classroom">Classroom</button>
      <button class="filter-btn" data-filter="events">Events</button>
      <button class="filter-btn" data-filter="sports">Sports</button>
    </div>

    <!-- Gallery Grid -->
    <div class="row g-3">
      <?php
      $items=[
        ['campus','🏫','School Building','Our welcoming campus entrance'],
        ['classroom','📚','Primary Classroom','Students engaged in English class'],
        ['events','🎓','Graduation Day','Celebrating our first graduates'],
        ['campus','🌿','School Grounds','Our peaceful outdoor space'],
        ['classroom','🔬','Science Corner','Hands-on learning in action'],
        ['sports','⚽','Football Match','Inter-class football tournament'],
        ['events','⛪','Chapel Service','Weekly faith and values session'],
        ['classroom','💻','ICT Lab','Learning digital skills'],
        ['campus','📖','Library Area','Reading and research space'],
        ['sports','🏃','Sports Day','Annual athletics competition'],
        ['events','🎨','Art Exhibition','Showcasing student creativity'],
        ['classroom','✏️','Mathematics Lesson','Building numeracy foundations'],
      ];
      foreach($items as $i=>[$cat,$emoji,$title,$desc]): ?>
      <div class="col-6 col-md-4 col-lg-3 gallery-item reveal reveal-delay-<?=($i%4)+1?>" data-category="<?=$cat?>">
        <div class="gallery-card">
          <div class="gallery-thumb">
            <div class="gallery-emoji"><?=$emoji?></div>
            <img src="images/gallery/gallery-<?=$i+1?>.jpg"
                 alt="<?=$title?>"
                 onerror="this.style.display='none'"
                 loading="lazy">
            <div class="gallery-overlay">
              <div class="gallery-info">
                <h6><?=$title?></h6>
                <p><?=$desc?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Upload CTA -->
    <div class="text-center mt-5 reveal">
      <p style="color:var(--muted);margin-bottom:1rem">More photos will be added as the school grows. Check back soon!</p>
      <a href="contact.php" class="btn-care btn-primary-care">
        <i class="fas fa-images me-2"></i> Share Your Photos With Us
      </a>
    </div>
  </div>
</section>

<style>
.gallery-filters{display:flex;flex-wrap:wrap;gap:.5rem;justify-content:center}
.filter-btn{background:var(--white);border:1.5px solid var(--border);color:var(--dark);font-family:var(--font-body);font-size:.82rem;font-weight:700;letter-spacing:.06em;padding:.55rem 1.25rem;border-radius:100px;cursor:pointer;transition:var(--transition)}
.filter-btn:hover,.filter-btn.active{background:var(--gold);border-color:var(--gold);color:var(--dark-deep)}
.gallery-card{border-radius:var(--radius-lg);overflow:hidden;box-shadow:var(--shadow-sm);transition:var(--transition)}
.gallery-card:hover{box-shadow:var(--shadow-md);transform:translateY(-4px)}
.gallery-thumb{position:relative;aspect-ratio:1;background:var(--light);overflow:hidden}
.gallery-emoji{position:absolute;inset:0;display:flex;align-items:center;justify-content:center;font-size:3rem;z-index:0}
.gallery-thumb img{width:100%;height:100%;object-fit:cover;position:relative;z-index:1}
.gallery-overlay{position:absolute;inset:0;background:linear-gradient(to top,rgba(74,52,20,.9) 0%,transparent 50%);opacity:0;transition:var(--transition);z-index:2;display:flex;align-items:flex-end;padding:1rem}
.gallery-card:hover .gallery-overlay{opacity:1}
.gallery-info h6{font-family:var(--font-head);font-size:.9rem;font-weight:700;color:var(--white);margin-bottom:.15rem}
.gallery-info p{font-size:.75rem;color:rgba(255,255,255,.75);margin:0}
</style>

<?php include 'php/footer.php'; ?>
<?php include 'php/scripts.php'; ?>
</body>
</html>
