<?php
require_once __DIR__ . '/text.php';

$requestedSlug = trim((string) ($CurrentServiceSlug ?? ($_GET['service'] ?? '')));
if ($requestedSlug === '' || !isset($ServicesList[$requestedSlug])) {
  $requestedSlug = array_key_first($ServicesList);
}
if ($requestedSlug === null || !isset($ServicesList[$requestedSlug])) {
  $requestedSlug = '';
}

if (!function_exists('vdServicePageImage')) {
  function vdServicePageImage(array $service)
  {
    $slug = trim((string) ($service['slug'] ?? ''));
    $categorySlug = trim((string) ($service['category_slug'] ?? ''));
    $id = (int) ($service['id'] ?? 0);

    $baseDirs = [
      __DIR__ . '/assets/img/gallery/services',
      __DIR__ . '/assets/img/service'
    ];
    $baseRels = [
      'assets/img/gallery/services',
      'assets/img/service'
    ];
    $exts = ['jpg', 'jpeg', 'png', 'webp', 'avif'];

    $candidates = [];
    if ($categorySlug !== '' && $slug !== '') {
      foreach ($exts as $ext) {
        $candidates[] = $categorySlug . '/' . $slug . '.' . $ext;
      }
    }
    if ($slug !== '') {
      foreach ($exts as $ext) {
        $candidates[] = $slug . '.' . $ext;
      }
    }
    if ($id > 0) {
      foreach ($exts as $ext) {
        $candidates[] = $id . '.' . $ext;
      }
    }

    foreach ($baseDirs as $idx => $baseAbs) {
      foreach ($candidates as $candidate) {
        $abs = $baseAbs . '/' . $candidate;
        if (is_file($abs)) {
          return $baseRels[$idx] . '/' . $candidate;
        }
      }
    }

    return 'assets/img/stock/remodel-main.jpg';
  }
}

$CurrentServiceSlug = $requestedSlug;
$serviceData = $requestedSlug !== '' ? $ServicesList[$CurrentServiceSlug] : [];
$serviceName = trim((string) ($serviceData['name'] ?? ($NavCopy['services'] ?? 'Service')));
$serviceDesc = trim((string) ($serviceData['description'] ?? ($HomeServicesCopy['desc'] ?? '')));

$page_name = $serviceName;
$namepage = $serviceName;

$heroImageMain = vdServicePageImage($serviceData);
$detailImage = $heroImageMain;

$pageHeroTitle = $serviceName;
$pageHeroSubtitle = $serviceDesc;
$pageHeroImage = $heroImageMain;

$PageTitle = $serviceName . ' | ' . ($Company ?? 'ALPHA PRO RENOVATION GROUP');
$PageDescription = $serviceDesc !== '' ? $serviceDesc : ($ExHome ?? '');
$canonicalPath = trim((string) ($serviceData['url'] ?? ''));
if ($canonicalPath === '') {
  $canonicalPath = $CurrentServiceSlug !== '' ? ($CurrentServiceSlug . '.php') : 'services.php';
}
$PageCanonical = rtrim((string) ($BaseURL ?? ''), '/') . '/' . ltrim($canonicalPath, '/');

include 'header.php';
include 'partials/shared/page-hero.php';
include 'partials/service/service-details.php';
include 'partials/shared/process.php';
include 'partials/service/service-faq-accordion.php';
include 'partials/service/service-cta-strip.php';
include 'footer.php';
