@include('partials.header')

    <div class="container login">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <img src="{{asset('images/logo.png')}}" class="img-fluid w-75 d-block mx-auto" alt="">
                        <h2 class="card-title text-center mt-3">Login Account</h2>
                        <p class="text-center">Please provide your email and password to continue</p>
                    </div>
                    <div class="card-body">
                        @if (Session::has('msg'))
                            <div class="alert alert-{{session('status')}} alert-dismissible fade show" role="alert">
                                {{session('msg')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <form action="{{route('login')}}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        {{$message;}}
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        {{$message;}}
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3 d-flex justify-content-between align-items-center">
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">Remember Me</label>
                                </div>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Forgot Password?
                                    </a>
                                @endif
                            </div>
                            <input type="submit" value="Login" class="btn btn-success w-100">
                            <div class="mt-3">
                                <p class="text-center">Don't have an account? <a href="{{route('register')}}" class="btn btn-link">Register</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <a href="{{url('/')}}" class="back" title="Back to welcome page">
            <i class="fas fa-arrow-left text-success"></i>
        </a>
    </div>
    
</body>
</html>
