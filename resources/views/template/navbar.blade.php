<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{ url('/') }}" class="logo d-flex align-items-center">
            <img src="{{ url('/assets/img/logo_kom.png') }}" alt="logo_kom.png">
            <span>PMII UNIRA</span>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto {{ Request::is('/#hero') ? 'active' : '' }}" href="{{ url('/#hero') }}">Home</a></li>
                <li><a class="nav-link scrollto {{ Request::is('/#about') ? 'active' : '' }}" href="{{ url('/#about') }}">About</a></li>
                {{-- <li><a class="nav-link scrollto" href="#services">Mission</a></li> --}}
                <li><a class="nav-link scrollto {{ Request::is('/#gallery') ? 'active' : '' }}" href="{{ url('/#gallery') }}">Gallery</a></li>
                <li><a class="nav-link scrollto {{ Request::is('/team') ? 'active' : '' }}" href="{{ url('/team') }}">Team</a></li>
                <li><a class="nav-link scrollto {{ Request::is('/blog') ? 'active' : '' }}" href="{{ url('/blog') }}">Blog</a></li>
                <li><a class="getstarted scrollto" href="{{ url('/login') }}">Login</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
