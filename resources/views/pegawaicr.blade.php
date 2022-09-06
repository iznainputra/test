@auth
@extends('layouts.default')

@section('content')
<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
            <h1>Insert Employee</h1>
            @if($errors->any())
            @foreach($errors->all() as $err)
            <p class="alert alert-danger">{{$err}}</p>
            @endforeach
            @endif
                <form method="POST" action="{{ url('/createpegawai') }}">
                @csrf
                <div class="mb-3">
                    <label> NIK <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="nik" value=""/>
                </div>
                <div class="mb-3">
                    <label> Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name" value=""/>
                </div>
                <div class="mb-3">
                    <label> Address <span class="text-danger">*</span></label>
                    <input type="textarea" class="form-control" name="address" value=""/>
                </div>
                <div class="mb-3">
                    <label> Birth <span class="text-danger">*</span></label>
                    <input type="text" class="form-control datepicker" name="birth">
                </div>
                <div class="mb-3">
                    <label> Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" name="email" value=""/>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Input</button>
                    <a class="btn btn-danger" href="{{ route('home') }}">Back</a>
            </form>
            </div>
        </div>
    </div>
</section>
@endsection
@endauth