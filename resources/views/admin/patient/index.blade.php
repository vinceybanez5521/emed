@extends('layouts.app')

@section('content')
    <div class="container-fluid py-3">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h2 class="card-title">Patients</h2>
                <a href="{{route('admin.specialties.create')}}" class="btn btn-success">Add Patient</a>
            </div>
            <div class="card-body">
                @if (Session::has('msg'))
                    <div class="alert alert-{{session('status')}} alert-dismissible fade show" role="alert">
                        {{session('msg')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="d-block d-md-flex justify-content-between align-items-center">
                    <p class="lead">Total: <span class="fw-bold">{{ $total }}</span></p>
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
                                <th>Email</th>
                                <th>Gender</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($patients as $patient)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>
                                        @if ($patient->photo === null)
                                            <img src="{{asset('images/user-avatar.png')}}" alt="{{$patient->first_name}}'s Photo" class="person-img">
                                        @else
                                            <img src="{{asset('storage/photo_uploads/' . $patient->photo)}}" alt="{{$patient->first_name}}'s Photo" class="person-img">
                                        @endif
                                    </td>
                                    <td>{{$patient->full_name}}</td>
                                    <td>{{$patient->user->email}}</td>
                                    <td>{{$patient->gender}}</td>
                                    <td>
                                        <a href="{{route('admin.specialties.edit', ['id' => $patient->id])}}" class="text-info ms-2 ms-md-0">
                                            <i class="fas fa-eye"></i>
                                        </a>

                                        <a href="{{route('admin.specialties.edit', ['id' => $patient->id])}}" class="text-primary d-inline-block mt-3 mt-md-0 ms-2 ms-md-3">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        
                                        <a href="#" class="text-danger d-inline-block mt-3 mt-md-0 ms-2 ms-md-3" data-bs-toggle="modal" data-bs-target="#deleteSpecialtyModal" data-specialty-id={{$patient->id}}>
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{$patients->links()}}
            </div>
        </div>
    </div>
@endsection