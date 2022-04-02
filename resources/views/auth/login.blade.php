@extends("layouts.base")

@section('content')
<div class="my-10 w-[20%] m-auto">
    <h2 class="my-3 font-[Raleway] text-[#2d2c29] font-bold text-[26px]">
        Вход
    </h2>
    <form action="" method="POST" class="grid grid-rows-5 gap-4 ">
        @csrf
        <div class="flex flex-col">
            <label for="login" class="font-[Raleway] text-[#2d2c29] font-bold">
            {{ __("Логин") }}
            </label>
            <input type="text" name="login" class="border rounded-[5px] p-1 text-lg font-normal text-gray-600">
        </div>
        <div class="flex flex-col">
            <label for="password" class="font-[Raleway] text-[#2d2c29] font-bold">
                {{ __("Пароль") }}
            </label>
            <input type="password" name="password" class="border rounded-[5px] p-1 text-lg font-normal text-gray-600">
        </div>
        <input type="submit" value="{{ __("Войти") }}" class="border rounded-[10px] text-lg h-min py-2 cursor-pointer font-bold ">
    </form>
</div>
@endsection
