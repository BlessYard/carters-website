<?php
$page_title = "Calendar of Events 2026/2027 | CARE Academy";
$page_desc  = "CARE Academy's official 2026/2027 academic calendar — term dates, events, exams, skills training, and school activities for the year ahead.";
?>
<?php include 'php/header.php'; ?>

<!-- PAGE HERO -->
<section class="page-hero">
  <div class="hero-glow"></div>
  <div class="container position-relative">
    <span class="section-label">Plan Ahead</span>
    <h1>Calendar of Events 2026/2027</h1>
    <nav aria-label="breadcrumb" class="mt-2">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Calendar</li>
      </ol>
    </nav>
  </div>
</section>

<!-- INTRO STRIP -->
<div class="cal-intro-strip">
  <div class="container">
    <div class="row g-3 align-items-center">
      <div class="col-md-7">
        <h5 class="cal-intro-title"><i class="fas fa-calendar-alt me-2 text-gold"></i>Academic Year 2026 / 2027</h5>
        <p class="cal-intro-sub">All dates are subject to updates. Parents and students are advised to check this page regularly or contact the school office for the latest information.</p>
      </div>
      <div class="col-md-5">
        <div class="d-flex flex-wrap gap-2 justify-content-md-end">
          <div class="cal-legend-item"><span style="background:var(--gold)"></span>Academic</div>
          <div class="cal-legend-item"><span style="background:var(--dark)"></span>Exams</div>
          <div class="cal-legend-item"><span style="background:#4a7c59"></span>Events</div>
          <div class="cal-legend-item"><span style="background:#7b4a7c"></span>Skills</div>
          <div class="cal-legend-item"><span style="background:#3a6ea5"></span>Holiday</div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- TERM OVERVIEW -->
<section class="section-pad" style="background:var(--light)">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <span class="section-label">Academic Structure</span>
      <h2 class="section-title">Term Overview</h2>
      <div class="divider center"></div>
    </div>
    <div class="row g-4">
      <?php $terms=[
        ['1st','Term One','September 2026','December 2026','Opening of school, orientation, parent-teacher meetings, mid-term tests, and end-of-term exams.','fas fa-seedling'],
        ['2nd','Term Two','January 2027','April 2027','Continuation of curriculum, skills training programmes, inter-class competitions, and mid-term assessments.','fas fa-sun'],
        ['3rd','Term Three','May 2027','August 2027','Final examinations, skills showcase, graduation ceremony, and academic awards day.','fas fa-trophy'],
      ];
      foreach($terms as $i=>[$num,$name,$start,$end,$desc,$icon]): ?>
      <div class="col-md-4 reveal reveal-delay-<?=$i+1?>">
        <div class="term-card">
          <div class="term-num"><?=$num?></div>
          <div class="term-icon"><i class="<?=$icon?>"></i></div>
          <h5><?=$name?></h5>
          <div class="term-dates"><i class="fas fa-calendar me-1"></i><?=$start?> — <?=$end?></div>
          <p><?=$desc?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- FULL CALENDAR -->
