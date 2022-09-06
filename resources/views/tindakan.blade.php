@auth
@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                <h1>Data Action for Patient </h1>
                <br>
                </div>
            </div>
            <a href="{{ url('ftindakan') }}" class="btn btn-primary"> + Insert Patient</a>
            <div class="col mt-5">
                <br>
                <table class="table table-striped table-bordered nowrap" style="width:100%" >
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Action For Patient</th>
                        <th>Description</th>
                        <th>Option</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $dataTindakan)
                    <tr>
                    <td>{{ $dataTindakan->action_id }}</td>
                    <td>{{ $dataTindakan->action }}</td>
                    <td>{{ $dataTindakan->description }}</td>
                    <td>
                        <a href="{{url('/showtindakan/'.$dataTindakan->action_id)}}" class="btn btn-warning">Edit</a>
                        <a href="{{url('/detindakan/'.$dataTindakan->action_id)}}" class="btn btn-danger">Delete</a></td>
                        </td>
                    </tr>
                    </tbody>
                    @endforeach
                </table>
        </div>
    </section>
@endsection
@endauth