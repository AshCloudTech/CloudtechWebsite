/* CloudTech Admin UI - common JS (vanilla) */
(function () {
    const qs = (s, el = document) => el.querySelector(s);
    const qsa = (s, el = document) => Array.from(el.querySelectorAll(s));

    // Theme toggle
    const themeBtn = qs("[data-toggle-theme]");
    const root = document.documentElement;
    const storedTheme = localStorage.getItem("ct_theme");
    if (storedTheme) root.setAttribute("data-theme", storedTheme);

    if (themeBtn) {
        themeBtn.addEventListener("click", () => {
            const current = root.getAttribute("data-theme") || "dark";
            const next = current === "light" ? "dark" : "light";
            root.setAttribute("data-theme", next);
            localStorage.setItem("ct_theme", next);
            toast("Theme updated", `Switched to ${next} mode.`);
        });
    }

    // Mobile sidebar toggle
    const burger = qs("[data-sidebar-toggle]");
    const sidebar = qs(".sidebar");
    const closeBtn = qs("[data-sidebar-close]");

    if (burger && sidebar) {
        burger.addEventListener("click", () =>
            sidebar.classList.toggle("show"),
        );

        // Close button
        if (closeBtn) {
            closeBtn.addEventListener("click", () =>
                sidebar.classList.remove("show"),
            );
        }

        // click outside to close
        document.addEventListener("click", (e) => {
            if (window.matchMedia("(max-width: 900px)").matches) {
                const clickedInside =
                    sidebar.contains(e.target) || burger.contains(e.target);

                if (!clickedInside) sidebar.classList.remove("show");
            }
        });
    }

    // Table search (client-side filtering)
    qsa("[data-table-search]").forEach((input) => {
        const tableId = input.getAttribute("data-table-search");
        const table = qs(`#${tableId}`);
        if (!table) return;

        input.addEventListener("input", () => {
            const term = input.value.toLowerCase().trim();
            const rows = qsa("tbody tr", table);
            rows.forEach((tr) => {
                const text = tr.innerText.toLowerCase();
                tr.style.display = text.includes(term) ? "" : "none";
            });
        });
    });

    // Modal
    qsa("[data-open-modal]").forEach((btn) => {
        const id = btn.getAttribute("data-open-modal");
        const overlay = qs(`#${id}`);
        if (!overlay) return;
        btn.addEventListener("click", () => overlay.classList.add("show"));
    });
    qsa("[data-close-modal]").forEach((btn) => {
        const id = btn.getAttribute("data-close-modal");
        const overlay = qs(`#${id}`);
        if (!overlay) return;
        btn.addEventListener("click", () => overlay.classList.remove("show"));
    });
    qsa(".modalOverlay").forEach((overlay) => {
        overlay.addEventListener("click", (e) => {
            if (e.target === overlay) overlay.classList.remove("show");
        });
    });

    // Toasts
    function ensureToastWrap() {
        let wrap = qs(".toastWrap");
        if (!wrap) {
            wrap = document.createElement("div");
            wrap.className = "toastWrap";
            document.body.appendChild(wrap);
        }
        return wrap;
    }

    window.toast = function (title, message) {
        const wrap = ensureToastWrap();
        const el = document.createElement("div");
        el.className = "toast";
        el.innerHTML = `
      <div class="tIcon"></div>
      <div>
        <div class="tTitle">${escapeHtml(title)}</div>
        <p class="tMsg">${escapeHtml(message)}</p>
      </div>
      <button class="tClose" aria-label="Close">✕</button>
    `;
        const closeBtn = el.querySelector(".tClose");
        closeBtn.addEventListener("click", () => el.remove());
        wrap.appendChild(el);
        setTimeout(() => {
            if (el.isConnected) el.remove();
        }, 4200);
    };

    function escapeHtml(s) {
        return String(s)
            .replaceAll("&", "&amp;")
            .replaceAll("<", "&lt;")
            .replaceAll(">", "&gt;")
            .replaceAll('"', "&quot;")
            .replaceAll("'", "&#039;");
    }

    // Demo actions
    qsa("[data-demo-toast]").forEach((btn) => {
        btn.addEventListener("click", () =>
            toast(
                "Saved",
                "This is a front-end demo action. Wire it to Laravel later.",
            ),
        );
    });

    // Keyboard shortcut: focus search (Ctrl/Cmd + K)
    const searchInput = qs("[data-global-search]");
    document.addEventListener("keydown", (e) => {
        const isMac = navigator.platform.toLowerCase().includes("mac");
        const k = e.key.toLowerCase() === "k";
        if (k && ((isMac && e.metaKey) || (!isMac && e.ctrlKey))) {
            e.preventDefault();
            if (searchInput) searchInput.focus();
        }
    });
})();

