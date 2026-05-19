<?php
if (!isset($Company)) include_once __DIR__ . '/../../text.php';

$projectVideos = [
  [
    'src' => 'assets/img/gallery/bathroom-tile-walkthrough.mp4',
    'poster' => 'assets/img/gallery/video-posters/bathroom-tile-walkthrough.jpg',
    'title' => 'Bathroom Tile Walkthrough',
    'label' => 'Shower Tile Detail'
  ],
  [
    'src' => 'assets/img/gallery/custom-shower-floor-walkthrough.mp4',
    'poster' => 'assets/img/gallery/video-posters/custom-shower-floor-walkthrough.jpg',
    'title' => 'Custom Shower Floor Finish',
    'label' => 'Bathroom Remodel'
  ],
];

$availableVideos = [];
foreach ($projectVideos as $video) {
  $absoluteVideo = dirname(__DIR__, 2) . '/' . $video['src'];
  if (!is_file($absoluteVideo)) continue;

  $absolutePoster = dirname(__DIR__, 2) . '/' . $video['poster'];
  if (!is_file($absolutePoster)) $video['poster'] = '';

  $availableVideos[] = $video;
}

if (empty($availableVideos)) return;
?>

<style>
.apr-videos{padding:90px 0;background:#111;color:#fff;overflow:hidden}
.apr-videos__head{max-width:620px;margin:0 auto 48px;text-align:center}
.apr-videos__eyebrow{display:inline-flex;align-items:center;gap:10px;font-size:.68rem;font-weight:700;letter-spacing:0;text-transform:uppercase;color:#C9973C;margin-bottom:14px}
.apr-videos__eyebrow::before,.apr-videos__eyebrow::after{content:'';width:28px;height:1px;background:#C9973C;opacity:.5}
.apr-videos__title{font-family:'Montserrat',Arial,sans-serif;font-size:clamp(1.8rem,3vw,2.4rem);font-weight:900;line-height:1.12;color:#fff;margin:0 0 14px;letter-spacing:0}
.apr-videos__title strong{color:#C9973C}
.apr-videos__desc{font-size:.92rem;line-height:1.7;color:rgba(255,255,255,.56);margin:0}
.apr-videos__grid{display:grid;grid-template-columns:repeat(2,minmax(280px,380px));justify-content:center;gap:18px}
.apr-videos__item{margin:0;background:#0a0a0a;border:1px solid rgba(255,255,255,.09);border-radius:6px;overflow:hidden}
.apr-videos__media{position:relative;background:#050505;height:360px;overflow:hidden}
.apr-videos__media video{width:100%;height:100%;object-fit:cover;object-position:center center;display:block}
.apr-videos__caption{display:flex;align-items:center;justify-content:space-between;gap:14px;padding:18px 20px;border-bottom:1px solid rgba(255,255,255,.08)}
.apr-videos__label{display:inline-flex;align-items:center;gap:8px;color:#d6a545;font-size:.74rem;font-weight:800;text-transform:uppercase;letter-spacing:0;margin-bottom:6px}
.apr-videos__name{display:block;font-family:'Montserrat',Arial,sans-serif;font-size:1rem;font-weight:800;color:#fff!important;line-height:1.25;margin:0}
.apr-videos__icon{width:42px;height:42px;border-radius:50%;display:inline-flex;align-items:center;justify-content:center;background:#C9973C;color:#000;flex:0 0 auto}
.apr-videos__footer{text-align:center;margin-top:36px}
.apr-videos__btn{display:inline-flex;align-items:center;gap:9px;background:#C9973C;color:#000;font-weight:700;font-size:.78rem;letter-spacing:0;text-transform:uppercase;padding:13px 28px;border-radius:3px;text-decoration:none;transition:.2s}
.apr-videos__btn:hover{background:#fff;color:#000}
@media(max-width:900px){.apr-videos__grid{grid-template-columns:minmax(0,380px)}.apr-videos{padding:60px 0}}
@media(max-width:560px){.apr-videos__grid{grid-template-columns:1fr}.apr-videos__media{height:clamp(320px,115vw,460px)}.apr-videos__caption{align-items:flex-start}.apr-videos__icon{width:38px;height:38px}}
</style>

<section class="apr-videos" id="project-videos">
  <div class="container">
    <div class="apr-videos__head">
      <div class="apr-videos__eyebrow">Project Videos</div>
      <h2 class="apr-videos__title">Recent Finish<br><strong>Walkthroughs</strong></h2>
      <p class="apr-videos__desc">Short views from completed bathroom work, showing tile alignment, clean transitions, and final finish quality.</p>
    </div>

    <div class="apr-videos__grid">
      <?php foreach ($availableVideos as $video): ?>
        <figure class="apr-videos__item">
          <figcaption class="apr-videos__caption">
            <div>
              <div class="apr-videos__label"><i class="fa-solid fa-video"></i> <?php echo htmlspecialchars($video['title'], ENT_QUOTES, 'UTF-8'); ?></div>
              <div class="apr-videos__name"><?php echo htmlspecialchars($video['label'], ENT_QUOTES, 'UTF-8'); ?></div>
            </div>
            <span class="apr-videos__icon" aria-hidden="true"><i class="fa-solid fa-play"></i></span>
          </figcaption>
          <div class="apr-videos__media">
            <video controls playsinline preload="metadata"<?php echo !empty($video['poster']) ? ' poster="' . htmlspecialchars($video['poster'], ENT_QUOTES, 'UTF-8') . '"' : ''; ?>>
              <source src="<?php echo htmlspecialchars($video['src'], ENT_QUOTES, 'UTF-8'); ?>" type="video/mp4">
            </video>
          </div>
        </figure>
      <?php endforeach; ?>
    </div>

    <div class="apr-videos__footer">
      <a href="projects.php#portfolio" class="apr-videos__btn"><i class="fa-solid fa-images"></i> View Project Gallery</a>
    </div>
  </div>
</section>
