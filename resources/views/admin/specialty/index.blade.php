@extends('layouts.app')

@section('content')
    <div class="container-fluid py-3">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h2 class="card-title">Specialties</h2>
                <a href="{{route('admin.specialties.create')}}" class="btn btn-success">Add Specialty</a>
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
                                <th>Name</th>
                                <th>Description</th>
                                <th>Total Doctors</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($specialties as $specialty)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$specialty->name}}</td>
                                    <td>{{$specialty->description}}</td>
                                    <td>{{$specialty->total}}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{route('admin.specialties.edit', ['id' => $specialty->id])}}" class="text-primary">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            
                                            <a href="#" class="text-danger ms-2 ms-3" data-bs-toggle="modal" data-bs-target="#deleteSpecialtyModal" data-specialty-id={{$specialty->id}}>
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{$specialties->links()}}
            </div>
        </div>
    </div>
@endsection