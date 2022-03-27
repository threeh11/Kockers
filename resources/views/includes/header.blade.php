<a href="/">
    <img src="{{ asset("img/logo.png") }}" alt="logo" class="w-20">
</a>
<nav class="flex items-center">
    <a href="" class="mr-10 text-sm text-white">
        {{ __("О нас") }}
    </a>
    <a href="" class="mr-10 text-sm text-white">
        {{ __("Больше") }}
    </a>
    @auth
        <a href="{{ route("logout") }}" class="text-sm text-white">
            {{ __("Выход") }}
        </a>
    @endauth
    @guest
        <a href="{{ route("login") }}" class="mr-10 text-sm text-white">
            {{ __("Вход") }}
        </a>
        <a href="{{ route("register") }}" class="mr-10 text-sm text-white">
            {{ __("Регистрация") }}
        </a>
    @endguest
</nav>

