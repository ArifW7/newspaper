@extends('frontend.layouts.app')


@section('title', 'Home - News Portal')
@section('body_class', 'home-page')

@section('content')
<!-- trending section  -->
<section class="trending-section container-fluid ">
  
  <div class="row bottom-border ">
    <!-- Main content -->
    <div class="col-12 col-lg-9  right-border mobile-border">
      <!-- Lead hero (large article) -->
      <div class="row lead-hero bottom-border ">
        <div class="col-lg-6 lead-content  mobile-order-2 lead-left-border">
          <p class="h1-title">ডিসেম্বরে হচ্ছে না অমর অকুশে বইমেলা</p>
          <p class="text-muted d-none d-md-block">
            অমর একুশে বইমেলা ২০২৬-এর নির্ধারিত তারিখ স্থগিত করা হয়েছে। সম্প্রতি স্বরাষ্ট্র
            মন্ত্রণালয়ের এক সিদ্ধান্তের পরিপ্রেক্ষিতে বাংলা একাডেমি এ পদক্ষেপ নিয়েছে।
          </p>
        </div>
        <div class="col-lg-6 lead-image mobile-order-1">
          <img
            class="article-img img-fluid mobile-image"
            src="https://assets.dhakapost.com/media/imgAll/BG/2025September/boojk-fair-2022-20250918191752-20250928205956.jpg?width=560&height=315"
            alt="ডিসেম্বরে হচ্ছে না অমর অকুশে বইমেলা" />
        </div>
      </div>


      <!-- Two column article cards -->
      <div class="row g-3 bottom-border">
        <div class="col-12 col-md-6 right-border mobile-border">
          <article class="news-row">
            <div class="row g-4">

              <div class="col-6 col-lg-6 ">
                <div class="news-body">
                  <h5 class="news-title heading-title2">সাম্প্রদায়িক বিরুদ্ধে কঠোর ব্যবস্থা নিতে বলা হয়েছে</h5>
                  <p class="news-text text-muted small">স্বরাষ্ট্র উপদেষ্টা লেফটেন্যান্ট জেনারেল (অব.) জাহাঙ্গীর আলম চৌধুরী বলেছেন...</p>
                </div>
              </div>
              <div class="col-6 col-lg-6">
                <img src="https://assets.dhakapost.com/media/imgAll/BG/2025September/jahangir-alam-20250928140537.jpg?width=330&height=186" class="img-fluid mobile-image" alt="জাহাঙ্গীর আলম">
              </div>
            </div>
          </article>
        </div>

        <div class="col-12 col-md-6 ">
          <article class="news-row">
            <div class="row g-4">

              <div class="col-6">
                <div class="news-body">
                  <h5 class="news-title heading-title2">সাম্প্রদায়িক বিরুদ্ধে কঠোর ব্যবস্থা নিতে বলা হয়েছে</h5>
                  <p class="news-text text-muted small">স্বরাষ্ট্র উপদেষ্টা লেফটেন্যান্ট জেনারেল (অব.) জাহাঙ্গীর আলম চৌধুরী বলেছেন...</p>
                </div>
              </div>
              <div class="col-6">
                <img src="https://assets.dhakapost.com/media/imgAll/BG/2025September/jahangir-alam-20250928140537.jpg?width=330&height=186" class="img-fluid mobile-image" alt="জাহাঙ্গীর আলম">
              </div>
            </div>
          </article>
        </div>

      </div>
    </div>

    <!-- Sidebar add and comment -->
    <aside class=" col-12 col-lg-3">
      <div class="sticky-top" style="top:100px;">
        <div class="mb-3 sidebar-card">
          <img src="https://tpc.googlesyndication.com/simgad/8809754173270952812" class="img-fluid mobile-image" >
        </div>

        <section class="mt-3 px-3 mb-5">
          <!-- Section title -->
          <div class="border-bottom border-1 mb-3 pb-1">
            <div class="d-flex align-items-center justify-content-between">
              <a href="/opinion" class="text-decoration-none">
                <h2 class="text-dark fs-3 position-relative ps-3">
                  মতামত
                  <span
                    class="position-absolute top-50 start-0 translate-middle-y "
                    style="width: 3px; height: 70%; background:#124b65;"></span>
                </h2>
              </a>
            </div>
          </div>

          <!-- Opinion item -->
          <a
            href="https://www.dhakapost.com/opinion/403059"
            class="d-flex gap-3 align-items-center text-decoration-none group">
            <div>
              <img
                src="https://assets.dhakapost.com/media/setup/author/md-ashraful-islam-20251019123852.jpg?width=100&height=100"
                alt="ইন্টারনেটে ব্যক্তিগত তথ্য সুরক্ষায় করণীয় কী?"
                class="rounded-circle img-fluid mobile-image"

                loading="lazy" />
            </div>
            <div>
              <h2 class="fs-5 text-dark mb-1 hover-text">
                ইন্টারনেটে ব্যক্তিগত তথ্য সুরক্ষায় করণীয় কী?
              </h2>
              <p class="text-muted mb-0">ড. মো. আশরাফুল ইসলাম</p>
            </div>
          </a>
        </section>
      </div>
    </aside>
  </div>

  <!-- 2nd section from trending row-->
<div class="row bottom-border">
        <!-- 4-item grid -->
         <div class="col-12 col-lg-9">
      <div class="row mobile-order-add-2">
        <!-- Single News Item -->
        <div class="col-12 col-md-4 right-border bottom-border">
          <article class="news-item">
            <div class="row g-2 align-items-center">
              <!-- Left Content -->
              <div class="col-6">
                <h6 class="heading-title2 mb-1">
                  রাতে হাসপাতালে যাবেন খালেদা জিয়া
                </h6>

              </div>

              <!-- Right Image -->
              <div class="col-6">
                <img
                  src="https://assets.dhakapost.com/media/imgAll/BG/2025October/khaleda-zia-20250219125000-20251015221602.jpg?width=330&height=186"
                  alt="রাতে হাসপাতালে যাবেন খালেদা জিয়া"
                  class="img-fluid mobile-image  news-thumb">
              </div>
            </div>
          </article>
        </div>

        <div class="col-12 col-md-4 right-border bottom-border">
          <article class="news-item">
            <div class="row g-2 align-items-center">
              <div class="col-6">
                <h6 class="news-title mb-1 heading-title2">
                  চার জেলায় নতুন ডিসি নিয়োগ
                </h6>

              </div>
              <div class="col-6">
                <img
                  src="https://assets.dhakapost.com/media/imgAll/BG/2025October/public-administration-ministry--20251015192408.jpg?width=330&height=186"
                  alt="চার জেলায় নতুন ডিসি নিয়োগ"
                  class="img-fluid mobile-image  news-thumb">
              </div>
            </div>
          </article>
        </div>
        <div class="col-12 col-md-4 bottom-border">
          <article class="news-item">
            <div class="row g-2 align-items-center">
              <div class="col-6">
                <h6 class="news-title mb-1 heading-title2">
                  চার জেলায় নতুন ডিসি নিয়োগ
                </h6>

              </div>
              <div class="col-6">
                <img
                  src="https://assets.dhakapost.com/media/imgAll/BG/2025October/public-administration-ministry--20251015192408.jpg?width=330&height=186"
                  alt="চার জেলায় নতুন ডিসি নিয়োগ"
                  class="img-fluid mobile-image  news-thumb">
              </div>
            </div>
          </article>
        </div>
        <div class="col-12 col-md-4 right-border">
          <article class="news-item">
            <div class="row g-2 align-items-center">
              <!-- Left Content -->
              <div class="col-6">
                <h6 class="heading-title2 mb-1">
                  রাতে হাসপাতালে যাবেন খালেদা জিয়া
                </h6>

              </div>

              <!-- Right Image -->
              <div class="col-6">
                <img
                  src="https://assets.dhakapost.com/media/imgAll/BG/2025October/khaleda-zia-20250219125000-20251015221602.jpg?width=330&height=186"
                  alt="রাতে হাসপাতালে যাবেন খালেদা জিয়া"
                  class="img-fluid mobile-image  news-thumb">
              </div>
            </div>
          </article>
        </div>

        <div class="col-12 col-md-4 right-border">
          <article class="news-item">
            <div class="row g-2 align-items-center">
              <div class="col-6">
                <h6 class="news-title mb-1 heading-title2">
                  চার জেলায় নতুন ডিসি নিয়োগ
                </h6>

              </div>
              <div class="col-6">
                <img
                  src="https://assets.dhakapost.com/media/imgAll/BG/2025October/public-administration-ministry--20251015192408.jpg?width=330&height=186"
                  alt="চার জেলায় নতুন ডিসি নিয়োগ"
                  class="img-fluid mobile-image  news-thumb">
              </div>
            </div>
          </article>
        </div>
        <div class="col-12 col-md-4 ">
          <article class="news-item">
            <div class="row g-2 align-items-center">
              <div class="col-6">
                <h6 class="news-title mb-1 heading-title2">
                  চার জেলায় নতুন ডিসি নিয়োগ
                </h6>

              </div>
              <div class="col-6">
                <img
                  src="https://assets.dhakapost.com/media/imgAll/BG/2025October/public-administration-ministry--20251015192408.jpg?width=330&height=186"
                  alt="চার জেলায় নতুন ডিসি নিয়োগ"
                  class="img-fluid mobile-image  news-thumb">
              </div>
            </div>
          </article>
        </div>
      </div>
      </div>
      <!-- End of 4-item grid -->

       <!-- Sidebar -->
    <aside class=" col-12 col-lg-3">
      <div class="sticky-top" style="top:100px;">
        <div class="mb-3 sidebar-card">
          <img src="https://tpc.googlesyndication.com/simgad/8809754173270952812" class="img-fluid mobile-image">
        </div>

        
      </div>
    </aside>
</div>




</section>
<!-- trending section  -->


