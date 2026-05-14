<?php
@session_start();

/*=========================
   PAGE NAME (Routing simple)
   =========================*/
$full_name  = $_SERVER['PHP_SELF'] ?? '';
$name_array = explode('/', $full_name);
$count      = count($name_array);
$page_name  = $name_array[$count - 1] ?? '';

if      ($page_name == 'index.php')        { $namepage = "Home"; }
elseif ($page_name == 'about.php')        { $namepage = "About"; }
elseif ($page_name == 'services.php')     { $namepage = "Services"; }
elseif ($page_name == 'testimonials.php') { $namepage = "Reviews"; }
elseif ($page_name == 'reviews.php')      { $namepage = "Reviews"; }
elseif ($page_name == 'projects.php')     { $namepage = "Projects"; }
elseif ($page_name == 'thank-you.php')    { $namepage = "Thank You"; }
elseif ($page_name == '404.php')          { $namepage = "Not Found"; }
elseif ($page_name == 'contact.php')      { $namepage = "Contact"; }
else                                      { $namepage = ucfirst(str_replace('.php', '', $page_name)); }

/*=========================
   INFO GENERAL - ALPHA PRO RENOVATION GROUP
   =========================*/
$Company      = "ALPHA PRO RENOVATION GROUP";
$CustomerName = "Samantha Rivera";
$OwnerAge = "32";
$OwnerFamily = "Mother of 2";
$OwnerBackground = "Psychologist";
$BrandConcept = "Elite Architecture and Structural Renovation";

function detectBaseURL() {
  $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
  $host   = $_SERVER['HTTP_HOST'] ?? 'localhost';
  $script = $_SERVER['SCRIPT_NAME'] ?? '';
  $dir    = rtrim(str_replace('\\', '/', dirname($script)), '/.');
  $path   = $dir ? $dir . '/' : '/';
  return $scheme . '://' . $host . $path;
}

$BaseURL   = rtrim(detectBaseURL(), '/') . '/';
$Domain    = $BaseURL;
$MAVEN     = "go-maven.com";
$Address   = "Dallas, Texas (DFW)";
$PhoneName = "Main";

$Phone     = "(945) 238-7350";
$Phone2    = "";

function telRef($p) {
  $clean = str_replace(str_split('()-/\\:?"<>|., '), '', $p);
  return "tel:" . $clean;
}
$PhoneRef  = telRef($Phone);
$PhoneRef2 = telRef($Phone2 ?? '');

function slugify($text) {
  $text = strtolower(trim($text));
  $text = preg_replace('/[^a-z0-9]+/i', '-', $text);
  return trim($text, '-') ?: 'service';
}

// WhatsApp link
$whatsapp_num = preg_replace('/\D+/', '', $Phone);
if (strpos($whatsapp_num, '1') !== 0) { $whatsapp_num = '1' . $whatsapp_num; }
$whatsapp = "https://api.whatsapp.com/send?phone=$whatsapp_num&text=Hello%20Alpha%20Pro%20Renovation%20Group!%20I%27d%20like%20to%20request%20a%20free%20estimate.%20(Dallas%20DFW)";

$Mail    = "hello@alphaprorenovationgroup.com";
$MailRef = "mailto:" . $Mail;

/*=========================
   GENERAL MESSAGES
   =========================*/
$Services       = "Residential and Commercial Renovation Services";
$Estimates      = "Free Estimates";
$Payment        = "Payment details to be confirmed";
$Experience     = "Founder-Led";
$Schedule       = "Monday to Friday from 9:00 am to 5:00 pm.";
$Coverage       = "Serving homeowners and businesses across the Dallas–Fort Worth (DFW) area with detail-focused renovation, remodeling, and property improvement.";
$LicenseNote    = "Insured ✔️";
$BilingualNote  = "Personalized client guidance available";
$TypeOfService  = "Residential and Commercial";

/*=========================
   BRAND COLORS
   =========================*/
$BrandColors = [
  'primary'       => '#000000',
  'primary_rgb'   => '0, 0, 0',
  'secondary'     => '#000000',
  'secondary_rgb' => '0, 0, 0',
  'accent'        => '#C9973C',
  'accent_rgb'    => '201, 151, 60',
  'neutral'       => '#E5E5E5',
  'white'         => '#FFFFFF'
];

/*=========================
   SERVICE AREAS
   =========================*/
$Areas = [
  "Dallas",
  "Fort Worth",
  "Irving",
  "Plano",
  "Garland",
  "Arlington",
  "McKinney",
  "Frisco",
  "Richardson",
  "Mesquite",
  "Denton",
  "Carrollton",
  "Grand Prairie",
  "Lewisville"
];

/*=========================
   MAPA Y REDES SOCIALES
   =========================*/
$GoogleMap = '<iframe src="https://maps.google.com/maps?q=Dallas%2C+Texas&t=&z=11&ie=UTF8&iwloc=&output=embed" width="100%" height="450" style="border:0;" allowfullscreen loading="lazy"></iframe>';
$facebook  = "";
$instagram = "";
$google = "";
$tiktok = "";
$messenger = "";

$DirectoryLinks = [
  'bbb' => '',
  'buildzoom' => '',
  'thumbtack' => '',
  'homeadvisor' => ''
];

$GoogleReviews = 'reviews.php';

$DirectoryReviewItems = [
  [
    'name' => 'Client Experience Preview',
    'city' => 'Template Review',
    'stars' => 5,
    'text' => 'This space is ready for verified client feedback after Alpha Pro Renovation Group completes new projects under the updated brand.',
    'source' => 'Website Preview',
    'url' => ''
  ]
];

$GoogleReviewItems = $DirectoryReviewItems;

$ReviewSourceSummaries = [];

$DetailedReviewItems = [
  [
    'name' => 'Future Client',
    'city' => 'Residential Renovation',
    'stars' => 5,
    'text' => 'Alpha Pro Renovation Group is positioned for clients who want elegant planning, respectful communication, and renovation work handled with technical precision.',
    'source' => 'Website Preview',
    'date' => '',
    'url' => ''
  ],
  [
    'name' => 'Future Client',
    'city' => 'Interior Upgrade',
    'stars' => 5,
    'text' => 'The brand experience is designed around confidence: clear scope, clean presentation, strong communication, and a standard of work that feels elevated from the first conversation.',
    'source' => 'Website Preview',
    'date' => '',
    'url' => ''
  ],
  [
    'name' => 'Future Client',
    'city' => 'Custom Project',
    'stars' => 5,
    'text' => 'This testimonial area should be replaced with verified project feedback once the new company launches its review profiles.',
    'source' => 'Website Preview',
    'date' => '',
    'url' => ''
  ]
];
/*=========================
   SEO & BRANDING SLOGANS
   =========================*/
$Phrase = [
  "Elite Architecture and Structural Renovation",
  "Women-Led Renovation With Technical Precision",
  "A Monogram Inspired by Protection, Structure, and Elevation",
  "Modern Remodeling Guided by Human Insight",
  "Free Estimates for Residential and Commercial Renovation"
];

/*=========================
   HOME SECTION
   =========================*/
$Home = [
  "Alpha Pro Renovation Group is built on the concept of Elite Architecture and Structural Renovation, blending modern construction discipline with a refined, protection-first visual identity.",
  "Led by Samantha Rivera, the brand brings clarity, confidence, and human understanding into light renovation, remodeling, and property improvement projects."
];

/*=========================
   ABOUT SECTION
   =========================*/
$About = [
  "Alpha Pro Renovation Group helps homeowners and businesses approach renovation with structure, care, and elevated standards. The brand mark reflects an architectural A fused with a roofline, symbolizing protection, mastery, and a higher way to improve the home.",
  "Founded by Samantha Rivera, a 32-year-old mother of two and psychologist, the company combines technical renovation standards with empathy, listening, and confident leadership."
];

/*=========================
    MISSION & VISION
    =========================*/
$Mission = "To deliver refined renovation experiences through precise planning, clean execution, and client guidance rooted in trust, protection, and elevated construction standards.";
$Vision  = "To become a women-led renovation brand recognized for modern technical rigor, emotional intelligence, and spaces that help families and businesses rise with confidence.";

/*=========================
   SERVICES SECTION
   =========================*/
$SN = $SD = $ExSD = [];

$SN[1]  = "Kitchen Remodeling";
$SD[1]  = "Full kitchen transformations in as little as 5 days — cabinetry, countertops, backsplash, lighting, and layout upgrades built around how you live.";

$SN[2]  = "Bathroom Remodeling";
$SD[2]  = "Complete bathroom renovations with custom showers, tile, vanities, and moisture-safe finishes for comfort and lasting durability.";

$SN[3]  = "Custom Shower Installation";
$SD[3]  = "Custom-designed showers built with precision tile work, quality fixtures, and waterproof systems for a spa-level experience.";

$SN[4]  = "Interior & Exterior Painting";
$SD[4]  = "Commercial and residential painting with thorough surface prep, premium primers, and clean finish coats inside and out.";

