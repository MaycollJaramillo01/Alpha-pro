<?php
if (!isset($ServicesList)) include_once __DIR__ . '/../../text.php';

// ── Category map ─────────────────────────────────────────────────────────────
// Images that have a known category. Any image NOT listed shows only in "All".
$categoryMap = [
    'flooring'   => ['project-02.jpg','project-03.jpg','project-05.jpg','project-06.jpg',
                     'project-20.jpg','project-25.jpg','project-48.jpg','project-65.jpg'],
    'bathroom'   => ['project-50.jpg','project-55.jpg','project-60.jpg',
                     'project-75.jpg','project-79.jpg'],
    'kitchen'    => ['project-01.jpg','project-45.jpg'],
    'custom'     => ['project-10.jpg','project-15.jpg','project-35.jpg','project-40.jpg',
                     'project-62.jpg','project-68.jpg','project-70.jpg','project-72.jpg'],
    'outdoor'    => ['project-30.jpg','project-36.jpg'],
];

// Build reverse-lookup: filename → category
$fileToCategory = [];
foreach ($categoryMap as $cat => $files) {
    foreach ($files as $f) $fileToCategory[strtolower($f)] = $cat;
}

// Tab labels
$tabs = [
    'all'      => 'All Projects',
    'flooring' => 'Flooring',
    'bathroom' => 'Bathrooms',
    'kitchen'  => 'Kitchens',
    'custom'   => 'Custom Work',
    'outdoor'  => 'Outdoor',
];

// ── Scan gallery directory ────────────────────────────────────────────────────
$galleryRoot  = __DIR__ . '/../../assets/img/gallery';
$imgExts      = ['jpg','jpeg','png','webp'];
$vidExts      = ['mp4','webm','mov'];
$galleryItems = [];
$videoItems   = [];

if (is_dir($galleryRoot)) {
    $files = array_diff(scandir($galleryRoot), ['.','..']);
    sort($files);
    foreach ($files as $file) {
        $full = $galleryRoot . '/' . $file;
        if (!is_file($full)) continue;
        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        $rel = 'assets/img/gallery/' . $file;
        if (in_array($ext, $imgExts, true)) {
            $cat = $fileToCategory[strtolower($file)] ?? 'uncategorized';
            $galleryItems[] = ['src' => $rel, 'cat' => $cat, 'file' => $file, 'type' => 'image'];
        } elseif (in_array($ext, $vidExts, true)) {
            $videoItems[] = ['src' => $rel, 'cat' => 'videos', 'file' => $file, 'type' => 'video'];
        }
    }
}

// Count per tab (excluding "all" which is total)
$tabCounts = ['all' => count($galleryItems) + count($videoItems)];
foreach (array_keys($tabs) as $slug) {
    if ($slug === 'all') continue;
    $tabCounts[$slug] = 0;
}
foreach ($galleryItems as $item) {
    if (isset($tabCounts[$item['cat']])) $tabCounts[$item['cat']]++;
}

// Include videos tab only if there are videos
if (!empty($videoItems)) {
    $tabs['videos'] = 'Videos';
    $tabCounts['videos'] = count($videoItems);
}

// All items merged
$allItems = array_merge($galleryItems, $videoItems);
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