<!-- jatio -->
<section class="national-section container-fluid ">

  <div class="row  ">
    <div class="col-lg-9  col-md-12  right-border ">
      <div class="section-title border-first  bottom-dark-border ">
        <h5 class="fw-bold m-0">জাতীয়</h5>
      </div>
      <!-- বাম পাশে মূল নিউজ -->
      <div class="row ">
        <div class="col-lg-7 col-md-12   right-border">


          <div class="main-news">
            <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/parliament-20240417165034-20251016182633.jpg?width=560&height=315"
              alt="মূল নিউজ" class="img-fluid mobile-image w-100 mb-3 ">

            <h4 class="fw-bold mb-2">
              সন্দেহ আর টাকার আশঙ্কার ভয়—স্ত্রীকে হত্যা করে ডিপ ফ্রিজে রাখলেন স্বামী
            </h4>
            <p class="text-muted">
              প্রায় দুই দশকের দাম্পত্য জীবনের করুণ পরিণতি—সন্দেহ এবং টাকার আশঙ্কার ভয় থেকেই ঘটেছে হত্যাকাণ্ড।
              স্ত্রীকে নির্মমভাবে হত্যা করে...
            </p>
          </div>
        </div>

        <!-- ডান পাশে তিনটা ছোট নিউজ -->
        <div class="col-lg-5 col-md-12">

          <!-- Single news item -->
          <div class="row border-bottom  mb-3">
            <div class="col-lg-6 col-12">
              <a href="https://www.dhakapost.com/national/402517" class="text-decoration-none text-dark">
                <h6 class="heading-title2 hover-link">
                  শিক্ষকদের ‘মার্চ টু যমুনা’ স্থগিত, আগামীকাল অনশনের কর্মসূচি ঘোষণা
                </h6>
              </a>
            </div>
            <div class="col-lg-6 col-12 ">
              <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/yunus-20251017173712.jpg?width=330&height=186"
                alt="news" class="img-fluid mobile-image ">
            </div>
          </div>


          <!-- 2nd row -->
          <div class="row border-bottom  mb-3">
            <div class="col-6">
              <a href="https://www.dhakapost.com/national/402517" class="text-decoration-none text-dark">
                <h6 class="heading-title2 hover-link">
                  শিক্ষকদের ‘মার্চ টু যমুনা’ স্থগিত, আগামীকাল অনশনের কর্মসূচি ঘোষণা
                </h6>
              </a>
            </div>
            <div class="col-6 ">
              <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/dhaka-post-20-20251016181451.jpg?width=330&height=186"
                alt="news" class="img-fluid mobile-image ">
            </div>
          </div>
          <!-- 3rd row -->
          <div class="row border-bottom  mb-3">
            <div class="col-6">
              <a href="https://www.dhakapost.com/national/402517" class="text-decoration-none text-dark">
                <h6 class="heading-title2 hover-link">
                  ফায়ার সার্ভিসচট্টগ্রাম ইপিজেডে আগুন লাগা ভবনটির অগ্নিনিরাপত্তা সনদই
                </h6>
              </a>
            </div>
            <div class="col-6 ">
              <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/ctg-fire-accident-20251017142156.jpg?width=330&height=186"
                alt="news" class="img-fluid mobile-image ">
            </div>
          </div>


        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-12">
      <ul class="nav nav-tabs" id="newsTabs" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active fw-bold tab-button" id="latest-tab" data-bs-toggle="tab" data-bs-target="#latest" type="button" role="tab">সর্বশেষ</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link fw-bold tab-button" id="popular-tab" data-bs-toggle="tab" data-bs-target="#popular" type="button" role="tab">জনপ্রিয়</button>
        </li>
      </ul>
      <div class=" p-3 ">


        <!-- Tab Content-->
        <div class="tab-content mt-3" id="newsTabsContent">

          <!-- সর্বশেষ নিউজ -->
          <div class="tab-pane fade show active" id="latest" role="tabpanel" aria-labelledby="latest-tab">
            <div class="news-list">
              <div class="d-flex mb-3 border-bottom pb-2">
                <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/mirpur-fire-20251015225815.jpg"
                  alt="" class="me-2 rounded" width="80" height="60">
                <p class="mb-0 small fw-semibold">
                  মিরপুরে অগ্নিকাণ্ডে ১৬ মৃত, এলেন ১৭ পরিবার
                </p>
              </div>

              <div class="d-flex mb-3 border-bottom pb-2">
                <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/gas-production-20251015224012.jpg"
                  alt="" class="me-2 rounded" width="80" height="60">
                <p class="mb-0 small fw-semibold">
                  চট্টগ্রাম সিটিতে বর্জ্য থেকে বায়োগ্যাস উৎপাদন শুরু
                </p>
              </div>

              <div class="d-flex mb-3">
                <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/student-protest-20251015225001.jpg"
                  alt="" class="me-2 rounded" width="80" height="60">
                <p class="mb-0 small fw-semibold">
                  ৩ ঘণ্টা পর শাহবাগ ছাড়লেন আন্দোলনরত শিক্ষার্থীরা
                </p>
              </div>
            </div>
          </div>

          <!-- জনপ্রিয় নিউজ -->
          <div class="tab-pane fade" id="popular" role="tabpanel" aria-labelledby="popular-tab">
            <div class="news-list">
              <div class="d-flex mb-3 border-bottom pb-2">
                <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/tangail-news-20251015230133.jpg"
                  alt="" class="me-2 rounded" width="80" height="60">
                <p class="mb-0 small fw-semibold">
                  টাঙ্গাইলে দুর্ঘটনায় দুই ভাই নিহত
                </p>
              </div>

              <div class="d-flex mb-3 border-bottom pb-2">
                <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/joypurhat-20251015230822.jpg"
                  alt="" class="me-2 rounded" width="80" height="60">
                <p class="mb-0 small fw-semibold">
                  জয়পুরহাটে ছাত্রদের মোমবাতি প্রজ্বলন
                </p>
              </div>

              <div class="d-flex mb-3">
                <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/gas-oil-price-20251015231055.jpg"
                  alt="" class="me-2 rounded" width="80" height="60">
                <p class="mb-0 small fw-semibold">
                  পাইপলাইনে পানি, ডিজেলের তেল গামলায়
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- end jatio -->

<!-- area news filter  -->
<section class="area-news-search container-fluid">
  <div class="section-title border-first bottom-dark-border  ps-2 mb-3">
    <h5 class="fw-bold m-0">এলাকার খবর</h5>
  </div>
  <div class="row g-2 mb-3 align-items-center">
    <div class="col-md-3 col-6">
      <select class="form-select">
        <option selected>বিভাগ</option>
        <option>ঢাকা</option>
        <option>চট্টগ্রাম</option>
      </select>
    </div>
    <div class="col-md-3 col-6">
      <select class="form-select">
        <option selected>জেলা</option>
        <option>রাজশাহী</option>
      </select>
    </div>
    <div class="col-md-3 col-6">
      <select class="form-select">
        <option selected>উপজেলা</option>
        <option>গোদাগাড়ি</option>
      </select>
    </div>
    <div class="col-md-3 col-6">
      <button class="btn btn-dark w-100">খুঁজুন</button>
    </div>
  </div>
