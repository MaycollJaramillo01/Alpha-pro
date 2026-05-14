<?php
$bbb_url = $DirectoryLinks['bbb'] ?? '';
$buildzoom_url = $DirectoryLinks['buildzoom'] ?? '';
$thumbtack_url = $DirectoryLinks['thumbtack'] ?? '';
$homeadvisor_url = $DirectoryLinks['homeadvisor'] ?? '';

$LogoAssetsBase = $LogoAssetsBase ?? 'assets/img/logo/';
$SiteLogoFooter = $SiteLogoFooter ?? $LogoAssetsBase . 'alpha-pro-footer-white.png';

$footerSocialLogoDirAbs = __DIR__ . '/assets/img/brands/social';
$footerSocialLogoDirRel = 'assets/img/brands/social';
$footerSocialLogos = [];
$footerSocialLogoFiles = [
    'facebook' => 'facebook.svg',
    'messenger' => 'messenger.svg',
    'instagram' => 'instagram.svg',
    'google' => 'google.svg',
    'tiktok' => 'tiktok.svg',
    'whatsapp' => 'whatsapp.svg',
    'bbb' => 'bbb.png',
    'buildzoom' => 'buildzoom.png',
    'thumbtack' => 'thumbtack.svg',
    'homeadvisor' => 'homeadvisor.svg'
];

foreach ($footerSocialLogoFiles as $key => $file) {
    $abs = $footerSocialLogoDirAbs . '/' . $file;
    if (is_file($abs)) {
        $footerSocialLogos[$key] = $footerSocialLogoDirRel . '/' . $file;
    }
}
?>

