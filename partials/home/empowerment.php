<?php if(!isset($Company)) include_once __DIR__.'/../../text.php'; ?>
<style>
.apr-founder{padding:90px 0;background:#fff}
.apr-founder__grid{display:grid;grid-template-columns:1fr 1.1fr;gap:70px;align-items:center}
.apr-founder__content{}
.apr-founder__eyebrow{display:inline-flex;align-items:center;gap:10px;font-size:.68rem;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#888;margin-bottom:18px}
.apr-founder__eyebrow::before{content:'';width:24px;height:1.5px;background:#C9973C}
.apr-founder__h2{font-family:'Montserrat',Arial,sans-serif;font-size:clamp(1.8rem,3vw,2.5rem);font-weight:900;color:#111;line-height:1.12;letter-spacing:-1px;margin:0 0 18px}
.apr-founder__text{font-size:.96rem;color:#555;line-height:1.78;margin-bottom:22px}
.apr-founder__quote{position:relative;padding:20px 24px 20px 24px;border-left:3px solid #C9973C;background:#FBF5E8;border-radius:0 4px 4px 0;margin-bottom:28px;font-size:.95rem;color:#333;line-height:1.7;font-style:italic}
.apr-founder__chips{display:flex;flex-wrap:wrap;gap:8px;margin-bottom:28px}
.apr-founder__chip{font-size:.72rem;font-weight:700;letter-spacing:1px;text-transform:uppercase;padding:6px 14px;border-radius:2px;background:#f4f4f4;color:#333;border:1px solid #e8e8e8}
.apr-founder__chip.gold{background:#C9973C;color:#000;border-color:#C9973C}
.apr-founder__btn{display:inline-flex;align-items:center;gap:9px;border:1.5px solid #111;color:#111;font-weight:700;font-size:.78rem;letter-spacing:1px;text-transform:uppercase;padding:12px 24px;border-radius:3px;text-decoration:none;transition:.2s}
.apr-founder__btn:hover{background:#111;color:#C9973C}
.apr-founder__card{background:#0a0a0a;border-radius:6px;overflow:hidden;position:relative}
.apr-founder__card-img{width:100%;aspect-ratio:3/4;object-fit:cover;display:block;opacity:.85}
.apr-founder__card-info{position:absolute;bottom:0;left:0;right:0;padding:28px;background:linear-gradient(to top,rgba(0,0,0,.95) 0%,rgba(0,0,0,.6) 60%,transparent 100%)}
.apr-founder__card-name{font-family:'Montserrat',Arial,sans-serif;font-size:1.3rem;font-weight:900;color:#fff;margin-bottom:4px}
.apr-founder__card-role{font-size:.77rem;font-weight:600;letter-spacing:1.5px;text-transform:uppercase;color:#C9973C;margin-bottom:14px}
.apr-founder__card-stats{display:flex;gap:20px;flex-wrap:wrap}
.apr-founder__card-stat{font-size:.77rem;color:rgba(255,255,255,.6);display:flex;align-items:center;gap:6px}
.apr-founder__card-stat i{color:#C9973C}
.apr-founder__accent-line{width:48px;height:3px;background:#C9973C;margin-bottom:20px}
@media(max-width:900px){
  .apr-founder__grid{grid-template-columns:1fr;gap:40px}
  .apr-founder__card{max-width:420px;margin:0 auto}
  .apr-founder{padding:60px 0}
}
</style>
<section class="apr-founder">
  <div class="container">
    <div class="apr-founder__grid">
      <div class="apr-founder__content">
        <div class="apr-founder__eyebrow">Women-Led Renovation</div>
        <div class="apr-founder__accent-line"></div>
        <h2 class="apr-founder__h2">Empowered Leadership<br>Built Into Every Detail</h2>
        <div class="apr-founder__quote">"A strong renovation brand does more than improve a property. It helps people feel protected, heard, and capable of building the next chapter."</div>
        <p class="apr-founder__text">Alpha Pro Renovation Group is shaped by <?=htmlspecialchars($CustomerName??'Samantha Rivera')?>: a licensed professional who brings emotional intelligence, discipline, and calm decision-making into an industry where trust matters as much as technique.</p>
        <div class="apr-founder__chips">
          <span class="apr-founder__chip gold">Women-Led</span>
          <span class="apr-founder__chip">Psychologist</span>
          <span class="apr-founder__chip">Mother of 2</span>
          <span class="apr-founder__chip">Dallas DFW</span>
          <span class="apr-founder__chip">Insured ✔</span>
        </div>
        <a href="about.php" class="apr-founder__btn"><i class="fa-solid fa-user"></i> Meet Our Founder</a>
      </div>
      <div>
        <div class="apr-founder__card">
          <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=600&h=800&fit=crop&crop=face" alt="<?=htmlspecialchars($CustomerName??'Samantha Rivera')?>" class="apr-founder__card-img">
          <div class="apr-founder__card-info">
            <div class="apr-founder__card-name"><?=htmlspecialchars($CustomerName??'Samantha Rivera')?></div>
            <div class="apr-founder__card-role">Owner &amp; Founder</div>
            <div class="apr-founder__card-stats">
              <span class="apr-founder__card-stat"><i class="fa-solid fa-shield-halved"></i> Insured</span>
              <span class="apr-founder__card-stat"><i class="fa-solid fa-location-dot"></i> Dallas, TX</span>
              <span class="apr-founder__card-stat"><i class="fa-solid fa-phone"></i> <?=htmlspecialchars($Phone??'')?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


