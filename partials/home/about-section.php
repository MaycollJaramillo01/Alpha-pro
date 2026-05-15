<?php if(!isset($Company)) include_once __DIR__.'/../../text.php'; ?>
<style>
.apr-about{padding:90px 0;background:#fff}
.apr-about__grid{display:grid;grid-template-columns:1fr 1fr;gap:70px;align-items:center}
.apr-about__img-wrap{position:relative}
.apr-about__img-main{width:100%;aspect-ratio:4/5;object-fit:cover;border-radius:4px;display:block}
.apr-about__img-accent{position:absolute;bottom:-24px;right:-24px;width:52%;aspect-ratio:1;object-fit:cover;border-radius:4px;border:5px solid #fff;box-shadow:0 8px 32px rgba(0,0,0,.12)}
.apr-about__badge{position:absolute;top:24px;left:-20px;background:#C9973C;color:#000;font-weight:800;font-size:.72rem;letter-spacing:1.5px;text-transform:uppercase;padding:10px 18px;border-radius:3px;box-shadow:0 4px 16px rgba(0,0,0,.1)}
.apr-about__eyebrow{display:inline-flex;align-items:center;gap:10px;font-size:.68rem;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#C9973C;background:#000;padding:6px 14px;border-radius:2px;margin-bottom:20px}
.apr-about__h2{font-family:'Montserrat',Arial,sans-serif;font-size:clamp(2rem,3.5vw,2.8rem);font-weight:900;line-height:1.1;color:#111;margin:0 0 18px;letter-spacing:-1px}
.apr-about__h2 span{color:#111;border-bottom:3px solid #C9973C;padding-bottom:2px}
.apr-about__text{font-size:.97rem;color:#555;line-height:1.78;margin-bottom:28px}
.apr-about__metrics{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin-bottom:32px}
.apr-about__metric{padding:18px 16px;border:1px solid #e8e8e8;border-radius:4px;text-align:center;transition:.2s}
.apr-about__metric:hover{border-color:#C9973C;background:#FBF5E8}
.apr-about__metric-val{font-family:'Montserrat',Arial,sans-serif;font-size:1.7rem;font-weight:900;color:#111;line-height:1;margin-bottom:4px}
.apr-about__metric-label{font-size:.72rem;color:#777;text-transform:uppercase;letter-spacing:1.5px;font-weight:600}
.apr-about__btn{display:inline-flex;align-items:center;gap:9px;background:#111;color:#C9973C;font-weight:700;font-size:.78rem;letter-spacing:1.2px;text-transform:uppercase;padding:13px 26px;border-radius:3px;text-decoration:none;transition:.2s}
.apr-about__btn:hover{background:#C9973C;color:#000}
@media(max-width:900px){
  .apr-about__grid{grid-template-columns:1fr;gap:40px}
  .apr-about__img-accent{display:none}
  .apr-about__badge{left:12px}
  .apr-about{padding:60px 0}
}
</style>
<section class="apr-about">
  <div class="container">
    <div class="apr-about__grid">
      <div class="apr-about__img-wrap">
        <img src="assets/img/projects/project-70.jpg" alt="Alpha Pro Renovation Group" class="apr-about__img-main">
        <img src="assets/img/projects/project-60.jpg" alt="Renovation detail" class="apr-about__img-accent">
        <span class="apr-about__badge">Alpha Pro</span>
      </div>
      <div>
        <span class="apr-about__eyebrow">About Us</span>
        <h2 class="apr-about__h2">Built on Precision,<br><span>Protection & Trust</span></h2>
        <p class="apr-about__text"><?=htmlspecialchars($About[0]??'')?></p>
        <p class="apr-about__text" style="margin-top:-12px"><?=htmlspecialchars($About[1]??'')?></p>
        <div class="apr-about__metrics">
          <div class="apr-about__metric">
            <div class="apr-about__metric-val"><?=count($ServicesList??[])?>+</div>
            <div class="apr-about__metric-label">Services</div>
          </div>
          <div class="apr-about__metric">
            <div class="apr-about__metric-val"><?=count($Areas??[])?>+</div>
            <div class="apr-about__metric-label">DFW Cities</div>
          </div>
          <div class="apr-about__metric">
            <div class="apr-about__metric-val" style="font-size:1.1rem;color:#C9973C;background:#111;border-radius:3px;padding:4px 8px">Insured</div>
            <div class="apr-about__metric-label">✔ Covered</div>
          </div>
        </div>
        <a href="about.php" class="apr-about__btn"><i class="fa-solid fa-arrow-right"></i> Our Story</a>
      </div>
    </div>
  </div>
</section>


