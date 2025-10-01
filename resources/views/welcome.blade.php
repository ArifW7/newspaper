<!doctype html>
<html lang="bn">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dhakapost - Converted (Bootstrap)</title>
  <meta name="description" content="Converted standalone HTML version (Bootstrap) of uploaded index.htm" />
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Optional Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Bangla:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    /* Basic custom styling to approximate original look */
    :root{
      --brand-color: #124B65;
      --link-color: #0D85BF;
      --hover-color: #0b6e9a;
      --title-border: #e6eef2;
      --bg-gray: #f6f8fa;
    }


    :root {
      --brand-color: #124B65;
      --link-color: #0D85BF;
      --hover-color: #0b6e9a;
      --title-border: #e6eef2;
      --bg-gray: #f6f8fa;
    }
    body {
      font-family: "Noto Sans Bangla", sans-serif;
      background: var(--bg-gray);
      color: #222;
      margin: 0;
    }
    header.site-header {
      background: var(--brand-color);
      color: #fff;
      position: sticky;
      top: 0;
      z-index: 1030;
      box-shadow: 0 2px 6px rgba(0,0,0,0.08);
    }
    .brand-logo svg { height: 40px; }
    .navbar-nav .nav-link { color: #fff !important; font-weight: 500; }
    .navbar-nav .nav-link:hover { color: #e6f7ff !important; }
    .trending-pill {
      background: var(--brand-color);
      color: #fff;
      border-radius: 999px;
      padding: 6px 14px;
      font-weight: 600;
      font-size: 0.9rem;
    }
    .topic-pill {
      background: #E9EEF2;
      color: var(--hover-color);
      border-radius: 999px;
      padding: 6px 12px;
      font-size: 0.9rem;
      text-decoration: none;
    }
    .topic-pill:hover {
      background: var(--hover-color);
      color: #fff;
    }
    .lead-left-border { border-left: 4px solid var(--brand-color); padding-left: 14px; }
    .card-title { color: var(--link-color); font-weight: 700; font-size: 1rem; }
    .card-title:hover { color: var(--hover-color); }
    .category-title {
      font-size: 1.25rem;
      font-weight: 700;
      color: var(--brand-color);
      border-bottom: 2px solid var(--title-border);
      padding-bottom: 6px;
      margin-bottom: 12px;
    }
    .article-img { width: 100%; height: auto; object-fit: cover; }
    .sidebar-card {
      background: #fff;
      padding: 12px;
      border-radius: 6px;
      box-shadow: 0 1px 3px rgba(0,0,0,0.08);
    }
    footer {
      background: #fff;
      border-top: 1px solid #eee;
      padding: 20px 0;
      font-size: 0.9rem;
    }
    footer a { color: var(--link-color); text-decoration: none; }
    footer a:hover { color: var(--hover-color); }
    /* Responsive */
    @media (max-width: 767.98px) {
      .lead-hero { flex-direction: column; }
      .lead-hero .lead-content { padding-left: 0; margin-top: 10px; }
    }
    @media (min-width: 768px) {
      .lead-hero { display: flex; gap: 20px; }
      .lead-hero .lead-image { flex: 1 1 55%; }
      .lead-hero .lead-content { flex: 1 1 45%; display: flex; flex-direction: column; justify-content: center; }
    }
    html,body{
      font-family: "Noto Sans Bangla", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
      background: var(--bg-gray);
      color: #222;
    }
    header.site-header{
      background: var(--brand-color);
      color: #fff;
      position: sticky;
      top: 0;
      z-index: 1030;
      box-shadow: 0 2px 6px rgba(0,0,0,0.08);
    }
    .brand-logo svg{ height: 48px; width: auto; }
    .nav-link{ color: #fff !important; }
    .nav-link:hover{ color: #e6f7ff !important; background: rgba(0,0,0,0.05); border-radius: 6px; }
    .trending-pill{
      background: var(--brand-color);
      color: #fff;
      border-radius: 999px;
      padding: 6px 14px;
      display:inline-flex;
      align-items:center;
      gap:8px;
      font-weight:600;
    }
    .topic-pill{
      background: #E9EEF2;
      color: #0b6e9a;
      padding:6px 12px;
      border-radius:999px;
      margin-right:8px;
      display:inline-block;
      margin-bottom:6px;
      font-size:0.95rem;
    }
    .lead-left-border{ border-left:4px solid var(--brand-color); padding-left:14px; }
    .card-title { color: var(--link-color); font-weight:700; }
    .category-title { font-size:1.5rem; font-weight:700; color:var(--brand-color); border-bottom: 2px solid var(--title-border); padding-bottom:6px; margin-bottom:12px; }
    .article-img { width:100%; height: auto; object-fit:cover; }
    .sidebar-card { background: #fff; padding:12px; border-radius:6px; box-shadow: 0 1px 3px rgba(0,0,0,0.04); }
    footer { padding:30px 0; background:#fff; margin-top:30px; border-top:1px solid #eee;}
    /* Responsive tweaks */
    @media (min-width: 992px){
      .lead-hero { display:flex; gap:20px; align-items:stretch; }
      .lead-hero .lead-image { flex: 1 1 55%; }
      .lead-hero .lead-content { flex: 1 1 45%; display:flex; flex-direction:column; justify-content:center; }
    }
  </style>
</head>
<body>
  <!-- Header -->
  <header class="site-header py-2">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center gap-3">
        <a class="brand-logo d-flex align-items-center text-decoration-none" href="#">
          <!-- small placeholder SVG logo (keeps it local) -->
          <svg viewBox="0 0 200 40" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="logo">
            <rect width="200" height="40" fill="#fff"/>
            <text x="14" y="26" font-family="Noto Sans Bangla, Arial" font-size="14" fill="#124B65" font-weight="700">dhakapost (demo)</text>
          </svg>
        </a>
      </div>

      <nav class="d-none d-lg-block">
        <ul class="nav">
          <li class="nav-item"><a class="nav-link px-3" href="#">সর্বশেষ</a></li>
          <li class="nav-item"><a class="nav-link px-3" href="#">জাতীয়</a></li>
          <li class="nav-item"><a class="nav-link px-3" href="#">রাজনীতি</a></li>
          <li class="nav-item"><a class="nav-link px-3" href="#">অর্থনীতি</a></li>
          <li class="nav-item"><a class="nav-link px-3" href="#">আন্তর্জাতিক</a></li>
          <li class="nav-item"><a class="nav-link px-3" href="#">সারাদেশ</a></li>
          <li class="nav-item"><a class="nav-link px-3" href="#">খেলা</a></li>
        </ul>
      </nav>

      <div class="d-flex align-items-center gap-2">
        <button class="btn btn-sm btn-outline-light">🔍</button>
        <button class="btn btn-sm btn-light text-primary">মেনু</button>
      </div>
    </div>
  </header>

  <main class="container my-4">
    <!-- Trending pills -->
    <div class="mb-3 d-flex align-items-center flex-wrap gap-2">
      <div class="trending-pill me-2">ট্রেন্ডিং</div>
      <a class="topic-pill" href="#">সর্বশেষ</a>
      <a class="topic-pill" href="#">জনপ্রিয়</a>
      <a class="topic-pill" href="#">ড. মুহাম্মদ ইউনূস</a>
      <a class="topic-pill" href="#">এশিয়া কাপ ২০২৫</a>
      <a class="topic-pill" href="#">ডেঙ্গু</a>
      <a class="topic-pill" href="#">নামাজের সময়সূচি</a>
    </div>

    <!-- Grid: main + sidebar -->
    <div class="row gx-4 gy-4">
      <!-- Main content -->
      <div class="col-12 col-lg-8">
        <!-- Lead hero (large article) -->
        <section class="mb-4 p-3 bg-white rounded shadow-sm lead-left-border">
          <div class="lead-hero">
            <div class="lead-image">
              <img class="article-img rounded" src="https://assets.dhakapost.com/media/imgAll/BG/2025September/boojk-fair-2022-20250918191752-20250928205956.jpg?width=560&height=315" alt="ডিসেম্বরে হচ্ছে না অমর অকুশে বইমেলা">
            </div>
            <div class="lead-content ps-3">
              <h1 class="h3 card-title">ডিসেম্বরে হচ্ছে না অমর অকুশে বইমেলা</h1>
              <p class="text-muted">অমর একুশে বইমেলা ২০২৬-এর নির্ধারিত তারিখ স্থগিত করা হয়েছে। সম্প্রতি স্বরাষ্ট্র মন্ত্রণালয়ের এক সিদ্ধান্তের পরিপ্রেক্ষিতে বাংলা একাডেমি এ পদক্ষেপ নিয়েছে.</p>
              <a href="#" class="btn btn-sm btn-outline-primary mt-2">আরও পড়ুন</a>
            </div>
          </div>
        </section>

        <!-- Two column article cards -->
        <div class="row g-3">
          <div class="col-12 col-md-6">
            <article class="card">
              <div class="row g-0">
                <div class="col-4">
                  <img src="https://assets.dhakapost.com/media/imgAll/BG/2025September/jahangir-alam-20250928140537.jpg?width=330&height=186" class="img-fluid" alt="জাহাঙ্গীর আলম">
                </div>
                <div class="col-8">
                  <div class="card-body">
                    <h5 class="card-title">সাম্প্রদায়িক উসকানিদাতাদের বিরুদ্ধে কঠোর ব্যবস্থা নিতে বলা হয়েছে</h5>
                    <p class="card-text text-muted small">স্বরাষ্ট্র উপদেষ্টা লেফটেন্যান্ট জেনারেল (অব.) জাহাঙ্গীর আলম চৌধুরী বলেছেন...</p>
                  </div>
                </div>
              </div>
            </article>
          </div>

          <div class="col-12 col-md-6">
            <article class="card">
              <div class="row g-0">
                <div class="col-4">
                  <img src="https://assets.dhakapost.com/media/imgAll/BG/2025September/jahangir-alam-20250928140537.jpg?width=330&height=186" class="img-fluid" alt="article">
                </div>
                <div class="col-8">
                  <div class="card-body">
                    <h5 class="card-title">দুষ্কৃতিকারীদের হামলায় তিনজন নিহত</h5>
                    <p class="card-text text-muted small">খাগড়াছড়ি জেলার গুইমারা উপজেলায় ঘটেছে মর্মান্তিক পরিস্থিতি...</p>
                  </div>
                </div>
              </div>
            </article>
          </div>

          <!-- repeat sample cards -->
          <div class="col-12 col-md-6">
            <article class="card">
              <img src="https://via.placeholder.com/560x315.png?text=Article" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">চট্টগ্রাম বন্দরে নিলামের দুই কনটেইনার গায়েব</h5>
                <p class="card-text text-muted small">তদন্তে সংস্থাগুলো বলেছে...</p>
              </div>
            </article>
          </div>

          <div class="col-12 col-md-6">
            <article class="card">
              <img src="https://via.placeholder.com/560x315.png?text=Article" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">হজের তিন প্যাকেজ ঘোষণা</h5>
                <p class="card-text text-muted small">সর্বনিম্ন ৪ লাখ ৬৭ হাজার টাকা...</p>
              </div>
            </article>
          </div>
        </div>

        <!-- more sections / grid -->
        <section class="mt-4">
          <h3 class="category-title">অন্যান্য খবর</h3>
          <div class="row g-3">
            <div class="col-12 col-md-4">
              <div class="sidebar-card">
                <img src="https://via.placeholder.com/300x180.png?text=News" class="img-fluid mb-2" alt="">
                <h6 class="mb-1">সংক্ষিপ্ত শিরোনাম ১</h6>
                <p class="small text-muted">কয়েকটি বাক্য বিবরণ...</p>
              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="sidebar-card">
                <img src="https://via.placeholder.com/300x180.png?text=News" class="img-fluid mb-2" alt="">
                <h6 class="mb-1">সংক্ষিপ্ত শিরোনাম ২</h6>
                <p class="small text-muted">কয়েকটি বাক্য বিবরণ...</p>
              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="sidebar-card">
                <img src="https://via.placeholder.com/300x180.png?text=News" class="img-fluid mb-2" alt="">
                <h6 class="mb-1">সংক্ষিপ্ত শিরোনাম ৩</h6>
                <p class="small text-muted">কয়েকটি বাক্য বিবরণ...</p>
              </div>
            </div>
          </div>
        </section>

      </div>

      <!-- Sidebar -->
      <aside class="col-12 col-lg-4">
        <div class="sticky-top" style="top:100px;">
          <div class="mb-3 sidebar-card">
            <h5 class="mb-2">অ্যাড / স্পটলাইন</h5>
            <div style="height:160px;background:#f1f5f7;border-radius:6px;display:flex;align-items:center;justify-content:center;color:#6b7780;">300×250 Ad</div>
          </div>

          <div class="mb-3 sidebar-card">
            <h5 class="mb-2">সম্পাদকীয়</h5>
            <p class="small text-muted">সম্পাদকীয় টুকরা — এখানে খন্ড তথ্য বা লিঙ্ক দেওয়া যাবে।</p>
            <a href="#" class="btn btn-sm btn-outline-primary">আরও পড়ুন</a>
          </div>

          <div class="mb-3 sidebar-card">
            <h6>জনপ্রিয় খবর</h6>
            <ul class="list-unstyled small">
              <li class="py-2 border-bottom"><a href="#" class="text-decoration-none">জনপ্রিয় শিরোনাম ১</a></li>
              <li class="py-2 border-bottom"><a href="#" class="text-decoration-none">জনপ্রিয় শিরোনাম ২</a></li>
              <li class="py-2 border-bottom"><a href="#" class="text-decoration-none">জনপ্রিয় শিরোনাম ৩</a></li>
            </ul>
          </div>

          <div class="mb-3 sidebar-card">
            <h6>আবহাওয়া</h6>
            <p class="small text-muted">ঢাকা— আজ: ঝকঝকে রোদ; তাপমাত্রা ৩০°C</p>
          </div>
        </div>
      </aside>
    </div>
  </main>

  <footer class="mt-4">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
      <div class="mb-2 mb-md-0">© Dhakapost - Converted demo</div>
      <div>
        <a href="#" class="me-2 text-decoration-none">About</a>
        <a href="#" class="me-2 text-decoration-none">Contact</a>
        <a href="#" class="text-decoration-none">Privacy</a>
      </div>
    </div>
  </footer>

  <!-- Bootstrap JS bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>














