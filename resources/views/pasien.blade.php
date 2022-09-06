@auth
@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                <h1>Data Patient</h1>
                <br>
                </div>
            </div>
            <a href="{{ url('fpasien') }}" class="btn btn-primary"> + Insert Patient</a>
            <a href="{{ url('chart') }}" class="btn btn-info"> Chart Patient</a>
            <div class="col mt-5">
                <br>
                <table class="table table-striped table-bordered nowrap" style="width:100%" >
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Birth</th>
                        <th>Telephone</th>
                        <th>Act. Pasien</th>
                        <th>Med. Pasien</th>
                        <th>Register Date</th>
                        <th>Option</th>
                    </tr>
                    </thead>
                    @foreach($data as $dataPasien)
                    <tbody>
                    <tr>
                        <td>{{ $dataPasien->pasien_id }}</td>
                        <td>{{ $dataPasien->name }}</td>
                        <td>{{ $dataPasien->address }}</td>
                        <td>{{ $dataPasien->birth }}</td>
                        <td>{{ $dataPasien->telephone }}</td>
                        <td>{{ $dataPasien->action_id }}</td>
                        <td>{{ $dataPasien->medicine_id }}</td>
                        <td>{{ $dataPasien->date }}</td>
                        <td>
                        <a href="{{url('/showpasien/'.$dataPasien->pasien_id)}}" class="btn btn-warning">Edit</a>
                        <a href="{{url('/destroy/'.$dataPasien->pasien_id)}}" class="btn btn-danger">Delete</a></td>
                        </td>
                    </tr>
                    </tbody>
                    @endforeach
                </table>
        </div>
    </section>
@endsection
@endauth