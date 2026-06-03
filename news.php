<?php
$page_title = "News & Events | CARE Academy — Latest Updates";
$page_desc  = "Stay updated with the latest news, events, and announcements from Carter's Academy for Remarkable Excellence in Liberia.";
?>

<?php include 'php/header.php'; ?>

<section class="page-hero">
  <div class="hero-glow"></div>
  <div class="container position-relative">
    <span class="section-label">Stay Informed</span>
    <h1>News & Events</h1>
    <nav aria-label="breadcrumb" class="mt-2">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">News & Events</li>
      </ol>
    </nav>
  </div>
</section>

<section class="section-pad">
  <div class="container">
    <div class="row g-5">
      <!-- Main Content -->
      <div class="col-lg-8">
        <span class="section-label">Latest Stories</span>
        <h2 class="section-title reveal" style="font-size:1.75rem">School News</h2>
        <div class="divider reveal"></div>

        <?php
        $articles=[
          ['📣','Admissions Open for 2025/2026 Academic Year','Admissions','June 1, 2025','Carter\'s Academy for Remarkable Excellence is pleased to announce that enrollment is now officially open for the 2025/2026 academic year. We welcome applications from families seeking quality, faith-based education for their children at both Primary (Grades 1–6) and Secondary (Grades 7–12) levels. The school offers affordable fees, qualified teachers, and a safe, nurturing environment. Spaces are limited — apply early to secure your child\'s place. Visit our Admissions page or call our office for more details.'],
          ['🎓','Inaugural Graduation Ceremony Planned','Events','May 20, 2025','CARE Academy is preparing for its very first graduation ceremony, a milestone event that marks the beginning of a proud tradition of academic excellence. Parents, staff, and community leaders are invited to join us in celebrating our pioneering class of students who have shown remarkable dedication to their studies and faith. Details on the date, time, and venue will be announced soon. We look forward to sharing this historic moment with the entire CARE Academy family.'],
          ['⛪','Faith & Learning Week Announced','School Life','May 10, 2025','Our inaugural Faith & Learning Week will feature daily chapel services, community outreach projects, and values-based workshops for all grade levels. The week is designed to deepen students\' understanding of our school motto — "Light Beyond Darkness" — and how they can live out our core values of excellence, integrity, respect, discipline, innovation, and service in their daily lives.'],
          ['📚','New Library Resources Acquired','Academic','April 25, 2025','CARE Academy has acquired a new set of textbooks, reading books, and reference materials for our primary and secondary students. The new resources cover all core subjects and are aligned with the Liberian Ministry of Education curriculum. We are committed to ensuring every student has access to the materials they need to excel academically.'],
          ['🏆','First Inter-Class Sports Day','Sports','April 10, 2025','CARE Academy successfully held its first inter-class sports day, featuring football, track and field events, and team relay races. The event was a wonderful celebration of school spirit, teamwork, and healthy competition. Congratulations to all participants and to the winning class teams. We plan to make this an annual tradition.'],
        ];
        foreach($articles as $i=>[$emoji,$title,$cat,$date,$body]): ?>
        <article class="news-article reveal">
          <div class="na-emoji"><?=$emoji?></div>
          <div class="na-body">
            <div class="na-meta">
              <span class="na-cat"><?=$cat?></span>
              <span class="na-date"><i class="far fa-calendar-alt me-1"></i><?=$date?></span>
            </div>
            <h4 class="na-title"><?=$title?></h4>
            <p class="na-excerpt"><?=substr($body,0,200)?>...</p>
            <button class="na-toggle" onclick="this.previousElementSibling.textContent=(this.dataset.open?'<?=htmlspecialchars(substr($body,0,200),ENT_QUOTES)?>...':<?=json_encode($body)?>);this.dataset.open=this.dataset.open?'':'1';this.innerHTML=this.dataset.open?'Show Less <i class=\'fas fa-chevron-up\'></i>':'Read Full Story <i class=\'fas fa-chevron-down\'></i>'">Read Full Story <i class="fas fa-chevron-down"></i></button>
          </div>
        </article>
        <?php endforeach; ?>
      </div>

      <!-- Sidebar -->
      <div class="col-lg-4">
        <!-- Upcoming Events -->
        <div class="sidebar-widget reveal">
          <div class="sw-head">Upcoming Events</div>
          <?php $events=[
            ['Jun 15','Admissions Deadline (Early)','Admissions Office'],
            ['Jul 4','Orientation Day','School Hall'],
            ['Aug 1','First Day of School 2025/2026','All Classes'],
            ['Sep 12','Parent-Teacher Conference','School Hall'],
            ['Oct 3','Faith & Learning Week','Whole School'],
            ['Dec 10','End of Term Exams','All Classes'],
          ];
          foreach($events as [$date,$event,$venue]): ?>
          <div class="event-item">
            <div class="event-date"><?=$date?></div>
            <div>
              <strong><?=$event?></strong>
              <span><i class="fas fa-map-pin me-1" style="color:var(--gold)"></i><?=$venue?></span>
            </div>
          </div>
          <?php endforeach; ?>
        </div>

        <!-- Quick Links -->
        <div class="sidebar-widget reveal mt-4">
          <div class="sw-head">Quick Links</div>
          <ul style="padding:0">
            <li style="border-bottom:1px solid var(--border-light)"><a href="admissions.php" style="display:flex;align-items:center;gap:.6rem;padding:.75rem 0;color:var(--dark);font-size:.9rem;transition:var(--transition)"><i class="fas fa-angle-right" style="color:var(--gold)"></i>Apply for Admission</a></li>
            <li style="border-bottom:1px solid var(--border-light)"><a href="academics.php" style="display:flex;align-items:center;gap:.6rem;padding:.75rem 0;color:var(--dark);font-size:.9rem;transition:var(--transition)"><i class="fas fa-angle-right" style="color:var(--gold)"></i>Academic Programmes</a></li>
            <li style="border-bottom:1px solid var(--border-light)"><a href="gallery.php" style="display:flex;align-items:center;gap:.6rem;padding:.75rem 0;color:var(--dark);font-size:.9rem;transition:var(--transition)"><i class="fas fa-angle-right" style="color:var(--gold)"></i>Photo Gallery</a></li>
            <li><a href="contact.php" style="display:flex;align-items:center;gap:.6rem;padding:.75rem 0;color:var(--dark);font-size:.9rem;transition:var(--transition)"><i class="fas fa-angle-right" style="color:var(--gold)"></i>Contact the School</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
