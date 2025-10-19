<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{{ asset('backend/images/icon/logo.png') }}" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                 <li>
                    <a href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>

                 <li>
                    <a href="{{ route('pages') }}"><i class="fas fa-table"></i>Pages</a>
                </li>

                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-cube"></i>Post Manages</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('categoryIndex') }}">Category</a>
                        </li>
                        <li>
                            <a href="{{ route('newsIndex') }}">News</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fas fa-chart-bar"></i>Charts</a>
                </li>


               
                <li>
                    <a href="{{ route('themeSetting') }}"><i class="far fa-check-square"></i>Theme Setting</a>
                </li>
                
                <li>
                    <a href="#">
                        <i class="fas fa-map-marker-alt"></i>Maps</a>
                </li>
                
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-desktop"></i>Manage Settings</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('menus') }}">Menus</a>
                        </li>
                        <li>
                            <a href="{{ route('setting') }}">Setting</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>