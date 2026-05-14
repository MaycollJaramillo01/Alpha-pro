<?php if(!isset($Company)) include_once __DIR__.'/../../text.php'; ?>
<style>
.apr-features{padding:90px 0;background:#0a0a0a}
.apr-features__head{text-align:center;max-width:600px;margin:0 auto 56px}
.apr-features__eyebrow{display:inline-flex;align-items:center;gap:8px;font-size:.68rem;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#C9973C;margin-bottom:14px}
.apr-features__h2{font-family:'Montserrat',Arial,sans-serif;font-size:clamp(1.8rem,3vw,2.4rem);font-weight:900;color:#fff;line-height:1.12;letter-spacing:-1px;margin:0 0 14px}
.apr-features__h2 strong{color:#C9973C}
.apr-features__desc{font-size:.92rem;color:rgba(255,255,255,.55);line-height:1.7}
.apr-features__grid{display:grid;grid-template-columns:repeat(4,1fr);gap:1px;background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.08);border-radius:6px;overflow:hidden}
.apr-features__card{background:#111;padding:36px 28px;transition:.25s}
.apr-features__card:hover{background:#161616}
.apr-features__card-icon{font-size:1.6rem;color:#C9973C;margin-bottom:18px}
.apr-features__card-title{font-family:'Montserrat',Arial,sans-serif;font-size:1rem;font-weight:800;color:#fff;margin-bottom:10px;line-height:1.3}
.apr-features__card-text{font-size:.84rem;color:rgba(255,255,255,.5);line-height:1.65}
.apr-features__bar{display:grid;grid-template-columns:repeat(3,1fr);gap:1px;background:rgba(255,255,255,.08);margin-top:1px}
.apr-features__bar-item{background:#111;padding:22px 24px;display:flex;align-items:center;gap:14px}
.apr-features__bar-icon{width:40px;height:40px;background:rgba(201,151,60,.12);border-radius:3px;display:flex;align-items:center;justify-content:center;color:#C9973C;font-size:.95rem;flex-shrink:0}
.apr-features__bar-title{font-size:.82rem;font-weight:700;color:#fff;margin-bottom:2px}
.apr-features__bar-sub{font-size:.72rem;color:rgba(255,255,255,.45);letter-spacing:.5px}
@media(max-width:900px){.apr-features__grid{grid-template-columns:repeat(2,1fr)}.apr-features__bar{grid-template-columns:1fr}.apr-features{padding:60px 0}}
@media(max-width:500px){.apr-features__grid{grid-template-columns:1fr}}
</style>
<section class="apr-features">
  <div class="container">
    <div class="apr-features__head">
      <div class="apr-features__eyebrow">What We Deliver</div>
      <h2 class="apr-features__h2">Protect, Refine,<br><strong>Elevate</strong></h2>
      <p class="apr-features__desc">From light repairs to full renovations — every project handled with the same precision and care across Dallas–Fort Worth.</p>
    </div>
    <div class="apr-features__grid">
      <div class="apr-features__card">
        <div class="apr-features__card-icon"><i class="fa-solid fa-hammer"></i></div>
        <div class="apr-features__card-title">Exterior Repairs</div>
        <div class="apr-features__card-text">Siding, fencing, concrete, and weather-exposed components repaired for long-term durability.</div>
      </div>
      <div class="apr-features__card">
        <div class="apr-features__card-icon"><i class="fa-solid fa-paint-roller"></i></div>
        <div class="apr-features__card-title">Interior Finishes</div>
        <div class="apr-features__card-text">Drywall, texture, trim, and painting completed to clean punch-list standards.</div>
      </div>
      <div class="apr-features__card">
        <div class="apr-features__card-icon"><i class="fa-solid fa-tools"></i></div>
        <div class="apr-features__card-title">Installation Work</div>
        <div class="apr-features__card-text">Flooring, cabinetry, countertops, and fixtures installed with precision and care.</div>
      </div>
      <div class="apr-features__card">
        <div class="apr-features__card-icon"><i class="fa-solid fa-house-chimney-user"></i></div>
        <div class="apr-features__card-title">Room Additions</div>
        <div class="apr-features__card-text">Structural expansions and garage conversions that add real value to your property.</div>
      </div>
    </div>
    <div class="apr-features__bar">
      <div class="apr-features__bar-item">
        <div class="apr-features__bar-icon"><i class="fa-solid fa-file-signature"></i></div>
        <div><div class="apr-features__bar-title">Free Estimates</div><div class="apr-features__bar-sub">Clear scope and pricing</div></div>
      </div>
      <div class="apr-features__bar-item">
        <div class="apr-features__bar-icon"><i class="fa-solid fa-shield-alt"></i></div>
        <div><div class="apr-features__bar-title">Fully Insured</div><div class="apr-features__bar-sub">Your property is protected</div></div>
      </div>
      <div class="apr-features__bar-item">
        <div class="apr-features__bar-icon"><i class="fa-solid fa-star"></i></div>
        <div><div class="apr-features__bar-title">Women-Led Brand</div><div class="apr-features__bar-sub"><?=htmlspecialchars($CustomerName??'Samantha Rivera')?></div></div>
      </div>
    </div>
  </div>
</section>

