
(function () {
    function uniq(arr) {
        return [...new Set((arr || []).filter(Boolean))];
    }

    function project(lat, lon, width, height) {
        const x = ((lon + 180) / 360) * width;
        const y = ((90 - lat) / 180) * height;
        return {
            x,
            y
        };
    }

    function setActiveCountry(svg, countryCode) {
        svg.querySelectorAll("path.is-active").forEach(p => p.classList.remove("is-active"));
        if (!countryCode) return;
        const id = String(countryCode).toUpperCase();
        const path = svg.querySelector(`path#${CSS.escape(id)}`);
        if (path) path.classList.add("is-active");
    }

    function setActiveButton(listEl, branchId) {
        if (!listEl) return;
        listEl.querySelectorAll(".worldMap__btn.is-active").forEach(b => b.classList.remove("is-active"));
        if (!branchId) return;
        const btn = listEl.querySelector(`.worldMap__btn[data-branch-id="${branchId}"]`);
        if (btn) btn.classList.add("is-active");
    }

    function openTooltip(tt, html) {
        if (!tt) return;
        if (!html) {
            tt.classList.remove("is-open");
            tt.innerHTML = "";
            return;
        }
        tt.innerHTML = html;
        tt.classList.add("is-open");
    }

    document.addEventListener("DOMContentLoaded", () => {
        const root = document.getElementById("worldMap");
        if (!root) return;

        const svg = document.getElementById("worldMapSvg");
        const pinsLayer = document.getElementById("branchPins");
        const tooltip = document.getElementById("mapTooltip");
        const list = document.getElementById("branchList");

        if (!svg || !pinsLayer) return;

        const countryCodes = (window.WORLD_MAP_COUNTRY_CODES || []).map(c => String(c).toUpperCase());
        const branches = (window.WORLD_MAP_BRANCHES || []);

        // Mark countries
        const allPaths = Array.from(svg.querySelectorAll("path[id]"));
        const codesSet = new Set(countryCodes);

        allPaths.forEach(p => {
            const id = (p.id || "").toUpperCase();
            if (!id) return;
            if (codesSet.has(id)) p.classList.add("has-branch");
            else p.classList.add("dim");
        });

        // Draw pins
        const SVG_W = 1008,
            SVG_H = 651;
        const frag = document.createDocumentFragment();

        branches.forEach(b => {
            if (typeof b.lat !== "number" || typeof b.lon !== "number") return;

            const {
                x,
                y
            } = project(b.lat, b.lon, SVG_W, SVG_H);

            const c = document.createElementNS("http://www.w3.org/2000/svg", "circle");
            c.setAttribute("cx", x.toFixed(2));
            c.setAttribute("cy", y.toFixed(2));
            c.setAttribute("r", b.is_hq ? "6" : "4");
            c.classList.toggle("is-hq", !!b.is_hq);
            c.dataset.branchId = b.id;
            c.dataset.country = (b.country_code || "").toUpperCase();
            c.style.cursor = "pointer";

            frag.appendChild(c);
        });

        pinsLayer.appendChild(frag);

        // Hover countries (only those with branches)
        svg.addEventListener("mousemove", (e) => {
            const t = e.target;
            if (!(t instanceof SVGPathElement)) return;

            const cc = (t.id || "").toUpperCase();
            if (!cc) return;

            const inCountryBranches = branches.filter(b => (b.country_code || "")
                .toUpperCase() === cc);
            if (!inCountryBranches.length) return;

            setActiveCountry(svg, cc);

            const names = uniq(inCountryBranches.map(b => b.name)).join(", ");
            openTooltip(tooltip, `<b>${cc}</b><br>${names}`);
        });

        svg.addEventListener("mouseleave", () => {
            openTooltip(tooltip, "");
        });

        // Click branch list
        list?.addEventListener("click", (e) => {
            const btn = e.target.closest(".worldMap__btn");
            if (!btn) return;

            const cc = (btn.dataset.country || "").toUpperCase();
            const id = btn.dataset.branchId;

            setActiveButton(list, id);
            setActiveCountry(svg, cc);

            const b = branches.find(x => String(x.id) === String(id));
            if (b) {
                openTooltip(tooltip,
                    `<b>${b.name}</b><br>${b.city || ""} ${b.country_code || ""}${b.is_hq ? "<br><i>HQ</i>" : ""}`
                );
            }
        });

        // Click pin
        pinsLayer.addEventListener("click", (e) => {
            const c = e.target;
            if (!(c instanceof SVGCircleElement)) return;

            const id = c.dataset.branchId;
            const cc = (c.dataset.country || "").toUpperCase();

            setActiveButton(list, id);
            setActiveCountry(svg, cc);

            const b = branches.find(x => String(x.id) === String(id));
            if (b) {
                openTooltip(tooltip,
                    `<b>${b.name}</b><br>${b.city || ""} ${b.country_code || ""}${b.is_hq ? "<br><i>HQ</i>" : ""}`
                );
            }
        });

        // Default focus
        const hq = branches.find(b => b.is_hq);
        const initial = hq || branches[0];
        if (initial?.country_code) {
            setActiveCountry(svg, initial.country_code);
            if (list && initial?.id) setActiveButton(list, initial.id);
        }
    });
})();