</section>
<!--end area news filter  -->

<!-- sharadesh -->
<section class="sharadeshs-section container-fluid ">
  <!-- Section title -->
  <div class="bottom-dark-border border-first  mb-3">
    <h5 class="fw-bold">সারাদেশ</h5>
  </div>

  <!-- News content -->
  <div class="row g-4">
    <div class="col-lg-9 col-12">
      <div class="row bottom-border">
        <div class="col-lg-7 col-12">

          <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/asami-rangpur-20251016231029.jpg?width=560&height=315" class="card-img-top " alt="main news">


        </div>

        <div class="col-lg-5 col-12 px-0 right-border ">
          <p class="heading-title mb-2">
            হুইলচেয়ারে অভিনয় করে জামিন চাইলো আসামি, সিসিটিভিতে ধরা পড়লো প্রতারণা
          </p>
          <p class="text-muted small">
            হুইলচেয়ারে অভিনয় করে আদালতের সিসিটিভিতে ধরা পড়েছেন আসামি। পরবর্তীতে আদালত তার জামিন আবেদন খারিজ করে দেন...
          </p>

        </div>
      </div>
    </div>
    <div class="col-lg-3 col-12">
      <div class="mb-3 sidebar-card">
        <h5 class="mb-2">অ্যাড / স্পটলাইন</h5>
        <img src="https://tpc.googlesyndication.com/simgad/8809754173270952812" class="mobile-image">
      </div>
    </div>
    <!-- 4 Small news -->
    <div class="col-lg-12">
      <div class="row g-3">
        <div class="col-md-3 col-12 right-border">
          <div class=" border-0 h-100">
            <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/jossor01-20251016230415.jpg?width=330&height=186" class="card-img-top " alt="news">
            <div class=" px-0">
              <h6 class="heading-title2">যশোর বোর্ডের ২০ শিক্ষাপ্রতিষ্ঠানে পাস করেনি কেউ</h6>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-12 right-border">
          <div class=" border-0 h-100">
            <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/jossor01-20251016230415.jpg?width=330&height=186" class="card-img-top " alt="news">
            <div class="px-0">
              <h6 class="heading-title2">মির্জা ফখরুল: যদি আমাদে... জুলুম সহ্য হবে না</h6>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-12 right-border">
          <div class="card border-0 h-100">
            <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/jossor01-20251016230415.jpg?width=330&height=186" class="card-img-top " alt="news">
            <div class=" px-0">
              <h6 class="heading-title2">টাঙ্গাইলে পিকআপ-মাহিন্দ্রার সংঘর্ষে নিহত ২</h6>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-12 ">
          <div class=" border-0 h-100">
            <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/jossor01-20251016230415.jpg?width=330&height=186" class="card-img-top " alt="news">
            <div class=" px-0">
              <h6 class="heading-title2">খুলনার ৮টি স্কুলে ২০ জনও পাস করেনি</h6>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
</section>
<!-- end sharadesh -->

<!-- khela section  -->
<section class="sports-section container-fluid bottom-border">
  <div class="section-title border-first bottom-dark-border  ps-2 mb-3">
    <h5 class="fw-bold m-0">খেলা</h5>
  </div>
  <div class="row ">
    <div class="col-lg-4 right-border">
      <div class="main-news ">
        <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/sammyy-20251017194616.jpg?width=560&height=315"
          alt="মূল নিউজ" class="img-fluid mobile-image w-100 mb-3 ">

        <h4 class="heading-title mb-2">
          মিরপুরে এমন উইকেট আগে কখনো দেখিনি : স্যামি
        </h4>
        <p class="text-muted">
          সাদা বলের সিরিজ খেলতে বাংলাদেশে এসেছে ওয়েস্ট ইন্ডিজ দল। সিরিজের প্রথম ওয়ানডেতে কাল মুখোমুখি হবে দুই দল। তার আগে আজ...
        </p>
      </div>
    </div>
    <div class="col-lg-4 right-border">
      <!-- Single news item -->
      <div class="row bottom-border  mb-3">
        <div class="col-lg-6 col-12">
          <a href="https://www.dhakapost.com/national/402517" class="text-decoration-none text-dark">
            <h6 class="heading-title2 hover-link">
              তিন লাখ টাকার ঘড়িও বন্ধুদের সামনে পরতে পারি না : বরুণ
            </h6>
          </a>
        </div>
        <div class="col-lg-6 col-12 ">
          <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/varunn-20251017184116.jpg?width=330&height=186"
            alt="news" class="img-fluid mobile-image ">
        </div>
      </div>


      <!-- 2nd row -->
      <div class="row bottom-border   mb-3">
        <div class="col-6">
          <a href="https://www.dhakapost.com/national/402517" class="text-decoration-none text-dark">
            <h6 class="heading-title2 hover-link">
              ফিফা থেকে সুখবর পেলেন হামজা-জামালরা
            </h6>
          </a>
        </div>
        <div class="col-6 ">
          <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/hamzaa-20251017181835.jpg?width=330&height=186"
            alt="news" class="img-fluid mobile-image ">
        </div>
      </div>
      <!-- 3rd row -->
      <div class="row   mb-3">
        <div class="col-6">
          <a href="https://www.dhakapost.com/national/402517" class="text-decoration-none text-dark">
            <h6 class="heading-title2 hover-link">
              ফায়ার সার্ভিসচট্টগ্রাম ইপিজেডে আগুন লাগা ভবনটির অগ্নিনিরাপত্তা সনদই
            </h6>
          </a>
        </div>
        <div class="col-6 ">
          <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/mirpur-20251017170903.jpg?width=330&height=186"
            alt="news" class="img-fluid mobile-image ">
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="row bottom-border  mb-3">
        <div class="col-lg-6 col-12">
          <a href="https://www.dhakapost.com/national/402517" class="text-decoration-none text-dark">
            <h6 class="heading-title2 hover-link">
              তিন লাখ টাকার ঘড়িও বন্ধুদের সামনে পরতে পারি না : বরুণ
            </h6>
          </a>
        </div>
        <div class="col-lg-6 col-12 ">
          <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/varunn-20251017184116.jpg?width=330&height=186"
            alt="news" class="img-fluid mobile-image ">
        </div>
      </div>


      <!-- 2nd row -->
      <div class="row bottom-border   mb-3">
        <div class="col-6">
          <a href="https://www.dhakapost.com/national/402517" class="text-decoration-none text-dark">
            <h6 class="heading-title2 hover-link">
              ফিফা থেকে সুখবর পেলেন হামজা-জামালরা
            </h6>
          </a>
        </div>
        <div class="col-6 ">
          <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/hamzaa-20251017181835.jpg?width=330&height=186"
            alt="news" class="img-fluid mobile-image ">
        </div>
      </div>
      <!-- 3rd row -->
      <div class="row  mb-3">
        <div class="col-6">
          <a href="https://www.dhakapost.com/national/402517" class="text-decoration-none text-dark">
            <h6 class="heading-title2 hover-link">
              ফায়ার সার্ভিসচট্টগ্রাম ইপিজেডে আগুন লাগা ভবনটির অগ্নিনিরাপত্তা সনদই
            </h6>
          </a>
        </div>
        <div class="col-6 ">
          <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/mirpur-20251017170903.jpg?width=330&height=186"
            alt="news" class="img-fluid mobile-image ">
        </div>
      </div>
    </div>
  </div>
</section>
<!--end khela section  -->



<!-- International section -->
<section class="International-section container-fluid   ">
  <div class="section-title border-first  mb-3">
    <h5 class="fw-bold m-0">আন্তর্জাতিক</h5>
  </div>
  <div class="row bottom-border top-dark-border">
    <div class="col-lg-9  col-md-12 mb-4 right-border">

      <!-- বাম পাশে মূল নিউজ -->
      <div class="row ">
        <div class="col-lg-7 col-md-12 mb-4  right-border">


          <div class="main-news ">
            <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/cancer-20251018211733.jpg?width=560&height=315"
              alt="মূল নিউজ" class="img-fluid mobile-image w-100 mb-3 ">

            <h4 class="fw-bold mb-2">
              একবার রক্ত পরীক্ষায় শনাক্ত হতে পারে ৫০টিরও বেশি ধরনের ক্যানসার
            </h4>
            <p class="text-muted">
              ৫০টিরও বেশি ধরনের ক্যানসার শনাক্তে একটি রক্ত পরীক্ষা দ্রুত রোগ নির্ণয়ে সহায়তা করতে পারে। উত্তর আমেরিকায় পরিচালিত এক গবেষণায়...
            </p>
          </div>
        </div>

        <div class="col-lg-5 col-md-12">

          <!-- Single news item -->
          <div class="row border-bottom  mb-3">
            <div class="col-lg-8 col-12">
              <a href="https://www.dhakapost.com/national/402517" class="text-decoration-none text-dark">
                <h6 class="heading-title2 hover-link">
                  শিক্ষকদের ‘মার্চ টু যমুনা’ স্থগিত, আগামীকাল অনশনের কর্মসূচি ঘোষণা
                </h6>
              </a>
            </div>
            <div class="col-lg-4 col-12 ">
              <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/yunus-20251017173712.jpg?width=330&height=186"
                alt="news" class="img-fluid mobile-image ">
            </div>
          </div>


          <!-- 2nd row -->
          <div class="row border-bottom  mb-3">
            <div class="col-lg-8 col-12">
              <a href="https://www.dhakapost.com/national/402517" class="text-decoration-none text-dark">
                <h6 class="heading-title2 hover-link">
                  শিক্ষকদের ‘মার্চ টু যমুনা’ স্থগিত, আগামীকাল অনশনের কর্মসূচি ঘোষণা
                </h6>
              </a>
            </div>
            <div class="col-lg-4 col-12">
              <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/dhaka-post-20-20251016181451.jpg?width=330&height=186"
                alt="news" class="img-fluid mobile-image ">
            </div>
          </div>
          <!-- 3rd row -->
          <div class="row  mb-3">
            <div class="col-lg-8 col-12">
              <a href="https://www.dhakapost.com/national/402517" class="text-decoration-none text-dark">
                <h6 class="heading-title2 hover-link">
                  ফায়ার সার্ভিসচট্টগ্রাম ইপিজেডে আগুন লাগা ভবনটির অগ্নিনিরাপত্তা সনদই
                </h6>
              </a>
            </div>
            <div class="col-lg-4 col-12">
              <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/ctg-fire-accident-20251017142156.jpg?width=330&height=186"
                alt="news" class="img-fluid mobile-image ">
            </div>
          </div>


        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-12">
      <div class="mb-3 right-add">
        <img src="https://tpc.googlesyndication.com/simgad/8809754173270952812" class="mobile-image>
      </div>
      <div class="row   mb-3">
        <div class="col-lg-7 col-12">
          <a href="https://www.dhakapost.com/national/402517" class="text-decoration-none text-dark">
            <h6 class="heading-title2 hover-link">
              ফায়ার সার্ভিসচট্টগ্রাম ইপিজেডে আগুন লাগা ভবনটির অগ্নিনিরাপত্তা সনদই
            </h6>
          </a>
        </div>
        <div class="col-lg-5 col-12">
          <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/ctg-fire-accident-20251017142156.jpg?width=330&height=186"
            alt="news" class="img-fluid mobile-image ">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end International section -->

