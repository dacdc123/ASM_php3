@extends('admin.layouts.master')


@section('title')
    DashBoard Admin
@endsection

@section('content')
    <h2>Hi, {{ Auth::user()->name }}</h2>

    <form action="{{ route('logout') }}" method="post">
        @csrf

        <button class="btn btn-danger mt-4" type="submit">Logout</button>

    </form>
@endsection
