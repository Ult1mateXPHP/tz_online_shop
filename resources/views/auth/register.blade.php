@extends('auth.main')

@section('auth.login')
    @include('auth.error')
    <form method="POST" action="">
        <h3 style="position: absolute; margin-top: 0">Зарегистрируйтесь</h3>
        <label>
            <input id="username" type="text" name="name" placeholder="Пользователь">
        </label>
        <label>
            <input id="password" type="text" name="password" placeholder="Пароль">
        </label>
        <input type="submit" value="Отправить">
        @csrf
    </form>
@endsection
