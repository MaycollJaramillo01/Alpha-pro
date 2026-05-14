<?php
$defaultPageName = $namepage ?? ($NavCopy['home'] ?? '');
$PageTitle = $PageTitle ?? sprintf('%s | %s', $Company ?? '', $defaultPageName);
$PageDescription = $PageDescription ?? ($ExHome ?? ($Home[0] ?? ''));
$canonicalPath = basename($_SERVER['SCRIPT_NAME'] ?? '') ?: '';
$PageCanonical = $PageCanonical ?? rtrim($BaseURL ?? '', '/') . ($canonicalPath ? '/' . ltrim($canonicalPath, '/') : '/');

// Aseguramos variables de redes sociales
$fb_url = $facebook ?? '';
$insta_url = $instagram ?? '';
$goo_url = $google ?? '';
$tik_url = $tiktok ?? '';

$LogoAssetsBase = 'assets/img/logo/';
$SiteLogoFavicon = $LogoAssetsBase . 'alpha-pro-icon-gold.png';
$SiteLogoHeader = $LogoAssetsBase . 'alpha-pro-header-black.png';

$headerCategoryMenus = [];
if (!empty($ServicesByCategory) && is_array($ServicesByCategory) && !empty($ServicesList) && is_array($ServicesList)) {
    foreach ($ServicesByCategory as $category) {
        if (!is_array($category)) continue;

        $categoryLabel = trim((string) ($category['label'] ?? ''));
        if ($categoryLabel === '') continue;

        $summarySlug = trim((string) ($category['summary_slug'] ?? ''));
        if ($summarySlug === '') continue;

        $services = [];
        if (isset($ServicesList[$summarySlug])) {
            $services[] = $ServicesList[$summarySlug];
        }

        $serviceSlugs = $category['service_slugs'] ?? [];
        if (is_array($serviceSlugs)) {
            foreach ($serviceSlugs as $serviceSlug) {
                $serviceSlug = trim((string) $serviceSlug);
                if ($serviceSlug === '' || !isset($ServicesList[$serviceSlug])) continue;

                $exists = false;
                foreach ($services as $row) {
                    if (($row['slug'] ?? '') === $serviceSlug) {
                        $exists = true;
                        break;
                    }
                }
                if (!$exists) $services[] = $ServicesList[$serviceSlug];
            }
        }

        if (!empty($services)) {
            $headerCategoryMenus[$summarySlug] = [
                'label' => $categoryLabel,
                'services' => $services
            ];
        }
    }
}

// Dropdown 1: Kitchen & Bath Remodeling
$headerKitchenMenu = $headerCategoryMenus['kitchen-remodeling'] ?? ['label' => 'Kitchen & Bath', 'services' => []];

// Dropdown 2: Flooring, Drywall & Structure, Systems (sub-grupos)
$headerBuildGroups = [
    $headerCategoryMenus['flooring-installation']      ?? ['label' => 'Flooring & Finishes',   'services' => []],
    $headerCategoryMenus['drywall-installation-repair'] ?? ['label' => 'Drywall & Structure',   'services' => []],
    $headerCategoryMenus['lighting-electrical-upgrades'] ?? ['label' => 'Systems & Upgrades',   'services' => []],
];

