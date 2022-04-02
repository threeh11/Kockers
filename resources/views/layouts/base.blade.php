<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield("title")</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body class="h-screen flex flex-col justify-between">
    <header class="bg-slate-600 py-4">
        <div class="mx-auto w-[80%] flex justify-between items-center">
            @include("includes.header")
        </div>
    </header>
    <main class="flex bg-slate-700 grow py-6">
        <div class="mx-auto w-[80%]">
            @yield("content")
        </div>
    </main>
    <footer class="bg-slate-800">
        <div class="mx-auto w-[80%] flex justify-between items-center">
            @include("includes.footer")
        </div>
    </footer>
</body>
</html>
