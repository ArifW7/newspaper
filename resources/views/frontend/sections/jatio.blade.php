@if($section && $section->items->isNotEmpty())
<section class="national-section container-fluid">
    <div class="row">
        <div class="col-lg-9 col-md-12 right-border">
            <div class="section-title border-first bottom-dark-border">
                <h5 class="fw-bold m-0">{{ $section->name }}</h5>
            </div>
            <!-- বাম পাশে মূল নিউজ -->
            <div class="row">
                @php $lead = $section->items->first(); @endphp
                @if($lead)
                <div class="col-lg-7 col-md-12 right-border">
                    <div class="main-news">
                        <img
                            src="{{ asset(getMedia($lead->id, 1, 1)) }}"
                            alt="{{ $lead->title }}"
                            class="img-fluid mobile-image w-100 mb-3"
                        />

                        <h4 class="fw-bold mb-2">{{ $lead->title }}</h4>
                        <p class="text-muted">{{ Str::limit($lead->short_description, 200) }}</p>
                    </div>
                </div>
                @endif

                <!-- ডান পাশে তিনটা ছোট নিউজ -->
                <div class="col-lg-5 col-md-12">
                    <!-- Single news item -->
                    @foreach($section->items->skip(1)->take(3) as $item)
                    <div class="row border-bottom mb-3">
                        <div class="col-lg-6 col-12">
                            <a href="https://www.dhakapost.com/national/402517" class="text-decoration-none text-dark">
                                <h6 class="heading-title2 hover-link">{{$item->title}}</h6>
                            </a>
                        </div>
                        <div class="col-lg-6 col-12">
                            <img src="{{ asset(getMedia($item->id, 1, 1)) }}" alt="{{$item->title}}" class="img-fluid mobile-image" />
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-12">
            <ul class="nav nav-tabs" id="newsTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link active fw-bold tab-button"
                        id="latest-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#latest"
                        type="button"
                        role="tab"
                    >
                        সর্বশেষ
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link fw-bold tab-button"
                        id="popular-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#popular"
                        type="button"
                        role="tab"
                    >
                        জনপ্রিয়
                    </button>
                </li>
            </ul>

            @php
                $latests = App\Models\News::where('status','active')->latest()->take(6)->get();
                $features = App\Models\News::where('status','active')->where('is_featured',true)->take(6)->get();
            @endphp

            <div class="p-3">
                <!-- Tab Content-->
                <div class="tab-content mt-3" id="newsTabsContent">
                    <!-- সর্বশেষ নিউজ -->
                    <div class="tab-pane fade show active" id="latest" role="tabpanel" aria-labelledby="latest-tab">
                        <div class="news-list">
                            @foreach($latests as $item)
                            <div class="d-flex mb-3 border-bottom pb-2">
                                <img src="{{ asset(getMedia($item->id, 1, 1)) }}" alt="{{$item->title}}"
                                    class="me-2 rounded"
                                    width="80"
                                    height="60"
                                />
                                <p class="mb-0 small fw-semibold">{{$item->title}}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- জনপ্রিয় নিউজ -->
                    <div class="tab-pane fade" id="popular" role="tabpanel" aria-labelledby="popular-tab">
                        <div class="news-list">
                            @foreach ($features as $item)
                                <div class="d-flex mb-3 border-bottom pb-2">
                                    <img
                                        src="{{ asset(getMedia($item->id, 1, 1)) }}"
                                        alt="{{$item->title}}"
                                        class="me-2 rounded"
                                        width="80"
                                        height="60"
                                    />
                                    <p class="mb-0 small fw-semibold">{{$item->title}}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif