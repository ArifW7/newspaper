
@if($section && $section->items->isNotEmpty())
<section class="sports-section container-fluid bottom-border">
    <div class="section-title border-first bottom-dark-border ps-2 mb-3">
        <h5 class="fw-bold m-0">{{$section->name}}</h5>
    </div>
    <div class="row">
        @php $lead = $section->items->first(); @endphp
        @if($lead)
        <div class="col-lg-4 right-border">
            <div class="main-news">
                <img src="{{ asset(getMedia($lead->id, 1, 1)) }}"
                    alt="{{ $lead->title }}"
                    class="img-fluid mobile-image w-100 mb-3"
                />

                <h4 class="heading-title mb-2">{{ $lead->title }}</h4>
                <p class="text-muted">{{ Str::limit($lead->short_description, 200) }}</p>
            </div>
        </div>
        @endif
        <div class="col-lg-4 right-border">
            <!-- Single news item -->
            @foreach($section->items->skip(1)->take(3) as $item)
            <div class="row bottom-border mb-3">
                <div class="col-lg-6 col-12">
                    <a href="https://www.dhakapost.com/national/402517" class="text-decoration-none text-dark">
                        <h6 class="heading-title2 hover-link">{{$item->title}}</h6>
                    </a>
                </div>
                <div class="col-lg-6 col-12">
                    <img
                        src="{{ asset(getMedia($item->id, 1, 1)) }}"
                        alt="{{$item->title}}"
                        class="img-fluid mobile-image"
                    />
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-lg-4">
            @foreach($section->items->skip(4)->take(3) as $item)
            <div class="row bottom-border mb-3">
                <div class="col-lg-6 col-12">
                    <a href="https://www.dhakapost.com/national/402517" class="text-decoration-none text-dark">
                        <h6 class="heading-title2 hover-link">{{$item->title}}</h6>
                    </a>
                </div>
                <div class="col-lg-6 col-12">
                    <img
                        src="{{ asset(getMedia($item->id, 1, 1)) }}"
                        alt="{{$item->title}}"
                        class="img-fluid mobile-image"
                    />
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif