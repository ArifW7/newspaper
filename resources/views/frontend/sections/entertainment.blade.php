@if($section && $section->items->isNotEmpty())
<section class="entertainment-section container-fluid">
    <div class="section-title border-first mb-3">
        <h5 class="fw-bold m-0">{{$section->name}}</h5>
    </div>

    <div class="row bottom-border top-dark-border">
        <!-- Left Column -->
        <div class="col-lg-4 col-12 mb-4 right-border">
            <!-- News Item 1 -->
            @foreach($section->items->take(3) as $item)
                <div class="row border-bottom mb-3">
                    <div class="col-lg-6 col-12">
                        <a href="https://www.dhakapost.com/national/402517" class="text-decoration-none text-dark">
                            <h6 class="heading-title2 hover-link">{{$item->title}}</h6>
                        </a>
                    </div>
                    <div class="col-lg-6 col-12">
                        <img src="{{ asset(getMedia($item->id, 1, 1)) }}"
                            alt="{{$item->title}}"
                            class="img-fluid mobile-image mb-3"
                        />
                    </div>
                </div>
            @endforeach
        </div>

        @php $lead = $section->items->skip(3)->first(); @endphp
        @if($lead)
        <!-- Middle Column -->
        <div class="col-lg-4 col-12 mb-4">
            <div class="main-news">
                <img src="{{ asset(getMedia($lead->id, 1, 1)) }}"
                    alt="{{$lead->title}}"
                    class="img-fluid mobile-image mb-3 w-100"
                />

                <h4 class="fw-bold mb-3">{{ $lead->title }}</h4>
                <p class="text-muted mb-3">{{Str::limit($lead->short_description, 200)}}</p>
            </div>
        </div>
        @endif

        <!-- Right Column -->
        <div class="col-lg-4 col-12 mb-4 left-border">
            <!-- News Item 1 -->
            @foreach($section->items->skip(4)->take(3) as $item)
            <div class="row border-bottom mb-3">
                <div class="col-lg-6 col-12">
                    <a href="#" class="text-decoration-none text-dark">
                        <h6 class="heading-title2 hover-link">{{$item->title}}</h6>
                    </a>
                </div>
                <div class="col-lg-6 col-12">
                    <img src="{{ asset(getMedia($item->id, 1, 1)) }}"
                        alt="{{$item->title}}"
                        class="img-fluid mobile-image mb-3"
                    />
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif