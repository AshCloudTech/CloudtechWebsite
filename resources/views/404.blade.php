<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>404 — Page Not Found</title>

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <style>
    :root{
  --bg1:#060816;
  --bg2:#0b1233;
  --card: rgba(255,255,255,0.06);
  --cardBorder: rgba(255,255,255,0.10);
  --text:#e9ecff;
  --muted:#aab3e6;
  --primary:#6d6bff;
  --primary2:#22d3ee;
  --shadow: 0 20px 60px rgba(0,0,0,0.35);
  --radius: 22px;
}

*{ box-sizing: border-box; }
html,body{ height:100%; }
body{
  margin:0;
  font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
  color: var(--text);
  overflow:hidden;
  background: radial-gradient(1200px 800px at 20% 10%, rgba(109,107,255,0.25), transparent 55%),
              radial-gradient(1000px 700px at 80% 90%, rgba(34,211,238,0.18), transparent 55%),
              linear-gradient(140deg, var(--bg1), var(--bg2));
}

/* subtle animated gradient overlay */
body::before{
  content:"";
  position:fixed; inset:0;
  background: linear-gradient(120deg,
    rgba(109,107,255,0.12),
    rgba(34,211,238,0.10),
    rgba(255,255,255,0.05)
  );
  background-size: 200% 200%;
  animation: gradientShift 10s ease-in-out infinite;
  pointer-events:none;
  mix-blend-mode: screen;
  opacity: .75;
}

@keyframes gradientShift{
  0%{ background-position: 0% 40%; }
  50%{ background-position: 100% 60%; }
  100%{ background-position: 0% 40%; }
}

#stars{
  position:fixed;
  inset:0;
  width:100%;
  height:100%;
  display:block;
}

.wrap{
  position:relative;
  height:100%;
  display:grid;
  place-items:center;
  padding: 24px;
}

/* Card */
.card{
  width:min(740px, 100%);
  background: var(--card);
  border: 1px solid var(--cardBorder);
  border-radius: var(--radius);
  box-shadow: var(--shadow);
  backdrop-filter: blur(18px);
  padding: 28px 26px;
  position:relative;
  transform: translateZ(0);
}

.badge{
  display:inline-flex;
  align-items:center;
  gap: 10px;
  padding: 8px 12px;
  border-radius: 999px;
  background: rgba(255,255,255,0.08);
  border: 1px solid rgba(255,255,255,0.12);
  font-weight: 600;
  letter-spacing: .04em;
  text-transform: uppercase;
  font-size: 12px;
}

.hero{
  margin-top: 14px;
}

.subtitle{
  margin: 10px 0 0 0;
  color: var(--muted);
  font-size: 15px;
  line-height: 1.55;
  max-width: 62ch;
}

/* Glitch text */
.glitch{
  font-size: clamp(64px, 10vw, 120px);
  line-height: 1;
  font-weight: 800;
  letter-spacing: -0.06em;
  position:relative;
  display:inline-block;
  text-shadow: 0 0 28px rgba(109,107,255,0.22);
  animation: floatY 4.2s ease-in-out infinite;
}

.glitch::before,
.glitch::after{
  content: attr(data-text);
  position:absolute;
  left:0; top:0;
  width:100%;
  overflow:hidden;
  clip-path: inset(0 0 0 0);
  opacity:.85;
}

.glitch::before{
  transform: translate(2px, -1px);
  color: rgba(34,211,238,0.95);
  animation: glitchA 2.4s infinite linear alternate-reverse;
}

.glitch::after{
  transform: translate(-2px, 1px);
  color: rgba(109,107,255,0.95);
  animation: glitchB 2.1s infinite linear alternate-reverse;
}

@keyframes glitchA{
  0% { clip-path: inset(10% 0 70% 0); }
  20%{ clip-path: inset(35% 0 40% 0); }
  40%{ clip-path: inset(60% 0 18% 0); }
  60%{ clip-path: inset(25% 0 55% 0); }
  80%{ clip-path: inset(72% 0 8% 0); }
  100%{ clip-path: inset(44% 0 35% 0); }
}

@keyframes glitchB{
  0% { clip-path: inset(70% 0 10% 0); }
  20%{ clip-path: inset(40% 0 35% 0); }
  40%{ clip-path: inset(18% 0 60% 0); }
  60%{ clip-path: inset(55% 0 25% 0); }
  80%{ clip-path: inset(8% 0 72% 0); }
  100%{ clip-path: inset(35% 0 44% 0); }
}

