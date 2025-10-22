
<!-- Left Column: অর্থনীতি -->
@if($section && $section->items->isNotEmpty())          
<div class="col-lg-8 col-md-12 mb-4">
    <div class="section-title border-first bottom-dark-border">
        <h5 class="fw-bold m-0">{{$section->name}}</h5>
    </div>

    <!-- Main News Row -->
    @php $lead = $section->items->first(); @endphp
    @if($lead)
    <div class="row border-bottom my-3">
        <div class="col-lg-6 col-12 right-border mb-3 mb-lg-0">
            <div class="main-news">
                <img src="{{ asset(getMedia($lead->id, 1, 1)) }}"
                    alt="{{ $lead->slug }}"
                    class="img-fluid mobile-image w-100 mb-3"
                />
            </div>
        </div>

        <div class="col-lg-6 col-12">
            <h4 class="fw-bold mb-2">{{ $lead->title }}</h4>
            <p class="text-muted mb-0">{{Str::limit($lead->short_description, 250)}}</p>
        </div>
    </div>
    @endif

    <!-- Small Cards Row -->
    <div class="row card-news">
        @foreach($section->items->skip(1)->take(3) as $item)
        <div class="col-md-4 col-12 right-border mb-3 mb-md-0">
            <div class="border-0 h-100">
                <img src="{{ asset(getMedia($item->id, 1, 1)) }}"
                    class="card-img-top"
                    alt="{{ $item->slug }}"
                />
                <div class="px-0">
                    <h6 class="heading-title2 mt-3">{{ $item->title }}</h6>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif


