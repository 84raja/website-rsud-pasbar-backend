<div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">rsudpasamanbaratkab@gmail.com</a>
            <i class="bi bi-phone"></i> +1 5589 55488 55
        </div>
        <div class="d-none d-lg-flex social-links align-items-center">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
    </div>
</div>
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        <a href="/">
            <img src="/assets/img/rsud-logo.jpg" alt="logo-rsud" width="34" height="34" />
        </a>
        <h4 class="me-auto text-bold px-2 pt-2">
            <a href="/"> RSUD PASAMAN BARAT </a>
        </h4>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto {{request()->routeIs('fHome*')?'active':''}}"
                        href="{{ route('fHome') }}">Home</a></li>
                <li><a class="nav-link scrollto {{request()->routeIs('fProfile*')?'active':''}}"
                        href="{{ route('fProfile') }}">Profile</a></li>
                <li><a class="nav-link scrollto {{ request()->routeIs('fService*')?'active':'' }}"
                        href="{{ route('fService') }}">Layanan</a></li>
                <li><a class="nav-link scrollto {{ request()->routeIs('fDoctor*')?'active':'' }}"
                        href="{{ route('fDoctor') }}">Dokter</a></li>
                <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

        <a href="#appointment" class="appointment-btn scrollto">
            <span class="d-none d-md-inline">Daftar</span> Online
        </a>
    </div>
</header>