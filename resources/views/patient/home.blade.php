@extends('layouts.app')

@section('content')
    <div class="container py-5 vh-75">
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