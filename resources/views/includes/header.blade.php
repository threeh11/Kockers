<nav class="flex items-center justify-start">
    <a href="" class="font-[Raleway] mr-10 text-sm font-medium text-[#2d2c29]">
        {{ __("Галерея") }}
    </a>
    <a href="" class="font-[Raleway] mr-10 text-sm font-medium text-[#2d2c29]">
        {{ __("Музыка") }}
    </a>
    <a href="" class="font-[Raleway] mr-10 text-sm font-medium text-[#2d2c29]">
        {{ __("Проекты") }}
    </a>
</nav>
<a href="/" class="flex justify-center" >
    <img src="{{ asset("img/logo.png") }}" alt="logo" class="w-20">
</a>
<div class="flex justify-end ">
    @auth
        <a href="{{ route("logout") }}" class="font-[Raleway] text-sm font-medium text-[#2d2c29]">
            {{ __("Выход") }}
        </a>
    @endauth
    @guest
        <a href="{{ route("login") }}" class="font-[Raleway] mr-10 text-sm font-medium text-[#2d2c29]">
            {{ __("Вход") }}
        </a>
        <a href="{{ route("register") }}" class="font-[Raleway] text-sm font-medium text-[#2d2c29]">
            {{ __("Регистрация") }}
        </a>
    @endguest
</div>

