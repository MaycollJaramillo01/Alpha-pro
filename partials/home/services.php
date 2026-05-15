<?php if(!isset($Company)) include_once __DIR__.'/../../text.php';
$featuredSlugs=['kitchen-remodeling','bathroom-remodeling','custom-shower-installation','flooring-installation','interior-exterior-painting','drywall-installation-repair','deck-building','concrete-work'];
$icons=['kitchen-remodeling'=>'fa-utensils','bathroom-remodeling'=>'fa-bath','custom-shower-installation'=>'fa-shower','flooring-installation'=>'fa-layer-group','interior-exterior-painting'=>'fa-paint-roller','drywall-installation-repair'=>'fa-wall-bricks','deck-building'=>'fa-tree','concrete-work'=>'fa-road'];
$featured=[];
foreach($featuredSlugs as $sl){if(isset($ServicesList[$sl])) $featured[]=$ServicesList[$sl];}
?>
<style>
.apr-svc{padding:90px 0;background:#F5F2EC}
.apr-svc__head{text-align:center;max-width:640px;margin:0 auto 56px}
.apr-svc__eyebrow{display:inline-flex;align-items:center;gap:10px;font-size:.68rem;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#888;margin-bottom:14px}
.apr-svc__eyebrow::before,.apr-svc__eyebrow::after{content:'';width:24px;height:1.5px;background:#ccc}
.apr-svc__h2{font-family:'Montserrat',Arial,sans-serif;font-size:clamp(1.9rem,3.2vw,2.6rem);font-weight:900;color:#111;line-height:1.12;letter-spacing:-1px;margin:0 0 14px}
.apr-svc__h2 strong{color:#111}
.apr-svc__desc{font-size:.95rem;color:#666;line-height:1.7}
.apr-svc__grid{display:grid;grid-template-columns:repeat(4,1fr);gap:1px;background:#e0e0e0;border:1px solid #e0e0e0;border-radius:6px;overflow:hidden}
.apr-svc__card{background:#fff;padding:32px 24px;transition:.25s;text-decoration:none;color:inherit;display:flex;flex-direction:column;gap:0}
.apr-svc__card:hover{background:#0a0a0a}
.apr-svc__card-icon{width:46px;height:46px;background:#f4f4f4;border-radius:4px;display:flex;align-items:center;justify-content:center;font-size:1.1rem;color:#555;margin-bottom:16px;transition:.25s;flex-shrink:0}
.apr-svc__card:hover .apr-svc__card-icon{background:#C9973C;color:#000}
.apr-svc__card-name{font-family:'Montserrat',Arial,sans-serif;font-size:.92rem;font-weight:800;color:#111;margin-bottom:8px;line-height:1.3;transition:.25s}
.apr-svc__card:hover .apr-svc__card-name{color:#fff}
.apr-svc__card-desc{font-size:.82rem;color:#777;line-height:1.6;transition:.25s;flex:1}
.apr-svc__card:hover .apr-svc__card-desc{color:rgba(255,255,255,.6)}
.apr-svc__card-arrow{display:inline-flex;align-items:center;gap:6px;font-size:.75rem;font-weight:700;letter-spacing:1px;text-transform:uppercase;color:#C9973C;margin-top:18px;opacity:0;transition:.25s}
.apr-svc__card:hover .apr-svc__card-arrow{opacity:1}
.apr-svc__footer{text-align:center;margin-top:40px;display:flex;align-items:center;justify-content:center;gap:16px;flex-wrap:wrap}
.apr-svc__btn-all{display:inline-flex;align-items:center;gap:9px;background:#111;color:#C9973C;font-weight:700;font-size:.78rem;letter-spacing:1px;text-transform:uppercase;padding:13px 28px;border-radius:3px;text-decoration:none;transition:.2s}
.apr-svc__btn-all:hover{background:#C9973C;color:#000}
.apr-svc__btn-quote{display:inline-flex;align-items:center;gap:9px;border:1.5px solid #ddd;color:#333;font-weight:600;font-size:.78rem;letter-spacing:1px;text-transform:uppercase;padding:12px 26px;border-radius:3px;text-decoration:none;transition:.2s}
.apr-svc__btn-quote:hover{border-color:#111;color:#111}
@media(max-width:1100px){.apr-svc__grid{grid-template-columns:repeat(3,1fr)}}
@media(max-width:700px){.apr-svc__grid{grid-template-columns:repeat(2,1fr)}.apr-svc{padding:60px 0}}
@media(max-width:420px){.apr-svc__grid{grid-template-columns:1fr}}
</style>
<section class="apr-svc">
  <div class="container">
    <div class="apr-svc__head">
      <div class="apr-svc__eyebrow">Our Services</div>
      <h2 class="apr-svc__h2">Services for Homes<br><strong>and Commercial Spaces</strong></h2>
      <p class="apr-svc__desc">Kitchen &amp; bath remodeling, flooring, painting, drywall, custom showers, countertops, and more — all across the Dallas–Fort Worth area.</p>
    </div>
    <div class="apr-svc__grid">
      <?php foreach($featured as $svc):
        $sl=$svc['slug']??'';
        $ico=$icons[$sl]??'fa-hammer';
      ?>
      <a href="<?=htmlspecialchars($svc['url']??'services.php')?>" class="apr-svc__card">
        <div class="apr-svc__card-icon"><i class="fa-solid <?=$ico?>"></i></div>
        <div class="apr-svc__card-name"><?=htmlspecialchars($svc['name']??'')?></div>
        <div class="apr-svc__card-desc"><?=htmlspecialchars(substr($svc['description']??'',0,80))?>...</div>
        <span class="apr-svc__card-arrow">Learn More <i class="fa-solid fa-arrow-right"></i></span>
      </a>
      <?php endforeach; ?>
    </div>
    <div class="apr-svc__footer">
      <a href="services.php" class="apr-svc__btn-all"><i class="fa-solid fa-grid-2"></i> All <?=count($ServicesList??[])?>+ Services</a>
      <a href="contact.php" class="apr-svc__btn-quote"><i class="fa-solid fa-clipboard-list"></i> Request a Quote</a>
    </div>
  </div>
</section>