<style>
    :root {
        /* Variables dinámicas desde PHP */
        --f-bg: <?php echo $BrandColors['secondary']; ?>;      /* Fondo Oscuro */
        --f-text: #F5F2EE;                                     /* Texto Claro */
        --f-accent: <?php echo $BrandColors['accent']; ?>;     /* Acento (Dorado/Color Principal) */
        --f-border: rgba(255, 255, 255, 0.1);
    }

    .site-footer {
        background-color: var(--f-bg);
        color: var(--f-text);
        padding: 80px 0 30px;
        font-family: var(--font-body);
        position: relative;
        overflow: hidden;
        border-top: 5px solid var(--f-accent); /* Línea sólida premium arriba */
    }

    .footer-container {
        max-width: 1300px;
        margin: 0 auto;
        padding: 0 25px;
    }

    /* GRID PRINCIPAL */
    .footer-grid {
        display: grid;
        /* Desktop: 4 columnas desiguales para mejor balance */
        grid-template-columns: 1.4fr 0.8fr 1fr 1.2fr;
        gap: 50px;
        margin-bottom: 60px;
        grid-template-areas: 
            "brand links1 links2 contact";
    }

    /* --- COLUMNA MARCA --- */
    .f-brand { grid-area: brand; }
    
    .f-logo {
        width: min(240px, 100%);
        height: auto;
        margin-bottom: 25px;
        display: block;
        object-fit: contain;
    }
    img.f-logo{
        border: 0;
        border-radius: 0;
    }
    .f-desc {
        font-size: 0.95rem;
        line-height: 1.6;
        opacity: 0.7;
        margin-bottom: 30px;
        max-width: 300px;
    }

    .f-socials {
        display: flex;
        gap: 12px;
    }

    .f-social-btn {
        width: 40px; height: 40px;
        background: rgba(255,255,255,0.05);
        display: flex; align-items: center; justify-content: center;
        border-radius: 4px; /* Cuadrado redondeado para look construcción */
        color: #fff;
        text-decoration: none;
        transition: 0.3s;
        border: 1px solid transparent;
    }

    .f-social-btn img {
        width: 18px;
        height: 18px;
        object-fit: contain;
        display: block;
    }

    .f-social-btn:hover {
        background: transparent;
        border-color: var(--f-accent);
        color: var(--f-accent);
        transform: translateY(-3px);
    }

    /* --- COLUMNAS ENLACES --- */
    .f-links-1 { grid-area: links1; }
    .f-links-2 { grid-area: links2; }

    .f-title {
        color: #fff;
        font-size: 1.1rem;
        font-weight: 700;
        margin-bottom: 25px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .f-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .f-list li { margin-bottom: 12px; }

    .f-list a {
        color: rgba(255,255,255,0.7);
        text-decoration: none;
        transition: 0.3s;
        font-size: 0.95rem;
        display: inline-block;
    }

    .f-list a:hover {
        color: var(--f-accent);
        transform: translateX(5px);
    }

    /* --- COLUMNA CONTACTO --- */
    .f-contact { grid-area: contact; }

    .contact-row {
        display: flex;
        align-items: flex-start;
        gap: 15px;
        margin-bottom: 20px;
    }

    .c-icon {
        color: var(--f-accent);
        font-size: 1.1rem;
        margin-top: 3px; /* Ajuste óptico */
    }

    .c-text span, .c-text a {
        display: block;
        color: rgba(255,255,255,0.8);
        text-decoration: none;
        line-height: 1.5;
        font-size: 0.95rem;
        transition: 0.3s;
    }

    .c-text a:hover { color: var(--f-accent); }
    .c-label {
        font-size: 0.75rem;
        text-transform: uppercase;
        opacity: 0.5;
        margin-bottom: 2px;
        display: block;
    }

    /* --- COPYRIGHT BAR --- */
    .footer-bar {
        border-top: 1px solid var(--f-border);
        padding-top: 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 20px;
        font-size: 0.85rem;
        color: rgba(255,255,255,0.5);
    }

    .legal-badges {
        display: flex;
        gap: 15px;
    }

    .legal-badges span {
        color: var(--f-accent);
        font-weight: 600;
        background: rgba(255,255,255,0.05);
        padding: 4px 10px;
        border-radius: 4px;
    }

    /* =========================================
       OPTIMIZACIÓN MOBILE
       ========================================= */
    @media (max-width: 991px) {
        .footer-grid {
            /* Tablet: 2 filas, 2 columnas */
            grid-template-columns: 1fr 1fr;
            grid-template-areas: 
                "brand contact"
                "links1 links2";
            gap: 40px;
        }
        .f-desc { max-width: 100%; }
    }

    @media (max-width: 600px) {
        .site-footer { padding: 50px 0 30px; }
        
        .footer-grid {
            /* Mobile: Layout híbrido */
            grid-template-columns: 1fr 1fr; /* Mantenemos 2 columnas para los enlaces */
            gap: 30px;
            grid-template-areas: 
                "brand brand"   /* Marca ocupa todo el ancho arriba */
                "links1 links2" /* Enlaces lado a lado (Ahorra espacio vertical) */
                "contact contact"; /* Contacto ocupa todo el ancho abajo */
        }

        /* 1. Brand Section Centrada */
        .f-brand { 
            text-align: center; 
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .f-logo { margin: 0 auto 20px auto; }
        .f-socials { justify-content: center; }

        /* 2. Enlaces alineados a la izquierda pero en grilla */
        .f-title { font-size: 1rem; margin-bottom: 15px; }

        /* 3. Contacto alineado a la izquierda (Mejor legibilidad) */
        .f-contact { 
            margin-top: 10px; 
            padding-top: 20px;
            border-top: 1px solid var(--f-border);
        }

        .footer-bar {
            flex-direction: column;
            text-align: center;
        }
    }
</style>

<footer class="site-footer">
    <div class="footer-container">
        
        <div class="footer-grid">
            
            <div class="f-brand">
                <a href="<?php echo $BaseURL; ?>">
                    <img src="<?php echo $SiteLogoFooter; ?>" alt="<?php echo $Company; ?>" class="f-logo" width="1555" height="1384">
                </a>
                <p class="f-desc" style="color:#fff;">
                    <?php echo htmlspecialchars($FooterCopy['desc'] ?? ''); ?>
                </p>
                <div class="f-socials">
                    <?php if(!empty($facebook)): ?>
                        <a href="<?php echo $facebook; ?>" target="_blank" rel="noopener" class="f-social-btn" title="Facebook">
                            <?php if (!empty($footerSocialLogos['facebook'])): ?>
                                <img src="<?php echo htmlspecialchars($footerSocialLogos['facebook']); ?>" alt="Facebook">
                            <?php else: ?>
                                <i class="fab fa-facebook-f"></i>
                            <?php endif; ?>
                        </a>
                    <?php endif; ?>
                    <?php if(!empty($messenger)): ?>
                        <a href="<?php echo $messenger; ?>" target="_blank" rel="noopener" class="f-social-btn" title="Messenger">
                            <?php if (!empty($footerSocialLogos['messenger'])): ?>
                                <img src="<?php echo htmlspecialchars($footerSocialLogos['messenger']); ?>" alt="Messenger">
                            <?php else: ?>
                                <i class="fab fa-facebook-messenger"></i>
                            <?php endif; ?>
                        </a>
                    <?php endif; ?>
                    <?php if(!empty($instagram)): ?>
                        <a href="<?php echo $instagram; ?>" target="_blank" rel="noopener" class="f-social-btn" title="Instagram">
                            <?php if (!empty($footerSocialLogos['instagram'])): ?>
                                <img src="<?php echo htmlspecialchars($footerSocialLogos['instagram']); ?>" alt="Instagram">
                            <?php else: ?>
                                <i class="fab fa-instagram"></i>
                            <?php endif; ?>
                        </a>
                    <?php endif; ?>
                    <?php if(!empty($google)): ?>
                        <a href="<?php echo $google; ?>" target="_blank" rel="noopener" class="f-social-btn" title="Google">
                            <?php if (!empty($footerSocialLogos['google'])): ?>
                                <img src="<?php echo htmlspecialchars($footerSocialLogos['google']); ?>" alt="Google">
                            <?php else: ?>
                                <i class="fa-brands fa-google"></i>
                            <?php endif; ?>
                        </a>
                    <?php endif; ?>
                    <?php if(!empty($tiktok)): ?>
                        <a href="<?php echo $tiktok; ?>" target="_blank" rel="noopener" class="f-social-btn" title="TikTok">
                            <?php if (!empty($footerSocialLogos['tiktok'])): ?>
                                <img src="<?php echo htmlspecialchars($footerSocialLogos['tiktok']); ?>" alt="TikTok">
                            <?php else: ?>
                                <i class="fa-brands fa-tiktok"></i>
                            <?php endif; ?>
                        </a>
                    <?php endif; ?>
                    <?php if(!empty($bbb_url)): ?>
                        <a href="<?php echo $bbb_url; ?>" target="_blank" rel="noopener" class="f-social-btn" title="BBB">
                            <?php if (!empty($footerSocialLogos['bbb'])): ?>
                                <img src="<?php echo htmlspecialchars($footerSocialLogos['bbb']); ?>" alt="BBB">
                            <?php else: ?>
                                <i class="fa-solid fa-award"></i>
                            <?php endif; ?>
                        </a>
                    <?php endif; ?>
                    <?php if(!empty($buildzoom_url)): ?>
                        <a href="<?php echo $buildzoom_url; ?>" target="_blank" rel="noopener" class="f-social-btn" title="BuildZoom">
                            <?php if (!empty($footerSocialLogos['buildzoom'])): ?>
                                <img src="<?php echo htmlspecialchars($footerSocialLogos['buildzoom']); ?>" alt="BuildZoom">
                            <?php else: ?>
                                <i class="fa-solid fa-building"></i>
                            <?php endif; ?>
                        </a>
                    <?php endif; ?>
                    <?php if(!empty($thumbtack_url)): ?>
                        <a href="<?php echo $thumbtack_url; ?>" target="_blank" rel="noopener" class="f-social-btn" title="Thumbtack">
                            <?php if (!empty($footerSocialLogos['thumbtack'])): ?>
                                <img src="<?php echo htmlspecialchars($footerSocialLogos['thumbtack']); ?>" alt="Thumbtack">
                            <?php else: ?>
                                <i class="fa-solid fa-thumbs-up"></i>
                            <?php endif; ?>
                        </a>
                    <?php endif; ?>
                    <?php if(!empty($homeadvisor_url)): ?>
                        <a href="<?php echo $homeadvisor_url; ?>" target="_blank" rel="noopener" class="f-social-btn" title="HomeAdvisor">
                            <?php if (!empty($footerSocialLogos['homeadvisor'])): ?>
                                <img src="<?php echo htmlspecialchars($footerSocialLogos['homeadvisor']); ?>" alt="HomeAdvisor">
                            <?php else: ?>
                                <i class="fa-solid fa-house"></i>
                            <?php endif; ?>
                        </a>
                    <?php endif; ?>
                    <a href="<?php echo $whatsapp; ?>" target="_blank" rel="noopener" class="f-social-btn" title="WhatsApp">
                        <?php if (!empty($footerSocialLogos['whatsapp'])): ?>
                            <img src="<?php echo htmlspecialchars($footerSocialLogos['whatsapp']); ?>" alt="WhatsApp">
                        <?php else: ?>
                            <i class="fab fa-whatsapp"></i>
                        <?php endif; ?>
                    </a>
                    <a href="contact.php" class="f-social-btn"><i class="fas fa-envelope"></i></a>
                </div>
            </div>

            <div class="f-links-1">
                <h4 class="f-title"><?php echo $FooterCopy['titles']['company'] ?? ''; ?></h4>
                <ul class="f-list">
                    <li><a href="<?php echo $BaseURL; ?>"><?php echo $NavCopy['home'] ?? ''; ?></a></li>
                    <li><a href="about.php"><?php echo $NavCopy['about'] ?? ''; ?></a></li>
                    <li><a href="projects.php"><?php echo $NavCopy['projects'] ?? ''; ?></a></li>
                    <li><a href="contact.php"><?php echo $NavCopy['contact'] ?? ''; ?></a></li>
                </ul>
            </div>

            <div class="f-links-2">
                <h4 class="f-title"><?php echo $FooterCopy['titles']['services'] ?? ''; ?></h4>
                <ul class="f-list">
                    <?php 
                    $limit = 0;
                    foreach ($ServicesList as $svc) {
                        if($limit >= 5) break; 
                        echo '<li><a href="'.$svc['url'].'">'.$svc['name'].'</a></li>';
                        $limit++;
                    }
                    ?>
                </ul>
            </div>

            <div class="f-contact">
                <h4 class="f-title"><?php echo $FooterCopy['titles']['contact'] ?? ''; ?></h4>
                
                <div class="contact-row">
                    <i class="fas fa-map-marker-alt c-icon"></i>
                    <div class="c-text">
                        <span class="c-label"><?php echo $FooterCopy['labels']['location'] ?? ''; ?></span>
                        <span><?php echo $Address; ?></span>
                    </div>
                </div>

                <div class="contact-row">
                    <i class="fas fa-phone-alt c-icon"></i>
                    <div class="c-text">
                        <span class="c-label"><?php echo $FooterCopy['labels']['phone'] ?? ''; ?></span>
                        <a href="<?php echo $PhoneRef; ?>"><?php echo $Phone; ?></a>
                    </div>
                </div>

                <div class="contact-row">
                    <i class="fas fa-clock c-icon"></i>
                    <div class="c-text">
                        <span class="c-label"><?php echo $FooterCopy['labels']['hours'] ?? ''; ?></span>
                        <span><?php echo $Schedule; ?></span>
                    </div>
                </div>
            </div>

        </div>

        <div class="footer-bar">
            <div class="copyright">
                &copy; <?php echo date('Y'); ?> <strong><?php echo $Company; ?></strong>. <?php echo $FooterCopy['copyright_suffix'] ?? ''; ?>
            </div>
            <div class="legal-badges">
                <span><?php echo $LicenseNote; ?></span>
                <span><?php echo $BilingualNote; ?></span>
            </div>
        </div>

    </div>
</footer>

<style>
    .floating-actions {
        position: fixed;
        right: 18px;
        bottom: 18px;
        z-index: 9999;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .fabtn {
        width: 52px;
        height: 52px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        text-decoration: none;
        box-shadow: 0 12px 30px rgba(0,0,0,0.2);
        border: 1px solid rgba(255,255,255,0.2);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .fabtn:hover {
        transform: translateY(-2px);
        box-shadow: 0 16px 36px rgba(0,0,0,0.25);
    }

    .fabtn.call { background: var(--brand-primary); }
    .fabtn.whatsapp { background: #25D366; }
    .fabtn.messenger { background: #0084FF; }
    .fabtn.fb { background: #1877F2; }
    .fabtn.instagram { background: #E1306C; }
    .fabtn.google { background: #4285F4; }
    .fabtn.tiktok { background: #111111; }

    .bubble-mobile { display: inline-flex; }
</style>

<div class="floating-actions" aria-label="<?php echo htmlspecialchars($FooterCopy['titles']['contact'] ?? ''); ?>">
    <a class="fabtn call" href="<?php echo $PhoneRef; ?>" aria-label="<?php echo htmlspecialchars($AriaCopy['call'] ?? ''); ?>">
        <i class="fas fa-phone-alt"></i>
    </a>
    <?php if(!empty($whatsapp)): ?>
        <a class="fabtn whatsapp" href="<?php echo $whatsapp; ?>" target="_blank" aria-label="<?php echo htmlspecialchars($AriaCopy['whatsapp'] ?? ''); ?>">
            <i class="fab fa-whatsapp"></i>
        </a>
    <?php endif; ?>
    <?php if(!empty($messenger)): ?>
        <a class="fabtn messenger" href="<?php echo $messenger; ?>" target="_blank" aria-label="<?php echo htmlspecialchars($AriaCopy['messenger'] ?? ''); ?>">
            <i class="fab fa-facebook-messenger"></i>
        </a>
    <?php endif; ?>
    <?php if(!empty($facebook)): ?>
        <a class="fabtn fb bubble-mobile" href="<?php echo $facebook; ?>" target="_blank" aria-label="<?php echo htmlspecialchars($AriaCopy['facebook'] ?? ''); ?>">
            <i class="fab fa-facebook-f"></i>
        </a>
    <?php endif; ?>
    <?php if(!empty($instagram)): ?>
        <a class="fabtn instagram bubble-mobile" href="<?php echo $instagram; ?>" target="_blank" aria-label="<?php echo htmlspecialchars($AriaCopy['instagram'] ?? ''); ?>">
            <i class="fab fa-instagram"></i>
        </a>
    <?php endif; ?>
    <?php if(!empty($google)): ?>
        <a class="fabtn google bubble-mobile" href="<?php echo $google; ?>" target="_blank" aria-label="<?php echo htmlspecialchars($AriaCopy['google'] ?? ''); ?>">
            <i class="fab fa-google"></i>
        </a>
    <?php endif; ?>
    <?php if(!empty($tiktok)): ?>
        <a class="fabtn tiktok bubble-mobile" href="<?php echo $tiktok; ?>" target="_blank" aria-label="<?php echo htmlspecialchars($AriaCopy['tiktok'] ?? ''); ?>">
            <i class="fab fa-tiktok"></i>
        </a>
    <?php endif; ?>
</div>

<script src="assets/js/jquery-3.7.1.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
