@extends('layouts.app')

@section('content')
    <div class="container py-5 vh-75">
        <div class="card">
            <div class="card-header d-block d-md-flex justify-content-between align-items-center">
                <h2 class="card-title">Edit Profile</h2>
                <a href="{{route('patient.profile')}}" class="btn btn-success">Back</a>
            </div>
            <div class="card-body mh-50 py-5">
                @if (Session::has('msg'))
                    <div class="alert alert-{{session('status')}} alert-dismissible fade show" role="alert">
                        {{session('msg')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-5 d-flex justify-content-between align-items-start">
                        @if ($patient->photo === null)
                            <img src="{{asset('images/user-avatar.png')}}" alt="" class="mx-auto profile">
                        @else
                            <img src="{{asset('storage/photo_uploads/' . $patient->photo)}}" alt="{{ $patient->first_name}}'s Photo" class="mx-auto profile">
                        @endif
                    </div>
                    <div class="col-md-7 mt-5 mt-md-0">
                        <form action="{{route('patient.profile.update', ['id' => $patient->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="photo" class="form-label">Photo</label>
                                <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" id="photo" accept="image/*">

                                @error('photo')
                                    <span class="invalid-feedback">
                                        {{ $message; }}
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="first_name" class="form-label">First Name <span class="required">*</span></label>
                                <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" id="first_name" value="{{$patient->first_name}}">

                                @error('first_name')
                                    <span class="invalid-feedback">
                                        {{ $message; }}
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="middle_name" class="form-label">Middle Name</label>
                                <input type="text" class="form-control @error('middle_name') is-invalid @enderror" name="middle_name" id="middle_name" value="{{$patient->middle_name}}">

                                @error('middle_name')
                                    <span class="invalid-feedback">
                                        {{ $message; }}
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="last_name" class="form-label">Last Name <span class="required">*</span></label>
                                <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" id="last_name" value="{{$patient->last_name}}">

                                @error('last_name')
                                    <span class="invalid-feedback">
                                        {{ $message; }}
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address <span class="required">*</span></label>
                                <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" id="address" value="{{$patient->address}}">

                                @error('address')
                                    <span class="invalid-feedback">
                                        {{ $message; }}
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Gender <span class="required">*</span></label>
                                <div class="form-check form-check-inline ms-3">
                                    <input class="form-check-input" type="radio" id="male" name="gender" value="Male" @if($patient->gender === 'Male' || old('gender') === null) checked @endif>
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check form-check-inline ms-3">
                                    <input class="form-check-input" type="radio" id="female" name="gender" value="Female" @if($patient->gender === 'Female') checked @endif>
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Civil Status <span class="required">*</span></label>
                                <select class="form-select @error('civil_status') is-invalid @enderror" name="civil_status">
                                    <option selected disabled value="">Select civil status</option>
                                    <option value="Single" @if($patient->civil_status === 'Single') {{'selected'}} @endif>Single</option>
                                    <option value="Married" @if($patient->civil_status === 'Married') {{'selected'}} @endif>Married</option>
                                    <option value="Annulled" @if($patient->civil_status === 'Annulled') {{'selected'}} @endif>Annulled</option>
                                    <option value="Widowed" @if($patient->civil_status === 'Widowed') {{'selected'}} @endif>Widowed</option>
                                </select>

                                @error('civil_status')
                                    <span class="invalid-feedback">
                                        {{ $message; }}
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="date_of_birth" class="form-label">Date of Birth <span class="required">*</span></label>
                                <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" id="date_of_birth" value="{{$patient->date_of_birth}}">

                                @error('date_of_birth')
                                    <span class="invalid-feedback">
                                        {{ $message; }}
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="phone_number" class="form-label">Phone Number <span class="required">*</span></label>
                                <input type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" id="phone_number" value="{{$patient->phone_number}}">

                                @error('phone_number')
                                    <span class="invalid-feedback">
                                        {{ $message; }}
                                    </span>
                                @enderror
                            </div>
                            <input type="submit" value="Update" class="btn btn-success w-100">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection