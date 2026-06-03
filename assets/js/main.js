/* js/main.js — CARE Academy shared scripts */

(function () {
  'use strict';

  /* ---- Sticky nav shadow on scroll ---- */
  const nav = document.getElementById('mainNav');
  const scrollTopBtn = document.getElementById('scrollTop');

  window.addEventListener('scroll', () => {
    const y = window.scrollY;
    if (nav) nav.classList.toggle('scrolled', y > 40);
    if (scrollTopBtn) scrollTopBtn.classList.toggle('visible', y > 300);
  });

  /* ---- Scroll to top ---- */
  if (scrollTopBtn) {
    scrollTopBtn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
  }

  /* ---- Reveal on scroll (Intersection Observer) ---- */
  const reveals = document.querySelectorAll('.reveal');
  if (reveals.length) {
    const observer = new IntersectionObserver(
      entries => entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); }),
      { threshold: 0.12 }
    );
    reveals.forEach(el => observer.observe(el));
  }

  /* ---- Counter animation for stats ---- */
  function animateCounter(el) {
    const target = parseInt(el.dataset.target, 10);
    const duration = 1800;
    const step = target / (duration / 16);
    let current = 0;
    const timer = setInterval(() => {
      current = Math.min(current + step, target);
      el.textContent = Math.floor(current) + (el.dataset.suffix || '');
      if (current >= target) clearInterval(timer);
    }, 16);
  }

  const counters = document.querySelectorAll('.counter');
  if (counters.length) {
    const countObserver = new IntersectionObserver(entries => {
      entries.forEach(e => {
        if (e.isIntersecting && !e.target.dataset.animated) {
          e.target.dataset.animated = '1';
          animateCounter(e.target);
        }
      });
    }, { threshold: 0.5 });
    counters.forEach(c => countObserver.observe(c));
  }

  /* ---- Active nav link from URL ---- */
  const links = document.querySelectorAll('.navbar-nav .nav-link');
  const path = window.location.pathname.split('/').pop() || 'index.php';
  links.forEach(link => {
    const href = link.getAttribute('href');
    if (href && href.split('#')[0] === path) link.classList.add('active');
  });

  /* ---- Gallery filter (used on gallery.php) ---- */
  const filterBtns = document.querySelectorAll('[data-filter]');
  if (filterBtns.length) {
    filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        filterBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        const filter = btn.dataset.filter;
        document.querySelectorAll('.gallery-item').forEach(item => {
          const show = filter === 'all' || item.dataset.category === filter;
          item.style.display = show ? '' : 'none';
        });
      });
    });
  }

  /* ---- Admission form AJAX (used on admissions.php) ---- */
  const admitForm = document.getElementById('admissionForm');
  if (admitForm) {
    admitForm.addEventListener('submit', async function (e) {
      e.preventDefault();
      const btn = this.querySelector('[type="submit"]');
      const successBox = document.getElementById('formSuccess');
      const errorBox   = document.getElementById('formError');
      btn.disabled = true;
      btn.textContent = 'Submitting…';
      try {
        const res = await fetch('php/admission_handler.php', {
          method: 'POST',
          body: new FormData(this)
        });
        const data = await res.json();
        if (data.success) {
          if (successBox) { successBox.style.display = 'block'; successBox.textContent = data.message; }
          this.reset();
        } else {
          if (errorBox) { errorBox.style.display = 'block'; errorBox.textContent = data.message; }
        }
      } catch {
        if (errorBox) { errorBox.style.display = 'block'; errorBox.textContent = 'Something went wrong. Please try again.'; }
      } finally {
        btn.disabled = false;
        btn.textContent = 'Submit Application';
      }
    });
  }

  /* ---- Contact form AJAX ---- */
  const contactForm = document.getElementById('contactForm');
  if (contactForm) {
    contactForm.addEventListener('submit', async function (e) {
      e.preventDefault();
      const btn = this.querySelector('[type="submit"]');
      const successBox = document.getElementById('contactSuccess');
      const errorBox   = document.getElementById('contactError');
      btn.disabled = true;
      btn.textContent = 'Sending…';
      try {
        const res = await fetch('php/contact_handler.php', {
          method: 'POST',
          body: new FormData(this)
        });
        const data = await res.json();
        if (data.success) {
          if (successBox) { successBox.style.display = 'block'; successBox.textContent = data.message; }
          this.reset();
        } else {
          if (errorBox) { errorBox.style.display = 'block'; errorBox.textContent = data.message; }
        }
      } catch {
        if (errorBox) { errorBox.style.display = 'block'; errorBox.textContent = 'Could not send your message. Please try again.' ;}
      } finally {
        btn.disabled = false;
        btn.textContent = 'Send Message';
      }
    });
  }

})();
