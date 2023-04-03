@include('partials.header')

    @include('partials.welcome-navbar')
    
    <div class="hero">
        <div class="overlay">
            <div class="hero-text text-white text-center">
                <h1 class="display-2">The Future of Medical Care</h1>
                <p class="lead">We believe in providing you with the best medical care</p>
                <a href="" class="btn btn-success btn-lg">Book a Doctor</a>
                <a href="{{route('apply-doctor')}}" class="btn btn-success btn-lg px-5 ms-4">Join Us</a>
            </div>
        </div>
        <i class="fas fa-user"></i>
    </div>

@include('partials.footer')