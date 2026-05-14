<?php
$servicesListCopy = $ServicesListCopy ?? [];
$servicesLink = $servicesListCopy['link_label'] ?? ($NavCopy['explore_service'] ?? '');
?>

<section class="section-padding services-section" id="services-list">
    <div class="container">
        <div class="section-title">
            <span class="eyebrow"><?php echo htmlspecialchars($servicesListCopy['eyebrow'] ?? ''); ?></span>
            <h2><?php echo htmlspecialchars($servicesListCopy['title'] ?? ''); ?></h2>
            <p><?php echo htmlspecialchars($servicesListCopy['desc'] ?? ''); ?></p>
        </div>
        <div class="services-grid">
            <?php foreach ($ServicesList as $svc): ?>
            <div class="service-card">
                <div class="service-icon">
                    <i class="icon-tool"></i>
                </div>
                <h3><?php echo htmlspecialchars($svc['name']); ?></h3>
                <p><?php echo htmlspecialchars($svc['description']); ?></p>
                <a href="<?php echo $svc['url']; ?>" class="read-more"><?php echo htmlspecialchars($servicesLink); ?></a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
