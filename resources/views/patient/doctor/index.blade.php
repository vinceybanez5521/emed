@extends('layouts.app')

@section('content')
    <div class="container py-5 vh-75">
        <div class="card">
            <div class="card-header d-block d-md-flex justify-content-between align-items-center">
                <h2 class="card-title">Available Doctors</h2>
                <div>
                    <form action="{{route('doctor.schedules.store')}}" method="POST">
                        @csrf

                        <div class="input-group">
                            <input type="date" name="date" class="form-control">
                            <button class="btn btn-success" type="submit">Search Doctors</button>
                        </div>
                    </form>
                </div>
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
                                <th>Photo</th>
                                <th>Full Name</th>
                                <th>Specialty</th>
                                <th>Date</th>
                                <th>Book Doctor</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($schedules as $schedule)
                                <tr>
                                    <td>
                                        @if ($schedule->doctor->photo === null)
                                            <img src="{{asset('images/doctor-avatar.png')}}" alt="" class="person-img">
                                        @else
                                            <img src="{{asset('storage/photo_uploads/' . $schedule->doctor->photo)}}" alt="{{$schedule->doctor->first_name}}'s Photo" class="person-img">
                                        @endif
                                    </td>
                                    <td>{{ $schedule->doctor->full_name }}</td>
                                    <td>{{ $schedule->doctor->specialty->name }}</td>
                                    <td>{{ $schedule->date }}</td>
                                    <td>
                                        <form action="{{route('patient.appointment.store')}}" method="POST">
                                            @csrf

                                            <input type="hidden" name="schedule_id" value={{$schedule->id}}>
                                            
                                            <input type="submit" value="Book Doctor" class="btn btn-success">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{ $schedules->links() }}
            </div>
        </div>
    </div>
@endsection