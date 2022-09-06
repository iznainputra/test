@extends('app')
@section('content')
    <div class="col-8">
        <h1> LOGIN </h1>
        @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
        @endif  
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{$err}}</p>
        @endforeach
        @endif
        <form method="POST" action="{{ route('login.action') }}">
        @csrf
        <div class="mb-3">
            <label> Username <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="username" value="{{old('username')}}"/>
        </div>
        <div class="mb-3">
            <label> Password <span class="text-danger">*</span></label>
            <input type="password" class="form-control" name="password"/>
            
        <b>do you not have an account?</b><a href="{{ route('register') }}"> Register here</a>
        </div>
        
        <div class="mb-4">
            <button class="btn btn-primary">Login</button>
            
    </form>
    </div>
</div>
@endsection 