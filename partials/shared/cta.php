<?php if(!isset($Company)) include_once __DIR__.'/../../text.php'; ?>
<style>
.apr-cta{padding:90px 0;background:#0a0a0a;position:relative;overflow:hidden}
.apr-cta::before{content:'';position:absolute;inset:0;background-image:linear-gradient(rgba(201,151,60,.04) 1px,transparent 1px),linear-gradient(90deg,rgba(201,151,60,.04) 1px,transparent 1px);background-size:48px 48px;pointer-events:none}
.apr-cta__inner{position:relative;z-index:1;text-align:center;max-width:680px;margin:0 auto}
.apr-cta__eyebrow{display:inline-flex;align-items:center;gap:10px;font-size:.68rem;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#C9973C;margin-bottom:20px}
.apr-cta__eyebrow::before,.apr-cta__eyebrow::after{content:'';width:32px;height:1px;background:#C9973C;opacity:.5}
.apr-cta__h2{font-family:'Montserrat',Arial,sans-serif;font-size:clamp(2rem,4vw,3rem);font-weight:900;color:#fff;letter-spacing:-1.5px;line-height:1.1;margin:0 0 18px}
.apr-cta__h2 span{color:#C9973C}
.apr-cta__text{font-size:.95rem;color:rgba(255,255,255,.55);line-height:1.72;margin-bottom:36px}
.apr-cta__actions{display:flex;align-items:center;justify-content:center;gap:14px;flex-wrap:wrap}
.apr-cta__btn{display:inline-flex;align-items:center;gap:9px;font-weight:700;font-size:.78rem;letter-spacing:1px;text-transform:uppercase;padding:15px 30px;border-radius:3px;text-decoration:none;transition:.2s}
.apr-cta__btn--primary{background:#C9973C;color:#000;border:1.5px solid #C9973C}
.apr-cta__btn--primary:hover{background:#fff;border-color:#fff}
.apr-cta__btn--ghost{background:transparent;color:#fff;border:1.5px solid rgba(255,255,255,.3)}
.apr-cta__btn--ghost:hover{border-color:#fff;color:#fff}
.apr-cta__trust{display:flex;align-items:center;justify-content:center;gap:24px;margin-top:36px;flex-wrap:wrap}
.apr-cta__trust-item{display:flex;align-items:center;gap:7px;font-size:.72rem;font-weight:700;letter-spacing:1px;text-transform:uppercase;color:rgba(255,255,255,.4)}
.apr-cta__trust-item i{color:#C9973C;font-size:.75rem}
@media(max-width:600px){.apr-cta{padding:60px 0}.apr-cta__actions{flex-direction:column;width:100%}.apr-cta__btn{width:100%;justify-content:center}}
</style>
<section class="apr-cta">
  <div class="container">
    <div class="apr-cta__inner">
      <div class="apr-cta__eyebrow">Get Started</div>
      <h2 class="apr-cta__h2">Ready to Start Your<br><span>Renovation?</span></h2>
      <p class="apr-cta__text">Get a free, no-obligation estimate from the Alpha Pro team. We serve homeowners and businesses across the Dallas–Fort Worth area with precision, care, and full insurance coverage.</p>
      <div class="apr-cta__actions">
        <a href="contact.php" class="apr-cta__btn apr-cta__btn--primary"><i class="fa-solid fa-clipboard-list"></i> Get Free Estimate</a>
        <a href="<?=htmlspecialchars($PhoneRef??'tel:9452387350')?>" class="apr-cta__btn apr-cta__btn--ghost"><i class="fa-solid fa-phone"></i> <?=htmlspecialchars($Phone??'(945) 238-7350')?></a>
      </div>
      <div class="apr-cta__trust">
        <span class="apr-cta__trust-item"><i class="fa-solid fa-shield-halved"></i> Fully Insured</span>
        <span class="apr-cta__trust-item"><i class="fa-solid fa-file-invoice-dollar"></i> Free Estimates</span>
        <span class="apr-cta__trust-item"><i class="fa-solid fa-map-location-dot"></i> Dallas–Fort Worth</span>
        <span class="apr-cta__trust-item"><i class="fa-solid fa-star"></i> Women-Led</span>
      </div>
    </div>
  </div>
</section>

