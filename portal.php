<?php
$page_title = "Student Portal | CARE Academy";
$page_desc  = "CARE Academy Student Portal — login to access your results, timetable, and school resources.";
?>
<!DOCTYPE html>
<html lang="en">
<head><?php include 'php/head.php'; ?></head>
<body>

<?php include 'php/header.php'; ?>

<section class="page-hero">
  <div class="hero-glow"></div>
  <div class="container position-relative">
    <span class="section-label">Student Access</span>
    <h1>Student Portal</h1>
    <nav aria-label="breadcrumb" class="mt-2">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Portal</li>
      </ol>
    </nav>
  </div>
</section>

<section class="section-pad">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5">
        <div class="portal-card reveal">
          <div class="portal-logo">
            <img src="images/logo.png" alt="CARE Academy" style="width:64px;margin:0 auto 1rem">
            <h5>Student Portal Login</h5>
            <p>Enter your student credentials to access your portal.</p>
          </div>
          <form class="care-form" onsubmit="return false">
            <div class="mb-3"><label class="form-label">Student ID / Username</label><input type="text" class="form-control" placeholder="e.g. CARE2025001"></div>
            <div class="mb-4"><label class="form-label">Password</label><input type="password" class="form-control" placeholder="••••••••"></div>
            <button class="btn-care btn-primary-care w-100 justify-content-center" type="button">
              <i class="fas fa-sign-in-alt"></i> Login to Portal
            </button>
          </form>
          <div class="portal-notice">
            <i class="fas fa-info-circle"></i>
            The portal is currently being set up. Contact the school office for your login credentials once available.
          </div>
          <p class="text-center mt-3" style="font-size:.85rem;color:var(--muted)">Need help? <a href="contact.php" style="color:var(--gold);font-weight:600">Contact the school office</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
.portal-card{background:var(--white);border:1.5px solid var(--border-light);border-radius:var(--radius-lg);padding:2.5rem;box-shadow:var(--shadow-md)}
.portal-logo{text-align:center;margin-bottom:2rem}
.portal-logo h5{font-family:var(--font-head);font-weight:700;color:var(--dark);margin-bottom:.35rem}
.portal-logo p{font-size:.88rem;color:var(--muted)}
.portal-notice{background:var(--gold-pale);border-left:4px solid var(--gold);border-radius:var(--radius);padding:.85rem 1rem;font-size:.85rem;color:var(--dark);display:flex;align-items:flex-start;gap:.65rem;margin-top:1.25rem}
.portal-notice i{color:var(--gold);flex-shrink:0;margin-top:.1rem}
</style>

<?php include 'php/footer.php'; ?>
<?php include 'php/scripts.php'; ?>
</body>
</html>
