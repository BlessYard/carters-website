<?php
$page_title = "Contact Us | CARE Academy — Monrovia, Liberia";
$page_desc  = "Get in touch with Carter's Academy for Remarkable Excellence. Contact us for admissions, enquiries, or to visit our school in Monrovia, Liberia.";
?>
<?php include 'php/header.php'; ?>

<section class="page-hero">
  <div class="hero-glow"></div>
  <div class="container position-relative">
    <span class="section-label">Get In Touch</span>
    <h1>Contact Us</h1>
    <nav aria-label="breadcrumb" class="mt-2">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>
    </nav>
  </div>
</section>

<!-- CONTACT INFO + FORM -->
<section class="section-pad">
  <div class="container">
    <div class="row g-5">

      <!-- Info -->
      <div class="col-lg-4 reveal">
        <span class="section-label">Find Us</span>
        <h2 class="section-title" style="font-size:1.75rem">Let's Talk</h2>
        <div class="divider"></div>
        <p style="color:var(--muted);margin-bottom:2rem">We welcome visits, calls, and messages. Our team is available during school hours to answer your questions about admissions, fees, or school life.</p>

        <div class="contact-info-list">
          <div class="ci-item">
            <div class="ci-icon"><i class="fas fa-map-marker-alt"></i></div>
            <div>
              <strong>Address</strong>
              <span>Monrovia, Liberia<br>(Full address to be updated)</span>
            </div>
          </div>
          <div class="ci-item">
            <div class="ci-icon"><i class="fas fa-phone-alt"></i></div>
            <div>
              <strong>Phone</strong>
              <span><a href="tel:+231555000000">+231 555 000 000</a></span>
            </div>
          </div>
          <div class="ci-item">
            <div class="ci-icon"><i class="fas fa-envelope"></i></div>
            <div>
              <strong>Email</strong>
              <span><a href="mailto:info@careacademy.edu.lr">info@careacademy.edu.lr</a></span>
            </div>
          </div>
          <div class="ci-item">
            <div class="ci-icon"><i class="fas fa-clock"></i></div>
            <div>
              <strong>Office Hours</strong>
              <span>Monday – Friday<br>7:30 AM – 4:00 PM</span>
            </div>
          </div>
        </div>

        <div class="contact-socials mt-4">
          <p style="font-size:.8rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--muted);margin-bottom:.75rem">Follow Us</p>
          <div class="d-flex gap-2">
            <a href="#" class="social-btn"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-btn"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-btn"><i class="fab fa-instagram"></i></a>
            <a href="#" class="social-btn"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
      </div>

      <!-- Form -->
      <div class="col-lg-8 reveal reveal-delay-2">
        <div class="contact-form-wrap">
          <h4 style="font-family:var(--font-head);font-weight:700;margin-bottom:1.5rem;color:var(--dark)">Send Us a Message</h4>
          <div id="contactSuccess" class="alert-success-care mb-3"></div>
          <div id="contactError"   class="alert-error-care mb-3"></div>
          <form id="contactForm" class="care-form" novalidate>
            <div class="row g-3">
              <div class="col-md-6"><label class="form-label">Full Name *</label><input type="text" name="name" class="form-control" placeholder="Your full name" required></div>
              <div class="col-md-6"><label class="form-label">Email Address *</label><input type="email" name="email" class="form-control" placeholder="your@email.com" required></div>
              <div class="col-md-6"><label class="form-label">Phone Number</label><input type="tel" name="phone" class="form-control" placeholder="+231 ..."></div>
              <div class="col-md-6"><label class="form-label">Subject *</label>
                <select name="subject" class="form-select" required>
                  <option value="">Select subject</option>
                  <option>Admissions Enquiry</option>
                  <option>School Fees</option>
                  <option>Academic Information</option>
                  <option>Partnership / Donation</option>
                  <option>General Enquiry</option>
                </select>
              </div>
              <div class="col-12"><label class="form-label">Message *</label><textarea name="message" class="form-control" rows="6" placeholder="Write your message here..." required></textarea></div>
              <div class="col-12">
                <button type="submit" class="btn-care btn-primary-care" style="font-size:1rem;padding:.9rem 2.5rem">
                  <i class="fas fa-paper-plane"></i> Send Message
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MAP PLACEHOLDER -->
<div class="map-section reveal">
  <div class="map-placeholder">
    <i class="fas fa-map-marker-alt"></i>
    <h5>Carter's Academy for Remarkable Excellence</h5>
    <p>Monrovia, Liberia</p>
    <a href="https://maps.google.com" target="_blank" class="btn-care btn-primary-care mt-2">
      <i class="fas fa-directions"></i> Get Directions
    </a>
  </div>
</div>

<style>
.contact-info-list{display:flex;flex-direction:column;gap:1.25rem}
.ci-item{display:flex;align-items:flex-start;gap:1rem}
.ci-icon{width:44px;height:44px;background:var(--gold-pale);border-radius:10px;display:flex;align-items:center;justify-content:center;color:var(--gold);font-size:1rem;flex-shrink:0;margin-top:.1rem}
.ci-item strong{display:block;font-size:.72rem;font-weight:700;text-transform:uppercase;letter-spacing:.08em;color:var(--muted);margin-bottom:.2rem}
.ci-item span,.ci-item a{font-size:.9rem;color:var(--dark);line-height:1.6}
.ci-item a:hover{color:var(--gold)}
.social-btn{width:38px;height:38px;border-radius:50%;border:2px solid var(--border);display:flex;align-items:center;justify-content:center;color:var(--dark);font-size:.85rem;transition:var(--transition)}
.social-btn:hover{background:var(--gold);border-color:var(--gold);color:var(--dark-deep)}
.contact-form-wrap{background:var(--light);border-radius:var(--radius-lg);padding:2.5rem;border:1px solid var(--border-light)}
.map-section{height:380px;background:var(--light);border-top:1px solid var(--border-light);position:relative;display:flex;align-items:center;justify-content:center}
.map-placeholder{text-align:center;color:var(--muted)}
.map-placeholder i{font-size:3rem;color:var(--gold);margin-bottom:1rem;display:block}
.map-placeholder h5{font-family:var(--font-head);font-weight:700;color:var(--dark);margin-bottom:.25rem}
.map-placeholder p{font-size:.9rem;color:var(--muted)}
@media(max-width:575px){.contact-form-wrap{padding:1.5rem}}
</style>

<?php include 'php/footer.php'; ?>
</body>
</html>
