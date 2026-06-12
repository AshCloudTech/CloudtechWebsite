(function () {
    const forms = document.querySelectorAll(".js-validate-form");
    if (!forms.length) return;

    forms.forEach((form) => {
        const showError = (field, message) => {
            let container = field.closest(
                ".cta-field, .field, .form-field, .ct-field, .cs-field , .auditField",
            );
            if (!container) return;

            let error =
                container.querySelector(".auditError") ||
                container.querySelector(".field-error");

            if (!error) {
                error = document.createElement("div");
                error.className = "field-error text-danger";
                container.appendChild(error);
            }

            error.textContent = message;
            field.classList.add("is-invalid");
        };

        const clearError = (field) => {
            let container = field.closest(
                ".cta-field, .field, .form-field, .ct-field, .auditField",
            );
            if (!container) return;

            let error =
                container.querySelector(".auditError") ||
                container.querySelector(".field-error");

            if (error) error.textContent = "";
            field.classList.remove("is-invalid");
        };
        //  INPUT RESTRICTION (PHONE)
        const phoneField = form.querySelector('input[name="phone"]');

        if (phoneField) {
            phoneField.addEventListener("input", () => {
                let value = phoneField.value;

                value = value.replace(/[^0-9+\-\s()]/g, "");

                if (value.includes("+")) {
                    value = "+" + value.replace(/\+/g, "").replace(/^\+/, "");
                }

                phoneField.value = value;
            });
        }

        // EMAIL VALIDATION
        function isValidEmail(email) {
            const regex = /^[^\s@]+@[^\s@]+\.[a-zA-Z]{2,}$/;

            if (!regex.test(email)) return false;
            if ((email.match(/@/g) || []).length !== 1) return false;
            if (email.includes("..")) return false;

            const domain = email.split("@")[1];
            const parts = domain.split(".");

            if (parts.length > 2) {
                const last = parts[parts.length - 1];
                const secondLast = parts[parts.length - 2];
                if (last === secondLast) return false;
            }

            return true;
        }

        // PHONE VALIDATION
        function isValidPhone(phone) {
            const digits = phone.replace(/\D/g, "");

            if (digits.startsWith("44") || digits.startsWith("0")) {
                return /^0\d{10}$/.test(digits) || /^44\d{10}$/.test(digits);
            }

            return digits.length >= 7 && digits.length <= 15;
        }

        // NAME VALIDATION (NEW)
        function isValidName(name) {
            return /^[a-zA-Z\s]{2,50}$/.test(name);
        }

        const validateField = (field) => {
            clearError(field);
            const value = field.value.trim();

            // NAME
            if (field.name === "name" || field.name === "full_name") {
                if (!isValidName(value)) {
                    showError(
                        field,
                        "Enter a valid name (only letters, min 2 chars).",
                    );
                    return false;
                }
            }

            // EMAIL
            if (field.name === "email") {
                if (!isValidEmail(value)) {
                    showError(field, "Enter a valid email address.");
                    return false;
                }
            }

            // PHONE
            if (field.name === "phone" && value !== "") {
                if (!isValidPhone(value)) {
                    const digits = value.replace(/\D/g, "");

                    if (digits.startsWith("44") || digits.startsWith("0")) {
                        showError(
                            field,
                            "Enter valid UK number (e.g. 07123456789).",
                        );
                    } else {
                        showError(field, "Enter a valid phone number.");
                    }
                    return false;
                }
            }

            return true;
        };

        // LIVE VALIDATION (ONLY EMAIL + PHONE)
        form.querySelectorAll("input, textarea").forEach((field) => {
            field.addEventListener("input", () => {
                clearError(field);

                if (
                    field.name === "email" ||
                    field.name === "phone" ||
                    field.name === "name"
                ) {
                    validateField(field);
                }
            });

            field.addEventListener("blur", () => validateField(field));
        });

        //  SUBMIT
        form.addEventListener("submit", (e) => {
            let valid = true;

            form.querySelectorAll("input, textarea, select").forEach(
                (field) => {
                    if (!validateField(field)) valid = false;
                },
            );

            if (!valid) {
                e.preventDefault();
                e.stopPropagation();
                e.stopImmediatePropagation();
                return false;
            }
        });
    });
})();
