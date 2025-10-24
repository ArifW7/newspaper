
@extends('frontend.layouts.app')

@section('title', 'Top Tag Details')
@section('body_class', 'topic-details-page')

@section('content')
<div class="container-fluid section-details border-top mt-80 ">
    <!-- Category -->
    <div class="mx-80 mobile-margin">

        <p class="title-blue mt-4">{{ $subcategory->name }} - {{ \Carbon\Carbon::now()->format('F d, Y') }}</p>
        <div class="share-icons d-flex align-items-center gap-2 mt-2 mt-md-0">
        <span class="share-count">25 Views</span>

        <a href="#" class="share-box">
            <img class="share-icon" src="{{ asset('images/20837.png') }}" alt="Facebook">
        </a>
        <a href="#" class="share-box">
            <img class="share-icon" src="{{ asset('images/1384023.png') }}" alt="Twitter">
        </a>
        <a href="#" class="share-box">
            <img class="share-icon" src="{{ asset('images/2958783.png') }}" alt="LinkedIn">
        </a>
        <a href="#" class="share-box">
            <img class="share-icon" src="{{ asset('images/126498.png') }}" alt="Email">
        </a>
    </div>

        {{-- <div class="topic-heading bottom-border  my-3">
            <p>রাজধানী ঢাকার সর্বশেষ খবর, ছবি, ভিডিও প্রতিবেদন।</p>
        </div>
        <div class="d-flex flex-wrap border-bottom pb-2 mb-3  bottom-border">
            <a href="{{route('topic.details')}}" class="btn  rounded-pill me-2 mb-2 topic-link">আগামীকালের আবহাওয়া</a>
            <a href="{{route('topic.details')}}" class="btn  rounded-pill me-2 mb-2 topic-link">নামাজের সময়সূচি</a>
            <a href="{{route('topic.details')}}" class="btn  rounded-pill me-2 mb-2 topic-link">চাকরির খবর</a>
        </div> --}}


        <!-- Title and share -->
        <div class="row ">
            <div class="col-md-9 left-side col-12 right-border">
                @foreach($subcategory->news as $item)
                <div class="row bottom-border">
                    <div class="col-md-8 col-6">
                        <div class="">
                            <a href="{{ route('newsDetails', $item->slug) }}" class="detailsLink">
                                <p class="news-normal-title">{{ $item->title }}</p>
                            </a>
                            <p class="text-muted">
                                {{ banglaDate($item->published_at ?? $item->created_at) }}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="topic-img">
                            <img src="{{ asset(getMedia($item->id, 1, 1)) }}" alt="{{ $item->title }}" class="img-fluid">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- add sidebar -->
            <div class="col-md-3 col-12 more-content sticky">
                <div class="sidebar-add ">
                    <img src="https://tpc.googlesyndication.com/simgad/11373802009826816949" class="img-fluid mobile-image">
                </div>

                <div class="">
                    <div class="latest top-border bottom-border">
                        <p class="title-blue">সর্বশেষ</p>
                        <div class="row bottom-border">
                            <div class="col-md-7 col-6">
                                <p>বঙ্গোপসাগরে লঘুচাপ, খুলনা-চট্টগ্রাম অঞ্চলে বৃষ্টির আভাস</p>
                            </div>
                            <div class="col-md-5 col-6">
                                <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/rain-20251024193227.jpg?width=160&height=90" alt="">
                            </div>
                        </div>
                        <div class="row bottom-border">
                            <div class="col-md-7 col-6">
                                <p>বঙ্গোপসাগরে লঘুচাপ, খুলনা-চট্টগ্রাম অঞ্চলে বৃষ্টির আভাস</p>
                            </div>
                            <div class="col-md-5 col-6">
                                <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/rain-20251024193227.jpg?width=160&height=90" alt="">
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-7 col-6">
                                <p>বঙ্গোপসাগরে লঘুচাপ, খুলনা-চট্টগ্রাম অঞ্চলে বৃষ্টির আভাস</p>
                            </div>
                            <div class="col-md-5 col-6">
                                <img src="https://assets.dhakapost.com/media/imgAll/BG/2025October/rain-20251024193227.jpg?width=160&height=90" alt="">
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>


    </div>
</div>
@endsection

