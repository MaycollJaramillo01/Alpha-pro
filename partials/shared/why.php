<?php if(!isset($Company)) include_once __DIR__.'/../../text.php'; ?>
<style>
.apr-why{padding:90px 0;background:#F5F2EC}
.apr-why__inner{display:grid;grid-template-columns:1fr 1.4fr;gap:64px;align-items:start}
.apr-why__left{}
.apr-why__eyebrow{display:inline-flex;align-items:center;gap:10px;font-size:.68rem;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#888;margin-bottom:18px}
.apr-why__eyebrow::before{content:'';width:24px;height:1.5px;background:#C9973C}
.apr-why__h2{font-family:'Montserrat',Arial,sans-serif;font-size:clamp(1.9rem,3.2vw,2.6rem);font-weight:900;color:#111;line-height:1.1;letter-spacing:-1px;margin:0 0 18px}
.apr-why__h2 strong{color:#111;display:block}
.apr-why__text{font-size:.95rem;color:#555;line-height:1.78;margin-bottom:28px}
.apr-why__stats{display:grid;grid-template-columns:1fr 1fr;gap:12px;margin-bottom:28px}
.apr-why__stat{padding:18px;background:#fff;border-radius:4px;border:1px solid #e8e8e8}
.apr-why__stat-val{font-family:'Montserrat',Arial,sans-serif;font-size:1.5rem;font-weight:900;color:#111;line-height:1}
.apr-why__stat-label{font-size:.72rem;color:#888;text-transform:uppercase;letter-spacing:1.5px;margin-top:4px;font-weight:600}
.apr-why__btn{display:inline-flex;align-items:center;gap:9px;background:#111;color:#C9973C;font-weight:700;font-size:.78rem;letter-spacing:1px;text-transform:uppercase;padding:13px 26px;border-radius:3px;text-decoration:none;transition:.2s}
.apr-why__btn:hover{background:#C9973C;color:#000}
.apr-why__cards{display:grid;grid-template-columns:1fr 1fr;gap:16px}
.apr-why__card{background:#fff;padding:28px 24px;border-radius:4px;border:1px solid #e8e8e8;transition:.25s;position:relative;overflow:hidden}
.apr-why__card::after{content:'';position:absolute;bottom:0;left:0;right:0;height:3px;background:#C9973C;transform:scaleX(0);transform-origin:left;transition:.25s}
.apr-why__card:hover{border-color:#ddd;box-shadow:0 8px 32px rgba(0,0,0,.06)}
.apr-why__card:hover::after{transform:scaleX(1)}
.apr-why__card-icon{width:44px;height:44px;background:#f4f4f4;border-radius:4px;display:flex;align-items:center;justify-content:center;font-size:1.05rem;color:#555;margin-bottom:14px;transition:.25s}
.apr-why__card:hover .apr-why__card-icon{background:#C9973C;color:#000}
.apr-why__card-title{font-family:'Montserrat',Arial,sans-serif;font-size:.88rem;font-weight:800;color:#111;margin-bottom:8px;line-height:1.3}
.apr-why__card-text{font-size:.82rem;color:#777;line-height:1.6}
@media(max-width:900px){.apr-why__inner{grid-template-columns:1fr;gap:40px}.apr-why{padding:60px 0}}
@media(max-width:500px){.apr-why__cards{grid-template-columns:1fr}}
</style>
<section class="apr-why">
  <div class="container">
    <div class="apr-why__inner">
      <div class="apr-why__left">
        <div class="apr-why__eyebrow">Why Choose Us</div>
        <h2 class="apr-why__h2">Why Clients Choose<br><strong>Alpha Pro</strong></h2>
        <p class="apr-why__text">We bring discipline, empathy, and technical precision to every renovation project — serving Dallas–Fort Worth with a standard built on protection, clarity, and results.</p>
        <div class="apr-why__stats">
          <div class="apr-why__stat">
            <div class="apr-why__stat-val"><?=count($ServicesList??[])?>+</div>
            <div class="apr-why__stat-label">Services</div>
          </div>
          <div class="apr-why__stat">
            <div class="apr-why__stat-val"><?=count($Areas??[])?>+</div>
            <div class="apr-why__stat-label">DFW Cities</div>
          </div>
          <div class="apr-why__stat" style="grid-column:1/-1">
            <div class="apr-why__stat-val" style="font-size:1rem;color:#C9973C;background:#111;display:inline-block;padding:4px 12px;border-radius:2px">Insured ✔</div>
            <div class="apr-why__stat-label">Fully Covered</div>
          </div>
        </div>
        <a href="contact.php" class="apr-why__btn"><i class="fa-solid fa-clipboard-list"></i> Get Free Estimate</a>
      </div>
      <div class="apr-why__cards">
        <div class="apr-why__card">
          <div class="apr-why__card-icon"><i class="fa-solid fa-comments"></i></div>
          <div class="apr-why__card-title">Calm Communication</div>
          <div class="apr-why__card-text">A psychology-informed founder supports better listening, clearer priorities, and confident decisions throughout your project.</div>
        </div>
        <div class="apr-why__card">
          <div class="apr-why__card-icon"><i class="fa-solid fa-drafting-compass"></i></div>
          <div class="apr-why__card-title">Technical Precision</div>
          <div class="apr-why__card-text">Every detail planned, every trade coordinated. Clean execution from demo to final walkthrough.</div>
        </div>
        <div class="apr-why__card">
          <div class="apr-why__card-icon"><i class="fa-solid fa-shield-halved"></i></div>
          <div class="apr-why__card-title">Protection First</div>
          <div class="apr-why__card-text">Fully insured and committed to protecting your property, your schedule, and your investment on every project.</div>
        </div>
        <div class="apr-why__card">
          <div class="apr-why__card-icon"><i class="fa-solid fa-star"></i></div>
          <div class="apr-why__card-title">Women-Led Authority</div>
          <div class="apr-why__card-text">Alpha Pro gives visible leadership to a founder, mother, and professional woman in Dallas's renovation industry.</div>
        </div>
      </div>
    </div>
  </div>
</section>