$SN[5]  = "Flooring Installation";
$SD[5]  = "LVP, tile, hardwood, laminate, and carpet installation with proper subfloor prep, clean transitions, and durable results.";

$SN[6]  = "Drywall Installation & Repair";
$SD[6]  = "Hanging, taping, finishing, and patch work for smooth walls and ceilings ready for paint or texture.";

$SN[7]  = "Texture & Sheetrock Repair";
$SD[7]  = "Texture matching, sheetrock patching, and surface restoration for walls and ceilings that look like new.";

$SN[8]  = "Custom Cabinet Installation";
$SD[8]  = "Precision cabinet installation for kitchens, bathrooms, and custom spaces with clean lines and solid mounting.";

$SN[9]  = "Countertop Installation";
$SD[9]  = "Quartz, granite, and marble countertop fabrication and installation with expert seaming and edge finishing.";

$SN[10] = "Backsplash Installation";
$SD[10] = "Tile backsplash installation with precise layout, clean grout lines, and design choices that complement your space.";

$SN[11] = "Lighting & Electrical Upgrades";
$SD[11] = "Recessed lighting, fixture upgrades, and electrical improvements that modernize and enhance your home or business.";

$SN[12] = "Plumbing Services";
$SD[12] = "Fixture replacements, pipe repairs, and plumbing upgrades for kitchens, bathrooms, and utility areas.";

$SN[13] = "Room Additions";
$SD[13] = "Structural room additions that expand your living or commercial space with proper framing, finishing, and permits.";

$SN[14] = "Garage Conversions";
$SD[14] = "Garage-to-living-space conversions with insulation, drywall, flooring, and electrical work for functional new rooms.";

$SN[15] = "Patio & Outdoor Living";
$SD[15] = "Custom patio and outdoor living construction — concrete, pavers, shade structures, and entertainment-ready layouts.";

$SN[16] = "Fence Installation & Repair";
$SD[16] = "Wood, iron, and vinyl fence installation and repair for privacy, security, and curb appeal.";

$SN[17] = "Deck Building";
$SD[17] = "Custom wood and composite deck construction with safe framing, railings, and weather-ready finishes.";

$SN[18] = "Pergola Installation";
$SD[18] = "Pergola design and installation for shade, style, and outdoor entertainment value.";

$SN[19] = "Window & Door Replacement";
$SD[19] = "Energy-efficient window and door replacement with proper flashing, sealing, and trim finishing.";

$SN[20] = "Siding Installation & Repair";
$SD[20] = "Siding installation and repair that protects your exterior and refreshes your home's appearance.";

$SN[21] = "Concrete Work";
$SD[21] = "Driveway, sidewalk, and slab concrete work with solid base preparation and clean finishes that last.";

$SN[22] = "Demolition Services";
$SD[22] = "Safe interior and exterior demolition for remodels, buildouts, and property renovations.";

$SN[23] = "Water Damage Restoration";
$SD[23] = "Full water damage repair — drywall, flooring, and structural restoration to bring affected spaces back to life.";

$SN[24] = "Make-Ready Services";
$SD[24] = "Real estate make-ready services to prepare properties for listing, sale, or new tenants quickly and professionally.";

$SN[25] = "Trim, Baseboards & Finish Carpentry";
$SD[25] = "Precision trim, baseboard, crown molding, and finish carpentry that elevates every room's final look.";

$SN[26] = "Tile Installation";
$SD[26] = "Floor and wall tile installation with expert layout planning, clean grout lines, and lasting waterproof results.";

$SN[27] = "Cabinet Refinishing & Painting";
$SD[27] = "Cabinet repainting and refinishing that transforms kitchen and bath cabinets at a fraction of replacement cost.";

$OtherServices = [
  "Texture & Sheetrock Repair",
  "Backsplash Installation",
  "Lighting & Electrical Upgrades",
  "Plumbing Services",
  "Patio & Outdoor Living",
  "Fence Installation & Repair",
  "Pergola Installation",
  "Window & Door Replacement",
  "Demolition Services",
  "Make-Ready Services",
  "Cabinet Refinishing & Painting"
];

$ServicesByCategory = [
  [
    'label' => 'Kitchen & Bath Remodeling',
    'summary_slug' => 'kitchen-remodeling',
    'service_slugs' => [
      'kitchen-remodeling',
      'bathroom-remodeling',
      'custom-shower-installation',
      'custom-cabinet-installation',
      'countertop-installation',
      'backsplash-installation',
      'cabinet-refinishing-painting'
    ]
  ],
  [
    'label' => 'Flooring & Finishes',
    'summary_slug' => 'flooring-installation',
    'service_slugs' => [
      'flooring-installation',
      'tile-installation',
      'trim-baseboards-finish-carpentry',
      'interior-exterior-painting'
    ]
  ],
  [
    'label' => 'Drywall & Structure',
    'summary_slug' => 'drywall-installation-repair',
    'service_slugs' => [
      'drywall-installation-repair',
      'texture-sheetrock-repair',
      'window-door-replacement',
      'siding-installation-repair',
      'room-additions',
      'garage-conversions'
    ]
  ],
  [
    'label' => 'Systems & Upgrades',
    'summary_slug' => 'lighting-electrical-upgrades',
    'service_slugs' => [
      'lighting-electrical-upgrades',
      'plumbing-services'
    ]
  ],
  [
    'label' => 'Outdoor & Concrete',
    'summary_slug' => 'patio-outdoor-living',
    'service_slugs' => [
      'patio-outdoor-living',
      'deck-building',
      'pergola-installation',
      'fence-installation-repair',
      'concrete-work',
      'demolition-services'
    ]
  ],
  [
    'label' => 'Restoration & Specialty',
    'summary_slug' => 'water-damage-restoration',
    'service_slugs' => [
      'water-damage-restoration',
      'make-ready-services'
    ]
  ]
];

$Badges = [
  $Estimates,
  $Experience,
  $Coverage,
  $LicenseNote,
  $BilingualNote
];

/*=========================
   SEO EXTRACTS
   =========================*/
$ExAbout = substr($About[0], 0, 145) . '...';
$ExHome  = substr($Home[0],  0, 95)  . '...';
for ($i = 1; $i <= count($SN); $i++) {
  if (isset($SD[$i])) {
    $ExSD[$i] = substr($SD[$i], 0, 120) . '...';
  }
}

/*=========================
   SERVICE MAP (slugs + URLs)
   =========================*/
$ServicesList = [];
for ($i = 1; $i <= count($SN); $i++) {
  if (empty($SN[$i])) continue;
  $slug = slugify($SN[$i]);
  $ServicesList[$slug] = [
    'id'          => $i,
    'name'        => $SN[$i],
    'description' => $SD[$i] ?? '',
    'excerpt'     => $ExSD[$i] ?? '',
    'slug'        => $slug,
    'file'        => $slug . '.php',
    'url'         => $slug . '.php'
  ];
}

$serviceCategoryMap = [];
if (!empty($ServicesByCategory) && is_array($ServicesByCategory)) {
  foreach ($ServicesByCategory as $category) {
    if (!is_array($category)) continue;

    $categoryLabel = trim((string) ($category['label'] ?? 'General'));
    $categorySlug = trim((string) ($category['summary_slug'] ?? ''));
    if ($categorySlug === '') $categorySlug = slugify($categoryLabel);

    $allSlugs = [];
    if (!empty($category['summary_slug'])) {
      $allSlugs[] = trim((string) $category['summary_slug']);
    }

    if (!empty($category['service_slugs']) && is_array($category['service_slugs'])) {
      foreach ($category['service_slugs'] as $serviceSlug) {
        $serviceSlug = trim((string) $serviceSlug);
        if ($serviceSlug !== '') $allSlugs[] = $serviceSlug;
      }
    }

    foreach (array_unique($allSlugs) as $serviceSlug) {
      if ($serviceSlug === '') continue;
      $serviceCategoryMap[$serviceSlug] = [
        'category_slug' => $categorySlug,
        'category_label' => $categoryLabel
      ];
    }
  }
}

foreach ($ServicesList as $serviceSlug => &$serviceData) {
  if (isset($serviceCategoryMap[$serviceSlug])) {
    $serviceData['category_slug'] = $serviceCategoryMap[$serviceSlug]['category_slug'];
    $serviceData['category_label'] = $serviceCategoryMap[$serviceSlug]['category_label'];
  } else {
    $serviceData['category_slug'] = 'general';
    $serviceData['category_label'] = 'General';
  }
}
unset($serviceData);

/*=========================
   SERVICE DETAIL CONTENT
   =========================*/
