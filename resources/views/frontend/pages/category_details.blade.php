@extends('frontend.layouts.app')

@section('title', 'News Details')
@section('body_class', 'details-page')

@section('content')
<div class="container-fluid section-details border-top mt-80">
    <!-- Category -->
    <p class="title-blue fw-semibold mt-4">রাজনীতি</p>
    <div class="related-tag d-flex gap-3 bottom-dark-border">
        <ul class="nav nav-tabs related-tag border-0" id="partyTabs" role="tablist">
            <li class="nav-item right-border" role="presentation">
                <a href="{{route('topic.details')}}" class="nav-link " id="bnp-tab"  >বিএনপি</a>
            </li>
            <li class="nav-item right-border" role="presentation">
                <a href="{{route('topic.details')}}" class="nav-link" id="jamaat-tab"  >জামায়াত</a>
            </li>
            <li class="nav-item right-border" role="presentation">
                <a href="{{route('topic.details')}}" class="nav-link" id="awami-tab" >আওয়ামী লীগ</a>
            </li>
            <li class="nav-item right-border" role="presentation">
                <a href="{{route('topic.details')}}" class="nav-link" id="japa-tab" >জাতীয় পার্টি</a>
            </li>
            <li class="nav-item " role="presentation">
                <a href="{{route('topic.details')}}" class="nav-link" id="jnapa-tab"  >জাতীয় নাগরিক পার্টি</a>
            </li>
        </ul>
    </div>

    <!-- first news and add -->
    <div class="row bottom-border">
        <div class="col-md-9 col-12 right-border">
            <div class="row">
                <div class="col-md-6 col-12">
                    <h4 class="news-normal-title">শুধু আ. লীগ অফিসের সেটআপটা নষ্ট করেছি, দখল করিনি : এনসিপি নেতা</h4>
                    <p>চট্টগ্রামে উত্তর জেলা আওয়ামী লীগের কার্যালয় ভাঙচুর ও দখলের বিষয়টি অস্বীকার করে জাতীয় নাগরিক পার্টির (এনসিপি) নগর যুগ্ম সমন্বয়কারী আরিফ...</p>
                </div>
                <div class="col-md-6 col-12">
                    <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/poppp-20251022215916.jpg?width=560&height=315" class="img-fluid">
                </div>
            </div>
        </div>


        <!--End popular and latest news section  -->


        <div class="col-md-3 col-12 ">
            <div class="sidebar-add ">
                <img src="https://tpc.googlesyndication.com/simgad/11373802009826816949" class="img-fluid mobile-image">
            </div>


        </div>


    </div>
    <!--end first news and add -->
    <!-- Second news and add -->

    <div class="row bottom-border">
        <div class="col-md-9 col-12 right-border">
            <!-- first row -->
            <div class="row bottom-border">
                <div class="col-md-6 col-12 right-border">
                    <div class="row">
                        <div class="col-md-7 col-7">
                            <p class="fw-normal news-normal-title">
                                আইআরআই প্রতিনিধি দলের সঙ্গে ইসলামী আন্দোলন বাংলাদেশের বৈঠক
                            </p>
                        </div>
                        <div class="col-md-5 col-5">
                            <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/islami-andolon-20251022214839.jpg?width=330&height=186" class="img-fluid">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="row">
                        <div class="col-md-7 col-7">
                            <p class="fw-normal news-normal-title">
                                আইআরআই প্রতিনিধি দলের সঙ্গে ইসলামী আন্দোলন বাংলাদেশের বৈঠক
                            </p>
                        </div>
                        <div class="col-md-5 col-5">
                            <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/islami-andolon-20251022214839.jpg?width=330&height=186" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

            <!-- second row -->
            <div class="row bottom-border">
                <div class="col-md-6 col-12 right-border">
                    <div class="row">
                        <div class="col-md-7 col-7">
                            <p class="fw-normal news-normal-title">
                                আইআরআই প্রতিনিধি দলের সঙ্গে ইসলামী আন্দোলন বাংলাদেশের বৈঠক
                            </p>
                        </div>
                        <div class="col-md-5 col-5">
                            <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/islami-andolon-20251022214839.jpg?width=330&height=186" class="img-fluid">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="row">
                        <div class="col-md-7 col-7">
                            <p class="fw-normal news-normal-title">
                                আইআরআই প্রতিনিধি দলের সঙ্গে ইসলামী আন্দোলন বাংলাদেশের বৈঠক
                            </p>
                        </div>
                        <div class="col-md-5 col-5">
                            <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/islami-andolon-20251022214839.jpg?width=330&height=186" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

            <!-- third row -->
            <div class="row">
                <div class="col-md-6 col-12 right-border">
                    <div class="row">
                        <div class="col-md-7 col-7">
                            <p class="fw-normal news-normal-title">
                                আইআরআই প্রতিনিধি দলের সঙ্গে ইসলামী আন্দোলন বাংলাদেশের বৈঠক
                            </p>
                        </div>
                        <div class="col-md-5 col-5">
                            <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/islami-andolon-20251022214839.jpg?width=330&height=186" class="img-fluid">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="row">
                        <div class="col-md-7 col-7">
                            <p class="fw-normal news-normal-title">
                                আইআরআই প্রতিনিধি দলের সঙ্গে ইসলামী আন্দোলন বাংলাদেশের বৈঠক
                            </p>
                        </div>
                        <div class="col-md-5 col-5">
                            <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/islami-andolon-20251022214839.jpg?width=330&height=186" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!--End popular and latest news section  -->


        <div class="col-md-3 col-12 ">
            <div class="border-top border-2 border-bottom mb-3 pb-2">
                <h4 class="fw-bold text-dark py-2">সর্বশেষ</h4>
            </div>
            <!-- News List -->
            <div class="row bottom-border">
                <div class="col-md-7 col-7">
                    <p class="fw-semibold ">
                        আদালতের হাজিরায় মামার বদলে ভাগনে, ধরা পড়ে কারাগারে </p>
                </div>
                <div class="col-md-5 col-4">
                    <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/01-dp-political-party-20251022224521.jpg?width=160&height=90" alt="এনসিপি’র প্রতি ইসির ‘বিশেষ অনুগ্রহ’, অন্য দল উপেক্ষিত!" class="me-3" width="124" height="85" loading="lazy">

                </div>

            </div>
            <div class="row bottom-border">
                <div class="col-md-7 col-7">
                    <p class="fw-semibold ">
                        আদালতের হাজিরায় মামার বদলে ভাগনে, ধরা পড়ে কারাগারে
                    </p>
                </div>
                <div class="col-md-5 col-5">
                    <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/01-dp-political-party-20251022224521.jpg?width=160&height=90" alt="এনসিপি’র প্রতি ইসির ‘বিশেষ অনুগ্রহ’, অন্য দল উপেক্ষিত!" class="me-3" width="124" height="85" loading="lazy">

                </div>

            </div>
            <div class="row">
                <div class="col-md-7 col-7">
                    <p class="fw-semibold ">
                        আদালতের হাজিরায় মামার বদলে ভাগনে, ধরা পড়ে কারাগারে
                    </p>
                </div>
                <div class="col-md-5 col-5">
                    <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/01-dp-political-party-20251022224521.jpg?width=160&height=90" alt="এনসিপি’র প্রতি ইসির ‘বিশেষ অনুগ্রহ’, অন্য দল উপেক্ষিত!" class="me-3" width="124" height="85" loading="lazy">

                </div>

            </div>


        </div>


    </div>
    <!--end Second news and add -->

    @endsection