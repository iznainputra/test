@auth
@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                <h1>Data Medicine For Patient</h1>
                <br>
                </div>
            </div>
            <a href="{{ url('fobat') }}" class="btn btn-primary"> + Insert Medicine</a>
            <div class="col mt-5">
                <br>
                <table class="table table-striped table-bordered nowrap" style="width:100%" >
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name Medicine</th>
                        <th>Description</th>
                        <th>Option</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $dataObat)
                    <tr>
                    <td>{{ $dataObat->medicine_id }}</td>
                    <td>{{ $dataObat->medicine }}</td>
                    <td>{{ $dataObat->description }}</td>
                    <td>
                        <a href="{{url('/showobat/'.$dataObat->medicine_id)}}" class="btn btn-warning">Edit</a>
                        <a href="{{url('/deobat/'.$dataObat->medicine_id)}}" class="btn btn-danger">Delete</a></td>
                        </td>
                    </tr>
                    </tbody>
                    @endforeach
                    
                </table>
        </div>
    </section>
@endsection
@endauth