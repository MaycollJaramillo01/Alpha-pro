<?php if(!isset($Company)) include_once __DIR__.'/../../text.php';
$allAreas=array_filter(array_map('trim',(array)($Areas??[])));
if(empty($allAreas)) $allAreas=['Dallas','Fort Worth','Arlington','Irving','Plano','Garland','Mesquite','Grand Prairie','McKinney','Frisco','Denton','Carrollton','Richardson','Lewisville'];
$mapHtml=trim((string)($GoogleMap??''));
?>
<style>
.apr-areas{padding:90px 0;background:#fff}
.apr-areas__inner{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:start}
.apr-areas__eyebrow{display:inline-flex;align-items:center;gap:10px;font-size:.68rem;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#888;margin-bottom:18px}
.apr-areas__eyebrow::before{content:'';width:24px;height:1.5px;background:#C9973C}
.apr-areas__h2{font-family:'Montserrat',Arial,sans-serif;font-size:clamp(1.9rem,3.2vw,2.6rem);font-weight:900;color:#111;line-height:1.1;letter-spacing:-1px;margin:0 0 16px}
.apr-areas__desc{font-size:.93rem;color:#666;line-height:1.78;margin-bottom:28px}
.apr-areas__chips{display:flex;flex-wrap:wrap;gap:8px;margin-bottom:28px}
.apr-areas__chip{display:inline-flex;align-items:center;gap:6px;padding:7px 14px;background:#f4f4f4;border:1px solid #e8e8e8;border-radius:3px;font-size:.78rem;font-weight:700;color:#333;transition:.2s;text-decoration:none}
.apr-areas__chip i{color:#C9973C;font-size:.7rem}
.apr-areas__chip:hover{background:#111;color:#C9973C;border-color:#111}
.apr-areas__btn{display:inline-flex;align-items:center;gap:9px;background:#111;color:#C9973C;font-weight:700;font-size:.78rem;letter-spacing:1px;text-transform:uppercase;padding:13px 26px;border-radius:3px;text-decoration:none;transition:.2s}
.apr-areas__btn:hover{background:#C9973C;color:#000}
.apr-areas__map{border-radius:4px;overflow:hidden;border:1px solid #e8e8e8;height:460px;background:#f4f4f4;position:sticky;top:24px}
.apr-areas__map iframe{width:100%;height:100%;display:block;border:0;filter:grayscale(20%)}
.apr-areas__map-fallback{display:grid;place-items:center;height:100%;color:#999;font-size:.85rem;font-weight:700;text-transform:uppercase;letter-spacing:2px}
@media(max-width:900px){.apr-areas__inner{grid-template-columns:1fr}.apr-areas{padding:60px 0}.apr-areas__map{height:300px;position:static}}
</style>
<section class="apr-areas">
  <div class="container">
    <div class="apr-areas__inner">
      <div>
        <div class="apr-areas__eyebrow">Service Areas</div>
        <h2 class="apr-areas__h2">Serving the Dallas–Fort Worth Metroplex</h2>
        <p class="apr-areas__desc"><?=htmlspecialchars($Coverage??'We provide renovation and contracting services across the Dallas–Fort Worth metroplex. Contact us to confirm availability in your city.')?></p>
        <div class="apr-areas__chips">
          <?php foreach($allAreas as $city): ?>
          <span class="apr-areas__chip"><i class="fa-solid fa-location-dot"></i><?=htmlspecialchars($city)?></span>
          <?php endforeach; ?>
        </div>
        <a href="contact.php" class="apr-areas__btn"><i class="fa-solid fa-map-location-dot"></i> Check Your Area</a>
      </div>
      <div class="apr-areas__map">
        <?php if($mapHtml!==''): echo $mapHtml; else: ?>
        <div class="apr-areas__map-fallback">Dallas–Fort Worth, TX</div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

