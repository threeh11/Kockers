@extends("layouts.base")
@section("content")
    <div>
        <h1 class="text-4xl font-semibold">
            {{ __("Навигация") }}
        </h1>
        <div class="grid grid-rows-2 grid-cols-2 gap-5">
            <div class="p-5 border-2 rounded-md boder-gray-300">
                <a href="" class="text-xl font-semibold">
                    {{ __("Заголовок") }}
                </a>
                <div>
                    {{ __("Content") }}
                </div>
            </div>
            <div class="p-5 border-2 rounded-md boder-gray-300">
                <a href="" class="text-xl font-semibold">
                    {{ __("Заголовок") }}
                </a>
                <div>
                    {{ __("Content") }}
                </div>
            </div>
            <div class="p-5 border-2 rounded-md boder-gray-300">
                <a href="" class="text-xl font-semibold">
                    {{ __("Заголовок") }}
                </a>
                <div>
                    {{ __("Content") }}
                </div>
            </div>
            <div class="p-5 border-2 rounded-md boder-gray-300">
                <a href="" class="text-xl font-semibold">
                    {{ __("Заголовок") }}
                </a>
                <div>
                    {{ __("Content") }}
                </div>
            </div>
        </div>
    </div>
@endsection
