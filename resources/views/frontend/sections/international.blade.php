@if($section && $section->items->isNotEmpty())
<section class="International-section container-fluid">
    <div class="section-title border-first mb-3">
        <h5 class="fw-bold m-0">{{$section->name}}</h5>
    </div>
    <div class="row bottom-border top-dark-border">
        <div class="col-lg-9 col-md-12 mb-4 right-border">
            <!-- বাম পাশে মূল নিউজ -->
            <div class="row">
                @php $lead = $section->items->first(); @endphp
                @if($lead)
                <div class="col-lg-7 col-md-12 mb-4 right-border">
                    <div class="main-news">
                        <a href="{{ route('newsDetails', $lead->slug) }}" class="detailsLink">
                        <img src="{{ asset(getMedia($lead->id, 1, 1)) }}"
                            alt="{{$lead->title}}"
                            class="img-fluid mobile-image w-100 mb-3"
                        />
                        </a>

                        <h4 class="fw-bold mb-2"><a href="{{ route('newsDetails', $lead->slug) }}" class="detailsLink">{{$lead->title}}</a></h4>
                        <p class="text-muted">{{Str::limit($lead->short_description, 170)}}</p>
                    </div>
                </div>
                @endif

                <div class="col-lg-5 col-md-12">
                    <!-- Single news item -->
                    @foreach($section->items->skip(1)->take(5) as $item)
                    <div class="row border-bottom mb-3">
                        <div class="col-lg-8 col-12">
                            <a href="{{ route('newsDetails', $item->slug) }}" class="detailsLink">
                                <h6 class="heading-title2 hover-link">{{$item->title}}</h6>
                            </a>
                        </div>
                        <div class="col-lg-4 col-12">
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
            </div>
        </div>

        <div class="col-lg-3 col-md-12">
            <div class="mb-3 right-add">
                <img src="https://tpc.googlesyndication.com/simgad/8809754173270952812" class="mobile-image" />
            </div>
            @foreach($section->items->skip(6)->take(2) as $item)
            <div class="row mb-3">
                <div class="col-lg-7 col-12">
                    <a href="#" class="text-decoration-none text-dark">
                        <h6 class="heading-title2 hover-link"><a href="{{ route('newsDetails', $item->slug) }}" class="detailsLink">{{ $item->title }}</a></h6>
                    </a>
                </div>
                <div class="col-lg-5 col-12">
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
    </div>
</section>
@endif