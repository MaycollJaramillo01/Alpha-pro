<?php if(!isset($Company)) include_once __DIR__.'/../../text.php';
$faqItems=$FaqCopy['items']??[
  ['q'=>'Do you offer free estimates?','a'=>'Yes. We provide free, detailed estimates for all renovation projects across the DFW area. We assess scope, timeline, and materials before any commitment.'],
  ['q'=>'Are you insured?','a'=>'Yes. Alpha Pro Renovation Group is fully insured. Your property and our workers are covered on every project.'],
  ['q'=>'What areas do you serve?','a'=>'We serve the entire Dallas–Fort Worth metroplex including Dallas, Fort Worth, Arlington, Plano, Irving, Garland, McKinney, Frisco, and surrounding cities.'],
  ['q'=>'How long does a kitchen remodel take?','a'=>'A full kitchen remodel typically takes 2–4 weeks depending on scope. Cabinet-only installations can be completed in as little as 5 business days.'],
  ['q'=>'Do you handle both residential and commercial work?','a'=>'Yes. We work with homeowners, landlords, property managers, and commercial owners throughout the DFW metroplex.'],
  ['q'=>'How do I get started?','a'=>'Simply call or fill out the contact form and we will schedule a free on-site estimate at your convenience.'],
];
?>
<style>
.apr-faq{padding:90px 0;background:#F5F2EC}
.apr-faq__head{text-align:center;max-width:560px;margin:0 auto 52px}
.apr-faq__eyebrow{display:inline-flex;align-items:center;gap:10px;font-size:.68rem;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#888;margin-bottom:14px}
.apr-faq__eyebrow::before,.apr-faq__eyebrow::after{content:'';width:24px;height:1.5px;background:#e0e0e0}
.apr-faq__h2{font-family:'Montserrat',Arial,sans-serif;font-size:clamp(1.8rem,3vw,2.4rem);font-weight:900;color:#111;letter-spacing:-1px;margin:0 0 12px;line-height:1.12}
.apr-faq__desc{font-size:.92rem;color:#666;line-height:1.7}
.apr-faq__list{max-width:760px;margin:0 auto}
.apr-faq__item{background:#fff;border:1px solid #eee;border-radius:4px;margin-bottom:8px;overflow:hidden}
.apr-faq__item.is-open{border-color:#ddd}
.apr-faq__q{display:flex;align-items:center;justify-content:space-between;gap:16px;padding:20px 24px;cursor:pointer;user-select:none}
.apr-faq__q-text{font-family:'Montserrat',Arial,sans-serif;font-size:.92rem;font-weight:800;color:#111;line-height:1.3}
.apr-faq__toggle{width:28px;height:28px;border-radius:50%;background:#f4f4f4;border:1px solid #e0e0e0;display:flex;align-items:center;justify-content:center;flex-shrink:0;transition:.25s;color:#555;font-size:.7rem}
.apr-faq__item.is-open .apr-faq__toggle{background:#111;border-color:#111;color:#C9973C;transform:rotate(45deg)}
.apr-faq__body{max-height:0;overflow:hidden;transition:max-height .35s ease}
.apr-faq__body-inner{padding:0 24px 20px;font-size:.88rem;color:#666;line-height:1.72}
@media(max-width:900px){.apr-faq{padding:60px 0}}
</style>
<section class="apr-faq">
  <div class="container">
    <div class="apr-faq__head">
      <div class="apr-faq__eyebrow">FAQ</div>
      <h2 class="apr-faq__h2">Frequently Asked Questions</h2>
      <p class="apr-faq__desc">Answers to what homeowners and businesses ask before starting a renovation project.</p>
    </div>
    <div class="apr-faq__list">
      <?php foreach($faqItems as $i=>$item): ?>
      <div class="apr-faq__item" id="aprfaq-<?=$i?>">
        <div class="apr-faq__q" onclick="aprFaqToggle(<?=$i?>)">
          <span class="apr-faq__q-text"><?=htmlspecialchars($item['q']??'')?></span>
          <span class="apr-faq__toggle"><i class="fa-solid fa-plus"></i></span>
        </div>
        <div class="apr-faq__body" id="aprfaq-b-<?=$i?>">
          <div class="apr-faq__body-inner"><?=htmlspecialchars($item['a']??'')?></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<script>
function aprFaqToggle(i){
  var item=document.getElementById('aprfaq-'+i);
  var body=document.getElementById('aprfaq-b-'+i);
  var isOpen=item.classList.contains('is-open');
  document.querySelectorAll('.apr-faq__item.is-open').forEach(function(el,idx){
    el.classList.remove('is-open');
    document.getElementById('aprfaq-b-'+el.id.replace('aprfaq-','')).style.maxHeight='0';
  });
  if(!isOpen){item.classList.add('is-open');body.style.maxHeight=body.scrollHeight+'px';}
}
</script>


