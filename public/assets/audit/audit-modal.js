(function () {
  const modal = document.getElementById('auditModal');
  const form = document.getElementById('auditForm');
  if (!modal || !form) return;

  const auditTypeInput = document.getElementById('audit_type');
  const toast = document.getElementById('auditToast');
  const submitBtn = document.getElementById('auditSubmitBtn');

  const errEls = modal.querySelectorAll('[data-err-for]');

  function clearErrors() {
    errEls.forEach(el => (el.textContent = ''));
  }

  function setLoading(isLoading) {
    submitBtn.disabled = isLoading;
    modal.classList.toggle('isSubmitting', isLoading);
  }

  function showToast(msg, ok = true) {
    toast.textContent = msg || '';
    toast.classList.toggle('isOk', !!ok);
    toast.classList.toggle('isBad', !ok);
    toast.classList.add('isVisible');
    window.setTimeout(() => toast.classList.remove('isVisible'), 4000);
  }

  function openModal(auditType) {
    clearErrors();
    toast.textContent = '';
    auditTypeInput.value = auditType || 'general-audit';
    modal.classList.add('isOpen');
    modal.setAttribute('aria-hidden', 'false');

    // focus first input
    const first = modal.querySelector('#audit_name');
    if (first) first.focus();

    // fill UTMs
    const params = new URLSearchParams(window.location.search);
    const setVal = (id, key) => {
      const el = document.getElementById(id);
      if (el) el.value = params.get(key) || '';
    };
    setVal('utm_source', 'utm_source');
    setVal('utm_medium', 'utm_medium');
    setVal('utm_campaign', 'utm_campaign');
  }

  function closeModal() {
    modal.classList.remove('isOpen');
    modal.setAttribute('aria-hidden', 'true');
  }

  // Open from any CTA
  document.addEventListener('click', function (e) {
    const btn = e.target.closest('.jsGetAudit');
    if (!btn) return;

    e.preventDefault();
    const type = btn.getAttribute('data-audit-type') || 'general-audit';
    openModal(type);
  });

  // Close actions
  modal.addEventListener('click', function (e) {
    if (e.target.matches('[data-audit-close]')) closeModal();
  });

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && modal.classList.contains('isOpen')) closeModal();
  });

  // AJAX submit
  form.addEventListener('submit', async function (e) {
    e.preventDefault();
    clearErrors();
    setLoading(true);

    try {
      const res = await fetch(form.action, {
        method: 'POST',
        headers: {
          'X-Requested-With': 'XMLHttpRequest',
          'Accept': 'application/json',
        },
        body: new FormData(form),
      });

      const data = await res.json().catch(() => ({}));

      if (!res.ok) {
        // Laravel validation format
        const errors = data?.errors || {};
        Object.keys(errors).forEach((key) => {
          const el = modal.querySelector(`[data-err-for="${key}"]`);
          if (el) el.textContent = (errors[key] || []).join(' ');
        });
        showToast(data?.message || 'Please fix the highlighted fields.', false);
        return;
      }

      // Success
      form.reset();
      auditTypeInput.value = ''; // will be set next open
      showToast(data?.message || 'Submitted successfully!', true);

      // Auto close after a moment
      setTimeout(closeModal, 1200);
    } catch (err) {
      showToast('Something went wrong. Please try again.', false);
    } finally {
      setLoading(false);
    }
  });
})();
