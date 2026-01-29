/* CloudTech Admin UI - common JS (vanilla) */
(function () {
  const qs = (s, el=document) => el.querySelector(s);
  const qsa = (s, el=document) => Array.from(el.querySelectorAll(s));

  // Theme toggle
  const themeBtn = qs('[data-toggle-theme]');
  const root = document.documentElement;
  const storedTheme = localStorage.getItem('ct_theme');
  if (storedTheme) root.setAttribute('data-theme', storedTheme);

  if (themeBtn) {
    themeBtn.addEventListener('click', () => {
      const current = root.getAttribute('data-theme') || 'dark';
      const next = current === 'light' ? 'dark' : 'light';
      root.setAttribute('data-theme', next);
      localStorage.setItem('ct_theme', next);
      toast('Theme updated', `Switched to ${next} mode.`);
    });
  }

  
 // Mobile sidebar toggle
const burger = qs('[data-sidebar-toggle]');
const sidebar = qs('.sidebar');
const closeBtn = qs('[data-sidebar-close]');

if (burger && sidebar) {
  burger.addEventListener('click', () => sidebar.classList.toggle('show'));

  // Close button
  if (closeBtn) {
    closeBtn.addEventListener('click', () => sidebar.classList.remove('show'));
  }

  // click outside to close
  document.addEventListener('click', (e) => {
    if (window.matchMedia('(max-width: 900px)').matches) {
      const clickedInside =
        sidebar.contains(e.target) ||
        burger.contains(e.target);

      if (!clickedInside) sidebar.classList.remove('show');
    }
  });
}


  // Table search (client-side filtering)
  qsa('[data-table-search]').forEach((input) => {
    const tableId = input.getAttribute('data-table-search');
    const table = qs(`#${tableId}`);
    if (!table) return;

    input.addEventListener('input', () => {
      const term = input.value.toLowerCase().trim();
      const rows = qsa('tbody tr', table);
      rows.forEach((tr) => {
        const text = tr.innerText.toLowerCase();
        tr.style.display = text.includes(term) ? '' : 'none';
      });
    });
  });

  // Modal
  qsa('[data-open-modal]').forEach((btn) => {
    const id = btn.getAttribute('data-open-modal');
    const overlay = qs(`#${id}`);
    if (!overlay) return;
    btn.addEventListener('click', () => overlay.classList.add('show'));
  });
  qsa('[data-close-modal]').forEach((btn) => {
    const id = btn.getAttribute('data-close-modal');
    const overlay = qs(`#${id}`);
    if (!overlay) return;
    btn.addEventListener('click', () => overlay.classList.remove('show'));
  });
  qsa('.modalOverlay').forEach((overlay) => {
    overlay.addEventListener('click', (e) => {
      if (e.target === overlay) overlay.classList.remove('show');
    });
  });

  // Toasts
  function ensureToastWrap() {
    let wrap = qs('.toastWrap');
    if (!wrap) {
      wrap = document.createElement('div');
      wrap.className = 'toastWrap';
      document.body.appendChild(wrap);
    }
    return wrap;
  }

  window.toast = function(title, message) {
    const wrap = ensureToastWrap();
    const el = document.createElement('div');
    el.className = 'toast';
    el.innerHTML = `
      <div class="tIcon"></div>
      <div>
        <div class="tTitle">${escapeHtml(title)}</div>
        <p class="tMsg">${escapeHtml(message)}</p>
      </div>
      <button class="tClose" aria-label="Close">✕</button>
    `;
    const closeBtn = el.querySelector('.tClose');
    closeBtn.addEventListener('click', () => el.remove());
    wrap.appendChild(el);
    setTimeout(() => { if (el.isConnected) el.remove(); }, 4200);
  };

  function escapeHtml(s){
    return String(s)
      .replaceAll('&','&amp;')
      .replaceAll('<','&lt;')
      .replaceAll('>','&gt;')
      .replaceAll('"','&quot;')
      .replaceAll("'",'&#039;');
  }

  // Demo actions
  qsa('[data-demo-toast]').forEach((btn) => {
    btn.addEventListener('click', () => toast('Saved', 'This is a front-end demo action. Wire it to Laravel later.'));
  });

  // Keyboard shortcut: focus search (Ctrl/Cmd + K)
  const searchInput = qs('[data-global-search]');
  document.addEventListener('keydown', (e) => {
    const isMac = navigator.platform.toLowerCase().includes('mac');
    const k = e.key.toLowerCase() === 'k';
    if (k && ((isMac && e.metaKey) || (!isMac && e.ctrlKey))) {
      e.preventDefault();
      if (searchInput) searchInput.focus();
    }
  });
})();
