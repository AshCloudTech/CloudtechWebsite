<!-- Consultation Modal -->
<div class="ct-modal" id="consultationModal" aria-hidden="true">
  <div class="ct-modal__overlay" data-close="true"></div>

  <div class="ct-modal__dialog ct-modal__dialog--lg" role="dialog" aria-modal="true" aria-labelledby="consultationModalTitle">
    <button class="ct-modal__close" type="button" aria-label="Close modal" data-close="true">×</button>

    <div class="ct-modal__head">
      <h2 class="ct-modal__title" id="consultationModalTitle">Let’s talk about your project</h2>
      <p class="ct-modal__sub">
        We provide expert web development services across all major platforms, SEO and digital marketing services.
        Tell us about your project.
      </p>
    </div>

    <form class="ct-modal__form" method="POST" action="{{ route('consultations.store') }}">
      @csrf

      <div class="ct-modal__grid">
        <div class="ct-field">
          <label for="full_name">Full Name <span class="req">*</span></label>
          <input id="full_name" name="full_name" type="text" required>
        </div>

        <div class="ct-field">
          <label for="company_name">Company name <span class="req">*</span></label>
          <input id="company_name" name="company_name" type="text" required>
        </div>

        <div class="ct-field">
          <label for="phone">Phone Number <span class="req">*</span></label>
          <input id="phone" name="phone" type="text" required>
        </div>

        <div class="ct-field">
          <label for="email">Email Address <span class="req">*</span></label>
          <input id="email" name="email" type="email" required>
        </div>

        <div class="ct-field ct-field--full">
          <label for="website_url">Website URL if you have one</label>
          <input id="website_url" name="website_url" type="text">
        </div>
      </div>

      <div class="ct-modal__twoCols">
        <!-- Services Interested In -->
        <div class="ct-block">
          <div class="ct-block__title">Services Interested In <span class="req">*</span></div>
          <div class="ct-checks">
            @php($servicePlatforms = ['wordpress'=>'Wordpress','shopify'=>'Shopify','wix'=>'Wix','squarespace'=>'SquareSpace','godaddy'=>'Godaddy','laravel'=>'Laravel','none'=>'None'])
            @foreach($servicePlatforms as $k=>$label)
              <label class="ct-check">
                <input type="checkbox" name="services_interested_in[]" value="{{ $k }}">
                <span>{{ $label }}</span>
              </label>
            @endforeach
          </div>

          <div class="ct-field" style="margin-top:10px;">
            <label for="services_other">Others (please specify)</label>
            <input id="services_other" name="services_other" type="text">
          </div>
        </div>

        <!-- Website Development -->
        <div class="ct-block">
          <div class="ct-block__title">Website Development <span class="req">*</span></div>
          <div class="ct-checks">
            @php($devServices = [
              'seo_services'=>'SEO Services (Local, Technical, National, International)',
              'google_ads'=>'Google Ads (PPC, SEM)',
              'content_marketing'=>'Content Marketing',
              'social_media_marketing'=>'Social Media Marketing',
              'maintenance_hosting'=>'Website Maintenance and Hosting',
              'none'=>'None'
            ])
            @foreach($devServices as $k=>$label)
              <label class="ct-check">
                <input type="checkbox" name="website_development[]" value="{{ $k }}">
                <span>{{ $label }}</span>
              </label>
            @endforeach
          </div>

          <div class="ct-field" style="margin-top:10px;">
            <label for="website_development_other">Others (please specify)</label>
            <input id="website_development_other" name="website_development_other" type="text">
          </div>
        </div>
      </div>

      <div class="ct-field">
        <label for="brief_description">Brief Description of your Project / Requirements</label>
        <textarea id="brief_description" name="brief_description" rows="3"></textarea>
      </div>

      <div class="ct-field">
        <label for="approximate_budget">Approximate Budget <span class="req">*</span></label>
        <select id="approximate_budget" name="approximate_budget" required>
          <option value="" selected>- Select -</option>
          <option value="under_500">Under £500</option>
          <option value="500_1500">£500 - £1,500</option>
          <option value="1500_5000">£1,500 - £5,000</option>
          <option value="5000_10000">£5,000 - £10,000</option>
          <option value="10000_plus">£10,000+</option>
        </select>
      </div>

      <div class="ct-field">
        <label for="hear_about_us">How did you hear about us</label>
        <input id="hear_about_us" name="hear_about_us" type="text">
      </div>

      <div class="ct-field">
        <label>Preferred Consultation Method <span class="req">*</span></label>
        <div class="ct-checks ct-checks--row">
          @php($methods = ['phone_call'=>'Phone Call','zoom'=>'Zoom','google_meet'=>'Google Meet','whatsapp'=>'Whatsapp'])
          @foreach($methods as $k=>$label)
            <label class="ct-check">
              <input type="radio" name="preferred_method" value="{{ $k }}" required>
              <span>{{ $label }}</span>
            </label>
          @endforeach
        </div>
      </div>

      <div class="ct-field">
        <label for="preferred_datetime">Date / Time <span class="req">*</span></label>
        <input id="preferred_datetime" name="preferred_datetime" type="datetime-local" required>
      </div>

      <div class="ct-field">
        <label for="additional_notes">Additional Notes</label>
        <textarea id="additional_notes" name="additional_notes" rows="3"></textarea>
      </div>

      <div class="ct-modal__actions">
        <button type="button" class="btn btn-lg btn-ghost" data-close="true">Cancel</button>
        <button type="submit" class="btn btn-lg btn-primary">Request Consultation</button>
      </div>
    </form>
  </div>
