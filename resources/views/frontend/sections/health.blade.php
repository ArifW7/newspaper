@if($section && $section->items->isNotEmpty())   
   <div class="col-lg-4 col-md-12 border-bottom">
        <div class="section-title border-first bottom-dark-border">
            <h5 class="fw-bold m-0">{{$section->name}}</h5>
        </div>
        <!-- Single news item -->
        @foreach($section->items->take(3) as $item)
        <div class="row border-bottom mb-3">
            <div class="col-lg-6 col-12">
                <a href="{{ route('newsDetails', $item->slug) }}" class="detailsLink">
                    <h6 class="heading-title2 hover-link">{{ $item->title }}</h6>
                </a>
            </div>
            <div class="col-lg-6 col-12">
                <a href="{{ route('newsDetails', $item->slug) }}">
                    <img src="{{ asset(getMedia($item->id, 1, 1)) }}"
                        alt="{{ $item->title }}"
                        class="img-fluid mobile-image"
                    />
                </a>
            </div>
        </div>
        @endforeach
    </div>
@endif