<?php if(!isset($Company)) include_once __DIR__.'/../../text.php'; ?>
<style>
.apr-ba{padding:90px 0;background:#111;overflow:hidden}
.apr-ba__head{text-align:center;max-width:580px;margin:0 auto 52px}
.apr-ba__eyebrow{display:inline-flex;align-items:center;gap:10px;font-size:.68rem;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#C9973C;margin-bottom:14px}
.apr-ba__eyebrow::before,.apr-ba__eyebrow::after{content:'';width:32px;height:1px;background:#C9973C;opacity:.5}
.apr-ba__h2{font-family:'Montserrat',Arial,sans-serif;font-size:clamp(1.8rem,3vw,2.4rem);font-weight:900;color:#fff;letter-spacing:-1px;margin:0 0 12px;line-height:1.12}
.apr-ba__desc{font-size:.92rem;color:rgba(255,255,255,.5);line-height:1.7}

/* Slider container */
.apr-ba__slider{position:relative;max-width:900px;margin:0 auto;border-radius:4px;overflow:hidden;cursor:ew-resize;user-select:none;touch-action:pan-y}
.apr-ba__img{display:block;width:100%;height:520px;object-fit:cover}
.apr-ba__after{position:absolute;inset:0;overflow:hidden;width:50%}
.apr-ba__after img{position:absolute;top:0;left:0;height:100%;object-fit:cover;max-width:none;width:var(--slider-full-w,900px)}

/* Divider */
.apr-ba__divider{position:absolute;top:0;bottom:0;left:50%;width:3px;background:#C9973C;transform:translateX(-50%);z-index:3;pointer-events:none}
.apr-ba__handle{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:44px;height:44px;border-radius:50%;background:#C9973C;display:flex;align-items:center;justify-content:center;z-index:4;box-shadow:0 4px 16px rgba(0,0,0,.5);pointer-events:none}
.apr-ba__handle i{color:#000;font-size:.85rem}

/* Labels */
.apr-ba__label{position:absolute;top:20px;font-size:.68rem;font-weight:800;letter-spacing:2px;text-transform:uppercase;padding:5px 12px;border-radius:2px;z-index:5;pointer-events:none}
.apr-ba__label--before{left:16px;background:rgba(0,0,0,.6);color:rgba(255,255,255,.8)}
.apr-ba__label--after{right:16px;background:#C9973C;color:#000}

/* CTA */
.apr-ba__footer{text-align:center;margin-top:36px}
.apr-ba__btn{display:inline-flex;align-items:center;gap:9px;background:#C9973C;color:#000;font-weight:700;font-size:.78rem;letter-spacing:1px;text-transform:uppercase;padding:13px 28px;border-radius:3px;text-decoration:none;transition:.2s}
.apr-ba__btn:hover{background:#fff}

@media(max-width:768px){
  .apr-ba{padding:60px 0}
  .apr-ba__img,.apr-ba__after img{height:280px}
  .apr-ba__after img{width:100vw}
}
</style>

<section class="apr-ba">
  <div class="container">
    <div class="apr-ba__head">
      <div class="apr-ba__eyebrow">Before &amp; After</div>
      <h2 class="apr-ba__h2">See the Transformation</h2>
      <p class="apr-ba__desc">Drag the slider to compare the work before and after. Real projects, real results — no filters.</p>
    </div>

    <div class="apr-ba__slider" id="aprBaSlider">
      <!-- BEFORE (background) -->
      <img class="apr-ba__img" src="assets/img/projects/before-after/before-01.jpg" alt="Before renovation">
      <!-- AFTER (clipped overlay) -->
      <div class="apr-ba__after" id="aprBaAfter">
        <img src="assets/img/projects/before-after/after-01.jpg" alt="After renovation">
      </div>
      <!-- Divider + handle -->
      <div class="apr-ba__divider" id="aprBaDivider">
        <div class="apr-ba__handle">
          <i class="fa-solid fa-arrows-left-right"></i>
        </div>
      </div>
      <!-- Labels -->
      <span class="apr-ba__label apr-ba__label--before">Before</span>
      <span class="apr-ba__label apr-ba__label--after">After</span>
    </div>

    <div class="apr-ba__footer">
      <a href="projects.php" class="apr-ba__btn"><i class="fa-solid fa-images"></i> See All Projects</a>
    </div>
  </div>
</section>

<script>
(function(){
  var slider=document.getElementById('aprBaSlider');
  var after=document.getElementById('aprBaAfter');
  var divider=document.getElementById('aprBaDivider');
  var afterImg=after.querySelector('img');
  var dragging=false;

  function syncWidth(){
    var w=slider.offsetWidth;
    afterImg.style.width=w+'px';
    slider.style.setProperty('--slider-full-w',w+'px');
  }
  syncWidth();
  window.addEventListener('resize',syncWidth);

  function setPos(x){
    var rect=slider.getBoundingClientRect();
    var pct=Math.min(Math.max((x-rect.left)/rect.width,0.03),0.97);
    after.style.width=(pct*100)+'%';
    divider.style.left=(pct*100)+'%';
  }

  slider.addEventListener('mousedown',function(e){dragging=true;setPos(e.clientX);e.preventDefault();});
  window.addEventListener('mousemove',function(e){if(dragging)setPos(e.clientX);});
  window.addEventListener('mouseup',function(){dragging=false;});
  slider.addEventListener('touchstart',function(e){dragging=true;setPos(e.touches[0].clientX);},{passive:true});
  window.addEventListener('touchmove',function(e){if(dragging)setPos(e.touches[0].clientX);},{passive:true});
  window.addEventListener('touchend',function(){dragging=false;});
})();
</script>
