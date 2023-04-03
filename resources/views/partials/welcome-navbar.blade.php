<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm py-3">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{asset('images/logo.png')}}" class="logo" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                @if (Auth::check() && Auth::user()->role === 'patient')
                    <li class="nav-item ms-0 ms-md-3">
                        <a class="nav-link text-success text-decoration-none" href="{{route('patient.home')}}">Home</a>
                    </li>
                @elseif (Auth::check() && Auth::user()->role === 'doctor')
                    <li class="nav-item ms-0 ms-md-3">
                        <a class="nav-link text-success text-decoration-none" href="{{route('doctor.home')}}">Home</a>
                    </li>
                 @elseif (Auth::check() && Auth::user()->role === 'admin')
                    <li class="nav-item ms-0 ms-md-3">
                        <a class="nav-link text-success text-decoration-none" href="{{route('admin.dashboard')}}">Dashboard</a>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link text-success text-decoration-none" href="#services">Services</a>
                </li>
                <li class="nav-item ms-0 ms-md-3">
                    <a class="nav-link text-success text-decoration-none" href="#about">About Us</a>
                </li>
                <li class="nav-item ms-0 ms-md-3">
                    <a class="nav-link text-success text-decoration-none" href="#contact">Contact Us</a>
                </li>
                @if (!Auth::check())
                    <li class="nav-item ms-0 ms-md-3">
                        <a class="btn btn-success" href="{{ route('login') }}">Login / Register</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>