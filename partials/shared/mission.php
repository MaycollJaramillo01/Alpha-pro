<?php if(!isset($Company)) include_once __DIR__.'/../../text.php'; ?>
<style>
.apr-mv{padding:0;background:#fff;overflow:hidden}
.apr-mv__grid{display:grid;grid-template-columns:1fr 1fr}
.apr-mv__panel{padding:64px 56px}
.apr-mv__panel--dark{background:#0a0a0a}
.apr-mv__panel--light{background:#F5F2EC}
.apr-mv__label{display:inline-flex;align-items:center;gap:8px;font-size:.68rem;font-weight:700;letter-spacing:2.5px;text-transform:uppercase;margin-bottom:20px}
.apr-mv__panel--dark .apr-mv__label{color:#C9973C}
.apr-mv__panel--light .apr-mv__label{color:#888}
.apr-mv__label::before{content:'';width:20px;height:2px;background:currentColor}
.apr-mv__h3{font-family:'Montserrat',Arial,sans-serif;font-size:clamp(1.4rem,2.2vw,1.9rem);font-weight:900;line-height:1.15;letter-spacing:-.5px;margin:0 0 16px}
.apr-mv__panel--dark .apr-mv__h3{color:#fff}
.apr-mv__panel--light .apr-mv__h3{color:#111}
.apr-mv__text{font-size:.93rem;line-height:1.78}
.apr-mv__panel--dark .apr-mv__text{color:rgba(255,255,255,.6)}
.apr-mv__panel--light .apr-mv__text{color:#555}
.apr-mv__icon{width:52px;height:52px;border-radius:4px;display:flex;align-items:center;justify-content:center;font-size:1.2rem;margin-bottom:22px}
.apr-mv__panel--dark .apr-mv__icon{background:rgba(201,151,60,.12);color:#C9973C}
.apr-mv__panel--light .apr-mv__icon{background:#e8e8e8;color:#333}
@media(max-width:768px){
  .apr-mv__grid{grid-template-columns:1fr}
  .apr-mv__panel{padding:48px 28px}
}
</style>
<section class="apr-mv">
  <div class="apr-mv__grid">
    <div class="apr-mv__panel apr-mv__panel--dark">
      <div class="apr-mv__icon"><i class="fa-solid fa-bullseye"></i></div>
      <div class="apr-mv__label">Our Mission</div>
      <h3 class="apr-mv__h3">Why We Do This Work</h3>
      <p class="apr-mv__text"><?=htmlspecialchars($Mission??'To deliver refined renovation experiences through precise planning, clean execution, and client guidance rooted in trust, protection, and elevated construction standards.')?></p>
    </div>
    <div class="apr-mv__panel apr-mv__panel--light">
      <div class="apr-mv__icon"><i class="fa-solid fa-eye"></i></div>
      <div class="apr-mv__label">Our Vision</div>
      <h3 class="apr-mv__h3">Where We Are Going</h3>
      <p class="apr-mv__text"><?=htmlspecialchars($Vision??'To become a women-led renovation brand recognized for modern technical rigor, emotional intelligence, and spaces that help families and businesses rise with confidence.')?></p>
    </div>
  </div>
</section>


