@extends('layouts.app')

@section('content')
    <div class="container py-5 vh-75">
        <div class="card">
            <div class="card-header d-block d-md-flex justify-content-between align-items-center">
                <h2 class="card-title">My Account</h2>
                <a href="{{route('patient.account.edit')}}" class="btn btn-success">Edit Account</a>
            </div>
            <div class="card-body mh-50 py-5">
                <div class="row">
                    <div class="col-md-5 d-flex justify-content-between align-items-start">
                        @if ($patient->photo === null)
                            <img src="{{asset('images/user-avatar.png')}}" alt="" class="mx-auto profile">
                        @else
                            <img src="{{asset('storage/photo_uploads/' . $patient->photo)}}" alt="{{ $patient->first_name}}'s Photo" class="mx-auto profile">
                        @endif
                    </div>
                    <div class="col-md-7 mt-5 mt-md-0">
                        <div class="account-info">
                            <p class="lead">Full Name</p>
                            <p class="lead fw-bold">{{$patient->full_name}}</p>
                        </div>
                        <div class="account-info mt-3">
                            <p class="lead">Address</p>
                            <p class="lead fw-bold">{{$patient->full_name}}</p>
                        </div>
                        <div class="account-info mt-3">
                            <p class="lead">Gender</p>
                            <p class="lead fw-bold">{{$patient->gender}}</p>
                        </div>
                        <div class="account-info mt-3">
                            <p class="lead">Civil Status</p>
                            <p class="lead fw-bold">{{$patient->civil_status}}</p>
                        </div>
                        <div class="account-info mt-3">
                            <p class="lead">Date of Birth</p>
                            <p class="lead fw-bold">{{$patient->date_of_birth}}</p>
                        </div>
                        <div class="account-info mt-3">
                            <p class="lead">Phone Number</p>
                            <p class="lead fw-bold">{{$patient->phone_number}}</p>
                        </div>
                        <div class="account-info mt-3">
                            <p class="lead">Email</p>
                            <p class="lead fw-bold">{{Auth::user()->email}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection