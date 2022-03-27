@extends("layouts.base")

@section('content')
    <form action="" method="POST">
        @csrf
        <label for="login">
            {{ __("Логин") }}
        </label>
        <input type="text" name="login">
        <label for="email">
            {{ __("Почта") }}
        </label>
        <input type="email" name="email">
        <label for="password">
            {{ __("Пароль") }}
        </label>
        <input type="password" name="password">
        <label for="password_confirmation">
            {{ __("Подтвердите пароль") }}
        </label>
        <input type="password" name="password_confirmation">
        <input type="submit" value="{{ __("Зарегистрироваться") }}">
    </form>
    {{ $errors }}
@endsection