@keyframes floatY{
  0%,100%{ transform: translateY(0); }
  50%{ transform: translateY(-8px); }
}

/* Actions */
.actions{
  margin-top: 18px;
  display:flex;
  flex-wrap:wrap;
  gap: 12px;
}

.btn{
  appearance:none;
  border: none;
  border-radius: 14px;
  padding: 12px 16px;
  font-weight: 600;
  font-size: 14px;
  cursor:pointer;
  display:inline-flex;
  align-items:center;
  gap: 10px;
  transition: transform .15s ease, box-shadow .15s ease, background-color .15s ease, border-color .15s ease;
  text-decoration:none;
}

.btn:active{ transform: translateY(1px); }

.btn.primary{
  color: #0b1025;
  background: linear-gradient(135deg, rgba(34,211,238,1), rgba(109,107,255,1));
  box-shadow: 0 12px 26px rgba(34,211,238,0.14);
}

.btn.primary:hover{
  box-shadow: 0 16px 32px rgba(109,107,255,0.22);
  transform: translateY(-1px);
}

.btn.ghost{
  color: var(--text);
  background: rgba(255,255,255,0.06);
  border: 1px solid rgba(255,255,255,0.10);
}

.btn.ghost:hover{
  background: rgba(255,255,255,0.09);
  border-color: rgba(255,255,255,0.14);
  transform: translateY(-1px);
}

.btn-icon{
  display:inline-grid;
  place-items:center;
  width: 26px;
  height: 26px;
  border-radius: 10px;
  background: rgba(255,255,255,0.18);
}

/* Meta info */
.meta{
  margin-top: 18px;
  padding-top: 14px;
  border-top: 1px solid rgba(255,255,255,0.08);
  display:grid;
  gap: 8px;
}

.meta-row{
  display:flex;
  align-items:center;
  gap: 10px;
  color: rgba(233,236,255,0.85);
  font-size: 13px;
}

