@php
$currentRouteName = Route::currentRouteName();
@endphp

<nav class="nav-bar">
    <div class="container">
        <div class="navbar-head">
            <div class="navbar-logo-navs">
                <a href=""><img class="logo" src="{{
                    Vite::asset('resources/img/nav/logofix.png') }}" alt="logo">
                    </a>
                   <div class="nav-menu">
                    <a class="nav-menu-item" href="">Homepage</a>
                    <a class="nav-menu-item" href="">Tentang</a>
                    <a class="nav-menu-item" href="">Halaman</a>
                    <a class="nav-menu-item" href="">Daftar Hotel</a>
                    <a class="nav-menu-item" href="">Bantuan</a>
                   </div>
            </div>
            <div class="navbar-language">
                <a href=""><img src="{{
                    Vite::asset('resources\img\nav\image 2.png') }}" alt=""> <span>Indonesia (IDN)</span><i class="bi bi-chevron-compact-down"></i></a>
                <div class="navbar-dropdown">
                    <a href=""><img src="{{
                        Vite::asset('resources\img\nav\image 2.png') }}" alt=""> <span>Indonesia (IDN)</span></a>
                </div>
            </div>
        </div>
    </div>
</nav>
