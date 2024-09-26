@extends('auth.main')

@section('auth.login')
    @include('auth.error')
    <form method="POST" action="">
        <h3 style="position: absolute; margin-top: 0">Авторизуйтесь</h3>
        <label>
            <input type="text" name="token" placeholder="Токен">
        </label>
        <input type="submit" value="Отправить">
        @csrf
    </form>
@endsection