<section class="section-pad">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <span class="section-label">Full Schedule</span>
      <h2 class="section-title">Events & Activities</h2>
      <div class="divider center"></div>
    </div>

    <?php
    $months = [
      /* TERM 1 */
      'September 2026' => [
        ['academic', 'fas fa-door-open',       'Sep 1',   'School Opens – Academic Year Begins',        'All students and teachers report for the first day of the 2026/2027 academic year.'],
        ['academic', 'fas fa-users',            'Sep 2–3', 'New Student Orientation',                    'Orientation programme for new students joining Grades 1, 7, and transfer students.'],
        ['events',   'fas fa-praying-hands',    'Sep 5',   'Opening Chapel Service',                     'School-wide faith and dedication service to commence the academic year with prayer.'],
        ['academic', 'fas fa-user-tie',         'Sep 12',  'Parent-Teacher Association Meeting',         'First PTA meeting of the year. All parents and guardians are strongly encouraged to attend.'],
        ['skills',   'fas fa-hands',            'Sep 15',  'Skills Training Programmes Begin',           'Soap making, hanger making, tie & dye, pastry production, and computer training classes commence.'],
      ],
      'October 2026' => [
        ['academic', 'fas fa-clipboard-check',  'Oct 3–7', 'Mid-Term Tests – Term One',                  'Formative assessments for all grade levels across all core subjects.'],
        ['events',   'fas fa-cross',            'Oct 10',  'Faith & Learning Week',                      'A full week of chapel services, devotions, community outreach projects, and values workshops.'],
        ['events',   'fas fa-running',          'Oct 24',  'Inter-Class Sports Day',                     'Annual sports competition featuring football, track & field, relay races, and team games.'],
      ],
      'November 2026' => [
        ['academic', 'fas fa-chalkboard-teacher','Nov 5',  'Open Day / School Visit Day',                'Prospective families are invited to tour the campus, meet teachers, and see CARE Academy in action.'],
        ['skills',   'fas fa-birthday-cake',    'Nov 14',  'Pastry Production Showcase',                 'Students display and demonstrate their pastry skills to parents and the school community.'],
        ['academic', 'fas fa-book',             'Nov 20',  'Reading & Literacy Week',                    'School-wide reading challenge, story competitions, and literacy activities for all classes.'],
      ],
      'December 2026' => [
        ['exams',    'fas fa-pencil-alt',       'Dec 1–12','End-of-Term Examinations – Term One',        'Official end-of-term exams for all grade levels. Students must be present for all scheduled papers.'],
        ['events',   'fas fa-star',             'Dec 15',  'Academic Awards & Prize-Giving Day',         'Certificates and awards presented to outstanding students in academics, character, and skills.'],
        ['events',   'fas fa-church',           'Dec 17',  'End-of-Term Chapel & Thanksgiving Service',  'A school-wide service of thanksgiving to close Term One with faith and gratitude.'],
        ['holiday',  'fas fa-snowflake',        'Dec 18',  'Christmas Holiday Begins',                   'School closes for the Christmas and New Year holiday. Term Two resumes January 2027.'],
      ],
      /* TERM 2 */
      'January 2027' => [
        ['academic', 'fas fa-door-open',        'Jan 5',   'School Resumes – Term Two Begins',           'All students return for the second term. New timetables and subject assignments distributed.'],
        ['events',   'fas fa-pray',             'Jan 6',   'New Year Chapel Service',                    'School-wide chapel service to dedicate Term Two and the new calendar year to God.'],
        ['skills',   'fas fa-laptop',           'Jan 10',  'Computer Training Lab Session Begins',       'Weekly ICT skills classes begin for all enrolled students in the computer training programme.'],
        ['academic', 'fas fa-user-tie',         'Jan 23',  'Parent-Teacher Conference',                  'Mid-year progress reports shared with parents. One-on-one meetings with class teachers available.'],
      ],
      'February 2027' => [
        ['events',   'fas fa-heart',            'Feb 14',  'Community Service Day',                      'Students and staff engage in a community outreach and service project in the local area.'],
        ['skills',   'fas fa-tshirt',           'Feb 20',  'Tie & Dye Exhibition',                       'Students display their tie and dye creations. Products available for purchase by parents and visitors.'],
        ['academic', 'fas fa-clipboard-check',  'Feb 25–28','Mid-Term Tests – Term Two',                 'Scheduled formative assessments for all grade levels.'],
      ],
      'March 2027' => [
        ['events',   'fas fa-globe-africa',     'Mar 6',   'Liberia Independence Awareness Day',         'Special school programme honouring Liberian heritage, culture, and national identity.'],
        ['skills',   'fas fa-soap',             'Mar 15',  'Soap Making Product Fair',                   'Soap making students present and sell their products. A celebration of entrepreneurship and skill.'],
        ['events',   'fas fa-palette',          'Mar 27',  'Art & Creativity Exhibition',                'A showcase of student artwork, creative writing, drama, and music performances.'],
      ],
      'April 2027' => [
        ['exams',    'fas fa-pencil-alt',       'Apr 1–12','End-of-Term Examinations – Term Two',        'Formal examinations for all subjects and grade levels. Exam timetable issued two weeks in advance.'],
        ['events',   'fas fa-medal',            'Apr 16',  'Term Two Awards Assembly',                   'Recognition of student achievements in academics, sports, leadership, and character.'],
        ['holiday',  'fas fa-umbrella-beach',   'Apr 17',  'Easter & Mid-Year Holiday Begins',           'School closes for the Easter and mid-year break. Term Three resumes in May 2027.'],
      ],
      /* TERM 3 */
      'May 2027' => [
        ['academic', 'fas fa-door-open',        'May 5',   'School Resumes – Term Three Begins',         'Final term of the 2026/2027 academic year begins. Exam preparation intensifies.'],
        ['events',   'fas fa-praying-hands',    'May 6',   'Term Three Opening Chapel Service',          'Whole-school dedication service to commence the final term with focus and faith.'],
        ['skills',   'fas fa-archway',          'May 14',  'Hanger Making Final Showcase',               'Final exhibition of student hanger-making projects. Guest judges and community invited.'],
        ['academic', 'fas fa-user-tie',         'May 22',  'Final Parent-Teacher Meeting',               'Last PTA meeting of the year. Parents receive progress updates and exam preparation guidance.'],
      ],
      'June 2027' => [
        ['academic', 'fas fa-book-reader',      'Jun 1',   'Exam Revision Week Begins',                  'Structured revision sessions and guided study for all grade levels in preparation for final exams.'],
        ['events',   'fas fa-users',            'Jun 12',  'Graduation Rehearsal',                       'Practice session for graduating students (Grade 8 and Grade 12) ahead of the graduation ceremony.'],
        ['exams',    'fas fa-pencil-alt',       'Jun 14–25','Final Examinations – Term Three',            'End-of-year final examinations. All students must be present for all scheduled papers.'],
      ],
      'July 2027' => [
        ['exams',    'fas fa-clipboard-list',   'Jul 3',   'Final Results Day',                          'Academic results and report cards issued to all students and parents.'],
        ['events',   'fas fa-graduation-cap',   'Jul 10',  'Annual Graduation Ceremony',                 'CARE Academy celebrates its graduating class. Parents, guests, and the community are warmly invited.'],
        ['events',   'fas fa-award',            'Jul 12',  'Annual Academic Awards & Skills Day',        'School-wide celebration recognising excellence in academics, character, faith, and skills.'],
        ['holiday',  'fas fa-sun',              'Jul 15',  'School Closes – End of Academic Year',       'The 2026/2027 academic year officially ends. School reopens September 2027 for the new year.'],
      ],
    ];

    $termLabels = [
      'September 2026' => 'TERM ONE',
      'January 2027'   => 'TERM TWO',
      'May 2027'       => 'TERM THREE',
    ];
    $typeColors = [
      'academic' => ['var(--gold)',    'var(--dark-deep)'],
      'exams'    => ['var(--dark)',    'var(--white)'],
      'events'   => ['#4a7c59',       'var(--white)'],
      'skills'   => ['#7b4a7c',       'var(--white)'],
      'holiday'  => ['#3a6ea5',       'var(--white)'],
    ];
    $typeLabels = [
      'academic' => 'Academic',
      'exams'    => 'Examinations',
      'events'   => 'Event',
      'skills'   => 'Skills Training',
      'holiday'  => 'Holiday',
    ];

    $ri = 0;
    foreach ($months as $month => $events):
      $ri++;
      $isTermStart = isset($termLabels[$month]);
    ?>

    <?php if ($isTermStart): ?>
    <div class="term-divider reveal">
      <div class="term-divider-line"></div>
      <div class="term-divider-label"><?= $termLabels[$month] ?></div>
      <div class="term-divider-line"></div>
    </div>
    <?php endif; ?>

    <div class="cal-month reveal">
      <div class="cal-month-head">
        <i class="fas fa-calendar-alt me-2"></i><?= $month ?>
      </div>
      <div class="cal-month-body">
        <?php foreach ($events as $j => [$type, $icon, $date, $title, $desc]):
          [$bg, $fg] = $typeColors[$type];
        ?>
        <div class="cal-event">
          <div class="cal-event-date">
            <span><?= $date ?></span>
          </div>
          <div class="cal-event-icon" style="background:<?= $bg ?>;color:<?= $fg ?>">
            <i class="<?= $icon ?>"></i>
          </div>
          <div class="cal-event-body">
            <div class="cal-event-tag" style="background:<?= $bg ?>20;color:<?= $bg ?>;border:1px solid <?= $bg ?>40">
              <?= $typeLabels[$type] ?>
            </div>
            <h6><?= $title ?></h6>
            <p><?= $desc ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <?php endforeach; ?>
  </div>
</section>

<!-- SKILLS PROGRAMME REMINDER -->
<section class="section-sm" style="background:var(--dark)">
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-lg-8 reveal">
        <span class="section-label" style="color:var(--gold)">Throughout the Year</span>
        <h3 style="font-family:var(--font-head);font-weight:700;color:var(--white);margin-bottom:.75rem">Skills Training Runs All Three Terms</h3>
        <p style="color:rgba(255,255,255,.72);margin:0">Soap Making · Hanger Making · Tie & Dye · Pastry Production · Computer Training — integrated into the school timetable each week, alongside core academic subjects.</p>
      </div>
      <div class="col-lg-4 text-lg-end reveal reveal-delay-2">
        <a href="academics.php#skills" class="btn-care btn-primary-care"><i class="fas fa-tools me-2"></i>View Skills Programmes</a>
      </div>
    </div>
  </div>
</section>

<!-- DOWNLOAD CTA -->
<section class="section-sm" style="background:var(--light)">
  <div class="container text-center reveal">
    <h4 style="font-family:var(--font-head);font-weight:700;margin-bottom:.5rem">Need a Printed Copy?</h4>
    <p style="color:var(--muted);margin-bottom:1.5rem">Contact the school office to receive a printed calendar or visit us during school hours.</p>
    <div class="d-flex flex-wrap gap-3 justify-content-center">
      <a href="contact.php" class="btn-care btn-dark-care"><i class="fas fa-phone me-2"></i>Contact the Office</a>
      <a href="admissions.php" class="btn-care btn-primary-care"><i class="fas fa-file-alt me-2"></i>Apply for Admission</a>
    </div>
  </div>
