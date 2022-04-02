<a href="/">
    <img src="{{ asset("img/logo.png") }}" alt="logo" class="w-20">
</a>
<nav class="flex items-center">
    <a href="" class="font-[Raleway] mr-10 text-sm font-medium text-[#2d2c29]">
        {{ __("О нас") }}
    </a>
    <a href="" class="font-[Raleway] mr-10 text-sm font-medium text-[#2d2c29]">
        {{ __("Больше") }}
    </a>
    @auth
        <a href="{{ route("logout") }}" class="font-[Raleway] text-sm font-medium text-[#2d2c29]">
            {{ __("Выход") }}
        </a>
    @endauth
    @guest
        <a href="{{ route("login") }}" class="font-[Raleway] mr-10 text-sm font-medium text-[#2d2c29]">
            {{ __("Вход") }}
        </a>
        <a href="{{ route("register") }}" class="font-[Raleway] mr-10 text-sm font-medium text-[#2d2c29]">
            {{ __("Регистрация") }}
        </a>
    @endguest
</nav>

