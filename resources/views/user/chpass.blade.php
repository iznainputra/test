
@auth
@extends('app')
@section('content')
<div class="row">
    <div class="col-md-6">
        @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
        @endif  
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{$err}}</p>
        @endforeach
        @endif
        <form method="POST" action="{{ route('chpass.action') }}">
        @csrf
        <div class="mb-3">
            <label>Old Password <span class="text-danger">*</span></label>
            <input type="password" class="form-control" name="old_password"/>
        </div>
        <div class="mb-3">
            <label> New Password <span class="text-danger">*</span></label>
            <input type="password" class="form-control" name="new_password"/>
        </div>
        <div class="mb-3">
            <label> Password Confirmation <span class="text-danger">*</span></label>
            <input type="password" class="form-control" name="new_password_confirmation"/>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary">Change</button>
            <a class="btn btn-danger" href="{{ route('home') }}">Back</a>
    </form>
    </div>
</div>
@endsection 
@endauth