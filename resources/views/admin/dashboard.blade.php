@extends('layouts.app')

@section('content')
    <div class="container-fluid py-3">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Dashboard</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="summary">
                            <p class="text-success lead">Doctors</p>
                            <p class="total">{{$doctorsTotal}}</p>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3 mt-md-0">
                        <div class="summary">
                            <p class="text-success lead">Patients</p>
                            <p class="total">{{$patientsTotal}}</p>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3 mt-md-0">
                        <div class="summary">
                            <p class="text-success lead">Specialties</p>
                            <p class="total">{{$specialtiesTotal}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection