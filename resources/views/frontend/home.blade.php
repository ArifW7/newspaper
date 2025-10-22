@extends('frontend.layouts.app')
@push('css')
<link href="{{ asset('frontend/css/home.css') }}" rel="stylesheet">
<style>
  .swiper-wrapper{
      height: auto;
  }
  </style>
@endpush    

@section('title', 'Home - News Portal')
@section('body_class', 'home-page')

@section('content')
<!-- Trending pills -->
<section class="trending">
    <div class="container">
        <div class="mb-3 d-flex align-items-center flex-wrap gap-2 d-none d-lg-block">
            <div class="trending-pill me-2">ট্রেন্ডিং</div>
            <a class="topic-pill" href="#">জনপ্রিয়</a>
            <a class="topic-pill" href="#">ড. মুহাম্মদ ইউনূস</a>
            <a class="topic-pill" href="#">এশিয়া কাপ ২০২৫</a>
            <a class="topic-pill" href="#">ডেঙ্গু</a>
            <a class="topic-pill" href="#">নামাজের সময়সূচি</a>
        </div>
    </div>
</section>
{{-- tranding pills --}}

<!-- Mobile Nav (Swiper) -->
<div class="d-block d-lg-none my-2">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide trending-pill"><a class=" px-3" href="#">সর্বশেষ</a></div>
            <div class="swiper-slide  "><a class="topic-pill px-3" href="#">জাতীয়</a></div>
            <div class="swiper-slide "><a class="topic-pill px-3" href="#">রাজনীতি</a></div>
            <div class="swiper-slide "><a class="topic-pill px-3" href="#">অর্থনীতি</a></div>
            <div class="swiper-slide"><a class="topic-pill px-3" href="#">আন্তর্জাতিক</a></div>
            <div class="swiper-slide "><a class="topic-pill px-3" href="#">খেলা</a></div>
        </div>
    </div>
</div>

<!-- trending section  -->
@include('frontend.sections.trending', ['section' => $homeDatas->firstWhere('section_type', 1)])
<!-- trending section  -->


<!-- jatio -->
@include('frontend.sections.jatio', ['section' => $homeDatas->firstWhere('section_type', 2)])
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
@include('frontend.sections.saradesh', ['section' => $homeDatas->firstWhere('section_type', 3)])
<!-- end sharadesh -->

<!-- khela section  -->
@include('frontend.sections.khela', ['section' => $homeDatas->firstWhere('section_type', 4)])
<!--end khela section  -->



<!-- International section -->
@include('frontend.sections.international', ['section' => $homeDatas->firstWhere('section_type', 5)])
<!-- end International section -->

<!-- Entertainment section -->
@include('frontend.sections.entertainment', ['section' => $homeDatas->firstWhere('section_type', 6)])
<!-- end Entertainment section -->

<!-- Politics section  -->
<section class="Politics-section container-fluid my-3">
    <div class="row">
        @include('frontend.sections.rajniti', ['section' => $homeDatas->firstWhere('section_type', 7)])
        @include('frontend.sections.health', ['section' => $homeDatas->firstWhere('section_type', 8)])
    </div>
</section>
<!--End Politics section  -->

<!-- Exclusive section  -->
@include('frontend.sections.exclusive', ['section' => $homeDatas->firstWhere('section_type', 9)])
<!--End Exclusive section  -->

<!-- Economics section  -->
<section class="economic-section container-fluid my-3">
    <div class="row">
      @include('frontend.sections.economic', ['section' => $homeDatas->firstWhere('section_type', 10)])
      @include('frontend.sections.probas', ['section' => $homeDatas->firstWhere('section_type', 11)])
  </div>
@endsection
<!--End Economics section  -->
</section>
@push('scripts')
<script>
  $('.ok-btn').click(function() {
    $('.footer-bottom').hide();
  });
  </script>
@endpush