$ServiceDetails = [
  'kitchen-remodeling' => [
    'kicker'     => 'Kitchen Remodeling',
    'headline'   => 'Full kitchen transformations — cabinets in as little as 5 days',
    'paragraphs' => [
      'We transform kitchens with new cabinetry, countertops, backsplash, lighting, and layout upgrades designed around how you live and cook.',
      'Our team handles everything from demolition to final trim so the result feels cohesive, clean, and built to last.'
    ],
    'bullets'    => [
      '5-day kitchen cabinet service available',
      'Cabinetry, countertops, and backsplash',
      'Lighting upgrades and layout improvements',
      'Quartz, granite, and marble options'
    ]
  ],
  'bathroom-remodeling' => [
    'kicker'     => 'Bathroom Remodeling',
    'headline'   => 'Clean, comfortable bathrooms with lasting finishes',
    'paragraphs' => [
      'From custom showers and tubs to vanities and tile, we build bathrooms designed for comfort, style, and durability.',
      'We use moisture-safe materials and detail-driven installations to protect your investment long-term.'
    ],
    'bullets'    => [
      'Custom shower and tub conversions',
      'Tile, vanities, and fixture installation',
      'Moisture protection and waterproofing',
      'Clean work zones and efficient timelines'
    ]
  ],
  'custom-shower-installation' => [
    'kicker'     => 'Custom Shower Installation',
    'headline'   => 'Spa-level custom showers built with precision',
    'paragraphs' => [
      'We design and install custom showers with quality tile work, niches, benches, and premium fixtures tailored to your space.',
      'Proper waterproofing, slope, and drain placement ensure lasting performance and a flawless finish.'
    ],
    'bullets'    => [
      'Custom layout and design planning',
      'Full waterproofing and liner systems',
      'Tile, glass, and fixture selection',
      'Niche, bench, and accent details'
    ]
  ],
  'interior-exterior-painting' => [
    'kicker'     => 'Painting — Commercial & Residential',
    'headline'   => 'Crisp, lasting finishes inside and out',
    'paragraphs' => [
      'We prepare surfaces properly and apply premium coatings for interior and exterior painting that looks clean and holds up over time.',
      'From accent walls to full commercial buildouts, we deliver consistent, professional results every time.'
    ],
    'bullets'    => [
      'Surface prep, patching, and priming',
      'Interior and exterior residential painting',
      'Commercial painting projects',
      'Trim, doors, ceilings, and accent work'
    ]
  ],
  'flooring-installation' => [
    'kicker'     => 'Flooring Installation',
    'headline'   => 'LVP, tile, hardwood, laminate, and carpet installed with precision',
    'paragraphs' => [
      'We install all major flooring types with proper subfloor prep, clean transitions, and durable finishes.',
      'Our team matches materials to your lifestyle, traffic, and budget for results that look great and last.'
    ],
    'bullets'    => [
      'LVP, hardwood, laminate, and carpet',
      'Tile and stone flooring installation',
      'Subfloor prep and leveling',
      'Clean transitions and baseboard trim'
    ]
  ],
  'drywall-installation-repair' => [
    'kicker'     => 'Drywall Installation & Repair',
    'headline'   => 'Smooth walls and ceilings with clean finishes',
    'paragraphs' => [
      'We install and repair drywall for remodels, additions, and renovation projects across the DFW area.',
      'From hanging to taping, sanding, and finishing, we produce walls ready for paint or texture.'
    ],
    'bullets'    => [
      'Drywall hanging and panel installation',
      'Taping, finishing, and sanding',
      'Patch work and hole repair',
      'Clean edges and dust management'
    ]
  ],
  'texture-sheetrock-repair' => [
    'kicker'     => 'Texture & Sheetrock Repair',
    'headline'   => 'Texture matching and sheetrock restoration',
    'paragraphs' => [
      'We match existing wall and ceiling textures — orange peel, knockdown, skip trowel, and more — for seamless repairs.',
      'Sheetrock patches are finished to blend invisibly with surrounding surfaces.'
    ],
    'bullets'    => [
      'Orange peel, knockdown, and skip trowel',
      'Ceiling and wall texture matching',
      'Sheetrock patch and board replacement',
      'Ready for paint on completion'
    ]
  ],
  'custom-cabinet-installation' => [
    'kicker'     => 'Custom Cabinet Installation',
    'headline'   => 'Precision cabinet installation for kitchens and beyond',
    'paragraphs' => [
      'We install custom and semi-custom cabinetry with level mounting, clean reveals, and hardware alignment.',
      'Kitchens, bathrooms, laundry rooms, and built-in spaces handled with attention to detail.'
    ],
    'bullets'    => [
      'Kitchen and bathroom cabinet installation',
      'Built-in and specialty cabinet work',
      'Hardware and soft-close hinge installation',
      'Trim and filler panel finishing'
    ]
  ],
  'countertop-installation' => [
    'kicker'     => 'Countertop Installation',
    'headline'   => 'Quartz, granite, and marble installed flawlessly',
    'paragraphs' => [
      'We template, fabricate, and install quartz, granite, and marble countertops for kitchens and bathrooms.',
      'Precision seaming, edge profiling, and proper support ensure your countertops look stunning and last for years.'
    ],
    'bullets'    => [
      'Quartz, granite, and marble options',
      'Template measurement and custom fabrication',
      'Seamless edge profiling and finishing',
      'Sink cutouts and appliance integration'
    ]
  ],
  'backsplash-installation' => [
    'kicker'     => 'Backsplash Installation',
    'headline'   => 'Tile backsplashes installed with precision layout',
    'paragraphs' => [
      'We install kitchen and bathroom backsplash tile with careful planning, clean grout lines, and a polished final look.',
      'Subway, mosaic, large-format, and decorative tile installed to complement your countertops and cabinetry.'
    ],
    'bullets'    => [
      'Layout planning and pattern alignment',
      'Subway, mosaic, and decorative tile',
      'Clean cuts and tight grout lines',
      'Sealed and ready-to-use finish'
    ]
  ],
  'lighting-electrical-upgrades' => [
    'kicker'     => 'Lighting & Electrical Upgrades',
    'headline'   => 'Modern lighting and electrical improvements',
    'paragraphs' => [
      'We upgrade lighting systems, add recessed cans, replace fixtures, and improve electrical panels for safer, more functional spaces.',
      'Residential and commercial electrical upgrades handled with care and proper techniques.'
    ],
    'bullets'    => [
      'Recessed lighting installation',
      'Fixture replacement and upgrades',
      'Outlet and switch modernization',
      'Panel and circuit improvements'
    ]
  ],
  'plumbing-services' => [
    'kicker'     => 'Plumbing Services',
    'headline'   => 'Reliable plumbing for kitchens and bathrooms',
    'paragraphs' => [
      'We handle fixture replacements, pipe repairs, and plumbing upgrades for remodels and renovation projects.',
      'Clean, professional plumbing work that integrates seamlessly with your renovation timeline.'
    ],
    'bullets'    => [
      'Faucet and fixture replacements',
      'Pipe repair and rerouting',
      'Sink, toilet, and tub installation',
      'Renovation-phase plumbing coordination'
    ]
  ],
  'room-additions' => [
    'kicker'     => 'Room Additions',
    'headline'   => 'Expand your home with structural room additions',
    'paragraphs' => [
      'We build room additions with proper framing, insulation, drywall, flooring, and electrical work to expand your living or business space.',
      'Every addition is planned and executed to blend seamlessly with your existing structure.'
    ],
    'bullets'    => [
      'Foundation, framing, and structural work',
      'Insulation, drywall, and finishes',
      'Electrical, plumbing, and HVAC coordination',
      'Permit assistance and inspections'
    ]
  ],
  'garage-conversions' => [
    'kicker'     => 'Garage Conversions',
    'headline'   => 'Transform your garage into livable space',
    'paragraphs' => [
      'We convert garages into bedrooms, offices, studios, and living areas with full interior finishing.',
      'Insulation, drywall, flooring, electrical, and HVAC coordination handled from start to finish.'
    ],
    'bullets'    => [
      'Framing and insulation upgrades',
      'Drywall, flooring, and paint',
      'Electrical outlets, lighting, and HVAC',
      'Door and window modifications'
    ]
  ],
  'patio-outdoor-living' => [
    'kicker'     => 'Patio & Outdoor Living',
    'headline'   => 'Custom outdoor spaces for Texas living',
    'paragraphs' => [
      'We design and build patios, outdoor kitchens, shade structures, and entertainment areas for Dallas–Fort Worth homes.',
      'Concrete, pavers, and structural work handled with the same precision as interior projects.'
    ],
    'bullets'    => [
      'Concrete and paver patios',
      'Outdoor kitchen and entertainment areas',
      'Shade structures and pergolas',
      'Lighting and electrical for outdoor spaces'
    ]
  ],
  'fence-installation-repair' => [
    'kicker'     => 'Fence Installation & Repair',
    'headline'   => 'Durable fences for privacy and curb appeal',
    'paragraphs' => [
      'We install and repair wood, iron, and vinyl fences for residential and commercial properties across DFW.',
      'Proper post setting, panel alignment, and finishing keep your fence standing strong for years.'
    ],
    'bullets'    => [
      'Wood, iron, and vinyl fence options',
      'Post setting and concrete footings',
      'Gate installation and hardware',
      'Fence repair and board replacement'
    ]
  ],
  'deck-building' => [
    'kicker'     => 'Deck Building',
    'headline'   => 'Custom decks built for outdoor living',
    'paragraphs' => [
      'We design and build wood and composite decks with safe framing, proper footings, and weather-ready finishes.',
      'Railings, stairs, and integrated lighting complete your deck for year-round enjoyment.'
    ],
    'bullets'    => [
      'Pressure-treated and composite materials',
      'Custom layout and design',
      'Railings, stairs, and lighting',
      'Weather-sealed and low-maintenance finishes'
    ]
  ],
  'pergola-installation' => [
    'kicker'     => 'Pergola Installation',
    'headline'   => 'Shade, style, and outdoor value',
    'paragraphs' => [
      'We build pergolas that add shade, structure, and visual appeal to patios and outdoor living areas.',
      'Custom sizing, material options, and finishing touches make your pergola a standout feature.'
    ],
    'bullets'    => [
      'Wood and aluminum pergola options',
      'Custom sizing and post placement',
      'Lattice, louvered, and solid roof styles',
      'Integration with existing patios and decks'
    ]
  ],
  'window-door-replacement' => [
    'kicker'     => 'Window & Door Replacement',
    'headline'   => 'Energy-efficient windows and doors installed right',
    'paragraphs' => [
      'We replace windows and doors with energy-efficient units properly flashed, sealed, and trimmed for a clean finish.',
      'Improved insulation, sound reduction, and curb appeal in every installation.'
    ],
    'bullets'    => [
      'Single and double-pane window replacement',
      'Entry, interior, and patio door installation',
      'Flashing, sealing, and insulation',
      'Interior and exterior trim finishing'
    ]
  ],
  'siding-installation-repair' => [
    'kicker'     => 'Siding Installation & Repair',
    'headline'   => 'Exterior protection and refreshed curb appeal',
    'paragraphs' => [
      'New siding protects your home from the elements and gives your exterior a clean, updated look.',
      'We install and repair siding with careful prep, moisture barriers, and clean trim work.'
    ],
    'bullets'    => [
      'Vinyl, fiber cement, and wood siding',
      'Moisture barrier and flashing installation',
      'Trim, soffit, and fascia work',
      'Siding repair and board replacement'
    ]
  ],
  'concrete-work' => [
    'kicker'     => 'Concrete Work',
    'headline'   => 'Driveways, sidewalks, and slabs built to last',
    'paragraphs' => [
      'We pour and finish concrete for driveways, sidewalks, patios, and slabs with proper base preparation and clean edges.',
      'Reinforcement, control joints, and grading keep your concrete surfaces durable for years.'
    ],
    'bullets'    => [
      'Driveway and sidewalk concrete',
      'Patio slabs and foundation pads',
      'Rebar reinforcement and joint planning',
      'Broom, stamped, and smooth finish options'
    ]
  ],
  'demolition-services' => [
    'kicker'     => 'Demolition Services',
    'headline'   => 'Safe, clean demolition for renovations',
    'paragraphs' => [
      'We handle interior and selective exterior demolition for remodels, additions, and renovation buildouts.',
      'Careful demo protects surrounding structures and keeps your project on schedule.'
    ],
    'bullets'    => [
      'Interior wall and floor demolition',
      'Selective structural demo',
      'Debris removal and site cleanup',
      'Coordination with renovation phases'
    ]
  ],
  'water-damage-restoration' => [
    'kicker'     => 'Water Damage Restoration',
    'headline'   => 'Restore water-damaged spaces to like-new condition',
    'paragraphs' => [
      'We repair and restore areas affected by water damage — drywall, flooring, cabinets, and structural elements.',
      'Proper remediation and finish work bring your space back to full function and appearance.'
    ],
    'bullets'    => [
      'Water damage assessment and scoping',
      'Drywall and insulation replacement',
      'Flooring and subfloor restoration',
      'Cabinet and finish repair'
    ]
  ],
  'make-ready-services' => [
    'kicker'     => 'Make-Ready Services',
    'headline'   => 'Property make-ready for real estate and rentals',
    'paragraphs' => [
      'We prepare homes and commercial spaces for listing, sale, or new tenants quickly and professionally.',
      'Paint, flooring, repairs, cleaning prep, and punch list work handled on tight real estate timelines.'
    ],
    'bullets'    => [
      'Interior painting and touch-ups',
      'Flooring repair and replacement',
      'Drywall patches and texture',
      'Fixture and hardware updates'
    ]
  ],
  'trim-baseboards-finish-carpentry' => [
    'kicker'     => 'Trim, Baseboards & Finish Carpentry',
    'headline'   => 'Precision finish carpentry that elevates every room',
    'paragraphs' => [
      'We install baseboards, crown molding, door casings, and decorative trim with tight joints and clean paint-ready edges.',
      'Finish carpentry is the detail that makes a renovation feel truly complete.'
    ],
    'bullets'    => [
      'Baseboard and door casing installation',
      'Crown molding and chair rail',
      'Window and door trim finishing',
      'Custom built-in carpentry'
    ]
  ],
  'tile-installation' => [
    'kicker'     => 'Tile Installation',
    'headline'   => 'Floor and wall tile installed with expert precision',
    'paragraphs' => [
      'We install tile for floors, walls, showers, and backsplashes with careful layout planning and clean grout lines.',
      'Ceramic, porcelain, natural stone, and large-format tile handled with the right tools and techniques.'
    ],
    'bullets'    => [
      'Floor and wall tile installation',
      'Shower and wet area tile',
      'Large-format and natural stone tile',
      'Grout sealing and waterproofing'
    ]
  ],
  'cabinet-refinishing-painting' => [
    'kicker'     => 'Cabinet Refinishing & Painting',
    'headline'   => 'Transform cabinets without full replacement cost',
    'paragraphs' => [
      'We refinish and repaint kitchen and bathroom cabinets for a fresh, modern look at a fraction of replacement cost.',
      'Proper prep, priming, and professional-grade paint deliver a durable, factory-smooth finish.'
    ],
    'bullets'    => [
      'Cabinet door and box painting',
      'Surface prep and degreasing',
      'Primer and multi-coat finish application',
      'Hardware replacement and updates'
    ]
  ]
];

