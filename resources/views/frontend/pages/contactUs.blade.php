@extends('frontend.layouts.app')

@section('title', $page->name)
@section('body_class', 'contact-us')

@section('content')
<div class="container-fluid section-details border-top mt-80 ">
    <div class="container mt-2">
        <h2 class="mb-4 text-center"><span class="page-title">{{ $page->name }}</span></h2>

        <div class="row mb-5">
            <!-- Phone -->
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="contact-card text-center p-3 border rounded shadow-sm">
                    <div class="icon mb-2">
                        <i class="fas fa-phone fa-2x text-primary"></i>
                    </div>
                    <h6>ফোন</h6>
                    <a href="tel:+88{{ get_option('site_phone') }}"  class="detailsLink">
                        <p>{{ get_option('site_phone') }}</p>
                    </a>
                </div>
            </div>

            <!-- WhatsApp -->
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="contact-card text-center p-3 border rounded shadow-sm">
                    <div class="icon mb-2">
                        <i class="fab fa-whatsapp fa-2x text-success"></i>
                    </div>
                    <h6>হোয়াটসঅ্যাপ</h6>
                    <a href="https://wa.me/+88{{ get_option('site_whatsapp') }}" class="detailsLink"><p>{{ get_option('site_whatsapp') }}</p></a>
                </div>
            </div>

            <!-- Mobile -->
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="contact-card text-center p-3 border rounded shadow-sm">
                    <div class="icon mb-2">
                        <i class="fas fa-mobile-alt fa-2x text-primary"></i>
                    </div>
                    <h6>মোবাইল</h6>
                    <a href="tel:+88{{ get_option('site_another_phone') }}" class="detailsLink">
                        <p>{{ get_option('site_another_phone') }}</p>
                    </a>
                </div>
            </div>

            <!-- Email -->
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="contact-card text-center p-3 border rounded shadow-sm">
                    <div class="icon mb-2">
                        <i class="fas fa-envelope fa-2x text-danger"></i>
                    </div>
                    <h6>ই-মেইল</h6>
                    <a href="mailto:{{ get_option('site_email') }}" class="detailsLink">
                        <p>{{ get_option('site_email') }}</p>
                    </a>
                </div>
            </div>

            <!-- Address -->
            <div class="col-12">
                <div class="contact-card text-center p-3 border rounded shadow-sm mt-3">
                    <div class="icon mb-2">
                        <i class="fas fa-map-marker-alt fa-2x text-danger"></i>
                    </div>
                    <h6>ঠিকানা</h6>
                    <p>{{ get_option('site_address') }}</p>
                </div>
            </div>
        </div>

        <p class="text-center mb-4">বিজ্ঞাপনের জন্য ইমেইল করুন: <strong>{{ get_option('site_email') }}</strong></p>

        <!-- Google Map -->
        <div class="map-responsive mb-5">
            {!! get_option('site_map') !!}
        </div>
    </div>
</div>
@endsection

@push('css')
<style>
    .contact-card .icon i {
        transition: transform 0.3s;
    }
    .contact-card:hover .icon i {
        transform: scale(1.2);
    }
    .map-responsive {
        overflow: hidden;
        padding-bottom: 56.25%;
        position: relative;
        height: 0;
    }
    .map-responsive iframe {
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        position: absolute;
        border-radius: 10px;
    }
    .page-title {
        display: inline-block;
        padding-bottom: 5px;
        border-bottom: 3px solid #124b65;
        font-weight: 600;
        color: #333;
    }

</style>
@endpush