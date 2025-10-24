<footer class="site-footer">

    <div class="footer-top">
          <div class="container d-flex justify-content-between align-items-center flex-wrap">
          <div class="footer-logo">
             <a class="brand-logo d-flex align-items-center text-decoration-none" href="{{ route('home') }}">
                <img src="{{ asset('uploads/' . get_option('site_logo')) }}" alt="Logo" class="me-2" style="height: 60px; width: auto; ">
                <span class="h4 m-0 text-dark">আনন্দ পত্রিকা</span>
          </a>
           </div>
           <div class="editor">
            ভারপ্রাপ্ত সম্পাদক: মাহমুদুল্লাহ রিয়াদ
           </div> 
          </div>

            </div>
        <div class="container d-flex justify-content-center align-items-center flex-wrap">
          @if(menu('Fotter Menus'))
            <ul class="footer-menu d-flex flex-wrap">
                @foreach(menu('Fotter Menus')->subMenus as $menu)
                <li><a href="{{ asset($menu->menuLink()) }}">{{ $menu->menuName() }}</a></li>
                @endforeach
            </ul>
            @endif
            
        </div>
        <div class="editor container d-flex justify-content-center align-items-center flex-wrap mt-3">
               
        <div class="container contact-info mb-3">
            
            <div class="d-flex justify-content-center flex-wrap">
               {!! get_option('site_address') !!}
            </div>
        </div>
    </div>

    <div class="footer-bottom ">
        Develop By <a href="https://wa.me/+8801782889864">Mahmudul Hasan Arif</a>.
        <button class="ok-btn">OK</button>
    </div>
</footer>
