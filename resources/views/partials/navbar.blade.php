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
                {{-- Patient --}}
                @if (Auth::check() && Auth::user()->role === 'patient')
                    <li class="nav-item ms-0 ms-md-3">
                        <a class="nav-link text-success text-decoration-none" href="{{route('patient.home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-success text-decoration-none" href="">Appointments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-success text-decoration-none" href="{{route('patient.doctors')}}">Doctors</a>
                    </li>

                {{-- Doctor --}}
                @elseif (Auth::check() && Auth::user()->role === 'doctor')
                    <li class="nav-item">
                        <a class="nav-link text-success text-decoration-none" href="{{route('doctor.home')}}">Home</a>
                    </li>
                    <li class="nav-item ms-0 ms-md-3">
                        <a class="nav-link text-success text-decoration-none" href="">Appointments</a>
                    </li>
                    <li class="nav-item ms-0 ms-md-3">
                        <a class="nav-link text-success text-decoration-none" href="{{route('doctor.schedules')}}">Schedules</a>
                    </li>
                @endif
                <li class="nav-item ms-0 ms-md-3 dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-success" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <img src="{{asset('images/user-avatar.png')}}" class="user-avatar" alt="">
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="">Settings</a>
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
            </ul>
        </div>
    </div>
</nav>