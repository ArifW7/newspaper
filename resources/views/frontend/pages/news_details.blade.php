@extends('frontend.layouts.app')

@section('title', 'News Details')
@section('body_class', 'details-page')

@push('css')
    <style>
        .detailsLink {
            text-decoration: none;
            color: #131d24;
        }
        .detailsLink:hover {
            text-decoration: underline;
            color: #124b65;
        }
    </style>
@endpush

@section('content')
<div class="container-fluid section-details border-top mt-80">
    <!-- Category -->
    @if(!empty($news->category))
        <p class="bottom-border-content mt-4">{{ $news->category->name }}</p>
    @endif

    <!-- Title and share -->
    <div class="row">
        <div class="col-md-9 col-12 right-border">
            <h2 class="news-title bottom-border-content">{{ $news->title }}</h2>
            <div class="d-flex justify-content-between mt-2 flex-wrap">
                <!-- Left side -->
                <div class="news-meta d-flex align-items-center gap-1">
                    <span class="author">জ্যেষ্ঠ প্রতিবেদক</span>
                    <span class="dot">•</span>
                    <span class="date">২১ অক্টোবর ২০২৫, ২০:২৯</span>
                </div>

                <!-- Right side -->
                <div class="share-icons d-flex gap-2 mt-2 mt-md-0">
                    <span class="share-count">25 Views</span>
                    <a href="#" class="icon"><img class="share-icon" src="{{ asset('images/20837.png') }}"></a>
                    <a href="#" class="icon"><img class="share-icon" src="{{ asset('images/1384023.png') }}"></a>
                    <a href="#" class="icon"><img class="share-icon" src="{{ asset('images/2958783.png') }}"></a>
                    <a href="#" class="icon"><img class="share-icon" src="{{ asset('images/126498.png') }}"></a>
                </div>
            </div>

            <!-- Image -->
            <div class="news-image mt-3">
                <img src="{{ asset(getMedia($news->id, 1, 1)) }}" class="img-fluid w-100" alt="news image">
            </div>

            <div class="news-details mt-3">
                {!! $news->description !!}
            </div>

            <!-- Follow Section -->
            <div class="d-flex justify-content-center py-4">
                <div class="d-flex align-items-center justify-content-center gap-2 px-4 py-2 rounded-4 follow-box border">
                    <p class="mb-0 fw-semibold text-dark">ফলো করুন</p>
                    <div class="d-flex align-items-center gap-3 ps-3">
                        <!-- Messenger -->
                        <a href="https://www.messenger.com/channel/DPostOnline" target="_blank" rel="nofollow noopener" class="d-inline-flex align-items-center justify-content-center p-1 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="28" height="28" fill="#168AFF">
                                <title>Messenger</title>
                                <path d="M256.55 8C116.52 8 8 110.34 8 248.57c0 72.3 29.71 134.78 78.07 177.94 8.35 7.51 6.63 11.86 8.05 58.23A19.92 19.92 0 0 0 122 502.31c52.91-23.3 53.59-25.14 62.56-22.7C337.85 521.8 504 423.7 504 248.57 504 110.34 396.59 8 256.55 8zm149.24 185.13l-73 115.57a37.37 37.37 0 0 1-53.91 9.93l-58.08-43.47a15 15 0 0 0-18 0l-78.37 59.44c-10.46 7.93-24.16-4.6-17.11-15.67l73-115.57a37.36 37.36 0 0 1 53.91-9.93l58.06 43.46a15 15 0 0 0 18 0l78.41-59.38c10.44-7.98 24.14 4.54 17.09 15.62z"/>
                            </svg>
                        </a>

                        <!-- WhatsApp -->
                        <a href="https://whatsapp.com/channel/0029VaN81AfBvvscJ9n2xD2Y" target="_blank" rel="nofollow noopener" class="d-inline-flex align-items-center justify-content-center p-1 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="28" height="28" fill="#128c7e">
                                <title>WhatsApp</title>
                                <path fill-rule="evenodd" d="M414.73 97.1A222.14 222.14 0 0 0 256.94 32C134 32 33.92 131.58 33.87 254a220.61 220.61 0 0 0 29.78 111L32 480l118.25-30.87a223.63 223.63 0 0 0 106.6 27h.09c122.93 0 223-99.59 223.06-222A220.18 220.18 0 0 0 414.73 97.1zM256.94 438.66h-.08a185.75 185.75 0 0 1-94.36-25.72l-6.77-4-70.17 18.32 18.73-68.09-4.41-7A183.46 183.46 0 0 1 71.53 254c0-101.73 83.21-184.5 185.48-184.5a185 185 0 0 1 185.33 184.64c-.04 101.74-83.21 184.52-185.4 184.52zm101.69-138.19c-5.57-2.78-33-16.2-38.08-18.05s-8.83-2.78-12.54 2.78-14.4 18-17.65 21.75-6.5 4.16-12.07 1.38-23.54-8.63-44.83-27.53c-16.57-14.71-27.75-32.87-31-38.42s-.35-8.56 2.44-11.32c2.51-2.49 5.57-6.48 8.36-9.72s3.72-5.56 5.57-9.26.93-6.94-.46-9.71-12.54-30.08-17.18-41.19c-4.53-10.82-9.12-9.35-12.54-9.52-3.25-.16-7-.2-10.69-.2a20.53 20.53 0 0 0-14.86 6.94c-5.11 5.56-19.51 19-19.51 46.28s20 53.68 22.76 57.38 39.3 59.73 95.21 83.76a323.11 323.11 0 0 0 31.78 11.68c13.35 4.22 25.5 3.63 35.1 2.2 10.71-1.59 33-13.42 37.63-26.38s4.64-24.06 3.25-26.37-5.11-3.71-10.69-6.48z"/>
                            </svg>
                        </a>

                        <!-- Google News -->
                        <a href="https://news.google.com/publications/CAAqBwgKMKLnogsw5fG6Aw?hl=bn&amp;gl=BD&amp;ceid=BD%3Abn" target="_blank" rel="nofollow noopener" class="d-inline-flex align-items-center justify-content-center p-1 rounded">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/0/0b/Google_News_icon.png" width="28" height="28" alt="Google News">
                        </a>
                    </div>
                </div>
            </div>


            <!-- জনপ্রিয় Section -->
            <div class="my-5 top-border bottom-border">
                <p class="h4 fw-semibold title-blue mb-0 pt-3">জনপ্রিয়</p>
            </div>

            <!-- জনপ্রিয় নিউজ -->
            <div class="row g-4">
                @foreach ($mostViews as $i => $item)
                    <div class="col-md-4 right-border">
                        <a href="{{ route('newsDetails', $item->slug) }}" class="detailsLink">
                            <div class="position-relative mb-2 overflow-hidden">
                                <img src="{{ asset(getMedia($item->id, 1, 1)) }}" class="img-fluid transition" alt="{{ $item->slug }}">
                                <div class="news-priority position-absolute top-0 end-0 text-white fw-bold rounded-circle d-flex align-items-center justify-content-center">{{ $i + 1 }}</div>
                            </div>
                            <h6 class="news-normal-title hover-text-primary">{{ $item->title }}</h6>
                        </a>
                    </div>
                @endforeach
            </div>

            <!-- সর্বশেষ Section -->
            <div class="top-border bottom-border my-5">
                <p class="h4 fw-semibold title-blue mb-0 pt-3">সর্বশেষ</p>
            </div>

            <!-- সর্বশেষ নিউজ -->
            <div class="row g-4">
                @foreach ($latestNews as $i => $item)
                    <div class="col-md-4 right-border">
                        <a href="{{ route('newsDetails', $item->slug) }}" class="detailsLink">
                            <div class="mb-2 overflow-hidden">
                                <img src="{{ asset(getMedia($item->id, 1, 1)) }}" class="img-fluid" alt="{{ $item->slug }}">
                            </div>
                            <h6 class="news-normal-title hover-text-primary">{{ $item->title }}</h6>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="col-md-3 col-12">
            @foreach($relatedNews as $i=>$data)
            @if($i == 0)
            <div class="sidebar-add">
                <img src="{{ asset(getMedia($data->id, 1, 1)) }}" class="img-fluid mobile-image">
            </div>
            @endif
            @if($i != 0)
            <div class="more-content sticky">
                <div class="more-read top-border bottom-border">
                    <p>{{ $data->title }}</p>
                    <div class="sidebar-add">
                        <img src="{{ asset(getMedia($data->id, 1, 1)) }}" class="img-fluid mobile-image">
                        <p class="top-border">{{ $data->title }}</p>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
$(document).ready(function() {
    var $sidebar = $('.more-content');
    var $main = $('.col-md-9');

    var sidebarTop = $sidebar.offset().top;
    var mainTop = $main.offset().top;
    var mainHeight = $main.outerHeight();
    var sidebarHeight = $sidebar.outerHeight();
    var offset = 20;

    $(window).on('scroll', function() {
        var scrollTop = $(window).scrollTop();

        if (scrollTop + offset > sidebarTop) {
            if (scrollTop + sidebarHeight + offset > mainTop + mainHeight) {
                $sidebar.css({
                    position: 'absolute',
                    top: mainHeight - sidebarHeight + 'px'
                });
            } else {
                $sidebar.css({
                    position: 'fixed',
                    top: offset + 'px'
                });
            }
        } else {
            $sidebar.css({
                position: 'relative',
                top: '0'
            });
        }
    });

    $(window).on('resize', function() {
        mainHeight = $main.outerHeight();
        sidebarHeight = $sidebar.outerHeight();
        mainTop = $main.offset().top;
        sidebarTop = $sidebar.offset().top;
    });
});
</script>
@endpush