.news-article{display:flex;gap:1.25rem;background:var(--white);border:1px solid var(--border-light);border-radius:var(--radius-lg);padding:1.75rem;margin-bottom:1.5rem;box-shadow:var(--shadow-sm);transition:var(--transition)}
.news-article:hover{box-shadow:var(--shadow-md)}
.na-emoji{font-size:2.5rem;flex-shrink:0;align-self:flex-start}
.na-meta{display:flex;align-items:center;gap:.75rem;margin-bottom:.6rem}
.na-cat{font-size:.7rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;background:var(--gold-pale);color:var(--dark);padding:.25rem .65rem;border-radius:100px}
.na-date{font-size:.78rem;color:var(--muted)}
.na-title{font-family:var(--font-head);font-size:1.15rem;font-weight:700;color:var(--dark);margin-bottom:.6rem}
.na-excerpt{font-size:.9rem;color:var(--muted);line-height:1.75;margin-bottom:.75rem}
.na-toggle{background:none;border:none;color:var(--gold);font-family:var(--font-body);font-size:.85rem;font-weight:700;cursor:pointer;padding:0;display:inline-flex;align-items:center;gap:.4rem;transition:var(--transition)}
.na-toggle:hover{color:var(--dark)}
.sidebar-widget{background:var(--white);border:1.5px solid var(--border-light);border-radius:var(--radius-lg);overflow:hidden;box-shadow:var(--shadow-sm)}
.sw-head{background:var(--dark);color:var(--white);font-family:var(--font-body);font-size:.78rem;font-weight:700;letter-spacing:.12em;text-transform:uppercase;padding:.85rem 1.25rem}
.event-item{display:flex;align-items:center;gap:1rem;padding:.85rem 1.25rem;border-bottom:1px solid var(--border-light)}
.event-item:last-child{border-bottom:none}
.event-date{background:var(--gold-pale);color:var(--dark);font-size:.7rem;font-weight:700;text-align:center;padding:.3rem .5rem;border-radius:var(--radius);flex-shrink:0;min-width:44px;border-left:3px solid var(--gold)}
.event-item strong{display:block;font-size:.88rem;font-weight:700;color:var(--dark);margin-bottom:.1rem}
.event-item span{font-size:.78rem;color:var(--muted)}
@media(max-width:575px){.news-article{flex-direction:column}}
</style>

<?php include 'php/footer.php'; ?>
</body>
</html>
