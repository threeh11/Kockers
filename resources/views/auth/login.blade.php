@extends("layouts.base")

@section('content')
    <form action="" method="POST">
        @csrf
        <label for="login">
            {{ __("Логин") }}
        </label>
        <input type="text" name="login">
        <label for="password">
            {{ __("Пароль") }}
        </label>
        <input type="password" name="password">
        <input type="submit" value="{{ __("Войти") }}">
    </form>
@endsection
