@auth
@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                <h1>Data Employees</h1>
                <br>
                </div>
            </div>
            <a href="{{ url('fpegawai') }}" class="btn btn-primary"> + Insert Employee</a>
            <div class="col mt-5">
                <table class="table table-striped table-bordered nowrap" style="width:100%" >
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>NIK</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Birth</th>
                        <th>Email</th>
                        <th>Option</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $dataPegawai)
                    <tr>
                        <td>{{ $dataPegawai->id }}</td>
                        <td>{{ $dataPegawai->nik }}</td>
                        <td>{{ $dataPegawai->name }}</td>
                        <td>{{ $dataPegawai->address }}</td>
                        <td>{{ $dataPegawai->birth }}</td>
                        <td>{{ $dataPegawai->email }}</td>
                        <td>
                        <a href="{{url('/showpegawai/'.$dataPegawai->id)}}" class="btn btn-warning">Edit</a>
                        <a href="{{url('/destroy/'.$dataPegawai->id)}}" class="btn btn-danger">Delete</a></td>
                        </td>
                    </tr>
                    </tbody>
                    @endforeach
                </table>
        </div>
    </section>
@endsection
@endauth