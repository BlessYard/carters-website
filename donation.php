<?php
$page_title = "Support Our Work | CARE Academy — Donate Today";
$page_desc  = "Support Carter's Academy for Remarkable Excellence. Your donation helps provide quality education for children in Liberia who cannot afford it.";
?>
<?php include 'php/header.php'; ?>

<!-- PAGE HERO -->
<section class="page-hero">
  <div class="hero-glow"></div>
  <div class="container position-relative">
    <span class="section-label">Make a Difference</span>
    <h1>Support Our Work</h1>
    <nav aria-label="breadcrumb" class="mt-2">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Donate</li>
      </ol>
    </nav>
  </div>
</section>

<!-- WHY DONATE -->
<section class="section-pad">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6 reveal">
        <span class="section-label">Why It Matters</span>
        <h2 class="section-title">Your Gift Changes a Child's Future</h2>
        <div class="divider"></div>
        <p style="color:var(--muted);margin-bottom:1rem">At CARE Academy, we believe every child deserves access to quality education regardless of their financial background. Many families in Liberia struggle to afford school fees, uniforms, and learning materials.</p>
        <p style="color:var(--muted);margin-bottom:1.5rem">Your donation directly supports children who would otherwise be left behind — funding school supplies, scholarships, skills training, and the infrastructure that makes learning possible.</p>
        <div class="donation-impacts">
          <div class="impact-item">
            <div class="impact-icon"><i class="fas fa-book"></i></div>
            <div><strong>LRD $500</strong><span>Provides textbooks for one student for a term</span></div>
          </div>
          <div class="impact-item">
            <div class="impact-icon"><i class="fas fa-tshirt"></i></div>
            <div><strong>LRD $1,500</strong><span>Covers a full school uniform set for one child</span></div>
          </div>
          <div class="impact-item">
            <div class="impact-icon"><i class="fas fa-graduation-cap"></i></div>
            <div><strong>LRD $5,000</strong><span>Sponsors one child's tuition for a full term</span></div>
          </div>
          <div class="impact-item">
            <div class="impact-icon"><i class="fas fa-chalkboard"></i></div>
            <div><strong>LRD $15,000</strong><span>Equips a classroom with learning materials</span></div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 reveal reveal-delay-2">
        <div class="donation-img-wrap">
          <img src="assets/images/donation-impact.jpg" alt="Students at CARE Academy">
          <div class="donation-motto-badge">
            <i class="fas fa-heart me-2"></i>
            "No Child Should Be Left Behind"
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- DONATION FORM -->
<section class="section-pad" style="background:var(--light)" id="donate">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="donation-form-wrap reveal">
          <div class="text-center mb-4">
            <span class="section-label">Give Today</span>
            <h2 class="section-title">Make a Donation</h2>
            <div class="divider center"></div>
            <p style="color:var(--muted)">Every contribution, big or small, makes a real difference in a child's life.</p>
          </div>

          <div id="donationSuccess" class="alert-success-care mb-3"></div>
          <div id="donationError"   class="alert-error-care mb-3"></div>

          <form id="donationForm" class="care-form" novalidate>

            <!-- Amount Selection -->
            <div class="mb-4">
              <label class="form-label">Select Amount (LRD)</label>
              <div class="amount-grid">
                <button type="button" class="amount-btn" data-amount="1000">LRD 1,000</button>
                <button type="button" class="amount-btn" data-amount="2500">LRD 2,500</button>
                <button type="button" class="amount-btn" data-amount="5000">LRD 5,000</button>
                <button type="button" class="amount-btn" data-amount="10000">LRD 10,000</button>
                <button type="button" class="amount-btn" data-amount="25000">LRD 25,000</button>
                <button type="button" class="amount-btn amount-btn--custom">Custom Amount</button>
              </div>
              <div class="custom-amount-wrap" id="customAmountWrap" style="display:none;margin-top:.75rem">
                <input type="number" name="custom_amount" id="customAmount" class="form-control" placeholder="Enter amount in LRD">
              </div>
              <input type="hidden" name="amount" id="selectedAmount">
            </div>

            <!-- Donor Info -->
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Full Name *</label>
                <input type="text" name="name" class="form-control" placeholder="Your full name" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Email Address *</label>
                <input type="email" name="email" class="form-control" placeholder="your@email.com" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Phone Number</label>
                <input type="tel" name="phone" class="form-control" placeholder="+231 ...">
              </div>
              <div class="col-md-6">
                <label class="form-label">Donation Purpose</label>
                <select name="purpose" class="form-select">
                  <option value="">General Support</option>
                  <option>Student Scholarship</option>
                  <option>School Supplies & Books</option>
                  <option>Skills Training Programme</option>
                  <option>Classroom Equipment</option>
                  <option>School Infrastructure</option>
                  <option>No Child Left Behind Programme</option>
                </select>
              </div>
              <div class="col-12">
                <label class="form-label">Message (Optional)</label>
                <textarea name="message" class="form-control" rows="3" placeholder="Share why you're donating or any special instructions..."></textarea>
              </div>

              <!-- Anonymous -->
              <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="anonymous" id="anonymousCheck">
                  <label class="form-check-label" for="anonymousCheck" style="font-size:.88rem;color:var(--muted)">
                    I wish to remain anonymous
                  </label>
                </div>
              </div>

              <div class="col-12 mt-2">
                <button type="submit" class="btn-care btn-primary-care w-100 justify-content-center" style="font-size:1rem;padding:1rem">
                  <i class="fas fa-heart me-2"></i> Donate Now
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- OTHER WAYS TO GIVE -->
<section class="section-pad">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <span class="section-label">Other Ways to Help</span>
      <h2 class="section-title">More Ways You Can Support Us</h2>
      <div class="divider center"></div>
    </div>
    <div class="row g-4">
      <?php $ways = [
        ['fas fa-mobile-alt',   'Mobile Money',        'Send your donation via mobile money to our school account. Contact us for our registered mobile money number.'],
        ['fas fa-university',   'Bank Transfer',       'Donate directly to our school bank account. Contact the school office for our banking details.'],
        ['fas fa-box-open',     'In-Kind Donations',   'Donate textbooks, uniforms, school supplies, computers, or classroom furniture. Every item helps a child learn.'],
        ['fas fa-hands-helping','Volunteer',           'Share your skills and time. We welcome volunteers in teaching, mentoring, skills training, and administration.'],
        ['fas fa-building',     'Corporate Support',   'Is your organisation interested in CSR partnerships? Contact us to discuss sponsorship and partnership opportunities.'],
        ['fas fa-pray',         'Prayer Support',      'As a faith-based school, we value your prayers. Pray for our students, staff, families, and the future of CARE Academy.'],
      ];
      foreach($ways as $i=>[$icon,$title,$desc]): ?>
      <div class="col-sm-6 col-lg-4 reveal reveal-delay-<?=($i%3)+1?>">
        <div class="care-card p-4 h-100">
          <div class="card-icon"><i class="<?=$icon?>"></i></div>
          <h5 style="font-weight:700;margin-bottom:.5rem"><?=$title?></h5>
          <p style="font-size:.88rem;color:var(--muted);margin:0"><?=$desc?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CONTACT CTA -->
