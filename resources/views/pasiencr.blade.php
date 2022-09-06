@auth
@extends('layouts.default')

@section('content')
<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
            <h1>Insert Patient</h1>
            @if($errors->any())
            @foreach($errors->all() as $err)
            <p class="alert alert-danger">{{$err}}</p>
            @endforeach
            @endif
                <form method="POST" action="{{ url('/crpasien') }}">
                @csrf
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
                    <label> Telepon / Handphone <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="telephone" value=""/>
                </div>
                <div class="form-group">
                    <label>Action for Patient</label>
                    <select class="form-control" name="action_id">
                        <option selected>Action</option>
                        <option value=" "> - Choose - </option>
                        @foreach ($tindakan as $item)
                        <option value="{{ $item -> action_id }}"> {{ $item -> action}} </option>
                        @endforeach
                    </select>
                    <small class="form-text text-muted">Action for Patient</small>
                </div> <div class="form-group">
                    <label>Medicine for Patient </label>
                    <select class="form-control" name="medicine_id">
                        <option selected>Medicine</option>
                        <option value=" "> - Choose - </option>
                        @foreach ($obat as $item)
                        <option value="{{ $item -> medicine_id }}"> {{ $item -> medicine}} </option>
                        @endforeach
                    </select>
                    <small class="form-text text-muted">Medicine for Patient </small>
                </div>
                <input type="hidden" name="date" value="<?php echo date("d-m-Y"); ?>">
                <br>
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