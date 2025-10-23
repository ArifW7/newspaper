@extends('frontend.layouts.app')

@section('title', 'News Details')
@section('body_class', 'details-page')

@section('content')
<div class="container-fluid section-details border-top mt-80">
    <!-- Category -->
    <p class="title-blue fw-semibold mt-4">রাজনীতি</p>
    <div class="related-tag d-flex gap-3 bottom-dark-border">
        <ul class="nav nav-tabs related-tag mb-3" id="partyTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link " id="bnp-tab" data-bs-toggle="tab" data-bs-target="#bnp" type="button" role="tab">বিএনপি</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="jamaat-tab" data-bs-toggle="tab" data-bs-target="#jamaat" type="button" role="tab">জামায়াত</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="awami-tab" data-bs-toggle="tab" data-bs-target="#awami" type="button" role="tab">আওয়ামী লীগ</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="japa-tab" data-bs-toggle="tab" data-bs-target="#japa" type="button" role="tab">জাতীয় পার্টি</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="jnapa-tab" data-bs-toggle="tab" data-bs-target="#jnapa" type="button" role="tab">জাতীয় নাগরিক পার্টি</button>
            </li>
        </ul>
    </div>

    <!-- Title and share -->
    <div class="row ">
        <div class="col-md-9 col-12 right-border">

        </div>


        <!--End popular and latest news section  -->


        <div class="col-md-3 col-12 ">
            <div class="sidebar-add ">
                <img src="https://tpc.googlesyndication.com/simgad/11373802009826816949" class="img-fluid mobile-image">
            </div>


        </div>


    </div>

    @endsection