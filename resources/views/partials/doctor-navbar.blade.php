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
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link text-success text-decoration-none" href="#services">Services</a>
                    </li>
                    <li class="nav-item ms-0 ms-md-3">
                        <a class="nav-link text-success text-decoration-none" href="#doctors">Doctors</a>
                    </li>
                    <li class="nav-item ms-0 ms-md-3">
                        <a class="nav-link text-success text-decoration-none" href="#about">About Us</a>
                    </li>
                    <li class="nav-item ms-0 ms-md-3">
                        <a class="nav-link text-success text-decoration-none" href="#contact">Contact Us</a>
                    </li>
                    <li class="nav-item ms-0 ms-md-3">
                        <a class="btn btn-success" href="{{ route('login') }}">Login / Register</a>
                    </li>
                @else
                    <li class="nav-item ms-0 ms-md-3">
                        <a class="nav-link text-success text-decoration-none" href="{{route('doctor.home')}}">Home</a>
                    </li>
                    <li class="nav-item ms-0 ms-md-3">
                        <a class="nav-link text-success text-decoration-none" href="{{route('doctor.home')}}">Appointments</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            My Account
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>