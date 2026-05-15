<?php if(!isset($Company)) include_once __DIR__.'/../../text.php'; ?>
<style>
.apr-process{padding:90px 0;background:#fff}
.apr-process__head{text-align:center;max-width:580px;margin:0 auto 56px}
.apr-process__eyebrow{display:inline-flex;align-items:center;gap:10px;font-size:.68rem;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#888;margin-bottom:14px}
.apr-process__eyebrow::before,.apr-process__eyebrow::after{content:'';width:24px;height:1.5px;background:#e0e0e0}
.apr-process__h2{font-family:'Montserrat',Arial,sans-serif;font-size:clamp(1.8rem,3vw,2.4rem);font-weight:900;color:#111;letter-spacing:-1px;margin:0 0 12px;line-height:1.12}
.apr-process__h2 strong{color:#111}
.apr-process__desc{font-size:.93rem;color:#666;line-height:1.7}
.apr-process__steps{display:grid;grid-template-columns:repeat(4,1fr);gap:0;position:relative}
.apr-process__steps::before{content:'';position:absolute;top:36px;left:calc(12.5%);right:calc(12.5%);height:1px;background:linear-gradient(to right,#e0e0e0,#C9973C,#e0e0e0);z-index:0}
.apr-process__step{text-align:center;padding:0 20px;position:relative;z-index:1}
.apr-process__num{width:72px;height:72px;border-radius:50%;background:#fff;border:2px solid #e0e0e0;display:flex;align-items:center;justify-content:center;margin:0 auto 20px;font-family:'Montserrat',Arial,sans-serif;font-size:1.4rem;font-weight:900;color:#ccc;transition:.3s;position:relative}
.apr-process__step:hover .apr-process__num{border-color:#C9973C;color:#111;background:#FBF5E8}
.apr-process__step-icon{position:absolute;bottom:-8px;right:-4px;width:26px;height:26px;background:#C9973C;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:.65rem;color:#000}
.apr-process__step-title{font-family:'Montserrat',Arial,sans-serif;font-size:.9rem;font-weight:800;color:#111;margin-bottom:8px;line-height:1.3}
.apr-process__step-text{font-size:.82rem;color:#777;line-height:1.65}
.apr-process__footer{text-align:center;margin-top:48px}
.apr-process__btn{display:inline-flex;align-items:center;gap:9px;background:#111;color:#C9973C;font-weight:700;font-size:.78rem;letter-spacing:1px;text-transform:uppercase;padding:13px 28px;border-radius:3px;text-decoration:none;transition:.2s}
.apr-process__btn:hover{background:#C9973C;color:#000}
@media(max-width:900px){
  .apr-process__steps{grid-template-columns:repeat(2,1fr);gap:32px}
  .apr-process__steps::before{display:none}
  .apr-process{padding:60px 0}
}
@media(max-width:500px){.apr-process__steps{grid-template-columns:1fr}}
</style>
<section class="apr-process">
  <div class="container">
    <div class="apr-process__head">
      <div class="apr-process__eyebrow">How It Works</div>
      <h2 class="apr-process__h2">How We Guide<br><strong>Renovation Decisions</strong></h2>
      <p class="apr-process__desc">A simple, clear process from first contact to final walkthrough — so you always know what to expect.</p>
    </div>
    <div class="apr-process__steps">
      <?php
      $steps=[
        ['n'=>'01','icon'=>'fa-comments','title'=>'Listen & Understand','text'=>'We start with your goals, property, and practical constraints before anything else.'],
        ['n'=>'02','icon'=>'fa-pencil-ruler','title'=>'Define the Scope','text'=>'We plan budget, materials, timeline, and expectations before a single nail is driven.'],
        ['n'=>'03','icon'=>'fa-hammer','title'=>'Execute with Precision','text'=>'Our crews complete the work cleanly, on schedule, and to the Alpha Pro standard.'],
        ['n'=>'04','icon'=>'fa-check-circle','title'=>'Close with Confidence','text'=>'Final walkthrough, quality check, and delivery of a space you are proud to live in.'],
      ];
      foreach($steps as $s): ?>
      <div class="apr-process__step">
        <div class="apr-process__num"><?=$s['n']?><span class="apr-process__step-icon"><i class="fa-solid <?=$s['icon']?>"></i></span></div>
        <div class="apr-process__step-title"><?=$s['title']?></div>
        <div class="apr-process__step-text"><?=$s['text']?></div>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="apr-process__footer">
      <a href="contact.php" class="apr-process__btn"><i class="fa-solid fa-clipboard-list"></i> Start Your Estimate</a>
    </div>
  </div>
</section>


