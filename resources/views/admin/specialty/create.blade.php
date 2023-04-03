@extends('layouts.app')

@section('content')
    <div class="container-fluid py-3">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h2 class="card-title">Add Specialty</h2>
                        <a href="{{route('admin.specialties')}}" class="btn btn-success">View All</a>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.specialties.store')}}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">

                                @error('name')
                                    <span class="invalid-feedback">
                                        {{$message}}
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea type="text" id="description" name="description" class="form-control @error('description') is-invalid @enderror" rows="5">{{old('description')}}</textarea>

                                @error('description')
                                    <span class="invalid-feedback">
                                        {{$message}}
                                    </span>
                                @enderror
                            </div>
                            <input type="submit" value="Save" class="btn btn-success px-4">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection