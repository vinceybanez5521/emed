@extends('layouts.app')

@section('content')
    <div class="container-fluid py-3">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h2 class="card-title">Doctors</h2>
                <a href="{{route('admin.specialties.create')}}" class="btn btn-success">Add Doctor</a>
            </div>
            <div class="card-body">
                @if (Session::has('msg'))
                    <div class="alert alert-{{session('status')}} alert-dismissible fade show" role="alert">
                        {{session('msg')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="d-block d-md-flex justify-content-between align-items-center">
                    <p class="lead">Total: <strong>0</strong></p>
                    <form action="">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Enter keywords">
                            <button class="btn btn-primary" type="button">Search</button>
                        </div>
                    </form>
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Photo</th>
                                <th>Full Name</th>
                                <th>Specialty</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($doctors as $doctor)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>
                                         @if ($doctor->photo === null)
                                            <img src="{{asset('images/doctor-avatar.png')}}" alt="{{$doctor->first_name}}'s Photo" class="person-img">
                                        @else
                                            <img src="{{asset('storage/photo_uploads/' . $doctor->photo)}}" alt="{{$doctor->first_name}}'s Photo" class="person-img">
                                        @endif
                                    </td>
                                    <td>{{$doctor->full_name}}</td>
                                    <td>{{$doctor->specialty->name}}</td>
                                    <td>{{$doctor->status}}</td>
                                    <td>
                                        
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{$doctors->links()}}
            </div>
        </div>
    </div>
@endsection