<section class="section-sm" style="background:var(--dark)">
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-lg-8 reveal">
        <h3 style="font-family:var(--font-head);font-weight:700;color:var(--white);margin-bottom:.5rem">Have Questions About Donating?</h3>
        <p style="color:rgba(255,255,255,.7);margin:0">Our team is happy to answer any questions about how your donation is used and how to give.</p>
      </div>
      <div class="col-lg-4 text-lg-end reveal reveal-delay-2">
        <a href="contact.php" class="btn-care btn-primary-care"><i class="fas fa-envelope me-2"></i>Contact Us</a>
      </div>
    </div>
  </div>
</section>

<style>
/* Donation Page */
.donation-impacts{display:flex;flex-direction:column;gap:.85rem;margin-top:1.5rem}
.impact-item{display:flex;align-items:center;gap:1rem;padding:.9rem 1.1rem;background:var(--light);border:1px solid var(--border-light);border-radius:var(--radius);border-left:4px solid var(--gold)}
.impact-icon{width:40px;height:40px;background:var(--gold-pale);border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:1rem;color:var(--gold);flex-shrink:0}
.impact-item strong{display:block;font-size:.95rem;font-weight:700;color:var(--dark)}
.impact-item span{font-size:.82rem;color:var(--muted)}

.donation-img-wrap{position:relative;border-radius:var(--radius-lg);overflow:visible}
.donation-img-wrap img{width:100%;aspect-ratio:4/3;object-fit:cover;border-radius:var(--radius-lg);box-shadow:var(--shadow-lg);background:var(--light)}
.donation-motto-badge{position:absolute;bottom:-16px;left:50%;transform:translateX(-50%);background:var(--gold);color:var(--dark);font-family:var(--font-head);font-size:.85rem;font-weight:700;padding:.75rem 1.5rem;border-radius:100px;white-space:nowrap;box-shadow:var(--shadow-md);border:3px solid var(--white)}

