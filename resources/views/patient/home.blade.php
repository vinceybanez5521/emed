@extends('layouts.app')

@section('content')
    <div class="container py-5 vh-75">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Please complete your information <a href="{{route('patient.account.edit')}}">here</a>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Home</h2>
            </div>
            <div class="card-body mh-50">
                <div class="row">
                    <div class="col-md-4">
                        <div class="summary">
                            <p class="text-success lead">Appointments</p>
                            <p class="total">{{$appointmentsTotal}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection