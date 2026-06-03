<?php
// php/contact_handler.php — handles contact form submission
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
    exit;
}

// Sanitize inputs
$name    = htmlspecialchars(trim($_POST['name']    ?? ''), ENT_QUOTES);
$email   = htmlspecialchars(trim($_POST['email']   ?? ''), ENT_QUOTES);
$phone   = htmlspecialchars(trim($_POST['phone']   ?? ''), ENT_QUOTES);
$subject = htmlspecialchars(trim($_POST['subject'] ?? ''), ENT_QUOTES);
$message = htmlspecialchars(trim($_POST['message'] ?? ''), ENT_QUOTES);

// Validate
if (empty($name) || empty($email) || empty($subject) || empty($message)) {
    echo json_encode(['success' => false, 'message' => 'Please fill in all required fields.']);
    exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Please enter a valid email address.']);
    exit;
}

// School email (update to actual address)
$to      = 'info@careacademy.edu.lr';
$headers = "From: CARE Academy Website <noreply@careacademy.edu.lr>\r\n";
$headers .= "Reply-To: {$name} <{$email}>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$mail_subject = "New Contact Message: {$subject}";
$mail_body    = "
<html><body style='font-family:Arial,sans-serif;color:#333'>
<h2 style='color:#4A3414'>New Contact Form Submission</h2>
<table cellpadding='8' style='border-collapse:collapse;width:100%'>
  <tr><td style='background:#f9f8f4;font-weight:bold;border:1px solid #ddd'>Name</td><td style='border:1px solid #ddd'>{$name}</td></tr>
  <tr><td style='background:#f9f8f4;font-weight:bold;border:1px solid #ddd'>Email</td><td style='border:1px solid #ddd'>{$email}</td></tr>
  <tr><td style='background:#f9f8f4;font-weight:bold;border:1px solid #ddd'>Phone</td><td style='border:1px solid #ddd'>{$phone}</td></tr>
  <tr><td style='background:#f9f8f4;font-weight:bold;border:1px solid #ddd'>Subject</td><td style='border:1px solid #ddd'>{$subject}</td></tr>
  <tr><td style='background:#f9f8f4;font-weight:bold;border:1px solid #ddd'>Message</td><td style='border:1px solid #ddd'>" . nl2br($message) . "</td></tr>
</table>
<p style='color:#999;font-size:12px;margin-top:20px'>Sent from careacademy.edu.lr contact form &bull; " . date('Y-m-d H:i') . "</p>
</body></html>";

$sent = mail($to, $mail_subject, $mail_body, $headers);

if ($sent) {
    echo json_encode(['success' => true, 'message' => 'Thank you! Your message has been sent. We will respond within 1–2 business days.']);
} else {
    echo json_encode(['success' => false, 'message' => 'Message could not be sent. Please call us directly or email us.']);
}