<!-- Entertainment section -->
<section class="entertainment-section container-fluid   ">
  <div class="section-title border-first  mb-3">
    <h5 class="fw-bold m-0">বিনোদন</h5>
  </div>
  <div class="row bottom-border top-dark-border">

    <div class="col-lg-4 col-12 mb-4  right-border">

      <!-- Single news item -->
      <div class="row border-bottom  mb-3">
        <div class="col-lg-6 col-12">
          <a href="https://www.dhakapost.com/national/402517" class="text-decoration-none text-dark">
            <h6 class="heading-title2 hover-link">
              শিক্ষকদের ‘মার্চ টু যমুনা’ স্থগিত, আগামীকাল অনশনের কর্মসূচি ঘোষণা
            </h6>
          </a>
        </div>
        <div class="col-lg-6 col-12 ">
          <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/shakib-khan-zahid-hasan-clash-contorversy-20251018115043.jpg?width=330&height=186"
            alt="news" class="img-fluid mobile-image ">
        </div>
      </div>
      <!-- 2nd row -->
      <div class="row border-bottom  mb-3">
        <div class="col-lg-6 col-12">
          <a href="https://www.dhakapost.com/national/402517" class="text-decoration-none text-dark">
            <h6 class="heading-title2 hover-link">
              শিক্ষকদের ‘মার্চ টু যমুনা’ স্থগিত, আগামীকাল অনশনের কর্মসূচি ঘোষণা
            </h6>
          </a>
        </div>
        <div class="col-lg-6 col-12">
          <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/ayub-bacchu-7th-death-anniversary-20251018104006.jpg?width=330&height=186"
            alt="news" class="img-fluid mobile-image ">
        </div>
      </div>
      <!-- 3rd row -->
      <div class="row  mb-3">
        <div class="col-lg-6 col-12">
          <a href="https://www.dhakapost.com/national/402517" class="text-decoration-none text-dark">
            <h6 class="heading-title2 hover-link">
              ফায়ার সার্ভিসচট্টগ্রাম ইপিজেডে আগুন লাগা ভবনটির অগ্নিনিরাপত্তা সনদই
            </h6>
          </a>
        </div>
        <div class="col-lg-6 col-12">
          <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/zaira-wasim-l-marriage-20251018142650.jpg?width=330&height=186"
            alt="news" class="img-fluid mobile-image ">
        </div>
      </div>



    </div>

    <div class="col-lg-4 col-12">
      <div class="main-news ">
        <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/dev-with-zubeen-garg-20251018222838.jpg?width=560&height=315"
          alt="মূল নিউজ" class="img-fluid mobile-image w-100 mb-3 ">

        <h4 class="fw-bold mb-2">
          একবার রক্ত পরীক্ষায় শনাক্ত হতে পারে ৫০টিরও বেশি ধরনের ক্যানসার
        </h4>
        <p class="text-muted">
          ৫০টিরও বেশি ধরনের ক্যানসার শনাক্তে একটি রক্ত পরীক্ষা দ্রুত রোগ নির্ণয়ে সহায়তা করতে পারে। উত্তর আমেরিকায় পরিচালিত এক গবেষণায়...
        </p>
      </div>


    </div>


    <div class="col-lg-4 col-12">
      <div class="row border-bottom  mb-3">
        <div class="col-lg-6 col-12">
          <a href="https://www.dhakapost.com/national/402517" class="text-decoration-none text-dark">
            <h6 class="heading-title2 hover-link">
              শিক্ষকদের ‘মার্চ টু যমুনা’ স্থগিত, আগামীকাল অনশনের কর্মসূচি ঘোষণা
            </h6>
          </a>
        </div>
        <div class="col-lg-6 col-12 ">
          <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/jms-with-nabila-20251018184905.jpg?width=330&height=186"
            alt="news" class="img-fluid mobile-image ">
        </div>
      </div>
      <!-- 2nd row -->
      <div class="row border-bottom  mb-3">
        <div class="col-lg-6 col-12">
          <a href="https://www.dhakapost.com/national/402517" class="text-decoration-none text-dark">
            <h6 class="heading-title2 hover-link">
              শিক্ষকদের ‘মার্চ টু যমুনা’ স্থগিত, আগামীকাল অনশনের কর্মসূচি ঘোষণা
            </h6>
          </a>
        </div>
        <div class="col-lg-6 col-12">
          <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/mahi-with-rakib-20251018173134.jpg?width=330&height=186"
            alt="news" class="img-fluid mobile-image ">
        </div>
      </div>
      <!-- 3rd row -->
      <div class="row  mb-3">
        <div class="col-lg-6 col-12">
          <a href="https://www.dhakapost.com/national/402517" class="text-decoration-none text-dark">
            <h6 class="heading-title2 hover-link">
              ফায়ার সার্ভিসচট্টগ্রাম ইপিজেডে আগুন লাগা ভবনটির অগ্নিনিরাপত্তা সনদই
            </h6>
          </a>
        </div>
        <div class="col-lg-6 col-12">
          <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/aahana-kumra-20251018164549.jpg?width=330&height=186"
            alt="news" class="img-fluid mobile-image ">
        </div>
      </div>

    </div>
  </div>
  </div>
</section>
<!-- end Entertainment section -->