/*=========================
  WHY CHOOSE (Section copy)
  =========================*/
$WhyChoose = [
  'eyebrow' => 'Elite Renovation Standard',
  'title_pre' => 'Why Choose',
  'intro' => 'Alpha Pro Renovation Group combines architectural structure, precise communication, and a women-led point of view for clients who want renovation to feel elevated and understood.',
  'cards' => [
    [
      'title' => 'Protection First',
      'text'  => 'The brand is built around the symbol of a roofline: every decision should protect the home, the schedule, and the client relationship.'
    ],
    [
      'title' => 'Human-Led Planning',
      'text'  => 'Samantha Rivera brings a psychology background to the process, helping clients feel heard before a scope is built.'
    ],
    [
      'title' => 'Ready to Elevate?',
      'text'  => 'Get renovation support shaped by clean details, modern execution, and high standards from the first conversation.',
      'btn'   => [
        'href' => 'contact.php',
        'text' => 'Request Free Estimate'
      ]
    ],
  ],
];

/*=========================
   PAYMENT METHODS
   =========================*/
function paymentList($txt) {
  $parts = array_map('trim', explode(',', $txt));
  return $parts;
}
$PaymentMethods = paymentList($Payment);

/*=========================
   EXPERIENCE CALCULATION
   =========================*/
$ExperienceYears = (int) filter_var($Experience, FILTER_SANITIZE_NUMBER_INT);
if ($ExperienceYears <= 0) $ExperienceYears = 0;

/*=========================
   COPY / UI TEXT
   =========================*/
$NavCopy = [
  'home' => 'Home',
  'about' => 'About',
  'services' => 'Services',
  'projects' => 'Projects',
  'reviews' => 'Reviews',
  'contact' => 'Contact',
  'other_services' => 'Other Services',
  'cta' => 'Get a Free Estimate',
  'cta_mobile' => 'Get a Free Estimate',
  'explore_service' => 'Explore Service',
  'view_services' => 'View Services',
  'contact_today' => 'Contact Us Today',
  'leave_review' => 'Leave a Review',
  'read_reviews' => 'Read Reviews'
];

$HeaderCopy = [
  'menu_close' => 'Close Menu',
  'menu_toggle' => 'Toggle Menu',
  'social_titles' => [
    'facebook' => 'Facebook',
    'messenger' => 'Messenger',
    'google' => 'Google Reviews',
    'instagram' => 'Instagram',
    'tiktok' => 'TikTok',
    'whatsapp' => 'WhatsApp'
  ]
];

$FooterCopy = [
  'desc' => 'Women-led renovation, remodeling, and property improvement guided by elite architecture, protection, and structural precision.',
  'titles' => [
    'company' => 'Company',
    'services' => 'Services',
    'contact' => 'Contact Us'
  ],
  'labels' => [
    'location' => 'Location',
    'phone' => 'Phone',
    'hours' => 'Hours'
  ],
  'copyright_suffix' => 'All Rights Reserved.'
];