</div>


<style>
    /* Consultation modal */
.ct-modal{
  position: fixed;
  inset: 0;
  display: none;
  z-index: 9999;
}

.ct-modal.is-open{ display: block; }

.ct-modal__overlay{
  position: absolute;
  inset: 0;
  background: rgba(11,18,32,.55);
}

.ct-modal__dialog{
  position: relative;
  width: min(720px, 92vw);
  margin: 7vh auto;
  background: #fff;
  border-radius: 18px;
  border: 1px solid rgba(16,56,128,.14);
  box-shadow: 0 22px 70px rgba(11,18,32,.18);
  padding: 18px;
  transform: translateY(10px);
  animation: ctModalIn .18s ease-out forwards;
}

@keyframes ctModalIn{
  to { transform: translateY(0); }
}

.ct-modal__close{
  position: absolute;
  top: 10px;
  right: 12px;
  width: 40px;
  height: 40px;
  border: 1px solid rgba(16,56,128,.14);
  background: #fff;
  border-radius: 12px;
  cursor: pointer;
  font-size: 22px;
  line-height: 1;
}

.ct-modal__title{
  margin: 4px 44px 6px 0;
  font-size: 18px;
  font-weight: 800;
  color: #0b1220;
}

.ct-modal__sub{
  margin: 0 0 14px;
  color: rgba(11,18,32,.72);
}

.ct-modal__form{ margin-top: 12px; }

.ct-modal__grid{
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: 12px;
}

.ct-field label{
  display: block;
  font-weight: 700;
  font-size: 13px;
  margin-bottom: 6px;
  color: rgba(11,18,32,.82);
}

.ct-field input,
.ct-field select,
.ct-field textarea{
  width: 100%;
  border: 1px solid rgba(16,56,128,.18);
  border-radius: 12px;
  padding: 12px 12px;
  font-size: 14px;
  outline: none;
}

.ct-field input:focus,
.ct-field select:focus,
.ct-field textarea:focus{
  border-color: rgba(16,56,128,.45);
}

.ct-modal__actions{
  display: flex;
  justify-content: flex-end;
  gap: 10px;
  margin-top: 14px;
}

@media (max-width: 720px){
  .ct-modal__dialog{ margin: 10vh auto; }
  .ct-modal__grid{ grid-template-columns: 1fr; }
}

.ct-modal__dialog--lg{ width:min(980px, 94vw); max-height: 86vh; overflow:auto; }
.ct-modal__head{ padding-bottom: 10px; border-bottom:1px solid rgba(16,56,128,.10); margin-bottom:14px; }
.ct-modal__twoCols{ display:grid; grid-template-columns: 1fr 1fr; gap:16px; margin: 14px 0; }
.ct-block{ border:1px solid rgba(16,56,128,.14); border-radius:14px; padding:12px; background:#fff; }
.ct-block__title{ font-weight:800; margin-bottom:10px; }
.ct-checks{ display:grid; gap:8px; }
.ct-checks--row{ grid-auto-flow: row; }
.ct-check{ display:flex; align-items:flex-start; gap:8px; font-size:14px; }
.ct-check input{ margin-top:3px; }
.req{ color:#ff3b30; font-weight:800; }

@media (max-width: 820px){
  .ct-modal__twoCols{ grid-template-columns:1fr; }
}

</style>

<script>
  (function () {
    const openBtn = document.getElementById('openConsultationModal');
    const modal = document.getElementById('consultationModal');
    if (!openBtn || !modal) return;

    const focusableSelector = 'a[href], button:not([disabled]), textarea, input, select, [tabindex]:not([tabindex="-1"])';
    let lastActiveEl = null;

    function openModal() {
      lastActiveEl = document.activeElement;

      modal.classList.add('is-open');
      modal.setAttribute('aria-hidden', 'false');
      document.documentElement.style.overflow = 'hidden';

      const first = modal.querySelector(focusableSelector);
      if (first) first.focus();
    }

    function closeModal() {
      modal.classList.remove('is-open');
      modal.setAttribute('aria-hidden', 'true');
      document.documentElement.style.overflow = '';

      if (lastActiveEl) lastActiveEl.focus();
    }

    openBtn.addEventListener('click', (e) => {
      e.preventDefault();
      openModal();
    });

    modal.addEventListener('click', (e) => {
      if (e.target && (e.target.dataset.close === 'true')) closeModal();
    });

    document.addEventListener('keydown', (e) => {
      if (!modal.classList.contains('is-open')) return;

      if (e.key === 'Escape') {
        e.preventDefault();
        closeModal();
        return;
      }

      // basic focus trap
      if (e.key === 'Tab') {
        const focusables = Array.from(modal.querySelectorAll(focusableSelector))
          .filter(el => el.offsetParent !== null);

        if (!focusables.length) return;

        const first = focusables[0];
        const last = focusables[focusables.length - 1];

        if (e.shiftKey && document.activeElement === first) {
          e.preventDefault();
          last.focus();
        } else if (!e.shiftKey && document.activeElement === last) {
          e.preventDefault();
          first.focus();
        }
      }
    });

    // Optional: expose close on form submit success via AJAX, etc.
    modal._close = closeModal;
  })();
</script>
