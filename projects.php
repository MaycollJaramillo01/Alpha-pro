<?php
require_once 'text.php';
$page_name = $NavCopy['projects'] ?? '';
include 'header.php';
?>

<div class="page-wrapper">
    <!-- Hero Section -->
    <?php include 'partials/shared/page-hero.php'; ?>

    <!-- Intro -->
    <?php include 'partials/projects/intro.php'; ?>

    <!-- Before/After -->
    <?php include __DIR__ . '/partials/home/before-after.php'; ?>

    <!-- Stats -->
    <?php include 'partials/projects/stats.php'; ?>

    <!-- Main Grid -->
    <?php include 'partials/projects/project-grid.php'; ?>
    <?php include 'partials/shared/contact-form.php'; ?>
    <?php include 'partials/shared/trusted-partners.php'; ?>

    <!-- CTA -->
    <?php include 'partials/shared/cta.php'; ?>
</div>
<?php include 'footer.php'; ?>
