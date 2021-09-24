<div class="sidebar">
    <div class="sidebar_header">
        <img src="assets/images/logo.png" alt="">
        <img src="assets/images/logo-icon.html" class="logo-icon" alt="">
        <span class="btn-mobile" uk-toggle="target: #wrapper ; cls: is-collapse is-active"></span>
    </div>

    <div class="sidebar_inner" data-simplebar>
        <ul>
            <li {{ request()->routeIs('home') ? 'class=active' : '' }}>
                <a href="{{ route('home')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-blue-600">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                    </svg>
                    <span> Home </span>
                </a>
            </li>
        </ul>

        <hr>
        <div class="footer-links">
            <a href="#">About</a>
            <a href="#">Blog </a>
            <a href="#">Careers</a>
            <a href="#">Support</a>
            <a href="#">Contact Us </a>
            <a href="#">Developer</a>
            <a href="#">Terms of service</a>
        </div>
    </div>
</div>