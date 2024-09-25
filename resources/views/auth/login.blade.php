@extends('auth.main')

@section('auth.login')
    @include('auth.error')
    <form method="POST" action="">
        <input type="text">
        <input type="submit">
        @csrf
    </form>
@endsection
