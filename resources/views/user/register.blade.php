@extends('app')
@section('content')
    <div class="col-8">
        <h1> REGISTRATION </h1>
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{$err}}</p>
        @endforeach
        @endif
        <form method="POST" action="{{ route('register.action') }}">
        @csrf
        <div class="mb-1">
            <label> Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="name" value="{{old('name')}}"/>
        </div>
        <div class="mb-1">
            <label> Address <span class="text-danger">*</span></label>
            <input type="textarea" class="form-control" name="address" value="{{old('address')}}"/>
        </div>
        <div class="form-group">
            <label>Role</label>
            <select class="form-control" name="role">
                <option selected>Role</option>
                <option value="user">User</option>
                <option value="pegawai">Employee</option>
            </select>
            <small class="form-text text-muted">Your Role type</small>
        </div>
        <div class="mb-1">
            <label> Email <span class="text-danger">*</span></label>
            <input type="email" class="form-control" name="email" value="{{old('email')}}"/>
        </div>
        <div class="mb-1">
            <label> Username <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="username" value="{{old('username')}}"/>
        </div>
        <div class="mb-1">
            <label> Password <span class="text-danger">*</span></label>
            <input type="password" class="form-control" name="password"/>
        </div>
        <div class="mb-2">
            <label> Password Confirmation <span class="text-danger">*</span></label>
            <input type="password" class="form-control" name="password-confirmation"/>
        </div>
        <div class="mb">
            <button class="btn btn-primary">Register</button>
            <a class="btn btn-danger" href="{{ route('login') }}">Back</a>
    </form>
    </div>

@endsection 