@if($section && $section->items->isNotEmpty())  
<section class="exclusive-section container-fluid">
    <div class="row g-3">
        <div class="section-title border-first bottom-dark-border">
            <h5 class="fw-bold m-0">{{$section->name}}</h5>
        </div>
        @foreach($section->items->take(4) as $item)
        <div class="col-md-3 col-12 right-border">
            <div class="border-0 h-100">
                <a href="{{ route('newsDetails', $item->slug) }}">
                    <img src="{{ asset(getMedia($item->id, 1, 1)) }}"
                        class="card-img-top"
                        alt="{{ $item->title }}"
                    />
                </a>
                <div class="px-0">
                    <a href="{{ route('newsDetails', $item->slug) }}" class="detailsLink">
                    <h6 class="heading-title2 mt-3">{{ $item->title }}</h6>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endif