// Admin sidebar

(function () {
    const context =
        document.querySelector(".app")?.dataset.sidebarContext || "admin";
    const storageKey = `${context}SidebarOpenGroups`;

    function getState() {
        try {
            return JSON.parse(localStorage.getItem(storageKey) || "[]");
        } catch (e) {
            return [];
        }
    }

    function setState(groups) {
        try {
            localStorage.setItem(storageKey, JSON.stringify(groups));
        } catch (e) {}
    }

    function toggleGroup(id, open) {
        const btn = document.querySelector(`[data-nav-group="${id}"]`);
        const panel = document.querySelector(`[data-nav-panel="${id}"]`);
        if (!btn || !panel) return;

        btn.classList.toggle("open", open);
        panel.classList.toggle("open", open);
        btn.setAttribute("aria-expanded", open ? "true" : "false");
    }

    const toggles = document.querySelectorAll(
        ".navGroupToggle[data-nav-group]",
    );
    if (!toggles.length) return;

    // restore state first
    const openGroups = new Set(getState());
    openGroups.forEach((id) => toggleGroup(id, true));

    // auto-open if there's an active link inside (in case user comes via deep link)
    document.querySelectorAll(".navGroupPanel").forEach((panel) => {
        if (panel.querySelector("a.active")) {
            const id = panel.getAttribute("data-nav-panel");
            openGroups.add(id);
            toggleGroup(id, true);
        }
    });
    setState([...openGroups]);

    // click handlers
    toggles.forEach((btn) => {
        btn.addEventListener("click", () => {
            const id = btn.getAttribute("data-nav-group");
            const isOpen = btn.classList.contains("open");
            const next = !isOpen;

            toggleGroup(id, next);

            if (next) openGroups.add(id);
            else openGroups.delete(id);

            setState([...openGroups]);
        });
    });
})();

// app.js
// footer dynamic social media links

  let socialIndex = document.querySelectorAll('.socialRow').length;

  function addSocialRow() {
    const tbody = document.getElementById('socialLinksTbody');
    if (!tbody) return;

    const tr = document.createElement('tr');
    tr.className = 'socialRow';

    tr.innerHTML = `
      <td class="cellDel mutedCell">—</td>

      <!-- PLATFORM DROPDOWN -->
      <td>
        <select class="input" name="links[${socialIndex}][platform]" required>
          <option value="" style="color:black; font-weight:500;">Select platform</option>
          <option value="facebook" style="color:black; font-weight:500;">Facebook</option>
          <option value="instagram" style="color:black; font-weight:500;">Instagram</option>
          <option value="linkedin" style="color:black; font-weight:500;">LinkedIn</option>
          <option value="twitter" style="color:black; font-weight:500;">Twitter / X</option>
          <option value="youtube" style="color:black; font-weight:500;">YouTube</option>
          <option value="whatsapp" style="color:black; font-weight:500;">WhatsApp</option>
          <option value="website" style="color:black; font-weight:500;">Website / Other</option>
        </select>
      </td>

      <td>
        <input type="text"
               class="input"
               name="links[${socialIndex}][url]"
               placeholder="https://...">
      </td>

      <td>
        <input type="text"
               class="input"
               name="links[${socialIndex}][handle]"
               placeholder="@cloudtech">
      </td>

      <td class="cellSort">
        <input type="number"
               class="input inputSm"
               name="links[${socialIndex}][sort_order]"
               value="${socialIndex + 1}">
      </td>

      <td class="cellActive">
        <label class="switch">
          <input type="checkbox"
                 name="links[${socialIndex}][is_active]"
                 value="1"
                 checked>
          <input type="hidden"
                 name="links[${socialIndex}][is_active]"
                 value="0">
          <span></span>
        </label>
      </td>
    `;

    tbody.appendChild(tr);
    socialIndex++;
  }



