@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Doctors</h2>
            </div>
            <div class="card-body">
                <table class="table">
                    <tbody>
                        @foreach ($doctors as $doctor)
                            <tr>
                                <td>{{ $doctor->full_name }}</td>
                                <td class="text-end">
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