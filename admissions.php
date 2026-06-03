<?php
$page_title = "Admissions | CARE Academy — Apply for 2025/2026";
$page_desc  = "Apply for admission at Carter's Academy for Remarkable Excellence. Primary and Secondary school enrollment open for 2025/2026.";
?>
<!DOCTYPE html>
<html lang="en">
<head><?php include 'php/head.php'; ?></head>
<body>

<?php include 'php/header.php'; ?>

<section class="page-hero">
  <div class="hero-glow"></div>
  <div class="container position-relative">
    <span class="section-label">Join Our Family</span>
    <h1>Admissions</h1>
    <nav aria-label="breadcrumb" class="mt-2">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Admissions</li>
      </ol>
    </nav>
  </div>
</section>

<!-- INTRO -->
<section class="section-pad">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6 reveal">
        <span class="section-label">2025/2026 Enrolment</span>
        <h2 class="section-title">Begin Your Child's Journey</h2>
        <div class="divider"></div>
        <p style="color:var(--muted);margin-bottom:1rem">CARE Academy warmly welcomes applications for the 2025/2026 academic year. We accept students into our Primary School (Grades 1–6) and Secondary School (Grades 7–12) programmes.</p>
        <p style="color:var(--muted)">Our admissions process is transparent, simple, and welcoming. We assess each child holistically — believing that every child has remarkable potential waiting to shine.</p>
        <div class="adm-info-grid mt-4">
          <div class="adm-info-item"><i class="fas fa-calendar"></i><div><strong>Application Open</strong><span>January – August 2025</span></div></div>
          <div class="adm-info-item"><i class="fas fa-school"></i><div><strong>Grades Available</strong><span>1 – 12</span></div></div>
          <div class="adm-info-item"><i class="fas fa-clock"></i><div><strong>School Hours</strong><span>7:30 AM – 4:00 PM</span></div></div>
          <div class="adm-info-item"><i class="fas fa-phone"></i><div><strong>Enquiries</strong><span>+231 555 000 000</span></div></div>
        </div>
      </div>
      <div class="col-lg-6 reveal reveal-delay-2">
        <div class="steps-card">
          <h5 class="steps-head"><i class="fas fa-list-ol me-2"></i>Admission Process</h5>
          <?php $steps=[['Submit Application','Complete and submit the online form or visit our office.'],['Document Submission','Submit required documents (birth certificate, previous results, passport photo).'],['Assessment / Interview','Child attends a brief assessment and parent meets with the Principal.'],['Acceptance Letter','Successful applicants receive an official acceptance letter.'],['Fee Payment & Enrolment','Pay school fees and complete enrolment formalities.']];
          foreach($steps as $i=>[$t,$d]): ?>
          <div class="step-item">
            <div class="step-num"><?=$i+1?></div>
            <div><strong><?=$t?></strong><p><?=$d?></p></div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- REQUIREMENTS -->
<section class="section-pad" style="background:var(--light)">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <span class="section-label">What You Need</span>
      <h2 class="section-title">Admission Requirements</h2>
      <div class="divider center"></div>
    </div>
    <div class="row g-4">
      <div class="col-md-6 reveal reveal-delay-1">
        <div class="req-card">
          <div class="req-head"><i class="fas fa-child"></i> Primary School (Grades 1–6)</div>
          <ul class="req-list">
            <li><i class="fas fa-angle-right"></i> Completed application form</li>
            <li><i class="fas fa-angle-right"></i> Certified copy of birth certificate</li>
            <li><i class="fas fa-angle-right"></i> Two recent passport-size photographs</li>
            <li><i class="fas fa-angle-right"></i> Previous school report card (if applicable)</li>
            <li><i class="fas fa-angle-right"></i> Health / immunization record</li>
            <li><i class="fas fa-angle-right"></i> Parent/Guardian National ID</li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 reveal reveal-delay-2">
        <div class="req-card req-card--dark">
          <div class="req-head"><i class="fas fa-graduation-cap"></i> Secondary School (Grades 7–12)</div>
          <ul class="req-list">
            <li><i class="fas fa-angle-right"></i> Completed application form</li>
            <li><i class="fas fa-angle-right"></i> Certified copy of birth certificate</li>
            <li><i class="fas fa-angle-right"></i> Two recent passport-size photographs</li>
            <li><i class="fas fa-angle-right"></i> Most recent school report cards (2 years)</li>
            <li><i class="fas fa-angle-right"></i> Letter of good conduct from previous school</li>
            <li><i class="fas fa-angle-right"></i> National examination results (if applicable)</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FEES -->
<section class="section-pad" id="fees">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <span class="section-label">Investment in Education</span>
      <h2 class="section-title">School Fees</h2>
      <div class="divider center"></div>
      <p class="section-subtitle mx-auto" style="color:var(--muted)">CARE Academy is committed to affordable quality education. Contact us for the current fee schedule and available payment plans.</p>
    </div>
    <div class="row g-4 justify-content-center">
      <?php $plans=[['Primary School','Grades 1 – 6','Contact for fees','fas fa-child',false],['Secondary School','Grades 7 – 12','Contact for fees','fas fa-graduation-cap',true]];
      foreach($plans as [$name,$grade,$fee,$icon,$featured]): ?>
      <div class="col-md-5 reveal reveal-delay-<?=$featured?2:1?>">
        <div class="fee-card <?=$featured?'fee-card--featured':''?>">
          <div class="fee-icon"><i class="<?=$icon?>"></i></div>
          <h5><?=$name?></h5>
          <div class="fee-grade"><?=$grade?></div>
          <div class="fee-amount"><?=$fee?></div>
          <a href="contact.php" class="btn-care <?=$featured?'btn-primary-care':'btn-dark-care'?> w-100 justify-content-center mt-3">Enquire About Fees</a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <p class="text-center mt-4" style="font-size:.85rem;color:var(--muted)">* Fees are payable per term. Sibling discounts and payment plans are available. Contact the school office for full details.</p>
  </div>
</section>

<!-- APPLICATION FORM -->
<section class="section-pad" style="background:var(--light)" id="apply">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="apply-form-wrap reveal">
          <div class="text-center mb-4">
            <span class="section-label">Apply Online</span>
            <h2 class="section-title">Submit Your Application</h2>
            <div class="divider center"></div>
          </div>
          <div id="formSuccess" class="alert-success-care mb-3"></div>
          <div id="formError"   class="alert-error-care mb-3"></div>
          <form id="admissionForm" class="care-form" novalidate>
            <div class="row g-3">
              <div class="col-md-6"><label class="form-label">Student's First Name *</label><input type="text" name="first_name" class="form-control" required></div>
              <div class="col-md-6"><label class="form-label">Student's Last Name *</label><input type="text" name="last_name" class="form-control" required></div>
              <div class="col-md-6"><label class="form-label">Date of Birth *</label><input type="date" name="dob" class="form-control" required></div>
              <div class="col-md-6"><label class="form-label">Gender *</label>
                <select name="gender" class="form-select" required>
                  <option value="">Select gender</option>
                  <option>Male</option><option>Female</option>
                </select>
              </div>
              <div class="col-md-6"><label class="form-label">Grade Applying For *</label>
                <select name="grade" class="form-select" required>
                  <option value="">Select grade</option>
                  <?php for($g=1;$g<=12;$g++): ?><option value="<?=$g?>">Grade <?=$g?></option><?php endfor; ?>
                </select>
              </div>
              <div class="col-md-6"><label class="form-label">Previous School</label><input type="text" name="prev_school" class="form-control"></div>
              <div class="col-12"><hr style="border-color:var(--border-light)"><p style="font-size:.82rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--muted)">Parent / Guardian Information</p></div>
              <div class="col-md-6"><label class="form-label">Parent/Guardian Name *</label><input type="text" name="parent_name" class="form-control" required></div>
              <div class="col-md-6"><label class="form-label">Phone Number *</label><input type="tel" name="phone" class="form-control" required></div>
              <div class="col-12"><label class="form-label">Email Address</label><input type="email" name="email" class="form-control"></div>
              <div class="col-12"><label class="form-label">Home Address *</label><textarea name="address" class="form-control" rows="2" required></textarea></div>
              <div class="col-12"><label class="form-label">Additional Information / Questions</label><textarea name="message" class="form-control" rows="3"></textarea></div>
              <div class="col-12 mt-2">
                <button type="submit" class="btn-care btn-primary-care w-100 justify-content-center" style="font-size:1rem;padding:1rem">
                  <i class="fas fa-paper-plane"></i> Submit Application
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
.adm-info-grid{display:grid;grid-template-columns:1fr 1fr;gap:.75rem}
.adm-info-item{display:flex;align-items:center;gap:.75rem;background:var(--light);border:1px solid var(--border-light);border-radius:var(--radius);padding:.85rem}
.adm-info-item i{color:var(--gold);font-size:1.1rem;width:32px;text-align:center;flex-shrink:0}
.adm-info-item strong{display:block;font-size:.72rem;font-weight:700;text-transform:uppercase;letter-spacing:.06em;color:var(--muted)}
.adm-info-item span{font-size:.88rem;font-weight:600;color:var(--dark)}
.steps-card{background:var(--white);border:1.5px solid var(--border-light);border-radius:var(--radius-lg);padding:2rem;box-shadow:var(--shadow-sm)}
.steps-head{font-family:var(--font-head);font-size:1.1rem;font-weight:700;color:var(--dark);padding-bottom:1rem;border-bottom:2px solid var(--gold-pale);margin-bottom:1.25rem}
.step-item{display:flex;align-items:flex-start;gap:1rem;padding:.75rem 0;border-bottom:1px solid var(--border-light)}
.step-item:last-child{border-bottom:none}
.step-num{width:32px;height:32px;background:var(--gold);color:var(--dark-deep);border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.85rem;flex-shrink:0;margin-top:.15rem}
.step-item strong{display:block;font-size:.9rem;font-weight:700;color:var(--dark)}
.step-item p{font-size:.82rem;color:var(--muted);margin:.2rem 0 0}
.req-card{background:var(--white);border:1.5px solid var(--border-light);border-radius:var(--radius-lg);padding:2rem;height:100%;box-shadow:var(--shadow-sm)}
.req-card--dark{background:var(--dark)}
.req-head{font-family:var(--font-head);font-size:1.05rem;font-weight:700;color:var(--dark);margin-bottom:1.25rem;padding-bottom:.85rem;border-bottom:2px solid var(--gold)}
.req-card--dark .req-head{color:var(--white)}
.req-list li{display:flex;align-items:center;gap:.65rem;padding:.5rem 0;font-size:.9rem;color:var(--muted);border-bottom:1px solid var(--border-light)}
.req-card--dark .req-list li{color:rgba(255,255,255,.7);border-color:rgba(255,255,255,.08)}
.req-list li:last-child{border-bottom:none}
.req-list i{color:var(--gold);font-size:.75rem;flex-shrink:0}
.fee-card{background:var(--white);border:1.5px solid var(--border-light);border-radius:var(--radius-lg);padding:2.5rem;text-align:center;box-shadow:var(--shadow-sm);height:100%}
.fee-card--featured{background:var(--dark);border-color:var(--dark)}
.fee-card--featured h5,.fee-card--featured .fee-grade{color:rgba(255,255,255,.9)}
.fee-icon{width:64px;height:64px;background:var(--gold-pale);border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:1.75rem;color:var(--gold);margin:0 auto 1.25rem}
.fee-card--featured .fee-icon{background:rgba(200,167,78,.15);color:var(--gold)}
.fee-card h5{font-family:var(--font-head);font-size:1.25rem;font-weight:700;color:var(--dark);margin-bottom:.35rem}
.fee-grade{font-size:.82rem;color:var(--muted);margin-bottom:1rem}
.fee-amount{font-family:var(--font-head);font-size:1.5rem;font-weight:700;color:var(--gold);margin-bottom:.5rem}
.apply-form-wrap{background:var(--white);border-radius:var(--radius-lg);padding:2.5rem;box-shadow:var(--shadow-md);border:1px solid var(--border-light)}
@media(max-width:575px){.adm-info-grid{grid-template-columns:1fr}.apply-form-wrap{padding:1.5rem}}
</style>

<?php include 'php/footer.php'; ?>
<?php include 'php/scripts.php'; ?>
</body>
</html>