$PageHeroCopy = [
  'default' => [
    'title' => 'Our Services',
    'desc' => 'Residential and commercial remodeling, roofing, and property improvements shaped by the Alpha Pro standard.',
    'bg' => 'assets/img/hero/hero1.jpg'
  ],
  'projects' => [
    'title' => 'Our Recent Projects',
    'desc' => 'Explore renovation work guided by precision, protection, and elevated design intent.',
    'bg' => 'assets/img/hero/hero2.jpg'
  ],
  'about' => [
    'title' => 'About ' . $Company,
    'desc' => 'A women-led renovation group built on elite architecture, structural confidence, and client care.',
    'bg' => 'assets/img/hero/hero3.jpg'
  ],
  'contact' => [
    'title' => 'Get in Touch',
    'desc' => 'Ready to start your project? Contact us today for a free estimate.',
    'bg' => 'assets/img/hero/hero1.jpg'
  ],
  'reviews' => [
    'title' => 'Customer Reviews',
    'desc' => 'Client feedback and launch-ready review space for the Alpha Pro brand.',
    'bg' => 'assets/img/hero/hero2.jpg'
  ],
  'other' => [
    'title' => 'Other Services',
    'desc' => 'Tell us what you need and we will tailor a solution for your property.',
    'bg' => 'assets/img/hero/hero3.jpg'
  ]
];

$HomeHeroCopy = [
  'headline' => $Company,
  'sub' => 'Elite Architecture and Structural Renovation for homes and commercial spaces. A women-led brand where protection, precision, and elevated standards guide every project.',
  'cta_primary' => 'Schedule Free Estimate',
  'cta_secondary' => 'Explore Projects',
  'cta_primary_href' => 'contact.php',
  'cta_secondary_href' => 'projects.php',
  'prev_label' => 'Previous slide',
  'next_label' => 'Next slide',
  'slide_alt_prefix' => 'Alpha Pro Renovation Slide',
  'thumb_alt_prefix' => 'Project Thumbnail',
  'meta_label' => 'Company',
  'status_label' => 'Brand Pillar',
  'slide_statuses' => [
    'Elite Architecture',
    'Women-Led Vision',
    'Structural Renovation',
    'Protection First'
  ],
  'slide_descriptions' => [
    'A renovation group shaped by a monogram A, a roofline silhouette, and the promise of elevated construction standards.',
    'Founded by Samantha Rivera, a mother of two and psychologist who brings listening, confidence, and clarity to the renovation journey.',
    'Double-line precision and a golden identity signal modern execution, technical care, and a higher standard for light remodeling.',
    'Every project should protect the home, respect the client, and raise the quality of the space.'
  ]
];

$HomeAboutCopy = [
  'eyebrow' => 'Elite Architecture and Renovation',
  'title' => 'Designed for Protection,',
  'title_strong' => 'Built to Rise.',
  'description' => 'The Alpha Pro identity uses the geometry of the letter A as an architectural roofline: a symbol of protection, technical mastery, and elevated remodeling standards.',
  'badge_value' => 'A',
  'badge_label' => 'Monogram Standard',
  'metrics' => [
    [
      'value' => 'A',
      'label' => 'Architectural Monogram'
    ],
    [
      'value' => count($ServicesList) . '+',
      'label' => 'Service Categories'
    ],
    [
      'value' => count($Areas),
      'label' => 'Service Area Groups'
    ],
    [
      'value' => $CustomerName,
      'label' => 'Founder-Led Brand'
    ]
  ],
  'images' => [
    'back' => [
      'src' => 'assets/img/stock/remodel-main.jpg',
      'alt' => 'Remodeling project main image'
    ],
    'front' => [
      'src' => 'assets/img/stock/remodel-detail.jpg',
      'alt' => 'Remodeling project detail image'
    ]
  ],
  'features' => [
    [
      'icon' => 'fa-clipboard-list',
      'title' => 'Structured Scope',
      'text' => 'A clear renovation path built around planning, sequence, and visible standards.'
    ],
    [
      'icon' => 'fa-drafting-compass',
      'title' => 'Architectural Symbolism',
      'text' => 'The A and roofline concept communicate protection, solidity, and technical mastery.'
    ],
    [
      'icon' => 'fa-comments',
      'title' => 'Human Insight',
      'text' => 'A psychology-informed approach helps clients feel heard through decisions and timelines.'
    ],
    [
      'icon' => 'fa-gem',
      'title' => 'Golden Precision',
      'text' => 'The gold palette and double-line style express refinement, precision, and confidence.'
    ]
  ],
  'cta' => 'Learn About Our Team'
];

$HomeEmpowermentCopy = [
  'eyebrow' => 'Women-Led Renovation',
  'title' => 'Empowered Leadership',
  'title_strong' => 'Built Into Every Detail',
  'intro' => 'Alpha Pro Renovation Group is shaped by Samantha Rivera: 32 years old, mother of two, psychologist, and founder. Her leadership brings emotional intelligence, discipline, and calm decision-making into an industry where trust matters as much as technique.',
  'quote' => 'A strong renovation brand does more than improve a property. It helps people feel protected, heard, and capable of building the next chapter.',
  'founder' => [
    'name' => $CustomerName,
    'role' => 'Owner and Founder',
    'age' => $OwnerAge,
    'family' => $OwnerFamily,
    'background' => $OwnerBackground
  ],
  'cards' => [
    [
      'icon' => 'fa-hand-holding-heart',
      'title' => 'Empathy With Standards',
      'text' => 'A psychology background supports better listening, clearer expectations, and a renovation process that respects the client behind the project.'
    ],
    [
      'icon' => 'fa-person-dress',
      'title' => 'Female Authority',
      'text' => 'The company positions women as decision-makers, builders, negotiators, and leaders in spaces traditionally dominated by men.'
    ],
    [
      'icon' => 'fa-house-chimney-user',
      'title' => 'Family-Centered Vision',
      'text' => 'As a mother of two, Samantha frames renovation around safety, pride, protection, and the daily life families build inside their homes.'
    ]
  ]
];

$AboutHeroCopy = [
  'eyebrow' => 'About ' . $Company,
  'title' => 'Women-led renovation with an elite architectural standard',
  'desc' => $About[0],
  'cta_primary' => 'Our Story',
  'cta_primary_href' => '#story',
  'cta_secondary_prefix' => 'Call',
  'meta' => [
    $Experience,
    $Estimates,
    $LicenseNote,
    $BilingualNote
  ],
  'list' => [
    [
      'label' => 'Service area',
      'value' => $Coverage
    ],
    [
      'label' => 'Schedule',
      'value' => $Schedule
    ],
    [
      'label' => 'Core trades',
      'value' => $TypeOfService
    ],
    [
      'label' => 'Licenses',
      'value' => $LicenseNote
    ]
  ]
];

$AboutStoryCopy = [
  'eyebrow' => 'Our Story',
  'title' => 'Built on protection, precision, and human leadership',
  'points' => [
    [
      'title' => 'Founder-led clarity',
      'text' => $CustomerName . ' leads the brand with discipline, empathy, and a psychology-informed communication style.'
    ],
    [
      'title' => 'Architectural identity',
      'text' => 'The monogram A and roofline form represent protection, structure, and elevated standards.'
    ],
    [
      'title' => 'Free estimates',
      'text' => $Estimates
    ]
  ],
  'actions' => [
    'primary_text' => 'Request an estimate',
    'primary_href' => 'contact.php',
    'secondary_prefix' => 'Call'
  ],
  'stats' => [
    'years_label' => 'Leadership model',
    'services_label' => 'Core services',
    'areas_label' => 'Service areas',
    'areas_separator' => ', ',
    'areas_preview_count' => 5
  ]
];

$AboutCredentialsCopy = [
  'eyebrow' => 'Why work with us',
  'title' => 'Details that build trust before construction begins',
  'intro' => 'Every estimate and project should make the client feel informed, protected, and confident in the standard being delivered.',
  'list' => [
    [
      'label' => 'Contact',
      'value' => $Phone
    ],
    [
      'label' => 'Licensed & insured',
      'value' => $LicenseNote
    ],
    [
      'label' => 'Core services',
      'value' => $TypeOfService
    ],
    [
      'label' => 'Coverage',
      'value' => $Coverage
    ],
    [
      'text' => $Estimates . ' | ' . $BilingualNote
    ]
  ],
  'cta' => [
    'title' => 'Ready for a confident first step?',
    'desc' => 'Share the project goal and Alpha Pro will shape the next conversation around clarity, care, and technical scope.',
    'primary_text' => 'Start a quote',
    'primary_href' => 'contact.php',
    'secondary_prefix' => 'Call'
  ]
];

$AboutServicesSummaryCopy = [
  'eyebrow' => 'Services',
  'title' => 'What we deliver',
  'desc' => $TypeOfService . ' renovation support tailored to the client, property, and project goal.',
  'link_label' => 'Learn more'
];