// Dropdown 3: Outdoor & Restoration
$headerOutdoorGroups = [
    $headerCategoryMenus['patio-outdoor-living']     ?? ['label' => 'Outdoor & Concrete',       'services' => []],
    $headerCategoryMenus['water-damage-restoration'] ?? ['label' => 'Restoration & Specialty',  'services' => []],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $PageTitle; ?></title>
    <meta name="description" content="<?php echo $PageDescription; ?>">
    <link rel="canonical" href="<?php echo $PageCanonical; ?>">
    <link rel="icon" type="image/png" href="<?php echo $SiteLogoFavicon; ?>">
    <link rel="apple-touch-icon" href="<?php echo $SiteLogoFavicon; ?>">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
    
    <link rel="stylesheet" href="assets/css/style.css">
    
    <style>
        <?php echo $BrandCSSVars; ?>

        .site-header {
            background: #ffffff;
            border-bottom: 1px solid rgba(0, 0, 0, 0.08);
            box-shadow: 0 10px 24px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .site-header + main {
            margin: 0;
            padding: 0;
        }

        .site-header + main > :first-child {
            margin-top: 0 !important;
        }

        .header-main {
            padding: 0;
        }

        .header-container {
            display: grid;
            grid-template-columns: auto minmax(0, 1fr) auto;
            align-items: center;
            gap: 16px;
            min-height: 76px;
        }

        .brand {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            flex-shrink: 0;
            max-width: 108px;
        }

        .logo-img {
            height: 76px;
            max-height: 78px;
            max-width: 108px;
            width: auto;
            display: block;
            object-fit: contain;
            transition: all 0.3s ease;
        }

        .brand-text {
            display: flex;
            flex-direction: column;
            line-height: 1;
        }

        .brand-title {
            font-weight: 800;
            letter-spacing: 0.5px;
            color: var(--brand-secondary);
            font-size: 1rem;
            text-transform: uppercase;
        }

        .brand-sub {
            font-size: 0.7rem;
            letter-spacing: 3px;
            color: var(--brand-primary);
            text-transform: uppercase;
            margin-top: 4px;
        }

        .main-nav {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .main-nav ul {
            display: flex;
            align-items: center;
            gap: 4px;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .main-nav > ul > li > a {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            white-space: nowrap;
            line-height: 1;
            min-height: 36px;
            padding: 0 8px;
            text-decoration: none;
            color: #1f1f1f;
            font-weight: 600;
            font-size: 0.78rem;
            letter-spacing: 0.3px;
            transition: color 0.2s ease;
        }

        .dropdown-arrow {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            font-size: 0.72rem;
            transform: translateY(-1px);
            margin-left: 2px;
        }

        .main-nav > ul > li > a:hover,
        .main-nav > ul > li > a:focus {
            color: var(--brand-primary);
        }

        .has-dropdown {
            position: relative;
        }

        .dropdown {
            position: absolute;
            top: calc(100% + 4px);
            left: 0;
            min-width: 200px;
            background: #ffffff;
            border: 1px solid rgba(0, 0, 0, 0.09);
            border-radius: 10px;
            padding: 6px 0;
            box-shadow: 0 12px 36px rgba(0, 0, 0, 0.11);
            opacity: 0;
            visibility: hidden;
            transform: translateY(8px);
            transition: opacity 0.18s ease, transform 0.18s ease, visibility 0.18s;
            z-index: 10;
        }

        .has-dropdown:hover .dropdown,
        .has-dropdown:focus-within .dropdown {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .has-dropdown.open > a .dropdown-arrow {
            transform: rotate(180deg);
        }

        /* ── Dropdown simple (Kitchen & Bath) ── */
        .dropdown li a {
            display: block;
            padding: 9px 18px;
            color: #1f1f1f;
            text-decoration: none;
            font-size: 0.88rem;
            transition: color 0.15s, background 0.15s;
        }
        .dropdown li a:hover {
            background: rgba(0,0,0,0.04);
            color: var(--brand-primary);
            padding-left: 22px;
        }

        /* ── Dropdown agrupado (Flooring & Repairs / Outdoor & More) ── */
        .dropdown--services {
            width: 420px;
            min-width: 0;
            max-width: 420px;
            padding: 6px 0;
            display: flex;
            flex-direction: column;
        }

        /* Evitar overflow por la derecha */
        .has-dropdown:last-of-type .dropdown--services,
        .dropdown--services.align-right {
            left: auto;
            right: 0;
        }

        .dropdown-group {
            list-style: none;
            padding: 10px 16px 12px;
            border-bottom: 1px solid rgba(0,0,0,0.07);
            margin: 0;
        }
        .dropdown-group:last-child { border-bottom: none; }

        .dropdown-group__title {
            display: block;
            margin: 0 0 7px;
            color: #8a6200;
            font-size: 0.63rem;
            font-weight: 800;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            font-family: 'Montserrat', Arial, sans-serif;
        }

        .dropdown-group__list {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
        }

        .dropdown-group__list > li {
            width: 50%;
            box-sizing: border-box;
        }

        .dropdown .dropdown-group__list li a {
            display: block;
            padding: 5px 8px 5px 0;
            font-size: 0.83rem;
            line-height: 1.3;
            color: #1f1f1f;
            text-decoration: none;
            transition: color 0.15s;
            white-space: normal;
        }
        .dropdown .dropdown-group__list li a:hover {
            color: var(--brand-accent);
            background: none;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 12px;
            justify-self: end;
        }

        /* --- REDES SOCIALES ESTILOS (Global) --- */
        .header-socials {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .social-icon-link {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: #f0f2f5; /* Gris un poco más visible */
            color: var(--brand-secondary);
            display: flex; /* Flex para centrar el icono */
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 1rem;
            flex-shrink: 0; /* Evita que se aplasten */
            border: 1px solid rgba(0,0,0,0.05);
        }

        .social-icon-link:hover {
            background-color: var(--brand-primary);
            color: #fff;
            transform: translateY(-2px);
        }

        .btn-estimate {
            background: var(--brand-accent);
            color: var(--brand-secondary);
            padding: 10px 20px;
            border-radius: 999px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.72rem;
            border: none;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s ease;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.12);
            white-space: nowrap;
        }

        .btn-estimate:hover,
        .btn-estimate:focus {
            transform: translateY(-1px);
            color: var(--brand-secondary);
            box-shadow: 0 16px 30px rgba(0, 0, 0, 0.18);
        }

        .mobile-toggle {
            display: none;
            width: 44px;
            height: 44px;
            border: 1px solid rgba(0, 0, 0, 0.12);
            border-radius: 10px;
            background: #ffffff;
            align-items: center;
            justify-content: center;
            gap: 4px;
            flex-direction: column;
        }

        .mobile-toggle span {
            width: 22px;
            height: 2px;
            background: #1f1f1f;
            display: block;
            border-radius: 2px;
        }

        .mobile-menu-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.35);
            z-index: 999;
        }

        body.nav-open .mobile-menu-overlay {
            display: block;
        }

        .menu-close {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: #1f1f1f;
        }

        @media (max-width: 991px) {
            .header-main {
                padding: 10px 0;
            }

            .logo-img {
                height: 58px;
                max-height: 60px;
                max-width: 82px;
            }

            .header-container {
                min-height: 66px;
            }

            .brand-text {
                display: none;
            }

            .main-nav {
                position: fixed;
                top: 0;
                right: 0;
                width: 85%;
                height: 100vh;
                background: #ffffff;
                padding: 28px 20px;
                transition: transform 0.3s ease;
                transform: translateX(110%);
                flex-direction: column;
                align-items: flex-start;
                justify-content: flex-start;
                gap: 24px;
                z-index: 1000;
                overflow-y: auto;
            }

            .main-nav.is-open {
                transform: translateX(0);
            }

            .menu-close {
                display: inline-flex;
                align-self: flex-end;
            }

            .main-nav ul {
                flex-direction: column;
                align-items: flex-start;
                width: 100%;
                gap: 0;
            }

            .main-nav ul li {
                width: 100%;
            }

            /* Estilos generales para enlaces del menú */
            .main-nav ul li > a {
                display: block;
                padding: 14px 4px;
                width: 100%;
                border-bottom: 1px solid rgba(0, 0, 0, 0.08);
            }

            .dropdown {
                position: static;
                opacity: 1;
                visibility: visible;
                transform: none;
                border: none;
                box-shadow: none;
                padding: 0;
                display: none;
                width: 100%;
            }

            .has-dropdown.open .dropdown {
                display: block;
            }

            .dropdown li a {
                padding-left: 16px;
            }

            .dropdown--services {
                min-width: 100%;
                max-width: 100%;
                display: flex;
                flex-direction: column;
                padding: 0;
                border: none;
                box-shadow: none;
            }

            .dropdown-group {
                padding: 8px 0 8px 10px;
                border-bottom: 1px solid rgba(0, 0, 0, 0.07);
                border-left: none;
                border-right: none;
                border-top: none;
                border-radius: 0;
            }
            .dropdown-group:last-child { border-bottom: none; }

            .dropdown-group__title {
                margin-bottom: 4px;
                font-size: 0.68rem;
            }

            .dropdown-group__list > li {
                width: 50%;
            }

            .dropdown-group__list li a {
                padding: 6px 4px 6px 0;
                font-size: 0.88rem;
            }

            .header-actions .btn-estimate,
            .header-actions .header-socials {
                display: none;
            }

            .mobile-toggle {
                display: inline-flex;
            }

            .mobile-cta {
                margin-top: 20px;
                display: flex;
                flex-direction: column;
                gap: 20px;
                width: 100%;
                /* Importante: quitamos borde inferior del contenedor CTA */
                border-bottom: none !important; 
            }

            /* Corrección para que el botón de estimado no herede estilos de enlace de menú */
            .mobile-cta a.btn-estimate {
                width: 100%;
                text-align: center;
                display: flex; 
                border-bottom: none;
                padding: 14px;
            }

            /* --- CORRECCIÓN DE REDES SOCIALES EN MÓVIL --- */
            .mobile-socials {
                display: flex;
                justify-content: center;
                gap: 15px;
                margin-top: 10px;
                padding-bottom: 20px;
            }

            /* Forzamos estilos para los iconos dentro del menú móvil para sobreescribir los estilos generales de 'a' */
            .mobile-socials .social-icon-link {
                display: inline-flex !important; /* Sobreescribe display: block */
                width: 36px !important;         /* Restaura el ancho */
                border-bottom: none !important; /* Quita la línea de abajo */
                padding: 0 !important;          /* Quita el padding de menú */
                background-color: #f0f2f5;      /* Asegura el fondo */
            }
        }
    </style>

<?php
/* =====================================================
   JSON-LD — LocalBusiness / GeneralContractor
   Genera structured data dinámico usando text.php vars
   ===================================================== */
$jsonld_phone  = preg_replace('/[^0-9+]/', '', ($Phone ?? ''));
if ($jsonld_phone && strpos($jsonld_phone, '+') !== 0) {
  $jsonld_phone = '+1' . ltrim($jsonld_phone, '1');
}
$jsonld_base = rtrim($BaseURL ?? ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . ($_SERVER['HTTP_HOST'] ?? 'localhost') . '/'), '/');
$jsonld_logo = $jsonld_base . '/assets/img/logo/Alpha%20pro%20Renovation%20group%20Logo.png';
$jsonld_image = $jsonld_base . '/assets/img/hero/hero1.jpg';

$jsonld_services = [];
if (!empty($ServicesList) && is_array($ServicesList)) {
  foreach ($ServicesList as $key => $svc) {
    if (!empty($svc['title'])) $jsonld_services[] = $svc['title'];
  }
}

$jsonld = [
  '@context'    => 'https://schema.org',
  '@type'       => ['GeneralContractor', 'HomeAndConstructionBusiness'],
  '@id'         => $jsonld_base . '/#business',
  'name'        => $Company ?? 'Alpha Pro Renovation Group',
  'alternateName' => 'Alpha Pro',
  'description' => $BrandConcept ?? 'Elite Architecture and Structural Renovation',
  'url'         => $jsonld_base . '/',
  'logo'        => [
    '@type'     => 'ImageObject',
    'url'       => $jsonld_logo,
    'width'     => 400,
    'height'    => 200
  ],
  'image'       => $jsonld_image,
  'telephone'   => $jsonld_phone ?: $Phone,
  'email'       => $Mail ?? '',
  'address'     => [
    '@type'           => 'PostalAddress',
    'addressLocality' => 'Dallas',
    'addressRegion'   => 'TX',
    'addressCountry'  => 'US'
  ],
  'areaServed'  => [
    ['@type' => 'City', 'name' => 'Dallas'],
    ['@type' => 'City', 'name' => 'Fort Worth'],
    ['@type' => 'State', 'name' => 'Texas']
  ],
  'priceRange'  => '$$',
  'openingHoursSpecification' => [
    [
      '@type'     => 'OpeningHoursSpecification',
      'dayOfWeek' => ['Monday','Tuesday','Wednesday','Thursday','Friday'],
      'opens'     => '09:00',
      'closes'    => '17:00'
    ]
  ],
  'hasOfferCatalog' => empty($jsonld_services) ? null : [
    '@type' => 'OfferCatalog',
    'name'  => 'Renovation Services',
    'itemListElement' => array_map(function($svc) {
      return ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => $svc]];
    }, $jsonld_services)
  ],
  'sameAs' => array_values(array_filter([
    !empty($instagram) ? $instagram : null,
    !empty($facebook)  ? $facebook  : null,
    !empty($yelp)      ? $yelp      : null
  ]))
];

