<?php
require_once __DIR__ . '/text.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit;
}

if (!empty($_POST['honeypot'])) {
    header('Location: contact.php');
    exit;
}

$name = trim($_POST['name'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$email = trim($_POST['email'] ?? '');
$service = trim($_POST['service'] ?? '');
$message = trim($_POST['message'] ?? '');

$to = $Mail ?? '';
if (empty($to)) {
    header('Location: contact.php');
    exit;
}

$subject = "New Estimate Request - " . ($Company ?? 'Website');
$lines = [
    "Name: {$name}",
    "Phone: {$phone}",
    "Email: {$email}",
    "Service: {$service}",
    "Message:",
    $message
];
$body = implode("\n", $lines);

$domainHost = parse_url($BaseURL ?? '', PHP_URL_HOST) ?: 'localhost';
$fromEmail = "no-reply@" . $domainHost;

$headers = [];
$headers[] = "From: " . ($Company ?? 'Website') . " <{$fromEmail}>";
if (!empty($email)) {
    $headers[] = "Reply-To: {$email}";
}
$headers[] = "Content-Type: text/plain; charset=UTF-8";

@mail($to, $subject, $body, implode("\r\n", $headers));

header('Location: thank-you.php');
exit;
?>