$ServicesListCopy = [
  'eyebrow' => 'Scope',
  'title' => 'Core trades we deliver',
  'desc' => $Services,
  'link_label' => 'Learn more'
];

$BrandsCopy = [
  'tagline' => 'Built around protection, elevation, and a women-led renovation standard.'
];

$HomeServicesCopy = [
  'eyebrow' => 'Renovation Services',
  'title' => 'Services for Homes',
  'title_strong' => 'and Commercial Spaces',
  'desc' => 'Kitchen and bathroom remodeling, flooring, painting, drywall, tile, custom cabinets, countertops, concrete, outdoor living, and more — all under the Alpha Pro standard across Dallas–Fort Worth.',
  'link_label' => 'View Service',
  'more_title' => 'Need a Custom Scope?',
  'more_desc' => 'Tell us the goal and we will prepare a practical plan with timeline and cost clarity.',
  'more_button' => 'Request a Custom Quote',
  'more_href' => 'contact.php'
];
$HomeMaintenanceCopy = [
  'tagline' => 'Structural Care',
  'title' => 'Protect, Refine,',
  'title_strong' => 'Elevate',
  'desc' => 'Beyond major remodels, the Alpha Pro template frames every repair and improvement as a chance to protect value, sharpen detail, and raise the standard of the space.',
  'cards' => [
    [
      'icon' => 'fa-hammer',
      'title' => 'Exterior Repairs',
      'text' => 'Roofing, siding, flashing, and weather-exposed components repaired for durability.',
      'action' => 'See Details'
    ],
    [
      'icon' => 'fa-paint-roller',
      'title' => 'Interior Finishes',
      'text' => 'Drywall, trim, paint, and finish restoration completed with clean punch-list standards.',
      'action' => 'See Details'
    ],
    [
      'icon' => 'fa-tools',
      'title' => 'Installation Work',
      'text' => 'Fixture replacements, flooring, cabinetry, and hardware installs completed precisely.',
      'action' => 'See Details'
    ],
    [
      'icon' => 'fa-clipboard-check',
      'title' => 'Recurring Upkeep',
      'text' => 'Scheduled maintenance support for rental portfolios and commercial properties.',
      'action' => 'See Details'
    ]
  ],
  'foundation' => [
    [
      'icon' => 'fa-file-signature',
      'title' => $Estimates,
      'subtitle' => 'Clear Scope and Pricing'
    ],
    [
      'icon' => 'fa-shield-alt',
      'title' => 'Protection First',
      'subtitle' => 'Client and Property Care'
    ],
    [
      'icon' => 'fa-star',
      'title' => 'Founder-Led',
      'subtitle' => 'Samantha Rivera'
    ]
  ]
];

$WhyCopy = [
  'badge' => 'Alpha Pro Standard',
  'title_prefix' => 'Why Clients Choose',
  'description' => 'The brand is built around planning discipline, client protection, and a modern renovation identity that feels strong without losing empathy.',
  'stats' => [
    [
      'value' => 'A',
      'label' => 'Architectural Monogram'
    ],
    [
      'value' => count($ServicesList) . '+',
      'label' => 'Trade Services'
    ],
    [
      'value' => 'Gold',
      'label' => 'Premium Brand Accent'
    ]
  ],
  'service_area_label' => 'Coverage, Care, and Protection',
  'features' => [
    [
      'icon' => 'fa-comments',
      'title' => 'Calm Communication',
      'text' => 'A psychology-informed founder profile supports better listening, clearer priorities, and more confident decisions.'
    ],
    [
      'icon' => 'fa-drafting-compass',
      'title' => 'Technical Precision',
      'text' => 'The double-line visual language reinforces clean execution, planned details, and structural thinking.'
    ],
    [
      'icon' => 'fa-shield-alt',
      'title' => 'Protection Mindset',
      'text' => 'The roofline symbolism keeps the brand anchored in safety, trust, and care for the home.'
    ],
    [
      'icon' => 'fa-person-dress',
      'title' => 'Women-Led Authority',
      'text' => 'The brand gives visible leadership space to a founder, mother, and professional woman in renovation.'
    ]
  ],
  'cta_label' => 'Book a Free Estimate'
];

$MissionCopy = [
  'mission_title' => 'Our Mission',
  'vision_title' => 'Our Vision'
];

$ProcessCopy = [
  'title' => 'How We Guide',
  'title_strong' => 'Renovation Decisions',
  'desc' => 'The workflow is written for clarity: listen first, define scope, execute with precision, and close with confidence.',
  'steps' => [
    [
      'icon' => 'fa-clipboard-list',
      'title' => 'Listen and Understand',
      'text' => 'We begin with the client story, the property goals, and the practical constraints shaping the project.'
    ],
    [
      'icon' => 'fa-pencil-ruler',
      'title' => 'Structure the Scope',
      'text' => 'We define budget, materials, sequence, and expectations before work begins.'
    ],
    [
      'icon' => 'fa-hammer',
      'title' => 'Execute With Precision',
      'text' => 'The build phase should feel controlled, clean, and aligned with the Alpha Pro standard.'
    ],
    [
      'icon' => 'fa-check-circle',
      'title' => 'Close With Confidence',
      'text' => 'We review results, confirm final details, and leave the client with a stronger space.'
    ]
  ]
];

$FaqCopy = [
  'title' => 'Frequently Asked Questions',
  'items' => [
    [
      'q' => 'Do you provide free estimates?',
      'a' => 'Yes. We offer free, no-obligation estimates for all residential and commercial services.'
    ],
    [
      'q' => 'Are license and insurance details available?',
      'a' => $LicenseNote
    ],
    [
      'q' => 'How quickly can you start a project?',
      'a' => 'Start dates depend on project scope and current schedule. We provide timeline availability during your estimate.'
    ],
    [
      'q' => 'Do you handle commercial properties?',
      'a' => 'Yes. The service template supports both homeowners and commercial clients.'
    ]
  ]
];

$AreasCopy = [
  'title' => 'Serving',
  'title_strong' => 'Dallas–Fort Worth (DFW)',
  'subtitle' => $Coverage,
  'cta_label' => 'Request Service in Your Area',
  'map_overlay' => 'Active Service Coverage',
  'signal' => [
    [
      'value' => count($Areas),
      'label' => 'Area Groups'
    ],
    [
      'value' => 'Founder-Led',
      'label' => 'Brand Model'
    ]
  ],
  'license_pills' => [
    'Women-Led Brand',
    'Insured ✔️',
    'Residential & Commercial',
    'Dallas–Fort Worth'
  ]
];
$CtaCopy = [
  'badge' => 'Elite Architecture and Structural Renovation',
  'title' => 'Ready to Elevate',
  'title_strong' => 'Your Property?',
  'paragraph' => 'From kitchens and bathrooms to roofing, siding, concrete, and custom scopes, ' . $Company . ' frames every project around protection, precision, and a confident client experience.',
  'features' => [
    'Women-Led Brand',
    'Insured ✔️',
    'Free Detailed Estimates'
  ],
  'button' => 'Request Your Estimate',
  'card_title' => 'Speak With Our Team',
  'card_subtitle' => 'Fast responses for new project requests',
  'row_call_label' => 'Call for a project quote',
  'row_license_label' => 'License and insurance',
  'row_license_title' => 'Project Credentials',
  'row_service_label' => 'Coverage Area',
  'whatsapp_button' => 'WhatsApp Us',
  'book_button' => 'Start Request'
];

$ContactFormCopy = [
  'eyebrow' => 'Plan Your Project',
  'title' => "Let's Plan",
  'title_strong' => 'With Confidence.',
  'desc' => 'Tell us what you need and the Alpha Pro process will shape a practical estimate with clear next steps.',
  'method_labels' => [
    'call' => 'Call or Text',
    'hours' => 'Business Hours'
  ],
  'form_labels' => [
    'name' => 'Name',
    'phone' => 'Phone',
    'email' => 'Email',
    'service' => 'Service',
    'message' => 'Project Details'
  ],
  'placeholders' => [
    'service' => 'Select service type',
    'service_other' => 'Other / Custom Request',
    'message' => 'Describe location, scope, and target timeline...'
  ],
  'submit' => 'Send Estimate Request',
  'honeypot_label' => 'Leave this field empty'
];

$MapCopy = [
  'title' => 'Locate',
  'title_strong' => 'Alpha Pro',
  'labels' => [
    'location' => 'Service Base',
    'call' => 'Phone',
    'hours' => 'Hours'
  ]
];

$TestimonialsCopy = [
  'title' => 'Client Experience',
  'title_strong' => 'Preview',
  'desc' => 'This template area is ready for verified reviews once Alpha Pro Renovation Group begins publishing client feedback.',
  'button_label' => 'Read More Reviews',
  'button_href' => 'reviews.php',
  'fallback_name' => 'Future Client'
];