<style>
.pgrid{padding:100px 0 80px;background:#0a0a0a;color:#fff;font-family:'Montserrat',Arial,sans-serif}
.pgrid__head{text-align:center;margin-bottom:52px}
.pgrid__eyebrow{display:inline-flex;align-items:center;gap:10px;font-size:.68rem;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#C9973C;margin-bottom:14px}
.pgrid__eyebrow::before,.pgrid__eyebrow::after{content:'';width:24px;height:1px;background:#C9973C;opacity:.5}
.pgrid__title{font-size:clamp(2rem,4vw,3rem);font-weight:300;line-height:1.1;color:#fff;margin:0}
.pgrid__title strong{font-weight:900}

/* Filter tabs */
.pgrid__filters{display:flex;justify-content:center;flex-wrap:wrap;gap:8px;margin-bottom:48px}
.pgrid__filter{display:inline-flex;align-items:center;gap:7px;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1);color:rgba(255,255,255,.55);font-size:.72rem;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;padding:9px 18px;border-radius:100px;cursor:pointer;transition:.2s;font-family:inherit}
.pgrid__filter:hover{color:#C9973C;border-color:rgba(201,151,60,.4);background:rgba(201,151,60,.06)}
.pgrid__filter.active{background:#C9973C;border-color:#C9973C;color:#000}
.pgrid__filter-count{font-size:.65rem;font-weight:700;opacity:.7;background:rgba(0,0,0,.15);border-radius:100px;padding:1px 7px;margin-left:2px}
.pgrid__filter.active .pgrid__filter-count{background:rgba(0,0,0,.2);opacity:1}

/* Grid */
.pgrid__grid{
  columns:3;
  column-gap:14px;
}
.pgrid__item{
  break-inside:avoid;
  margin-bottom:14px;
  position:relative;
  overflow:hidden;
  border-radius:4px;
  cursor:pointer;
  display:none;
}
.pgrid__item.show{display:block;animation:pgFadeIn .4s ease forwards}
@keyframes pgFadeIn{from{opacity:0;transform:translateY(12px)}to{opacity:1;transform:translateY(0)}}
.pgrid__item img,.pgrid__item video{
  width:100%;
  display:block;
  transition:transform .5s ease;
}
.pgrid__item:hover img,.pgrid__item:hover video{transform:scale(1.05)}
.pgrid__overlay{
  position:absolute;inset:0;
  background:linear-gradient(to top,rgba(0,0,0,.8) 0%,transparent 55%);
  opacity:0;transition:.3s;
  display:flex;align-items:flex-end;
  padding:20px;
}
.pgrid__item:hover .pgrid__overlay{opacity:1}
.pgrid__overlay-cat{font-size:.65rem;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:#C9973C}
.pgrid__zoom{
  position:absolute;top:14px;right:14px;
  width:38px;height:38px;border-radius:50%;
  background:rgba(0,0,0,.5);backdrop-filter:blur(4px);
  border:1px solid rgba(255,255,255,.15);
  display:flex;align-items:center;justify-content:center;
  color:#C9973C;font-size:.8rem;
  opacity:0;transform:scale(.8);transition:.25s;
}
.pgrid__item:hover .pgrid__zoom{opacity:1;transform:scale(1)}
.pgrid__link{position:absolute;inset:0;z-index:5;cursor:zoom-in}

.pgrid__video-badge{
  position:absolute;inset:0;display:flex;align-items:center;justify-content:center;pointer-events:none;
}
.pgrid__video-badge span{
  width:52px;height:52px;border-radius:50%;
  background:rgba(0,0,0,.5);border:2px solid rgba(255,255,255,.7);
  display:flex;align-items:center;justify-content:center;
  color:#fff;font-size:1.1rem;
  transition:.2s;
}
.pgrid__item:hover .pgrid__video-badge span{background:#C9973C;border-color:#C9973C;color:#000}

.pgrid__empty{
  text-align:center;padding:80px 20px;
  border:1px dashed rgba(255,255,255,.1);border-radius:4px;
  color:rgba(255,255,255,.3);
}

@media(max-width:900px){.pgrid__grid{columns:2}}
@media(max-width:560px){
  .pgrid__grid{columns:1}
  .pgrid{padding:60px 0}
}
</style>

<section class="pgrid" id="portfolio">
  <div class="container">

    <div class="pgrid__head">
      <div class="pgrid__eyebrow">Project Gallery</div>
      <h2 class="pgrid__title">Selected Work &amp; <strong>Recent Projects</strong></h2>
    </div>

    <div class="pgrid__filters">
      <?php foreach ($tabs as $slug => $label): ?>
        <?php $count = $tabCounts[$slug] ?? 0; if ($count === 0 && $slug !== 'all') continue; ?>
        <button class="pgrid__filter<?=$slug==='all'?' active':''?>" data-filter="<?=htmlspecialchars($slug)?>">
          <?=htmlspecialchars($label)?>
          <span class="pgrid__filter-count"><?=$count?></span>
        </button>
      <?php endforeach; ?>
    </div>

    <div class="pgrid__grid" id="pgridGrid">
      <?php if (empty($allItems)): ?>
        <div class="pgrid__empty" style="column-span:all">
          <i class="fa-solid fa-camera" style="font-size:2.5rem;margin-bottom:16px;display:block"></i>
          <p>Project photos coming soon.</p>
        </div>
      <?php else: ?>
        <?php foreach ($allItems as $item): ?>
          <div class="pgrid__item show" data-cat="<?=htmlspecialchars($item['cat'])?>">
            <?php if ($item['type'] === 'video'): ?>
              <video muted playsinline preload="metadata">
                <source src="<?=htmlspecialchars($item['src'])?>" type="video/mp4">
              </video>
              <div class="pgrid__video-badge"><span><i class="fa-solid fa-play"></i></span></div>
            <?php else: ?>
              <img src="<?=htmlspecialchars($item['src'])?>" alt="Project photo" loading="lazy">
            <?php endif; ?>
            <div class="pgrid__overlay">
              <div class="pgrid__overlay-cat"><?=htmlspecialchars(ucfirst(str_replace('-',' ',$item['cat'])))?></div>
            </div>
            <div class="pgrid__zoom"><i class="fa-solid fa-expand"></i></div>
            <a href="<?=htmlspecialchars($item['src'])?>" class="glightbox pgrid__link" data-gallery="portfolio" data-type="<?=htmlspecialchars($item['type'])?>"></a>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>

  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
<script>
(function(){
  const lightbox = GLightbox({selector:'.glightbox',touchNavigation:true,loop:true,autoplayVideos:true});

  const btns  = document.querySelectorAll('.pgrid__filter');
  const items = document.querySelectorAll('.pgrid__item');

  btns.forEach(btn => btn.addEventListener('click', function(){
    btns.forEach(b => b.classList.remove('active'));
    this.classList.add('active');
    const filter = this.dataset.filter;
    items.forEach(item => {
      const cat = item.dataset.cat;
      const show = filter === 'all' || cat === filter;
      item.style.animation = 'none';
      void item.offsetHeight;
      item.style.animation = '';
      item.classList.toggle('show', show);
    });
  }));
})();
</script>
