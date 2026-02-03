(() => {
  // Run after DOM is ready
  const ready = (fn) => (document.readyState !== "loading" ? fn() : document.addEventListener("DOMContentLoaded", fn));

  ready(() => {
    const forms = document.querySelectorAll("form");

    forms.forEach((form) => {
      // Find fields by common patterns (id/name)
      const nameField =
        form.querySelector('input[name="name"]') ||
        form.querySelector('#name') ||
        form.querySelector('input[name*="name" i]');

      const emailField =
        form.querySelector('input[name="email"]') ||
        form.querySelector('#email') ||
        form.querySelector('input[type="email"]');

      // Mark required in UI + HTML validation
      if (nameField) {
        nameField.setAttribute("required", "required");
        nameField.setAttribute("autocomplete", "name");
      }
      if (emailField) {
        emailField.setAttribute("required", "required");
        emailField.setAttribute("autocomplete", "email");
      }

      // Add a small validation message if you want
      form.addEventListener("submit", (e) => {
        // Let browser validate first
        if (!form.checkValidity()) {
          e.preventDefault();
          form.reportValidity();
        }
      });
    });
  });
})();

(() => {
  const ready = (fn) => (document.readyState !== "loading" ? fn() : document.addEventListener("DOMContentLoaded", fn));

  const showPopup = ({ title, message, type = "success" }) => {
    const overlay = document.createElement("div");
    overlay.className = "popup-overlay";
    overlay.innerHTML = `
      <div class="popup-card popup-${type}" role="dialog" aria-modal="true" aria-label="${title}">
        <div class="popup-icon">${type === "success" ? "✓" : "!"}</div>
        <h3>${title}</h3>
        <p>${message}</p>
        <button class="popup-btn" type="button">OK</button>
      </div>
    `;
    document.body.appendChild(overlay);

    const close = () => overlay.remove();
    overlay.addEventListener("click", (e) => { if (e.target === overlay) close(); });
    overlay.querySelector(".popup-btn").addEventListener("click", close);
  };

  ready(() => {
    const ok = document.getElementById("global-flash-success");
    if (ok) {
      showPopup({
        title: "Success",
        message: ok.getAttribute("data-message") || "Submitted successfully!",
        type: "success",
      });
    }

    const err = document.getElementById("global-flash-error");
    if (err) {
      showPopup({
        title: "Error",
        message: err.getAttribute("data-message") || "Something went wrong.",
        type: "error",
      });
    }
  });
})();