$TrustedDirectoriesCopy = [
  'eyebrow' => 'Review Profiles',
  'title' => 'Ready for Verified Platforms',
  'desc' => 'Add verified business profiles here once the new brand listings are published.',
  'cards' => [
    [
      'icon' => 'fa-award',
      'subtitle' => 'Future Profile',
      'title' => 'Business Directory',
      'text' => 'Add a verified directory profile when available.',
      'url' => $DirectoryLinks['bbb'],
      'tags' => ['Business Profile', 'Launch Ready']
    ],
    [
      'icon' => 'fa-building',
      'subtitle' => 'Future Profile',
      'title' => 'Project History',
      'text' => 'Add project history and review platforms as they go live.',
      'url' => $DirectoryLinks['buildzoom'],
      'tags' => ['Project History', 'Verified Reviews']
    ],
    [
      'icon' => 'fa-thumbs-up',
      'subtitle' => 'Future Reviews',
      'title' => 'Client Feedback',
      'text' => 'Connect a customer feedback source after launch.',
      'url' => $DirectoryLinks['thumbtack'],
      'tags' => ['Client Feedback', 'Service Highlights']
    ],
    [
      'icon' => 'fa-house',
      'subtitle' => 'Future Directory',
      'title' => 'Home Services Profile',
      'text' => 'Reserve this card for a verified home services listing.',
      'url' => $DirectoryLinks['homeadvisor'],
      'tags' => ['Verified Feedback', 'Home Services']
    ]
  ]
];
$ReviewsPageCopy = [
  'hero_title' => 'Customer Reviews',
  'hero_subtitle' => 'A launch-ready review page for verified feedback from future Alpha Pro clients.',
  'hero_image' => 'assets/img/stock/vision-crew.jpg',
  'list_eyebrow' => 'Reviews',
  'list_title' => 'What Our Clients Say',
  'list_desc' => 'Preview testimonials are placeholders and should be replaced with verified client feedback after launch.',
  'list_cta' => 'Leave a Review'
];

$ReviewFormCopy = [
  'title' => 'Share Your Experience',
  'subtitle' => 'We value your feedback and would love to hear about your project.',
  'success_title' => 'Thank You!',
  'success_message' => 'Your review has been submitted successfully.',
  'error_title' => 'Error!',
  'captcha_error' => 'Incorrect security code. Please try again.',
  'labels' => [
    'name' => 'Your Name',
    'city' => 'City / Location',
    'rating' => 'Rating',
    'rating_hint' => '(Select stars)',
    'review' => 'Your Review',
    'security' => 'Security Check',
    'refresh' => 'Refresh',
    'captcha' => 'Enter the code shown above'
  ],
  'captcha_alt' => 'Captcha image',
  'placeholders' => [
    'name' => '',
    'city' => 'e.g. Service Area',
    'review' => 'Tell us how we did...'
  ],
  'submit' => 'Submit Review'
];

$GalleryHeroCopy = [
  'eyebrow' => 'Our Gallery',
  'title' => 'Capturing Precision in Every Project',
  'desc' => 'Explore how ' . $Company . ' presents remodeling, repair, and property improvement work through a premium, protection-first brand system.',
  'cta_text' => 'Request Free Estimate',
  'cta_href' => 'contact.php'
];

$ProjectsIntroCopy = [
  'label' => 'Our Portfolio',
  'title_line1' => 'Elevating',
  'title_line2' => 'Spaces.',
  'outline_line1' => 'One Detail',
  'outline_line2' => 'At A Time.',
  'desc' => 'At ' . $Company . ', every project should communicate structure, protection, and a refined renovation standard.',
  'stats' => [
    [
      'value' => 'A',
      'label' => 'Architectural Mark'
    ],
    [
      'value' => count($ServicesList) . '+',
      'label' => 'Services Offered'
    ],
    [
      'value' => count($Areas),
      'label' => 'Area Groups'
    ]
  ]
];

$ProjectsBeforeAfterCopy = [
  'eyebrow' => 'Transformations',
  'title' => 'Before & After',
  'desc' => 'See the difference professional craftsmanship makes.',
  'before_label' => 'Before',
  'after_label' => 'After'
];

$ProjectsStatsCopy = [
  'items' => [
    [
      'icon' => 'fa-hourglass-half',
      'value' => 'Founder',
      'label' => 'Led Brand'
    ],
    [
      'icon' => 'fa-hammer',
      'value' => count($ServicesList) . '+',
      'label' => 'Specialized Services'
    ],
    [
      'icon' => 'fa-map-location-dot',
      'value' => count($Areas),
      'label' => 'Area Groups'
    ],
    [
      'icon' => 'fa-id-card',
      'value' => 'Gold',
      'label' => 'Premium Accent'
    ]
  ]
];

$ProjectsGalleryCopy = [
  'eyebrow' => 'Project Gallery',
  'title' => 'Selected Work &',
  'title_strong' => 'Recent Projects',
  'videos_label' => 'Videos',
  'empty' => 'Projects coming soon.',
  'image_title' => 'Project Photo',
  'video_title' => 'Project Video'
];
$ServiceHeroCopy = [
  'badge' => 'Premium Service',
  'cta_primary' => 'Get Free Estimate',
  'cta_secondary' => 'Explore Service'
];

$ServiceIntroCopy = [
  'eyebrow' => 'Our Methodology',
  'title' => 'How We Deliver',
  'title_strong' => 'Quality Work',
  'desc' => 'We follow a structured process so you always know what to expect from start to finish.',
  'steps' => [
    [
      'icon' => 'fa-comments',
      'title' => 'Consultation',
      'text' => 'We start with a free estimate and a clear scope of work.'
    ],
    [
      'icon' => 'fa-pencil-ruler',
      'title' => 'Plan & Design',
      'text' => 'Materials and details are selected to match your goals and budget.'
    ],
    [
      'icon' => 'fa-hammer',
      'title' => 'Execution',
      'text' => 'Our licensed crew completes the work with clean job sites and reliable scheduling.'
    ]
  ]
];

$ServiceDetailsCopy = [
  'badge_title' => 'Alpha Pro Standard',
  'badge_subtitle' => 'Protection Focused',
  'title_prefix' => 'Professional',
  'button' => 'Get Free Estimate'
];

$ServiceFaqCopy = [
  'eyebrow' => 'Common Questions',
  'title' => 'Info About Our',
  'title_strong' => 'Remodeling Process',
  'items' => [
    [
      'icon' => 'fa-hourglass-half',
      'question' => 'How long does a typical project take?',
      'answer' => 'Timelines vary by scope. We provide a detailed schedule during your estimate so you know what to expect.'
    ],
    [
      'icon' => 'fa-file-invoice-dollar',
      'question' => 'Is the estimate really free?',
      'answer' => 'Yes. ' . $Company . ' provides free estimates and transparent proposals with no obligation.'
    ],
    [
      'icon' => 'fa-shield-halved',
      'question' => 'Are you licensed and insured?',
      'answer' => $LicenseNote . '. We carry liability coverage to protect your property and our crews.'
    ],
    [
      'icon' => 'fa-layer-group',
      'question' => 'Do you help with materials and permits?',
      'answer' => 'Yes. We help source materials and can assist with permits as needed for your project.'
    ]
  ],
  'footer' => 'Have a different question? Contact our team directly'
];

$ServiceCtaCopy = [
  'tag' => 'Ready to Build?',
  'title' => "Let's Transform Your",
  'title_strong' => 'Property Today',
  'paragraph' => 'Get a free, detailed estimate for your %s. The Alpha Pro standard is built around precision, protection, and confident communication.',
  'subject_fallback' => 'project',
  'features' => ['Founder-Led', 'Protection First', 'Free Estimates'],
  'primary' => 'Get Free Estimate',
  'secondary_prefix' => 'Call'
];

$OtherServicesCopy = [
  'label' => 'Additional Services',
  'title' => 'More Ways We Can Help',
  'title_strong' => 'Your Property',
  'item_note' => 'Professional installation and finishing.',
  'cta_title' => 'Have a specific request?',
  'cta_text' => 'From repairs to custom upgrades, we handle the details.',
  'cta_button' => $Estimates,
  'page_desc' => 'Additional service options tailored to your property needs.'
];
$FounderCopy = [
  'title' => 'A Note from',
  'title_strong' => 'The Founder',
  'quote' => 'At ' . $Company . ', renovation is about more than construction. As a mother, psychologist, and founder, I want every client to feel protected, understood, and confident about the space they are building.',
  'role' => 'Owner, Founder, Mother of 2, Psychologist',
  'image_alt' => $CustomerName
];
$AriaCopy = [
  'call' => 'Click to call',
  'primary_nav' => 'Primary navigation',
  'whatsapp' => 'WhatsApp',
  'messenger' => 'Messenger',
  'facebook' => 'Facebook',
  'instagram' => 'Instagram',
  'google' => 'Google Maps',
  'tiktok' => 'TikTok',
  'email' => 'Email'
];
$TestimonialsPageCopy = [
  'eyebrow' => $NavCopy['reviews'] ?? 'Reviews',
  'title' => 'What Clients Say',
  'desc' => 'Launch-ready review space for future Alpha Pro Renovation Group clients.',
  'card_title' => 'Review Profiles Coming Soon',
  'card_desc' => 'Verified review links can be added here once the new profiles are live.',
  'card_button' => $NavCopy['read_reviews'] ?? 'Read Reviews',
  'card_link' => $DirectoryLinks['bbb']
];
$ThankYouCopy = [
  'title' => 'Thank You',
  'description' => 'Thank you for contacting ' . $Company . '. We will be in touch shortly.',
  'eyebrow' => 'Thank You',
  'headline' => 'We received your request',
  'body' => 'Thank you for contacting ' . $Company . '. Our team will reach out soon to confirm project details.',
  'cta_call' => 'Click to Call',
  'cta_home' => 'Back to Home'
];
$LabelsCopy = [
  'service_areas' => 'Service Areas',
  'call' => 'Call',
  'email' => 'Email'
];
/*=========================
   CSS VARIABLES
   =========================*/