// Limpia nulls del JSON
array_walk_recursive($jsonld, function(&$v) { });
$jsonld = array_filter($jsonld, function($v) { return $v !== null && $v !== '' && $v !== []; });
?>
<script type="application/ld+json"><?php echo json_encode($jsonld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?></script>
</head>
<?php
$bodyClassAttr = trim((string) ($BodyClass ?? ''));
?>
<body<?php echo $bodyClassAttr !== '' ? ' class="' . htmlspecialchars($bodyClassAttr, ENT_QUOTES, 'UTF-8') . '"' : ''; ?>>

<header class="site-header">
    <div class="header-main">
        <div class="container header-container">
            <?php
            $companyParts = preg_split('/\s+/', trim($Company ?? ''));
            $brandLine1 = implode(' ', array_slice($companyParts, 0, 2));
            $brandLine2 = implode(' ', array_slice($companyParts, 2));
            ?>
            <a href="<?php echo $BaseURL; ?>" class="brand">
                <img src="<?php echo $SiteLogoHeader; ?>" alt="<?php echo $Company; ?>" class="logo-img" width="1555" height="1384">
            </a>

            <nav class="main-nav" id="mainNav" aria-label="<?php echo htmlspecialchars($AriaCopy['primary_nav'] ?? ''); ?>">
                <button class="menu-close d-lg-none" aria-label="<?php echo htmlspecialchars($HeaderCopy['menu_close'] ?? ''); ?>">
                    <i class="fa-solid fa-xmark"></i>
                </button>

                <ul>
                    <li><a href="<?php echo $BaseURL; ?>"><?php echo $NavCopy['home'] ?? ''; ?></a></li>
                    <li><a href="about.php"><?php echo $NavCopy['about'] ?? ''; ?></a></li>
                    <!-- Dropdown 1: Kitchen & Bath -->
                    <li class="has-dropdown">
                        <a href="kitchen-remodeling.php">Kitchen &amp; Bath <i class="fa-solid fa-chevron-down dropdown-arrow" aria-hidden="true"></i></a>
                        <ul class="dropdown">
                            <?php foreach (($headerKitchenMenu['services'] ?? []) as $svc): ?>
                            <li><a href="<?php echo htmlspecialchars($svc['url'] ?? 'services.php', ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($svc['name'] ?? 'Service', ENT_QUOTES, 'UTF-8'); ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>

                    <!-- Dropdown 2: Flooring & Construction -->
                    <li class="has-dropdown">
                        <a href="flooring-installation.php">Flooring &amp; Repairs <i class="fa-solid fa-chevron-down dropdown-arrow" aria-hidden="true"></i></a>
                        <ul class="dropdown dropdown--services">
                            <?php foreach ($headerBuildGroups as $grp):
                                if (empty($grp['services'])) continue; ?>
                            <li class="dropdown-group">
                                <span class="dropdown-group__title"><?php echo htmlspecialchars($grp['label'] ?? '', ENT_QUOTES, 'UTF-8'); ?></span>
                                <ul class="dropdown-group__list">
                                    <?php foreach ($grp['services'] as $svc): ?>
                                    <li><a href="<?php echo htmlspecialchars($svc['url'] ?? 'services.php', ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($svc['name'] ?? 'Service', ENT_QUOTES, 'UTF-8'); ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>

                    <!-- Dropdown 3: Outdoor & More -->
                    <li class="has-dropdown">
                        <a href="patio-outdoor-living.php">Outdoor &amp; More <i class="fa-solid fa-chevron-down dropdown-arrow" aria-hidden="true"></i></a>
                        <ul class="dropdown dropdown--services align-right">
                            <?php foreach ($headerOutdoorGroups as $grp):
                                if (empty($grp['services'])) continue; ?>
                            <li class="dropdown-group">
                                <span class="dropdown-group__title"><?php echo htmlspecialchars($grp['label'] ?? '', ENT_QUOTES, 'UTF-8'); ?></span>
                                <ul class="dropdown-group__list">
                                    <?php foreach ($grp['services'] as $svc): ?>
                                    <li><a href="<?php echo htmlspecialchars($svc['url'] ?? 'services.php', ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($svc['name'] ?? 'Service', ENT_QUOTES, 'UTF-8'); ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <li><a href="projects.php"><?php echo $NavCopy['projects'] ?? ''; ?></a></li>
                    <li><a href="reviews.php"><?php echo $NavCopy['reviews'] ?? ''; ?></a></li>
                    
                    <li><a href="contact.php"><?php echo $NavCopy['contact'] ?? ''; ?></a></li>
                    
                    <li class="mobile-cta d-lg-none">
                        <a href="<?php echo $PhoneRef; ?>" class="btn-estimate"><?php echo $NavCopy['cta_mobile'] ?? ''; ?></a>
                        
                        <div class="mobile-socials">
                            <?php if(!empty($fb_url)): ?>
                                <a href="<?php echo $fb_url; ?>" target="_blank" class="social-icon-link"><i class="fab fa-facebook-f"></i></a>
                            <?php endif; ?>
                            <?php if(!empty($messenger)): ?>
                                <a href="<?php echo $messenger; ?>" target="_blank" class="social-icon-link"><i class="fab fa-facebook-messenger"></i></a>
                            <?php endif; ?>
                            <?php if(!empty($insta_url)): ?>
                                <a href="<?php echo $insta_url; ?>" target="_blank" class="social-icon-link"><i class="fab fa-instagram"></i></a>
                            <?php endif; ?>
                            <?php if(!empty($goo_url)): ?>
                                <a href="<?php echo $goo_url; ?>" target="_blank" class="social-icon-link"><i class="fab fa-google"></i></a>
                            <?php endif; ?>
                            <?php if(!empty($tik_url)): ?>
                                <a href="<?php echo $tik_url; ?>" target="_blank" class="social-icon-link"><i class="fab fa-tiktok"></i></a>
                            <?php endif; ?>
                            <?php if(!empty($whatsapp)): ?>
                                <a href="<?php echo $whatsapp; ?>" target="_blank" class="social-icon-link"><i class="fab fa-whatsapp"></i></a>
                            <?php endif; ?>
                        </div>
                    </li>
                </ul>
            </nav>

            <div class="header-actions">
                <div class="header-socials d-none d-lg-flex">
                    <?php if(!empty($fb_url)): ?>
                        <a href="<?php echo $fb_url; ?>" target="_blank" class="social-icon-link" title="<?php echo htmlspecialchars($HeaderCopy['social_titles']['facebook'] ?? ''); ?>"><i class="fab fa-facebook-f"></i></a>
                    <?php endif; ?>
                    <?php if(!empty($messenger)): ?>
                        <a href="<?php echo $messenger; ?>" target="_blank" class="social-icon-link" title="<?php echo htmlspecialchars($HeaderCopy['social_titles']['messenger'] ?? ''); ?>"><i class="fab fa-facebook-messenger"></i></a>
                    <?php endif; ?>
                    <?php if(!empty($goo_url)): ?>
                        <a href="<?php echo $goo_url; ?>" target="_blank" class="social-icon-link" title="<?php echo htmlspecialchars($HeaderCopy['social_titles']['google'] ?? ''); ?>"><i class="fab fa-google"></i></a>
                    <?php endif; ?>
                    <?php if(!empty($insta_url)): ?>
                        <a href="<?php echo $insta_url; ?>" target="_blank" class="social-icon-link" title="<?php echo htmlspecialchars($HeaderCopy['social_titles']['instagram'] ?? ''); ?>"><i class="fab fa-instagram"></i></a>
                    <?php endif; ?>
                    <?php if(!empty($tik_url)): ?>
                        <a href="<?php echo $tik_url; ?>" target="_blank" class="social-icon-link" title="<?php echo htmlspecialchars($HeaderCopy['social_titles']['tiktok'] ?? ''); ?>"><i class="fab fa-tiktok"></i></a>
                    <?php endif; ?>
                    <?php if(!empty($whatsapp)): ?>
                        <a href="<?php echo $whatsapp; ?>" target="_blank" class="social-icon-link" title="<?php echo htmlspecialchars($HeaderCopy['social_titles']['whatsapp'] ?? ''); ?>"><i class="fab fa-whatsapp"></i></a>
                    <?php endif; ?>
                </div>

                <a href="<?php echo $PhoneRef; ?>" class="btn-estimate"><?php echo $NavCopy['cta'] ?? ''; ?></a>
                
                <button class="mobile-toggle" type="button" aria-label="<?php echo htmlspecialchars($HeaderCopy['menu_toggle'] ?? ''); ?>" aria-controls="mainNav" aria-expanded="false">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
        <div class="mobile-menu-overlay"></div>
    </div>
</header>
<main>
    
