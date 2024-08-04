@extends('admin.layouts.master')


@section('title')
    Register
@endsection

@section('content')
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            
        @endforeach
    </ul>
</div>

<form action="{{route('login')}}" method="post">
    @csrf

    <label for="email" class="mt-4">Email</label>
    <input type="email" name="email" id="email" class="form-control">

    <label for="password" class="mt-4">Password</label>
    <input type="password" name="password" id="password" class="form-control">


    <button type="submit" class="btn btn-primary mt-4">login</button>

</form>
@endsection