.donation-form-wrap{background:var(--white);border:1.5px solid var(--border-light);border-radius:var(--radius-lg);padding:2.5rem;box-shadow:var(--shadow-md)}

.amount-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:.65rem}
.amount-btn{background:var(--white);border:1.5px solid var(--border);color:var(--dark);font-family:var(--font-body);font-size:.88rem;font-weight:700;padding:.7rem .5rem;border-radius:var(--radius);cursor:pointer;transition:var(--transition);text-align:center}
.amount-btn:hover,.amount-btn.active{background:var(--gold);border-color:var(--gold);color:var(--dark)}
.amount-btn--custom{background:var(--light);border-style:dashed}
.amount-btn--custom:hover{background:var(--gold);border-style:solid;border-color:var(--gold);color:var(--dark)}

@media(max-width:575px){
  .amount-grid{grid-template-columns:repeat(2,1fr)}
  .donation-form-wrap{padding:1.5rem}
  .donation-motto-badge{font-size:.75rem;padding:.6rem 1rem;white-space:normal;text-align:center;width:80%}
}
</style>

<script>
// Amount selection logic
const amountBtns = document.querySelectorAll('.amount-btn:not(.amount-btn--custom)');
const customBtn  = document.querySelector('.amount-btn--custom');
const customWrap = document.getElementById('customAmountWrap');
const customInput= document.getElementById('customAmount');
const hiddenAmt  = document.getElementById('selectedAmount');

amountBtns.forEach(btn => {
  btn.addEventListener('click', () => {
    amountBtns.forEach(b => b.classList.remove('active'));
    customBtn.classList.remove('active');
    customWrap.style.display = 'none';
    btn.classList.add('active');
    hiddenAmt.value = btn.dataset.amount;
  });
});

customBtn.addEventListener('click', () => {
  amountBtns.forEach(b => b.classList.remove('active'));
  customBtn.classList.add('active');
  customWrap.style.display = 'block';
  customInput.focus();
});

customInput.addEventListener('input', () => {
  hiddenAmt.value = customInput.value;
});

// Form submission
document.getElementById('donationForm').addEventListener('submit', async function(e) {
  e.preventDefault();
  const btn        = this.querySelector('[type="submit"]');
  const successBox = document.getElementById('donationSuccess');
  const errorBox   = document.getElementById('donationError');

  if (!hiddenAmt.value) {
    errorBox.style.display = 'block';
    errorBox.textContent   = 'Please select or enter a donation amount.';
    return;
  }

  btn.disabled    = true;
  btn.textContent = 'Processing...';

  try {
    const res  = await fetch('php/donation_handler.php', { method:'POST', body: new FormData(this) });
    const data = await res.json();
    if (data.success) {
      successBox.style.display = 'block';
      successBox.textContent   = data.message;
      this.reset();
      amountBtns.forEach(b => b.classList.remove('active'));
      customWrap.style.display = 'none';
      hiddenAmt.value = '';
    } else {
      errorBox.style.display = 'block';
      errorBox.textContent   = data.message;
    }
  } catch {
    errorBox.style.display = 'block';
    errorBox.textContent   = 'Something went wrong. Please try again or contact us directly.';
  } finally {
    btn.disabled   = false;
    btn.innerHTML  = '<i class="fas fa-heart me-2"></i> Donate Now';
  }
});
</script>

<?php include 'php/footer.php'; ?>

</body>
</html>