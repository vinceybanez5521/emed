@include('partials.header')

    <div class="container register">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <img src="{{asset('images/logo.png')}}" class="img-fluid w-75 d-block mx-auto" alt="">
                        <h2 class="card-title text-center mt-3">Register Account</h2>
                        <p class="text-center">Please provide all the required information</p>
                    </div>
                    <div class="card-body">
                        <form action="{{route('register')}}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address <span class="required">*</span></label>
                                <input type="email" id="email" class="form-control  @error('email') is-invalid @enderror" name="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        {{$message;}}
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password <span class="required">*</span></label>
                                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        {{$message;}}
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password-confirm" class="form-label">Confirm Password  <span class="required">*</span></label>
                                <input type="password" id="password-confirm" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation">

                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        {{$message;}}
                                    </span>
                                @enderror
                            </div>
                            <input type="submit" value="Register" class="btn btn-success w-100">
                            <div class="mt-3">
                                <p class="text-center">Already have an account? <a href="{{route('login')}}" class="btn btn-link">Login</a></p>
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