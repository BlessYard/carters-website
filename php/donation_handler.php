<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request.']);
    exit;
}

$name      = htmlspecialchars(trim($_POST['name']    ?? ''), ENT_QUOTES);
$email     = htmlspecialchars(trim($_POST['email']   ?? ''), ENT_QUOTES);
$phone     = htmlspecialchars(trim($_POST['phone']   ?? ''), ENT_QUOTES);
$amount    = htmlspecialchars(trim($_POST['amount']  ?? ''), ENT_QUOTES);
$purpose   = htmlspecialchars(trim($_POST['purpose'] ?? 'General Support'), ENT_QUOTES);
$message   = htmlspecialchars(trim($_POST['message'] ?? ''), ENT_QUOTES);
$anonymous = isset($_POST['anonymous']) ? 'Yes' : 'No';

if (empty($name) || empty($email) || empty($amount)) {
    echo json_encode(['success' => false, 'message' => 'Please fill in all required fields.']);
    exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Please enter a valid email address.']);
    exit;
}
if (!is_numeric($amount) || $amount <= 0) {
    echo json_encode(['success' => false, 'message' => 'Please enter a valid donation amount.']);
    exit;
}

$to      = 'donations@careacademy.edu.lr';
$headers = "From: CARE Academy Donations <noreply@careacademy.edu.lr>\r\n";
$headers .= "Reply-To: {$name} <{$email}>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$mail_subject = "New Donation Received — LRD " . number_format($amount) . " from {$name}";
$mail_body    = "
<html><body style='font-family:Arial,sans-serif;color:#333'>
<h2 style='color:#4A3414'>New Donation Notification</h2>
<table cellpadding='8' style='border-collapse:collapse;width:100%'>
  <tr><td style='background:#f9f8f4;font-weight:bold;border:1px solid #ddd'>Donor Name</td><td style='border:1px solid #ddd'>{$name}</td></tr>
  <tr><td style='background:#f9f8f4;font-weight:bold;border:1px solid #ddd'>Email</td><td style='border:1px solid #ddd'>{$email}</td></tr>
  <tr><td style='background:#f9f8f4;font-weight:bold;border:1px solid #ddd'>Phone</td><td style='border:1px solid #ddd'>{$phone}</td></tr>
  <tr><td style='background:#f9f8f4;font-weight:bold;border:1px solid #ddd'>Amount</td><td style='border:1px solid #ddd'><strong>LRD " . number_format($amount) . "</strong></td></tr>
  <tr><td style='background:#f9f8f4;font-weight:bold;border:1px solid #ddd'>Purpose</td><td style='border:1px solid #ddd'>{$purpose}</td></tr>
  <tr><td style='background:#f9f8f4;font-weight:bold;border:1px solid #ddd'>Anonymous</td><td style='border:1px solid #ddd'>{$anonymous}</td></tr>
  <tr><td style='background:#f9f8f4;font-weight:bold;border:1px solid #ddd'>Message</td><td style='border:1px solid #ddd'>" . nl2br($message) . "</td></tr>
</table>
<p style='color:#999;font-size:12px;margin-top:20px'>Submitted from careacademy.edu.lr &bull; " . date('Y-m-d H:i') . "</p>
</body></html>";

$sent = mail($to, $mail_subject, $mail_body, $headers);

if ($sent) {
    echo json_encode(['success' => true, 'message' => "Thank you, {$name}! Your donation of LRD " . number_format($amount) . " has been received. We will be in touch shortly. God bless you!"]);
} else {
    echo json_encode(['success' => false, 'message' => 'Submission failed. Please call us or visit the school office directly.']);
}