<!-- Politics section  -->
<section class="Politics-section container-fluid my-3">

  <div class="row  ">
    <div class="col-lg-8  col-md-12  right-border ">
      <div class="section-title border-first  bottom-dark-border ">
        <h5 class="fw-bold m-0">রাজনীতি</h5>
      </div>
      <!-- বাম পাশে মূল নিউজ -->
      <div class="row border-bottom ">
        <div class="col-lg-6 col-md-12   right-border">


          <div class="main-news">
            <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/masud-20251018204018.jpg?width=560&height=315"
              alt="মূল নিউজ" class="img-fluid mobile-image w-100 mb-3 ">

            <h4 class="fw-bold mb-2">
              সন্দেহ আর টাকার আশঙ্কার ভয়—স্ত্রীকে হত্যা করে ডিপ ফ্রিজে রাখলেন স্বামী
            </h4>
            <p class="text-muted">
              প্রায় দুই দশকের দাম্পত্য জীবনের করুণ পরিণতি—সন্দেহ এবং টাকার আশঙ্কার ভয় থেকেই ঘটেছে হত্যাকাণ্ড।
              স্ত্রীকে নির্মমভাবে হত্যা করে...
            </p>
          </div>
        </div>

        <!-- ডান পাশে তিনটা ছোট নিউজ -->
        <div class="col-lg-6 col-md-12">

          <!-- Single news item -->
          <div class="row border-bottom  mb-3">
            <div class="col-lg-6 col-12">
              <a href="https://www.dhakapost.com/national/402517" class="text-decoration-none text-dark">
                <h6 class="heading-title2 hover-link">
                  শিক্ষকদের ‘মার্চ টু যমুনা’ স্থগিত, আগামীকাল অনশনের কর্মসূচি ঘোষণা
                </h6>
              </a>
            </div>
            <div class="col-lg-6 col-12 ">
              <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/selina-rahman-20251018183835.jpg?width=330&height=186"
                alt="news" class="img-fluid mobile-image ">
            </div>
          </div>
          <!-- 2nd row -->
          <div class="row border-bottom  mb-3">
            <div class="col-6">
              <a href="https://www.dhakapost.com/national/402517" class="text-decoration-none text-dark">
                <h6 class="heading-title2 hover-link">
                  শিক্ষকদের ‘মার্চ টু যমুনা’ স্থগিত, আগামীকাল অনশনের কর্মসূচি ঘোষণা
                </h6>
              </a>
            </div>
            <div class="col-6 ">
              <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/salahuddin-ahmod-20251018153116.jpg?width=330&height=186"
                alt="news" class="img-fluid mobile-image ">
            </div>
          </div>
          <!-- 3rd row -->
          <div class="row  mb-3">
            <div class="col-6">
              <a href="https://www.dhakapost.com/national/402517" class="text-decoration-none text-dark">
                <h6 class="heading-title2 hover-link">
                  ফায়ার সার্ভিসচট্টগ্রাম ইপিজেডে আগুন লাগা ভবনটির অগ্নিনিরাপত্তা সনদই
                </h6>
              </a>
            </div>
            <div class="col-6 ">
              <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/ncp-20251018135207.jpg?width=330&height=186"
                alt="news" class="img-fluid mobile-image ">
            </div>
          </div>


        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-12 border-bottom">
      <div class="section-title border-first  bottom-dark-border ">
        <h5 class="fw-bold m-0">স্বাস্থ্য</h5>
      </div>
      <!-- Single news item -->
      <div class="row border-bottom  mb-3">
        <div class="col-lg-6 col-12">
          <a href="https://www.dhakapost.com/national/402517" class="text-decoration-none text-dark">
            <h6 class="heading-title2 hover-link">
              শিক্ষকদের ‘মার্চ টু যমুনা’ স্থগিত, আগামীকাল অনশনের কর্মসূচি ঘোষণা
            </h6>
          </a>
        </div>
        <div class="col-lg-6 col-12 ">
          <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/bangladesh-medical-20251018183137.jpg?width=560&height=315"
            alt="news" class="img-fluid mobile-image ">
        </div>
      </div>
      <!-- 2nd row -->
      <div class="row border-bottom  mb-3">
        <div class="col-6">
          <a href="https://www.dhakapost.com/national/402517" class="text-decoration-none text-dark">
            <h6 class="heading-title2 hover-link">
              শিক্ষকদের ‘মার্চ টু যমুনা’ স্থগিত, আগামীকাল অনশনের কর্মসূচি ঘোষণা
            </h6>
          </a>
        </div>
        <div class="col-6 ">
          <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/dengue3-20251017224941.jpg?width=330&height=186"
            alt="news" class="img-fluid mobile-image ">
        </div>
      </div>
      <!-- 3rd row -->
      <div class="row  mb-3">
        <div class="col-6">
          <a href="https://www.dhakapost.com/national/402517" class="text-decoration-none text-dark">
            <h6 class="heading-title2 hover-link">
              ফায়ার সার্ভিসচট্টগ্রাম ইপিজেডে আগুন লাগা ভবনটির অগ্নিনিরাপত্তা সনদই
            </h6>
          </a>
        </div>
        <div class="col-6 ">
          <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/ctg-fire-accident-20251017142156.jpg?width=330&height=186"
            alt="news" class="img-fluid mobile-image ">
        </div>
      </div>

    </div>
  </div>
</section>
<!--End Politics section  -->