</section>

<style>
/* ===== CALENDAR PAGE STYLES ===== */
.cal-intro-strip{background:var(--white);border-bottom:1px solid var(--border-light);padding:1rem 0}
.cal-intro-title{font-family:var(--font-head);font-size:1.1rem;font-weight:700;color:var(--dark);margin-bottom:.3rem}
.cal-intro-sub{font-size:.82rem;color:var(--muted);margin:0}
.cal-legend-item{display:flex;align-items:center;gap:.45rem;font-size:.75rem;font-weight:600;color:var(--dark)}
.cal-legend-item span{width:10px;height:10px;border-radius:50%;flex-shrink:0}

.term-card{background:var(--white);border:1.5px solid var(--border-light);border-radius:var(--radius-lg);padding:2rem;height:100%;text-align:center;box-shadow:var(--shadow-sm);transition:var(--transition);position:relative;overflow:hidden}
.term-card:hover{box-shadow:var(--shadow-md);transform:translateY(-4px)}
.term-num{font-family:var(--font-head);font-size:5rem;font-weight:700;color:var(--gold);opacity:.08;position:absolute;top:-10px;right:10px;line-height:1}
.term-icon{width:60px;height:60px;background:var(--gold-pale);border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:1.5rem;color:var(--gold);margin:0 auto 1rem;transition:var(--transition)}
.term-card:hover .term-icon{background:var(--gold);color:var(--white)}
.term-card h5{font-family:var(--font-head);font-size:1.2rem;font-weight:700;color:var(--dark);margin-bottom:.4rem}
.term-dates{font-size:.78rem;font-weight:700;color:var(--gold);letter-spacing:.06em;text-transform:uppercase;margin-bottom:.75rem}
.term-card p{font-size:.88rem;color:var(--muted);line-height:1.75;margin:0}

.term-divider{display:flex;align-items:center;gap:1.25rem;margin:2.5rem 0 2rem}
.term-divider-line{flex:1;height:2px;background:linear-gradient(90deg,transparent,var(--gold),transparent)}
.term-divider-label{font-family:var(--font-head);font-size:.8rem;font-weight:700;letter-spacing:.2em;text-transform:uppercase;color:var(--dark);background:var(--white);padding:.35rem 1.25rem;border:2px solid var(--gold);border-radius:100px;white-space:nowrap}

.cal-month{margin-bottom:2.5rem;border-radius:var(--radius-lg);overflow:hidden;box-shadow:var(--shadow-sm);border:1px solid var(--border-light)}
.cal-month-head{background:var(--dark);color:var(--white);font-family:var(--font-body);font-weight:700;font-size:.95rem;padding:.9rem 1.5rem;letter-spacing:.06em;display:flex;align-items:center}
.cal-month-head i{color:var(--gold)}
.cal-month-body{background:var(--white)}

.cal-event{display:grid;grid-template-columns:80px 44px 1fr;align-items:start;gap:0;border-bottom:1px solid var(--border-light);transition:var(--transition)}
.cal-event:last-child{border-bottom:none}
.cal-event:hover{background:var(--gold-pale)}
.cal-event-date{padding:1.1rem .75rem 1.1rem 1.25rem;text-align:center}
.cal-event-date span{font-size:.78rem;font-weight:700;color:var(--muted);line-height:1.3;display:block}
.cal-event-icon{width:44px;height:44px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:.95rem;flex-shrink:0;margin-top:1rem;align-self:start}
.cal-event-body{padding:1rem 1.25rem 1rem .75rem}
.cal-event-tag{display:inline-block;font-size:.65rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;padding:.2rem .6rem;border-radius:100px;margin-bottom:.4rem}
.cal-event-body h6{font-family:var(--font-head);font-size:.95rem;font-weight:700;color:var(--dark);margin-bottom:.3rem;line-height:1.3}
.cal-event-body p{font-size:.82rem;color:var(--muted);margin:0;line-height:1.65}

@media(max-width:575px){
  .cal-event{grid-template-columns:60px 36px 1fr;gap:0}
  .cal-event-date{padding:.85rem .4rem .85rem .85rem}
  .cal-event-date span{font-size:.7rem}
  .cal-event-icon{width:36px;height:36px;font-size:.8rem;margin-top:.85rem}
  .cal-event-body{padding:.85rem .85rem .85rem .5rem}
  .term-divider-label{font-size:.7rem;padding:.3rem .85rem}
}
</style>

<?php include 'php/footer.php'; ?>

</body>
</html>