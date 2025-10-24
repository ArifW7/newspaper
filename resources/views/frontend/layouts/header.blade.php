<header class="site-header ">
    <div class="container d-flex align-items-center justify-content-between py-2">
        <!-- Left: Logo -->
        <a class="brand-logo d-flex align-items-center text-decoration-none gap-2" href="{{ route('home') }}">
            <img src="{{ asset('uploads/' . get_option('site_logo')) }}" alt="Logo" style="width: 70px; height: auto;">
            <span class="h4 m-0 text-light">আনন্দ পত্রিকা</span>
        </a>

        <!-- Center: Navigation -->
        @if(menu('Header Menus'))
        <ul class="d-none d-lg-flex align-items-center list-unstyled m-0 gap-4">
            @foreach(menu('Header Menus')->subMenus as $menu)
            <li><a href="{{ asset($menu->menuLink()) }}" class="text-light text-decoration-none fw-semibold">{{ $menu->menuName() }} </a></li>
            @endforeach
        </ul>
        @endif

        <!-- Right: Search + Menu -->
        <div class="header-search d-flex align-items-center gap-3">
            <button class="btn btn-sm text-light p-0 search-btn">
                <i class="fas fa-search fs-5"></i>
            </button>

            <button class="btn btn-sm text-light menu-toggle">
                <i class="fas fa-bars fs-4"></i>
            </button>
        </div>

</header>


<!-- Fullscreen Search Overlay -->
<div class="search-overlay ">
    <div class="search-overlay-content d-flex align-items-center justify-content-center">
        <input type="text" class="form-control form-control-lg" placeholder="আপনি কী খুঁজছেন...">
        <button class="btn btn-sm overlay-search-btn">
            <i class="fas fa-search text-light"></i>
        </button>
        <button class="close-search">&times;</button>
    </div>
</div>


<!-- Sidebar -->
<aside class="sidebar">
    <div class="sidebar-header">
        <h5>Menu</h5>
        <button class="close-btn">&times;</button>
    </div>
    @if(menu('Header Menus'))
    <ul class="sidebar-menu">
        @foreach(menu('Header Menus')->subMenus as $menu)
        <li><a href="{{ asset($menu->menuLink()) }}">{{ $menu->menuName() }} </a></li>
        @endforeach
    </ul>
    @endif
</aside>

<!-- Sidebar (Toggle Menu)  -->


@push('scripts')
<script>
    $(document).ready(function() {


        var swiper = new Swiper(".mySwiper", {
            slidesPerView: "auto",
            spaceBetween: 10,
            freeMode: true,
        });
    });

    $(document).ready(function() {
        $(".menu-toggle").on("click", function() {
            $(".sidebar").addClass("active");
        });

        $(".close-btn").on("click", function() {
            $(".sidebar").removeClass("active");
        });
    });




    $(document).ready(function() {
    // Open fullscreen search
    $(".search-btn").on("click", function() {
        $(".search-overlay").fadeIn(200);
        $(".search-overlay input").focus();
    });

    // Close search
    $(".search-overlay .close-search").on("click", function() {
        $(".search-overlay").fadeOut(200);
    });

    // Close on pressing ESC
    $(document).on("keydown", function(e) {
        if (e.key === "Escape") {
            $(".search-overlay").fadeOut(200);
        }
    });

    // Sidebar toggle
    $(".menu-toggle").on("click", function() {
        $(".sidebar").addClass("active");
    });

    $(".close-btn").on("click", function() {
        $(".sidebar").removeClass("active");
    });
});

</script>
@endpush


<style>
    .mySwiper {
        width: 100%;
        padding: 10px 0;
    }

    .swiper-slide {
        width: auto !important;
    }

    .swiper-slide a {
        display: inline-block;
        padding: 6px 15px;
        background: #f1f1f1;
        border-radius: 20px;
        text-decoration: none;
        color: #000;
        font-size: 14px;
        white-space: nowrap;
    }

    .swiper-slide a:hover {
        background: #007bff;
        color: #fff;
    }
</style>