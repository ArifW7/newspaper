@if($section && $section->items->isNotEmpty())
<section class="sharadeshs-section container-fluid">
    <!-- Section title -->
    <div class="bottom-dark-border border-first mb-3">
        <h5 class="fw-bold">{{$section->name}}</h5>
    </div>

    <!-- News content -->
    <div class="row g-4">
        @php $lead = $section->items->first(); @endphp
        @if($lead)
        <div class="col-lg-9 col-12">
            <div class="row bottom-border">
                <div class="col-lg-7 col-12">
                    <img
                        src="{{ asset(getMedia($lead->id, 1, 1)) }}"
                        class="card-img-top"
                        alt="{{$lead->title}}"
                    />
                </div>

                <div class="col-lg-5 col-12 px-0 right-border">
                    <p class="heading-title mb-2">{{$lead->title}}</p>
                    <p class="text-muted small">{{ $lead->short_description }}</p>
                </div>
            </div>
        </div>
        @endif
        <div class="col-lg-3 col-12">
            <div class="mb-3 sidebar-card">
                <h5 class="mb-2">অ্যাড / স্পটলাইন</h5>
                <img src="https://tpc.googlesyndication.com/simgad/8809754173270952812" class="mobile-image" />
            </div>
        </div>
        <!-- 4 Small news -->
        <div class="col-lg-12">
            <div class="row g-3">
                @foreach($section->items->skip(1)->take(4) as $item)
                <div class="col-md-3 col-12 right-border">
                    <div class="border-0 h-100">
                        <img src="{{ asset(getMedia($item->id, 1, 1)) }}" class="card-img-top" alt="{{$item->title}}"/>
                        <div class="px-0">
                            <h6 class="heading-title2">{{$item->title}}</h6>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif