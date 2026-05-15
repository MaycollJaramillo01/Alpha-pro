<?php if(!isset($Company)) include_once __DIR__.'/../../text.php'; ?>
<style>
.apr-contact{padding:90px 0;background:#111}
.apr-contact__inner{display:grid;grid-template-columns:1fr 1.3fr;gap:64px;align-items:start}
.apr-contact__left{}
.apr-contact__eyebrow{display:inline-flex;align-items:center;gap:10px;font-size:.68rem;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#C9973C;margin-bottom:18px}
.apr-contact__eyebrow::before{content:'';width:24px;height:1.5px;background:#C9973C}
.apr-contact__h2{font-family:'Montserrat',Arial,sans-serif;font-size:clamp(1.8rem,3vw,2.5rem);font-weight:900;color:#fff;letter-spacing:-1px;line-height:1.1;margin:0 0 16px}
.apr-contact__desc{font-size:.93rem;color:rgba(255,255,255,.5);line-height:1.78;margin-bottom:36px}
.apr-contact__methods{display:flex;flex-direction:column;gap:20px}
.apr-contact__method{display:flex;align-items:center;gap:16px}
.apr-contact__method-icon{width:44px;height:44px;border-radius:4px;background:rgba(201,151,60,.1);border:1px solid rgba(201,151,60,.2);display:flex;align-items:center;justify-content:center;color:#C9973C;font-size:.95rem;flex-shrink:0}
.apr-contact__method-label{font-size:.68rem;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;color:rgba(255,255,255,.4);margin-bottom:4px}
.apr-contact__method-val{font-size:.95rem;font-weight:700;color:#fff}
.apr-contact__method-val a{color:#fff;text-decoration:none}
.apr-contact__method-val a:hover{color:#C9973C}
.apr-contact__form{background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.1);border-radius:4px;padding:40px}
.apr-contact__form-grid{display:grid;grid-template-columns:1fr 1fr;gap:20px}
.apr-contact__field{display:flex;flex-direction:column;gap:7px}
.apr-contact__field--full{grid-column:1/-1}
.apr-contact__label{font-size:.68rem;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;color:rgba(255,255,255,.45)}
.apr-contact__input,.apr-contact__select,.apr-contact__textarea{width:100%;background:transparent;border:none;border-bottom:1px solid rgba(255,255,255,.15);color:#fff;padding:12px 0;font-size:.95rem;font-family:'Montserrat',Arial,sans-serif;transition:border-color .25s;outline:none;box-shadow:none;border-radius:0;-webkit-appearance:none}
.apr-contact__input:focus,.apr-contact__select:focus,.apr-contact__textarea:focus{border-bottom-color:#C9973C!important;background:transparent!important;outline:none!important;box-shadow:none!important}
.apr-contact__input::placeholder,.apr-contact__textarea::placeholder{color:rgba(255,255,255,.2);font-weight:400}
.apr-contact__select{cursor:pointer;color:rgba(255,255,255,.7)}
.apr-contact__select option{background:#111;color:#fff}
.apr-contact__input:-webkit-autofill,
.apr-contact__input:-webkit-autofill:hover,
.apr-contact__input:-webkit-autofill:focus,
.apr-contact__input:-webkit-autofill:active{-webkit-box-shadow:0 0 0 1000px #111 inset!important;-webkit-text-fill-color:#fff!important;caret-color:#fff;border-bottom-color:rgba(255,255,255,.15)!important;transition:background-color 9999s ease-in-out 0s}
.apr-contact__textarea{resize:vertical;min-height:80px}
.apr-contact__submit{width:100%;display:flex;align-items:center;justify-content:center;gap:10px;background:#C9973C;color:#000;border:none;padding:16px 24px;font-family:'Montserrat',Arial,sans-serif;font-size:.8rem;font-weight:800;letter-spacing:1.5px;text-transform:uppercase;cursor:pointer;border-radius:3px;margin-top:24px;transition:.2s}
.apr-contact__submit:hover{background:#fff}
@media(max-width:960px){.apr-contact__inner{grid-template-columns:1fr;gap:40px}.apr-contact{padding:60px 0}}
@media(max-width:600px){.apr-contact__form{padding:28px 20px}.apr-contact__form-grid{grid-template-columns:1fr}}
</style>
<section class="apr-contact" id="contact">
  <div class="container">
    <div class="apr-contact__inner">
      <div class="apr-contact__left">
        <div class="apr-contact__eyebrow">Contact Us</div>
        <h2 class="apr-contact__h2">Request a Free Estimate</h2>
        <p class="apr-contact__desc"><?=htmlspecialchars($ContactFormCopy['desc']??'Tell us about your project and we will get back to you quickly. No commitment required for the initial estimate.')?></p>
        <div class="apr-contact__methods">
          <div class="apr-contact__method">
            <div class="apr-contact__method-icon"><i class="fa-solid fa-phone"></i></div>
            <div>
              <div class="apr-contact__method-label">Call Us</div>
              <div class="apr-contact__method-val"><a href="<?=htmlspecialchars($PhoneRef??'tel:9452387350')?>"><?=htmlspecialchars($Phone??'(945) 238-7350')?></a></div>
            </div>
          </div>
          <div class="apr-contact__method">
            <div class="apr-contact__method-icon"><i class="fa-solid fa-clock"></i></div>
            <div>
              <div class="apr-contact__method-label">Hours</div>
              <div class="apr-contact__method-val"><?=htmlspecialchars($Schedule??'Mon–Fri, 9am–5pm')?></div>
            </div>
          </div>
          <div class="apr-contact__method">
            <div class="apr-contact__method-icon"><i class="fa-solid fa-map-location-dot"></i></div>
            <div>
              <div class="apr-contact__method-label">Service Area</div>
              <div class="apr-contact__method-val"><?=htmlspecialchars($Address??'Dallas, Texas (DFW)')?></div>
            </div>
          </div>
          <?php if(!empty($whatsapp)): ?>
          <div class="apr-contact__method">
            <div class="apr-contact__method-icon"><i class="fa-brands fa-whatsapp"></i></div>
            <div>
              <div class="apr-contact__method-label">WhatsApp</div>
              <div class="apr-contact__method-val"><a href="<?=htmlspecialchars($whatsapp)?>">Message Us</a></div>
            </div>
          </div>
          <?php endif; ?>
        </div>
      </div>
      <div>
        <div class="apr-contact__form">
          <form action="send-mail.php" method="POST">
            <div class="apr-contact__form-grid">
              <div class="apr-contact__field">
                <label class="apr-contact__label" for="cf-name">Full Name</label>
                <input class="apr-contact__input" type="text" id="cf-name" name="name" placeholder="Your name" required>
              </div>
              <div class="apr-contact__field">
                <label class="apr-contact__label" for="cf-phone">Phone</label>
                <input class="apr-contact__input" type="tel" id="cf-phone" name="phone" placeholder="(___) ___-____" required>
              </div>
              <div class="apr-contact__field apr-contact__field--full">
                <label class="apr-contact__label" for="cf-email">Email</label>
                <input class="apr-contact__input" type="email" id="cf-email" name="email" placeholder="you@email.com" required>
              </div>
              <div class="apr-contact__field apr-contact__field--full">
                <label class="apr-contact__label" for="cf-service">Service Needed</label>
                <select class="apr-contact__select" id="cf-service" name="service">
                  <option value="" disabled selected>Select a service...</option>
                  <?php foreach($ServicesList??[] as $svc): ?>
                  <option value="<?=htmlspecialchars($svc['name']??'')?>"><?=htmlspecialchars($svc['name']??'')?></option>
                  <?php endforeach; ?>
                  <option value="Other">Other / Not Listed</option>
                </select>
              </div>
              <div class="apr-contact__field apr-contact__field--full">
                <label class="apr-contact__label" for="cf-message">Project Details</label>
                <textarea class="apr-contact__textarea" id="cf-message" name="message" rows="3" placeholder="Briefly describe your project..."></textarea>
              </div>
            </div>
            <div style="display:none"><input type="text" name="honeypot"></div>
            <button type="submit" class="apr-contact__submit"><i class="fa-solid fa-paper-plane"></i> Send Request</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

