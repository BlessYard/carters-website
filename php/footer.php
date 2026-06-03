<?php // php/footer.php — reusable footer include ?>

<footer class="site-footer">
  <div class="container">
    <div class="row g-5">
      <!-- Brand Column -->
      <div class="col-lg-4">
        <div class="footer-brand">
          <img src="images/logo-white.png" alt="CARE Academy" class="footer-logo">
          <div class="footer-name">Carter's Academy for<br>Remarkable Excellence</div>
          <div class="footer-motto">"Light Beyond Darkness"</div>
          <p>A faith-based institution dedicated to nurturing young minds, building strong character, and empowering the next generation of Liberian leaders through quality, inclusive education.</p>
          <div class="footer-socials">
            <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="col-sm-6 col-lg-2">
        <div class="footer-heading">Quick Links</div>
        <ul class="footer-links">
          <li><a href="index.php"><i class="fas fa-angle-right"></i> Home</a></li>
          <li><a href="about.php"><i class="fas fa-angle-right"></i> About Us</a></li>
          <li><a href="academics.php"><i class="fas fa-angle-right"></i> Academics</a></li>
          <li><a href="admissions.php"><i class="fas fa-angle-right"></i> Admissions</a></li>
          <li><a href="faculty.php"><i class="fas fa-angle-right"></i> Our Faculty</a></li>
          <li><a href="news.php"><i class="fas fa-angle-right"></i> News & Events</a></li>
          <li><a href="gallery.php"><i class="fas fa-angle-right"></i> Gallery</a></li>
          <li><a href="contact.php"><i class="fas fa-angle-right"></i> Contact</a></li>
        </ul>
      </div>

      <!-- Programmes -->
      <div class="col-sm-6 col-lg-2">
        <div class="footer-heading">Programmes</div>
        <ul class="footer-links">
          <li><a href="academics.php#primary"><i class="fas fa-angle-right"></i> Primary School</a></li>
          <li><a href="academics.php#secondary"><i class="fas fa-angle-right"></i> Secondary School</a></li>
          <li><a href="academics.php#curriculum"><i class="fas fa-angle-right"></i> Curriculum</a></li>
          <li><a href="admissions.php"><i class="fas fa-angle-right"></i> How to Apply</a></li>
          <li><a href="admissions.php#fees"><i class="fas fa-angle-right"></i> School Fees</a></li>
          <li><a href="portal.php"><i class="fas fa-angle-right"></i> Student Portal</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div class="col-lg-4">
        <div class="footer-heading">Contact Us</div>
        <ul class="footer-contact">
          <li>
            <i class="fas fa-map-marker-alt"></i>
            <span>Monrovia, Liberia<br>(Address to be updated)</span>
          </li>
          <li>
            <i class="fas fa-phone-alt"></i>
            <span>+231 555 000 000</span>
          </li>
          <li>
            <i class="fas fa-envelope"></i>
            <span>info@careacademy.edu.lr</span>
          </li>
          <li>
            <i class="fas fa-clock"></i>
            <span>Mon – Fri: 7:30am – 4:00pm</span>
          </li>
        </ul>

        <div class="mt-3">
          <a href="admissions.php#apply" class="btn-care btn-primary-care">
            <i class="fas fa-file-alt"></i> Apply for Admission
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Bottom -->
  <div class="footer-bottom mt-5">
    <div class="container">
      <div class="d-flex flex-wrap justify-content-between align-items-center gap-2">
        <span>&copy; <?= date('Y') ?> Carter's Academy for Remarkable Excellence (CARE Academy). All rights reserved.</span>
        <span>Established 2025 &bull; Monrovia, Liberia &bull; Faith-Based Education</span>
      </div>
    </div>
  </div>
</footer>

<!-- Scroll to Top -->
<button id="scrollTop" aria-label="Scroll to top">
  <i class="fas fa-arrow-up"></i>
</button>

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Main JS -->
<script src="assets/js/main.js"></script>