.meta-row code{
  color: rgba(233,236,255,0.95);
  background: rgba(255,255,255,0.07);
  border: 1px solid rgba(255,255,255,0.08);
  padding: 3px 8px;
  border-radius: 10px;
  max-width: 100%;
  overflow:hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.dot{
  width: 8px;
  height: 8px;
  border-radius: 999px;
  background: rgba(34,211,238,0.9);
  box-shadow: 0 0 14px rgba(34,211,238,0.28);
}

/* Decorative blobs */
.blob{
  position:absolute;
  width: 320px;
  height: 320px;
  border-radius: 999px;
  filter: blur(26px);
  opacity: 0.35;
  pointer-events:none;
  transform: translate3d(0,0,0);
  animation: blobFloat 8s ease-in-out infinite;
}

.blob-1{
  left: -90px;
  top: 10%;
  background: radial-gradient(circle at 30% 30%, rgba(34,211,238,0.9), transparent 60%),
              radial-gradient(circle at 70% 70%, rgba(109,107,255,0.7), transparent 55%);
}

.blob-2{
  right: -110px;
  top: 55%;
  width: 360px;
  height: 360px;
  background: radial-gradient(circle at 30% 30%, rgba(109,107,255,0.9), transparent 60%),
              radial-gradient(circle at 70% 70%, rgba(255,255,255,0.18), transparent 55%);
  animation-duration: 10s;
}

.blob-3{
  right: 20%;
  bottom: -160px;
  width: 420px;
  height: 420px;
  background: radial-gradient(circle at 30% 30%, rgba(34,211,238,0.7), transparent 58%),
              radial-gradient(circle at 70% 70%, rgba(109,107,255,0.6), transparent 60%);
  animation-duration: 12s;
}

@keyframes blobFloat{
  0%,100%{ transform: translate(0,0) scale(1); }
  50%{ transform: translate(10px,-18px) scale(1.06); }
}

/* Reduce motion accessibility */
@media (prefers-reduced-motion: reduce){
  *{ animation: none !important; transition: none !important; }
}
    </style>
</head>
<body>
  <!-- Animated background canvas -->
  <canvas id="stars" aria-hidden="true"></canvas>

  <main class="wrap">
    <section class="card" role="region" aria-label="404 page content">
      <div class="badge">Oops</div>

      <div class="hero">
        <div class="glitch" data-text="404">404</div>
        <p class="subtitle">The page you’re looking for doesn’t exist or has been moved.</p>
      </div>

      <div class="actions">
        <a class="btn primary" href="/">
          <span class="btn-icon" aria-hidden="true">↩</span>
          Go to Home
        </a>
        <button class="btn ghost" id="goBackBtn" type="button">
          <span class="btn-icon" aria-hidden="true">←</span>
          Go Back
        </button>
      </div>

      <div class="meta">
        <div class="meta-row">
          <span class="dot"></span>
          <span>URL:</span>
          <code id="currentUrl"></code>
        </div>
        <div class="meta-row">
          <span class="dot"></span>
          <span>Status:</span>
          <code>404 Not Found</code>
        </div>
      </div>
    </section>

    <!-- Decorative floating blobs -->
    <div class="blob blob-1" aria-hidden="true"></div>
    <div class="blob blob-2" aria-hidden="true"></div>
    <div class="blob blob-3" aria-hidden="true"></div>
  </main>

  <script>
    (() => {
  // URL display
  const urlEl = document.getElementById("currentUrl");
  if (urlEl) urlEl.textContent = window.location.href;

  // Back button
  const backBtn = document.getElementById("goBackBtn");
  if (backBtn) {
    backBtn.addEventListener("click", () => {
      if (history.length > 1) history.back();
      else window.location.href = "/";
    });
  }

  // Parallax blobs + card on mouse move (subtle)
  const card = document.querySelector(".card");
  const blobs = document.querySelectorAll(".blob");
  let mouseX = 0, mouseY = 0;

  window.addEventListener("mousemove", (e) => {
    mouseX = (e.clientX / window.innerWidth) - 0.5;
    mouseY = (e.clientY / window.innerHeight) - 0.5;

    if (card) {
      card.style.transform = `translate3d(0,0,0) rotateX(${(-mouseY * 3).toFixed(2)}deg) rotateY(${(mouseX * 4).toFixed(2)}deg)`;
    }

    blobs.forEach((b, idx) => {
      const d = (idx + 1) * 18;
      b.style.transform = `translate3d(${mouseX * d}px, ${mouseY * d}px, 0)`;
    });
  });

  // Reset tilt on touch devices (no mouse)
  window.addEventListener("touchstart", () => {
    if (card) card.style.transform = `translate3d(0,0,0)`;
    blobs.forEach((b) => (b.style.transform = `translate3d(0,0,0)`));
  }, { passive: true });

  // Simple starfield animation on canvas
  const canvas = document.getElementById("stars");
  if (!canvas) return;

  const ctx = canvas.getContext("2d");
  let w, h, stars;

  function resize() {
    w = canvas.width = Math.floor(window.innerWidth * devicePixelRatio);
    h = canvas.height = Math.floor(window.innerHeight * devicePixelRatio);
    canvas.style.width = "100%";
    canvas.style.height = "100%";

    const count = Math.min(180, Math.floor((window.innerWidth * window.innerHeight) / 12000));
    stars = Array.from({ length: count }, () => ({
      x: Math.random() * w,
      y: Math.random() * h,
      r: (Math.random() * 1.6 + 0.2) * devicePixelRatio,
      v: (Math.random() * 0.25 + 0.05) * devicePixelRatio,
      a: Math.random() * 0.7 + 0.15
    }));
  }

  function tick() {
    ctx.clearRect(0, 0, w, h);

    // soft vignette
    const grd = ctx.createRadialGradient(w * 0.5, h * 0.45, 0, w * 0.5, h * 0.45, Math.max(w, h) * 0.6);
    grd.addColorStop(0, "rgba(255,255,255,0.00)");
    grd.addColorStop(1, "rgba(0,0,0,0.35)");
    ctx.fillStyle = grd;
    ctx.fillRect(0, 0, w, h);

    // stars
    for (const s of stars) {
      s.y += s.v;
      if (s.y > h + 20) {
        s.y = -20;
        s.x = Math.random() * w;
      }

      // slight horizontal drift linked to mouse position
      s.x += mouseX * 0.15 * devicePixelRatio;

      ctx.beginPath();
      ctx.arc(s.x, s.y, s.r, 0, Math.PI * 2);
      ctx.fillStyle = `rgba(255,255,255,${s.a})`;
      ctx.fill();
    }

    requestAnimationFrame(tick);
  }

  window.addEventListener("resize", resize);
  resize();
  tick();
})();

  </script>
</body>
</html>
