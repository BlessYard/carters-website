<?php
// php/admission_handler.php — handles admission form submission
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request.']);
    exit;
}

// Sanitize
$fn      = htmlspecialchars(trim($_POST['first_name']   ?? ''), ENT_QUOTES);
$ln      = htmlspecialchars(trim($_POST['last_name']    ?? ''), ENT_QUOTES);
$dob     = htmlspecialchars(trim($_POST['dob']          ?? ''), ENT_QUOTES);
$gender  = htmlspecialchars(trim($_POST['gender']       ?? ''), ENT_QUOTES);
$grade   = htmlspecialchars(trim($_POST['grade']        ?? ''), ENT_QUOTES);
$prev    = htmlspecialchars(trim($_POST['prev_school']  ?? ''), ENT_QUOTES);
$parent  = htmlspecialchars(trim($_POST['parent_name']  ?? ''), ENT_QUOTES);
$phone   = htmlspecialchars(trim($_POST['phone']        ?? ''), ENT_QUOTES);
$email   = htmlspecialchars(trim($_POST['email']        ?? ''), ENT_QUOTES);
$address = htmlspecialchars(trim($_POST['address']      ?? ''), ENT_QUOTES);
$message = htmlspecialchars(trim($_POST['message']      ?? ''), ENT_QUOTES);

// Validate required fields
if (empty($fn) || empty($ln) || empty($dob) || empty($gender) || empty($grade) || empty($parent) || empty($phone) || empty($address)) {
    echo json_encode(['success' => false, 'message' => 'Please complete all required fields.']);
    exit;
}

$to      = 'admissions@careacademy.edu.lr';
$headers = "From: CARE Academy Admissions <noreply@careacademy.edu.lr>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
if ($email) $headers .= "Reply-To: {$parent} <{$email}>\r\n";

$mail_subject = "New Admission Application — {$fn} {$ln} (Grade {$grade})";
$mail_body    = "
<html><body style='font-family:Arial,sans-serif;color:#333'>
<h2 style='color:#4A3414'>New Admission Application</h2>
<h3 style='color:#C8A74E'>Student Information</h3>
<table cellpadding='8' style='border-collapse:collapse;width:100%'>
  <tr><td style='background:#f9f8f4;font-weight:bold;border:1px solid #ddd'>Full Name</td><td style='border:1px solid #ddd'>{$fn} {$ln}</td></tr>
  <tr><td style='background:#f9f8f4;font-weight:bold;border:1px solid #ddd'>Date of Birth</td><td style='border:1px solid #ddd'>{$dob}</td></tr>
  <tr><td style='background:#f9f8f4;font-weight:bold;border:1px solid #ddd'>Gender</td><td style='border:1px solid #ddd'>{$gender}</td></tr>
  <tr><td style='background:#f9f8f4;font-weight:bold;border:1px solid #ddd'>Grade Applied For</td><td style='border:1px solid #ddd'>Grade {$grade}</td></tr>
  <tr><td style='background:#f9f8f4;font-weight:bold;border:1px solid #ddd'>Previous School</td><td style='border:1px solid #ddd'>{$prev}</td></tr>
</table>
<h3 style='color:#C8A74E;margin-top:20px'>Parent / Guardian Information</h3>
<table cellpadding='8' style='border-collapse:collapse;width:100%'>
  <tr><td style='background:#f9f8f4;font-weight:bold;border:1px solid #ddd'>Parent Name</td><td style='border:1px solid #ddd'>{$parent}</td></tr>
  <tr><td style='background:#f9f8f4;font-weight:bold;border:1px solid #ddd'>Phone</td><td style='border:1px solid #ddd'>{$phone}</td></tr>
  <tr><td style='background:#f9f8f4;font-weight:bold;border:1px solid #ddd'>Email</td><td style='border:1px solid #ddd'>{$email}</td></tr>
  <tr><td style='background:#f9f8f4;font-weight:bold;border:1px solid #ddd'>Address</td><td style='border:1px solid #ddd'>{$address}</td></tr>
</table>
" . ($message ? "<p><strong>Additional Notes:</strong><br>" . nl2br($message) . "</p>" : "") . "
<p style='color:#999;font-size:12px;margin-top:20px'>Submitted from careacademy.edu.lr &bull; " . date('Y-m-d H:i') . "</p>
</body></html>";

$sent = mail($to, $mail_subject, $mail_body, $headers);

if ($sent) {
    echo json_encode(['success' => true, 'message' => "Thank you, {$fn}! Your application has been received. We will contact {$parent} within 3–5 business days to confirm next steps."]);
} else {
    echo json_encode(['success' => false, 'message' => 'Application could not be submitted. Please call us or visit the school office.']);
}
