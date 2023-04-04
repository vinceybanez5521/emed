@extends('layouts.app')

@section('content')
    <div class="container py-5 vh-75">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Appointments</h2>
            </div>
            <div class="card-body">
                @if (Session::has('msg'))
                    <div class="alert alert-{{session('status')}} alert-dismissible fade show" role="alert">
                        {{session('msg')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>#</td>
                                <th>Photo</th>
                                <th>Doctor</th>
                                <th>Specialty</th>
                                <th>Scheduled Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($appointments as $appointment)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>
                                        @if ($appointment->schedule->doctor->photo === null)
                                            <img src="{{asset('images/doctor-avatar.png')}}" alt="" class="person-img">
                                        @else
                                            <img src="{{asset('storage/photo_uploads/' . $appointment->schedule->doctor->photo)}}" alt="{{$appointment->schedule->doctor->photo}}'s Photo" class="person-img">
                                        @endif
                                    </td>
                                    <td>{{$appointment->schedule->doctor->full_name}}</td>
                                    <td>{{$appointment->schedule->doctor->specialty->name}}</td>
                                    <td>{{$appointment->schedule->date}}</td>
                                    <td>{{$appointment->status}}</td>
                                    <td>
                                        <a href="#" class="text-danger ms-2 ms-3" data-bs-toggle="modal" data-bs-target="#deleteAppointmentModal" data-appointment-id={{$appointment->id}}>
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{ $appointments->links() }}
            </div>
        </div>
    </div>
@endsection