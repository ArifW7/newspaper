@if($section && $section->items->isNotEmpty())
<section class="trending-section container-fluid">
    <div class="row bottom-border">
        <!-- Main content -->
        <div class="col-12 col-lg-9 right-border mobile-border">
            <!-- Lead hero (large article) -->
            @php $lead = $section->items->first(); @endphp
            @if($lead)
            <div class="row lead-hero bottom-border">
                <div class="col-lg-6 lead-content mobile-order-2 lead-left-border">
                    <p class="h1-title"><a href="{{ route('newsDetails', $lead->slug) }}">{{ $lead->title }}</a></p>
                    <p class="text-muted d-none d-md-block">{{ Str::limit($lead->short_description, 250) }}</p>
                </div>
                <div class="col-lg-6 lead-image mobile-order-1">
                    <img class="article-img img-fluid mobile-image"
                        src="{{ asset(getMedia($lead->id, 1, 1)) }}"
                        alt="{{ $lead->title }}"
                    />
                </div>
            </div>
            @endif

            <!-- Two column article cards -->
            <div class="row g-3 bottom-border">
                @foreach($section->items->skip(1)->take(2) as $item)
                <div class="col-12 col-md-6 right-border mobile-border">
                    <article class="news-row">
                        <div class="row g-4">
                            <div class="col-6 col-lg-6">
                                <div class="news-body">
                                    <h5 class="news-title heading-title2">
                                        {{ $item->title }}
                                    </h5>
                                    <p class="news-text text-muted small">
                                        {{ $item->short_description }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-6 col-lg-6">
                                <img src="{{ asset(getMedia($item->id, 1, 1)) }}"
                                    class="img-fluid mobile-image"
                                    alt="{{ $item->title }}"/>
                            </div>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Sidebar add and comment -->
        <aside class="col-12 col-lg-3">
            <div class="sticky-top" style="top: 100px">
                <div class="mb-3 sidebar-card">
                    <img
                        src="https://tpc.googlesyndication.com/simgad/8809754173270952812"
                        class="img-fluid mobile-image"
                    />
                </div>

                <section class="mt-3 px-3 mb-5">
                    <!-- Section title -->
                    <div class="border-bottom border-1 mb-3 pb-1">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="/opinion" class="text-decoration-none">
                                <h2 class="text-dark fs-3 position-relative ps-3">
                                    মতামত
                                    <span
                                        class="position-absolute top-50 start-0 translate-middle-y"
                                        style="width: 3px; height: 70%; background: #124b65"
                                    ></span>
                                </h2>
                            </a>
                        </div>
                    </div>

                    <!-- Opinion item -->
                    <a
                        href="https://www.dhakapost.com/opinion/403059"
                        class="d-flex gap-3 align-items-center text-decoration-none group"
                    >
                        <div>
                            <img
                                src="https://assets.dhakapost.com/media/setup/author/md-ashraful-islam-20251019123852.jpg?width=100&height=100"
                                alt="ইন্টারনেটে ব্যক্তিগত তথ্য সুরক্ষায় করণীয় কী?"
                                class="rounded-circle img-fluid mobile-image"
                                loading="lazy"
                            />
                        </div>
                        <div>
                            <h2 class="fs-5 text-dark mb-1 hover-text">ইন্টারনেটে ব্যক্তিগত তথ্য সুরক্ষায় করণীয় কী?</h2>
                            <p class="text-muted mb-0">ড. মো. আশরাফুল ইসলাম</p>
                        </div>
                    </a>
                </section>
            </div>
        </aside>
    </div>

    <!-- 2nd section from trending row-->
    <div class="row bottom-border">
        <!-- 4-item grid -->
        <div class="col-12 col-lg-9">
            <div class="row mobile-order-add-2">
                <!-- Single News Item -->
                @foreach($section->items->skip(3)->take(6) as $i=>$item)
                <div class="col-12 col-md-4 ">
                    <article class="news-item">
                        <div class="row g-2 align-items-center">
                            <!-- Left Content -->
                            <div class="col-6">
                                <h6 class="heading-title2 mb-1">{{ $item->title }}</h6>
                            </div>

                            <!-- Right Image -->
                            <div class="col-6">
                                <img
                                    src="{{ asset(getMedia($item->id, 1, 1)) }}"
                                    alt="{{ $item->title }}"
                                    class="img-fluid mobile-image news-thumb"
                                />
                            </div>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>
        </div>
        <!-- End of 4-item grid -->

        <!-- Sidebar -->
        <aside class="col-12 col-lg-3">
            <div class="sticky-top" style="top: 100px">
                <div class="mb-3 sidebar-card">
                    <img
                        src="https://tpc.googlesyndication.com/simgad/8809754173270952812"
                        class="img-fluid mobile-image"
                    />
                </div>
            </div>
        </aside>
    </div>
</section>
@endif