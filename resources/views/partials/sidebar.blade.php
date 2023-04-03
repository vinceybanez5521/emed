<div class="sidebar bg-success toggled">
    <div class="shadow-sm">
        <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
            <img src="{{asset('images/logo-white.png')}}" class="logo" alt="">
        </a>
    </div>
    <ul class="nav flex-column">
        <li class="nav-item mt-2 mx-2 rounded">
            <a class="nav-link text-white {{request()->is('admin/dashboard') ? 'active' : ''}}" href="{{route('admin.dashboard')}}">Dashboard</a>
        </li>
        <li class="nav-item mx-2 rounded">
            <a class="nav-link text-white {{request()->is('admin/appointments*') ? 'active' : ''}}" href="#">Appointments</a>
        </li>
        <li class="nav-item mx-2 rounded">
            <a class="nav-link text-white {{request()->is('admin/appointments*') ? 'active' : ''}}" href="#">Schedules</a>
        </li>
        <li class="nav-item mx-2 rounded">
            <a class="nav-link text-white {{request()->is('admin/doctors*') ? 'active' : ''}}" href="{{route('admin.doctors')}}">Doctors</a>
        </li>
        <li class="nav-item mx-2 rounded">
            <a class="nav-link text-white {{request()->is('admin/specialties*') ? 'active' : ''}}" href="{{route('admin.specialties')}}">Specialties</a>
        </li>
        <li class="nav-item mx-2 rounded">
            <a class="nav-link text-white {{request()->is('admin/patients*') ? 'active' : ''}}" href="{{route('admin.patients')}}">Patients</a>
        </li>
    </ul>
</div>