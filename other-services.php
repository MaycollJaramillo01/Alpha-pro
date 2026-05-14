<?php
require_once 'text.php';

$page_name = $NavCopy['other_services'] ?? '';
$PageTitle = sprintf('%s | %s', $page_name, $Company);
$PageDescription = $OtherServicesCopy['page_desc'] ?? '';

include 'header.php';
?>

<?php include 'partials/shared/page-hero.php'; ?>
<?php include 'partials/shared/other-services.php'; ?>
<?php include 'partials/shared/process.php'; ?>

<?php include 'partials/shared/cta.php'; ?>

<?php include 'footer.php'; ?>
