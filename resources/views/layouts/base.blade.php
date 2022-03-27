<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield("title")</title>
</head>
<body class="h-screen flex flex-col justify-between">
    <header class="bg-black">
        <div class="mx-auto w-[80%] flex justify-between items-center">
            @include("includes.header")
        </div>
    </header>
    <main class="bg-gray-500 flex grow">
        <div class="mx-auto w-[80%]">
            @yield("content")
        </div>
    </main>
    <footer class="bg-gray-200">
        <div class="mx-auto w-[80%] flex justify-between items-center">
            @include("includes.footer")
        </div>
    </footer>
</body>
</html>
