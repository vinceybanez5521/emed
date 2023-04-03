@extends('layouts.app')

@section('content')
    <div class="container py-5 vh-75">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Doctors</h2>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Photo</th>
                            <th>Full Name</th>
                            <th>Specialty</th>
                            <th>Book Doctor</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($doctors as $doctor)
                            <tr>
                                <td>
                                    @if ($doctor->photo === null)
                                        <img src="{{asset('images/doctor-avatar.png')}}" alt="{{$doctor->first_name}}'s Photo" class="person-img">
                                    @else
                                        <img src="{{asset('storage/photo_uploads/' . $doctor->photo)}}" alt="{{$doctor->first_name}}'s Photo" class="person-img">
                                    @endif
                                </td>
                                <td>{{ $doctor->full_name }}</td>
                                <td>{{ $doctor->specialty->name }}</td>
                                <td>
                                    <a href="" class="btn btn-success">Book Doctor</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $doctors->links() }}
            </div>
        </div>
    </div>
@endsection