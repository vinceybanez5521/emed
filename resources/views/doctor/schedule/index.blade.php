@extends('layouts.app')

@section('content')
    <div class="container py-5 vh-75">
        <div class="card">
            <div class="card-header d-block d-md-flex justify-content-between align-items-center">
                <h2 class="card-title">Schedules</h2>
                <div>
                    <form action="{{route('doctor.schedules.store')}}" method="POST">
                        @csrf

                        <div class="input-group">
                            <input type="date" name="date" class="form-control">
                            <button class="btn btn-success" type="submit">Add Schedule</button>
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
                                <th>#</th>
                                <th>Date</th>
                                <th>Total Appointments</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($schedules as $schedule)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$schedule->date}}</td>
                                    <td>{{$schedule->total}}</td>
                                    <td>{{$schedule->status}}</td>
                                    <td>
                                        <a href="" class="text-success" title="Done">
                                            <i class="fas fa-check"></i>
                                        </a>
                                        <a href="" class="text-warning ms-3" title="Cancel">
                                            <i class="fas fa-ban"></i>
                                        </a>
                                        <a href="" class="text-danger ms-3" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection