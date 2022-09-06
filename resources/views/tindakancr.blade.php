@auth
@extends('layouts.default')

@section('content')
<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
            <h1>Insert Medicine</h1>
            @if($errors->any())
            @foreach($errors->all() as $err)
            <p class="alert alert-danger">{{$err}}</p>
            @endforeach
            @endif
                <form method="POST" action="{{ url('/crtindakan') }}">
                @csrf
                <div class="mb-3">
                    <label> Action <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="action" value="" />
                    <small class="form-text text-muted">Action for Patient</small>
                </div>
                <div class="mb-3">
                    <label> Description <span class="text-danger">*</span></label>
                    <input type="textarea" class="form-control" name="description" value=""/>
                </div>
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