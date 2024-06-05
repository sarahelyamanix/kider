<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
    <a href="{{ route('home') }}" class="navbar-brand">
        <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>Kider</h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto">
            <a href="{{ route('home') }}" class="nav-item nav-link {{request()->is('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="nav-item nav-link {{request()->is('about') ? 'active' : '' }}">About Us</a>
            <a href="{{ route('classes') }}" class="nav-item nav-link {{request()->is('classes') ? 'active' : '' }}">Classes</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ request()->is('facilities') || request()->is('team') || request()->is('call') || request()->is('appointment') || request()->is('testimonial') || request()->is('error') ? 'active' : '' }}" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                    <a href="{{ route('facilities') }}" class="dropdown-item {{request()->is('facilities') ? 'active' : '' }}">School Facilities</a>
                    <a href="{{ route('team') }}" class="dropdown-item {{request()->is('team') ? 'active' : '' }}">Popular Teachers</a>
                    <a href="{{ route('callToAction') }}" class="dropdown-item {{request()->is('callToAction') ? 'active' : '' }}">Become A Teacher</a>
                    <a href="{{ route('appointment') }}" class="dropdown-item {{request()->is('appointment') ? 'active' : '' }}">Make Appointment</a>
                    <a href="{{ route('testimonial') }}" class="dropdown-item {{request()->is('testimonial') ? 'active' : '' }}">Testimonial</a>
                    <a href="{{ route('error') }}" class="dropdown-item {{request()->is('error') ? 'active' : '' }}">404 Error</a>
                </div>
            </div>
            <a href="{{ route('contactUs') }}" class="nav-item nav-link {{request()->is('contactUs') ? 'active' : '' }}">Contact Us</a>
        </div>
        <a href="" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Join Us<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>