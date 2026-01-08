{{-- resources/views/hello.blade.php --}}
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Hello Laravel</title>
  <style>
    :root{
      --bg:#0b1220;
      --card:#111a2e;
      --text:#e9eefc;
      --muted:#a9b6d6;
      --accent:#ff2d20; /* Laravel red */
      --accent2:#ff6b60;
      --ring: rgba(255,45,32,.35);
      --shadow: 0 20px 60px rgba(0,0,0,.35);
      --radius: 18px;
    }
    *{ box-sizing:border-box; }
    body{
      margin:0;
      font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Arial, "Apple Color Emoji","Segoe UI Emoji";
      color:var(--text);
      background:
        radial-gradient(900px 500px at 20% 10%, rgba(255,45,32,.20), transparent 60%),
        radial-gradient(700px 400px at 80% 20%, rgba(255,107,96,.12), transparent 55%),
        radial-gradient(900px 600px at 50% 90%, rgba(70,120,255,.10), transparent 60%),
        var(--bg);
      min-height:100vh;
    }
    a{ color:inherit; text-decoration:none; }
    .wrap{ max-width:1100px; margin:0 auto; padding:24px; }
    .nav{
      display:flex; align-items:center; justify-content:space-between;
      gap:16px; padding:14px 16px; border:1px solid rgba(255,255,255,.08);
      background: rgba(17,26,46,.65); backdrop-filter: blur(10px);
      border-radius: 999px;
    }
    .brand{ display:flex; align-items:center; gap:10px; font-weight:700; }
    .dot{
      width:14px; height:14px; border-radius:999px;
      background: linear-gradient(135deg, var(--accent), var(--accent2));
      box-shadow: 0 0 0 6px var(--ring);
    }
    .links{ display:flex; gap:10px; flex-wrap:wrap; justify-content:flex-end; }
    .pill{
      padding:10px 12px; border-radius:999px;
      border:1px solid rgba(255,255,255,.10);
      background: rgba(255,255,255,.04);
      transition: transform .15s ease, border-color .15s ease;
    }
    .pill:hover{ transform: translateY(-1px); border-color: rgba(255,255,255,.22); }
    .hero{
      margin-top:28px;
      display:grid; gap:18px;
      grid-template-columns: 1.2fr .8fr;
      align-items:stretch;
    }
    @media (max-width: 900px){
      .hero{ grid-template-columns: 1fr; }
      .links{ justify-content:flex-start; }
    }
    .card{
      border-radius: var(--radius);
      border:1px solid rgba(255,255,255,.10);
      background: rgba(17,26,46,.70);
      box-shadow: var(--shadow);
      overflow:hidden;
    }
    .card-pad{ padding:26px; }
    .title{
      font-size: clamp(28px, 3.2vw, 44px);
      line-height: 1.05;
      margin: 0 0 12px 0;
      letter-spacing: -0.02em;
    }
    .subtitle{
      color: var(--muted);
      font-size: 16px;
      line-height: 1.6;
      margin: 0 0 18px 0;
    }
    .badge{
      display:inline-flex; align-items:center; gap:8px;
      padding:8px 12px; border-radius:999px;
      border:1px solid rgba(255,255,255,.10);
      background: rgba(255,255,255,.05);
      color: var(--muted);
      font-size: 13px;
      margin-bottom: 14px;
    }
    .badge span{
      width:9px; height:9px; border-radius:999px;
      background: var(--accent);
      box-shadow: 0 0 0 5px rgba(255,45,32,.18);
    }
    .ctaRow{ display:flex; gap:12px; flex-wrap:wrap; margin-top:18px; }
    .btn{
      display:inline-flex; align-items:center; justify-content:center; gap:10px;
      padding:12px 14px; border-radius: 12px;
      border:1px solid rgba(255,255,255,.12);
      background: rgba(255,255,255,.06);
      font-weight: 600;
      transition: transform .15s ease, border-color .15s ease, background .15s ease;
    }
    .btn:hover{ transform: translateY(-1px); border-color: rgba(255,255,255,.24); background: rgba(255,255,255,.09); }
    .btn.primary{
      border-color: rgba(255,45,32,.55);
      background: linear-gradient(135deg, rgba(255,45,32,.95), rgba(255,107,96,.92));
      box-shadow: 0 16px 45px rgba(255,45,32,.22);
    }
    .btn.primary:hover{ border-color: rgba(255,45,32,.80); }

    .grid{
      display:grid; gap:12px;
      grid-template-columns: repeat(2, minmax(0,1fr));
      padding: 10px;
    }
    @media (max-width: 520px){
      .grid{ grid-template-columns: 1fr; }
    }
    .mini{
      padding:16px;
      border-radius: 16px;
      border:1px solid rgba(255,255,255,.10);
      background: rgba(255,255,255,.04);
    }
    .mini h3{ margin:0 0 6px 0; font-size: 15px; }
    .mini p{ margin:0; color: var(--muted); font-size: 13px; line-height:1.45; }

    .code{
      border-top: 1px solid rgba(255,255,255,.10);
      padding: 18px 18px 20px;
      background: rgba(0,0,0,.20);
      font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono","Courier New", monospace;
      font-size: 13px;
      color: #dbe5ff;
      overflow:auto;
    }
    .code .k{ color:#8fb3ff; }
    .code .s{ color:#9ff0c6; }
    .code .c{ color:#93a3c9; }
    footer{
      margin: 22px 0 8px;
      color: rgba(233,238,252,.65);
      font-size: 12px;
      text-align:center;
    }
  </style>
</head>
<body>
  <div class="wrap">
    <header class="nav">
      <div class="brand">
        <div class="dot" aria-hidden="true"></div>
        <div>Laravel • Hello</div>
      </div>
      <nav class="links">
        <a class="pill" href="{{ url('/') }}">Accueil</a>
        <a class="pill" href="{{ url('/products') }}">Produits</a>
        <a class="pill" href="{{ url('/cart') }}">Panier</a>
      </nav>
    </header>

    <main class="hero">
      <section class="card">
        <div class="card-pad">
          <div class="badge"><span></span> Framework PHP moderne • Routing + Views</div>
          <h1 class="title">Hello Laravel 👋</h1>
          <p class="subtitle">
            Cette page Blade est <b>responsive</b> et illustre les bases :
            <b>routes</b> → <b>views</b> → interface claire.
            Parfait pour un mini e-commerce (liste produits, détails, panier).
          </p>

          <div class="ctaRow">
            <a class="btn primary" href="{{ url('/products') }}">
              Voir les produits
              <span aria-hidden="true">→</span>
            </a>
            <a class="btn" href="{{ url('/cart') }}">
              Ouvrir le panier
              <span aria-hidden="true">🛒</span>
            </a>
          </div>
        </div>

        <div class="code" role="region" aria-label="Exemple de route Laravel">
<pre><span class="c">// routes/web.php</span>
<span class="k">Route</span>::get(<span class="s">'/hello'</span>, <span class="k">fn</span>() =&gt; view(<span class="s">'hello'</span>));</pre>
        </div>
      </section>

      <aside class="card">
        <div class="grid">
          <div class="mini">
            <h3>Routing</h3>
            <p>Définir des routes web simples pour vos pages.</p>
          </div>
          <div class="mini">
            <h3>Views (Blade)</h3>
            <p>Créer des interfaces réutilisables (layout, sections).</p>
          </div>
          <div class="mini">
            <h3>Responsive</h3>
            <p>Grille adaptative mobile/tablette/desktop.</p>
          </div>
          <div class="mini">
            <h3>Prêt e-commerce</h3>
            <p>Accueil, produits, détails et panier (session).</p>
          </div>
        </div>

        <div class="card-pad" style="padding-top:0">
          <div class="badge" style="margin:0"><span></span> Déploiement : GitHub → Vercel</div>
          <p class="subtitle" style="margin-top:12px">
            Astuce : sur Vercel, Laravel tourne souvent via <b>fonction serverless</b>
            + rewrite vers <code>/api/lambda.php</code>.
          </p>
        </div>
      </aside>
    </main>

    <footer>
      © {{ date('Y') }} • Demo Laravel (Routing + Views) — Atelier 3
    </footer>
  </div>
</body>
</html>
