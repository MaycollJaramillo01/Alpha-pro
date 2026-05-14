<?php
session_start();
require_once __DIR__ . '/../text.php';

function generateCaptchaCode($length = 5) {
    $characters = '23456789ABCDEFGHJKLMNPQRSTUVWXYZ';
    $code = '';
    for ($i = 0; $i < $length; $i++) {
        $code .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $code;
}

$code = generateCaptchaCode();
$_SESSION['captcha_code'] = $code;

header('Content-Type: image/svg+xml');
header('Cache-Control: no-cache, must-revalidate');

// SVG parameters
$width = 150;
$height = 50;
?>
<?php
$bgColor   = $BrandColors['neutral']  ?? '#E5E5E5';
$textColor = $BrandColors['primary']  ?? '#000000';
$lineColor = $BrandColors['accent']   ?? '#C9973C';
?>
<svg width="<?php echo $width; ?>" height="<?php echo $height; ?>" xmlns="http://www.w3.org/2000/svg">
  <!-- Background -->
  <rect width="100%" height="100%" fill="<?php echo $bgColor; ?>"/>
  
  <!-- Noise/Lines for security -->
  <?php for($i=0; $i<5; $i++): ?>
  <line x1="<?php echo rand(0,$width); ?>" y1="<?php echo rand(0,$height); ?>" x2="<?php echo rand(0,$width); ?>" y2="<?php echo rand(0,$height); ?>" stroke="<?php echo $lineColor; ?>" stroke-opacity="0.35" stroke-width="1" />
  <?php endfor; ?>

  <!-- Text -->
  <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="Arial, sans-serif" font-size="24" font-weight="bold" fill="<?php echo $textColor; ?>" letter-spacing="4">
    <?php echo $code; ?>
  </text>
</svg>