<!-- Exclusive section  -->
<section class="exclusive-section container-fluid">
  <div class="row g-3">
    <div class="section-title border-first  bottom-dark-border ">
      <h5 class="fw-bold m-0">এক্সক্লুসিভ</h5>
    </div>
    <div class="col-md-3 col-12 right-border">
      <div class=" border-0 h-100">
        <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/trapper-2-20251016082507.jpg?width=560&height=315" class="card-img-top " alt="news">
        <div class=" px-0">
          <h6 class="heading-title2 mt-3">যশোর বোর্ডের ২০ শিক্ষাপ্রতিষ্ঠানে পাস করেনি কেউ</h6>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-12 right-border">
      <div class=" border-0 h-100">
        <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/trapper-2-20251016082507.jpg?width=560&height=315" class="card-img-top " alt="news">
        <div class="px-0">
          <h6 class="heading-title2 mt-2">মির্জা ফখরুল: যদি আমাদে... জুলুম সহ্য হবে না</h6>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-12 right-border">
      <div class="card border-0 h-100">
        <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/01-dp-7-college-20251015124001.jpg?width=560&height=315" class="card-img-top " alt="news">
        <div class=" px-0">
          <h6 class="heading-title2 mt-2">টাঙ্গাইলে পিকআপ-মাহিন্দ্রার সংঘর্ষে নিহত ২</h6>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-12 ">
      <div class=" border-0 h-100">
        <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/01-dp-ncp-20251013200526.jpg?width=560&height=315" class="card-img-top " alt="news">
        <div class=" px-0">
          <h6 class="heading-title2 mt-2">খুলনার ৮টি স্কুলে ২০ জনও পাস করেনি</h6>
        </div>
      </div>
    </div>
  </div>

</section>
<!--End Exclusive section  -->


<!-- Economics section  -->
<section class="economic-section container-fluid my-3">

  <div class="row  ">
    <div class="col-lg-8  col-md-12 ">
      <div class="section-title border-first  bottom-dark-border ">
        <h5 class="fw-bold m-0">অর্থনীতি</h5>
      </div>
      <!-- বাম পাশে মূল নিউজ -->
      <div class="row border-bottom my-3">
        <div class="col-lg-6 col-12   right-border">
          <div class="main-news">
            <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/fire-accident-1-20251018225342.jpg?width=560&height=315"
              alt="মূল নিউজ" class="img-fluid mobile-image w-100 mb-3 ">

          </div>
        </div>

        <!-- ডান পাশে তিনটা ছোট নিউজ -->
        <div class="col-lg-6 col-md-12">

          <h4 class="fw-bold mb-2">
            সন্দেহ আর টাকার আশঙ্কার ভয়—স্ত্রীকে হত্যা করে ডিপ ফ্রিজে রাখলেন স্বামী
          </h4>
          <p class="text-muted">
            প্রায় দুই দশকের দাম্পত্য জীবনের করুণ পরিণতি—সন্দেহ এবং টাকার আশঙ্কার ভয় থেকেই ঘটেছে হত্যাকাণ্ড।
            স্ত্রীকে নির্মমভাবে হত্যা করে...
          </p>


        </div>
      </div>
      <div class="row card-news">
        <div class="col-md-4 col-12 right-border">
          <div class=" border-0 h-100">
            <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/jossor01-20251016230415.jpg?width=330&height=186" class="card-img-top " alt="news">
            <div class=" px-0">
              <h6 class="heading-title2 mt-3">যশোর বোর্ডের ২০ শিক্ষাপ্রতিষ্ঠানে পাস করেনি কেউ</h6>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-12 right-border">
          <div class=" border-0 h-100">
            <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/bangl-20251018024809.jpg?width=330&height=186" class="card-img-top " alt="news">
            <div class="px-0">
              <h6 class="heading-title2 mt-2">মির্জা ফখরুল: যদি আমাদে... জুলুম সহ্য হবে না</h6>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-12 ">
          <div class="card border-0 h-100">
            <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/nbr-building-20240202122814-20251017114952.jpg?width=330&height=186" class="card-img-top " alt="news">
            <div class=" px-0">
              <h6 class="heading-title2 mt-2">টাঙ্গাইলে পিকআপ-মাহিন্দ্রার সংঘর্ষে নিহত ২</h6>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-12 border-bottom">
      <div class="section-title border-first  bottom-dark-border ">
        <h5 class="fw-bold m-0">প্রবাস</h5>
      </div>
      <!-- Single news item -->
      <div class="row border-bottom  mb-3">
        <div class="col-lg-6 col-12">
          <a href="https://www.dhakapost.com/national/402517" class="text-decoration-none text-dark">
            <h6 class="heading-title2 hover-link">
              শিক্ষকদের ‘মার্চ টু যমুনা’ স্থগিত, আগামীকাল অনশনের কর্মসূচি ঘোষণা
            </h6>
          </a>
        </div>
        <div class="col-lg-6 col-12 ">
          <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/finland-20251017201733.jpg?width=560&height=315"
            alt="news" class="img-fluid mobile-image ">
        </div>
      </div>
      <!-- 2nd row -->
      <div class="row border-bottom  mb-3">
        <div class="col-6">
          <a href="https://assets.dhakapost.com/media/imgAll/BG/2025October/bangladeshi-death-20251015195524.jpg?width=330&height=186">
            শিক্ষকদের ‘মার্চ টু যমুনা’ স্থগিত, আগামীকাল অনশনের কর্মসূচি ঘোষণা
            </h6>
          </a>
        </div>
        <div class="col-6 ">
          <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/china-picnic-20251015105159.jpg?width=330&height=186"
            alt="news" class="img-fluid mobile-image ">
        </div>
      </div>
      <!-- 3rd row -->
      <div class="row  mb-3">
        <div class="col-6">
          <a href="https://www.dhakapost.com/national/402517" class="text-decoration-none text-dark">
            <h6 class="heading-title2 hover-link">
              ফায়ার সার্ভিসচট্টগ্রাম ইপিজেডে আগুন লাগা ভবনটির অগ্নিনিরাপত্তা সনদই
            </h6>
          </a>
        </div>
        <div class="col-6 ">
          <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/ctg-fire-accident-20251017142156.jpg?width=330&height=186"
            alt="news" class="img-fluid mobile-image ">
        </div>
      </div>

    </div>
  </div>
</section>
<!--End Economics section  -->

</div>
@endsection

@push('scripts')
<script>
  $('.ok-btn').click(function() {
    $('.footer-bottom').hide();
  });
  </script>
@endpush