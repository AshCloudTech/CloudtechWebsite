<div class="auditModal" id="auditModal" aria-hidden="true">
  <div class="auditModal__overlay" data-audit-close></div>

  <div class="auditModal__card" role="dialog" aria-modal="true" aria-labelledby="auditModalTitle">
    <button type="button" class="auditModal__close" data-audit-close aria-label="Close">✕</button>

    <div class="auditModal__head">
      <p class="auditModal__eyebrow">Free Audit</p>
      <h3 class="auditModal__title" id="auditModalTitle">Get a quick expert review</h3>
      <p class="auditModal__sub">Share your details — we’ll reach out with recommendations.</p>
    </div>

    <form class="auditForm js-validate-form" id="auditForm" method="POST" action="{{ route('audit-leads.store') }}">
      @csrf

      <input type="hidden" name="audit_type" id="audit_type" value="">
      <input type="hidden" name="source_page" id="source_page" value="{{ Route::currentRouteName() }}">
      <input type="hidden" name="page_url" id="page_url" value="{{ url()->current() }}">

      <input type="hidden" name="utm_source" id="utm_source">
      <input type="hidden" name="utm_medium" id="utm_medium">
      <input type="hidden" name="utm_campaign" id="utm_campaign">

      <div class="auditForm__grid">
        <div class="auditField">
          <label for="audit_name">Full Name <span>*</span></label>
          <input id="audit_name" name="name" type="text" autocomplete="name" required maxlength="120" placeholder="Enter your name">
          <small class="auditError" data-err-for="name"></small>
        </div>

        <div class="auditField">
          <label for="audit_email">Email <span>*</span></label>
          <input id="audit_email" name="email" type="email" autocomplete="email" required maxlength="190" placeholder="you@company.com">
          <small class="auditError" data-err-for="email"></small>
        </div>

        <div class="auditField auditField--full">
          <label for="audit_phone">Phone</label>
          <input id="audit_phone" name="phone" type="tel" autocomplete="tel" maxlength="30" placeholder="+91 9xxxx xxxxx">
          <small class="auditError" data-err-for="phone"></small>
        </div>

        <div class="auditField auditField--full">
          <label for="audit_reason">Reason for Audit</label>
          <textarea id="audit_reason" name="reason" rows="4" maxlength="2000"
            placeholder="Tell us what you want to improve (rankings, speed, conversions, tracking issues, etc.)"></textarea>
          <small class="auditHint">Max 2000 chars</small>
          <small class="auditError" data-err-for="reason"></small>
        </div>
      </div>

      <div class="auditForm__actions">
        <button type="submit" class="btn btn-primary" id="auditSubmitBtn">
          <span class="auditBtnText">Submit</span>
          <span class="auditBtnSpinner" aria-hidden="true"></span>
        </button>
        <p class="auditForm__note">By submitting, you agree to be contacted about your request.</p>
      </div>

      <div class="auditToast" id="auditToast" role="status" aria-live="polite"></div>
    </form>
  </div>
</div>
