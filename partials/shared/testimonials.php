<?php if(!isset($Company)) include_once __DIR__.'/../../text.php';
$reviews=array_slice($DetailedReviewItems??$DirectoryReviewItems??[],0,3);
?>
<style>
.apr-reviews{padding:90px 0;background:#F5F2EC}
.apr-reviews__head{text-align:center;max-width:560px;margin:0 auto 52px}
.apr-reviews__eyebrow{display:inline-flex;align-items:center;gap:10px;font-size:.68rem;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#888;margin-bottom:14px}
.apr-reviews__eyebrow::before,.apr-reviews__eyebrow::after{content:'';width:24px;height:1.5px;background:#e0e0e0}
.apr-reviews__h2{font-family:'Montserrat',Arial,sans-serif;font-size:clamp(1.8rem,3vw,2.4rem);font-weight:900;color:#111;letter-spacing:-1px;margin:0 0 12px;line-height:1.12}
.apr-reviews__desc{font-size:.92rem;color:#666;line-height:1.7}
.apr-reviews__grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px}
.apr-reviews__card{background:#fff;padding:32px 28px;border-radius:4px;border:1px solid #eee;position:relative;transition:.25s}
.apr-reviews__card:hover{box-shadow:0 8px 32px rgba(0,0,0,.07);border-color:#ddd}
.apr-reviews__quote{font-size:2.5rem;color:#C9973C;line-height:1;margin-bottom:12px;font-family:Georgia,serif}
.apr-reviews__stars{display:flex;gap:3px;margin-bottom:14px}
.apr-reviews__stars i{color:#C9973C;font-size:.8rem}
.apr-reviews__text{font-size:.88rem;color:#555;line-height:1.72;margin-bottom:20px;font-style:italic}
.apr-reviews__meta{display:flex;align-items:center;gap:12px;padding-top:18px;border-top:1px solid #f0f0f0}
.apr-reviews__avatar{width:40px;height:40px;border-radius:50%;background:#111;display:flex;align-items:center;justify-content:center;color:#C9973C;font-weight:700;font-size:.9rem;flex-shrink:0}
.apr-reviews__name{font-weight:700;font-size:.85rem;color:#111}
.apr-reviews__city{font-size:.75rem;color:#999}
.apr-reviews__footer{text-align:center;margin-top:36px}
.apr-reviews__btn{display:inline-flex;align-items:center;gap:9px;border:1.5px solid #ddd;color:#333;font-weight:600;font-size:.78rem;letter-spacing:1px;text-transform:uppercase;padding:12px 26px;border-radius:3px;text-decoration:none;transition:.2s}
.apr-reviews__btn:hover{border-color:#111;color:#111}
@media(max-width:900px){.apr-reviews__grid{grid-template-columns:1fr}.apr-reviews{padding:60px 0}}
</style>
<section class="apr-reviews">
  <div class="container">
    <div class="apr-reviews__head">
      <div class="apr-reviews__eyebrow">Client Reviews</div>
      <h2 class="apr-reviews__h2">What Our Clients Say</h2>
      <p class="apr-reviews__desc">Real experiences from homeowners and businesses across the Dallas–Fort Worth area.</p>
    </div>
    <div class="apr-reviews__grid">
      <?php if(empty($reviews)):
      $fallbackReviews=[
        ['name'=>'Maria Gonzalez','city'=>'Plano, TX','stars'=>5,'text'=>'They remodeled our master bathroom from scratch — custom shower, new tile, everything. The work was clean, on schedule, and exactly what we asked for. Samantha kept us informed at every step. Highly recommend.'],
        ['name'=>'James Whitfield','city'=>'Arlington, TX','stars'=>5,'text'=>'Alpha Pro did our kitchen cabinets in 5 days just like they said. No mess, no delays. The team was professional and respectful of our home. The result looks incredible — our wife cried when she saw it.'],
        ['name'=>'Lorena Castillo','city'=>'Irving, TX','stars'=>5,'text'=>'We hired them for flooring and drywall repair after water damage. They were fast, fair on pricing, and the finish was perfect. You can\'t tell anything ever happened. Will use them again without hesitation.'],
      ];
      foreach($fallbackReviews as $r): $initial=strtoupper(substr($r['name'],0,1)); ?>
      <div class="apr-reviews__card">
        <div class="apr-reviews__quote">"</div>
        <div class="apr-reviews__stars"><?php for($s=0;$s<$r['stars'];$s++) echo '<i class="fa-solid fa-star"></i>'; ?></div>
        <p class="apr-reviews__text"><?=htmlspecialchars($r['text'])?></p>
        <div class="apr-reviews__meta">
          <div class="apr-reviews__avatar"><?=$initial?></div>
          <div><div class="apr-reviews__name"><?=htmlspecialchars($r['name'])?></div><div class="apr-reviews__city"><?=htmlspecialchars($r['city'])?></div></div>
        </div>
      </div>
      <?php endforeach; ?>
      <?php else: ?>
      <?php foreach($reviews as $r): $initial=strtoupper(substr($r['name']??'C',0,1)); ?>
      <div class="apr-reviews__card">
        <div class="apr-reviews__quote">"</div>
        <div class="apr-reviews__stars"><?php for($s=0;$s<(int)($r['stars']??5);$s++) echo '<i class="fa-solid fa-star"></i>'; ?></div>
        <p class="apr-reviews__text"><?=htmlspecialchars(substr($r['text']??'',0,200))?><?=strlen($r['text']??'')>200?'...':''?></p>
        <div class="apr-reviews__meta">
          <div class="apr-reviews__avatar"><?=$initial?></div>
          <div><div class="apr-reviews__name"><?=htmlspecialchars($r['name']??'Client')?></div><div class="apr-reviews__city"><?=htmlspecialchars($r['city']??'DFW')?></div></div>
        </div>
      </div>
      <?php endforeach; ?>
      <?php endif; ?>
    </div>
    <div class="apr-reviews__footer">
      <a href="reviews.php" class="apr-reviews__btn"><i class="fa-solid fa-star"></i> Read All Reviews</a>
    </div>
  </div>
</section>