$BrandCSSVars = "@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700;800;900&display=swap');\n";
$BrandCSSVars .= sprintf(
  ':root{--brand-primary:%s;--brand-secondary:%s;--brand-white:%s;--brand-accent:%s;--brand-neutral:%s;--brand-primary-rgb:%s;--brand-secondary-rgb:%s;--brand-accent-rgb:%s;--font-body:"Montserrat",Arial,sans-serif;--font-display:"Nexa Heavy","Montserrat",Arial,sans-serif;--font-stack:var(--font-body);}',
  $BrandColors["primary"],
  $BrandColors["secondary"],
  $BrandColors["white"],
  $BrandColors["accent"],
  $BrandColors["neutral"],
  $BrandColors["primary_rgb"],
  $BrandColors["secondary_rgb"],
  $BrandColors["accent_rgb"]
);

$BrandCSSVars .= <<<CSS
body{
  background: linear-gradient(180deg, var(--brand-white) 0%, var(--brand-neutral) 100%);
}
#hero-4.hero4{
  background: linear-gradient(130deg, #000000 0%, #171717 62%, #3a3214 100%) !important;
}
#hero-4 .hero4__slides::after{
  background: linear-gradient(to bottom, rgba(var(--brand-secondary-rgb),0.75) 0%, rgba(var(--brand-secondary-rgb),0.48) 42%, rgba(var(--brand-secondary-rgb),0.82) 100%) !important;
}
#hero-4 .hero4__content{
  background: linear-gradient(145deg, rgba(var(--brand-secondary-rgb),0.9), rgba(var(--brand-primary-rgb),0.72)) !important;
  border: 1px solid rgba(var(--brand-accent-rgb),0.45) !important;
}
#hero-4 .hero4__content::before{
  background: radial-gradient(120% 140% at 0% 0%, rgba(var(--brand-accent-rgb),0.2), transparent 62%) !important;
}
#hero-4 .hero4__btn--primary{
  background: var(--brand-accent) !important;
  color: var(--brand-secondary) !important;
}
#hero-4 .hero4__btn--ghost{
  border-color: rgba(var(--brand-accent-rgb),0.7) !important;
  background: rgba(var(--brand-secondary-rgb),0.24) !important;
}
#hero-4 .hero4__thumb.active,
#hero-4 .hero4__arrow:hover{
  border-color: var(--brand-accent) !important;
}

.section-about-arch,
.section-services-premium,
.section-maint-pro,
.mission-vision-section,
.faq-section{
  background: linear-gradient(180deg, #f8fbff 0%, var(--brand-neutral) 100%) !important;
}
.section-remodel-why,
.section-process,
.section-areas,
.cta-premium-section,
.section-contact-premium,
.section-map-contact{
  background: linear-gradient(135deg, color-mix(in srgb, var(--brand-secondary) 92%, #000 8%) 0%, color-mix(in srgb, var(--brand-primary) 78%, #000 22%) 100%) !important;
}

.section-about-arch .arch-eyebrow,
.section-services-premium .sv-eyebrow,
.section-maint-pro .tagline,
.section-remodel-why .sub-badge,
.section-process .step-icon,
.section-areas .license-pill,
.section-areas .city-icon,
.cta-premium-section .cta-badge,
.section-contact-premium .ct-eyebrow,
.section-map-contact .info-icon{
  color: var(--brand-accent) !important;
  border-color: rgba(var(--brand-accent-rgb),0.55) !important;
}
.section-about-arch .arch-eyebrow::before,
.section-services-premium .sv-eyebrow::before,
.section-services-premium .sv-eyebrow::after,
.section-contact-premium .ct-eyebrow::before{
  background: var(--brand-accent) !important;
}

.section-about-arch .content-arch h2 strong,
.section-services-premium .sv-header h2 strong,
.section-maint-pro .pro-header h2 strong{
  color: var(--brand-primary) !important;
}
.section-remodel-why .why-header h2 strong,
.section-process .process-header h2 span,
.section-areas .areas-content h2 strong,
.cta-premium-section .cta-content h2 strong,
.section-map-contact .contact-card h3 span{
  color: var(--brand-accent) !important;
}

.section-services-premium .sv-card,
.section-maint-pro .maint-card-dark,
.section-remodel-why .feature-card,
.section-process .process-step,
.section-areas .map-frame-wrapper,
.section-contact-premium .ct-form-wrapper,
.cta-premium-section .contact-glass-card,
.section-map-contact .contact-card{
  border-radius: 16px !important;
}
.section-services-premium .sv-card:hover,
.section-maint-pro .maint-card-dark:hover,
.section-remodel-why .feature-card:hover,
.section-process .process-step:hover{
  box-shadow: 0 22px 48px rgba(var(--brand-secondary-rgb),0.26) !important;
}

.section-about-arch .btn-arch,
.section-remodel-why .btn-gold,
.section-areas .btn-area,
.cta-premium-section .btn-cta-primary,
.section-contact-premium .btn-submit-arch,
.section-services-premium .btn-sv-accent{
  border-radius: 999px !important;
}
.section-about-arch .btn-arch,
.section-remodel-why .btn-gold,
.cta-premium-section .btn-cta-primary,
.section-contact-premium .btn-submit-arch{
  background: var(--brand-accent) !important;
  color: var(--brand-secondary) !important;
  border-color: var(--brand-accent) !important;
}
.section-about-arch .btn-arch:hover,
.section-remodel-why .btn-gold:hover,
.cta-premium-section .btn-cta-primary:hover,
.section-contact-premium .btn-submit-arch:hover{
  background: color-mix(in srgb, var(--brand-accent) 84%, #fff 16%) !important;
  color: var(--brand-secondary) !important;
}
.section-areas .btn-area{
  border-color: var(--brand-accent) !important;
  color: var(--brand-accent) !important;
}
.section-areas .btn-area:hover{
  background: var(--brand-accent) !important;
  color: var(--brand-secondary) !important;
}
.section-contact-premium .form-control-arch:focus{
  border-bottom-color: var(--brand-accent) !important;
}
.section-map-contact .map-background iframe{
  filter: grayscale(78%) invert(88%) contrast(0.82) !important;
}
.hero-displace {
  background-color: #000000 !important;
}
.hero-displace__overlay {
  background:
    linear-gradient(96deg, rgba(0,0,0,0.9) 8%, rgba(0,0,0,0.58) 46%, rgba(0,0,0,0.82) 100%) !important;
}
.hero-displace__btn--solid,
.home-about-orbit__btn,
.services-tabs-core__btn--solid {
  background: var(--brand-accent) !important;
  border-color: var(--brand-accent) !important;
  color: #000000 !important;
}
.hero-displace__meta,
.hero-displace__brand,
.home-about-orbit__eyebrow,
.services-tabs-core__eyebrow,
.home-maint-steel__tag,
.reviews-verified__eyebrow {
  letter-spacing: 1.4px !important;
}
.home-about-orbit__story {
  background: linear-gradient(140deg, #000000, #171717) !important;
  border-color: rgba(var(--brand-accent-rgb),0.34) !important;
}
.home-about-orbit__title strong,
.home-about-orbit__index,
.services-tabs-core__header h2 strong,
.services-tabs-core__link,
.reviews-verified__eyebrow {
  color: #000000 !important;
}
.home-about-orbit__eyebrow::before,
.services-tabs-core__eyebrow::before {
  background: var(--brand-accent) !important;
}
.home-about-orbit__copy h3 i,
.home-maint-steel__icon,
.home-maint-steel__action {
  color: var(--brand-accent) !important;
}
.home-about-orbit__index,
.services-tabs-core__tab.is-active {
  border-color: rgba(var(--brand-accent-rgb),0.72) !important;
  background: #000000 !important;
  color: var(--brand-accent) !important;
}
.services-tabs-core,
.reviews-verified {
  background:
    linear-gradient(180deg, #ffffff 0%, var(--brand-neutral) 100%) !important;
}
.services-tabs-core__btn--ghost,
.reviews-verified__btn {
  border-color: rgba(0,0,0,0.24) !important;
  color: #000000 !important;
}
.rv-source,
.rv-card {
  border-radius: 8px !important;
}
CSS;
?>

