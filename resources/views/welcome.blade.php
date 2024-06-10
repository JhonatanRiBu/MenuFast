<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MenuFast</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Styles -->
    </head>
    <body>

        <div class="container- pt-24">
            <div class="text-center mb-5">
                <h1 class="text-5xl">🎉🎉 Bienvenido! 🎉🎉</h1>
                <p class="text-3xl text-gray-600 pt-4">Selecciona...</p>
            </div>
            <div class="flex gap-6 justify-center ml-3 mr-3 items-center">
                <div class="card bg-sky-300 w-1/4 h-80 text-center content-center">
                    <a href="{{route('platos.indice')}}" class="text-4xl hover:text-5xl">PLATOS <br><span class="text-5xl hover:text-6xl">🍽️</span></a>
                </div>
                <div class="card bg-sky-300 w-1/4 h-80 text-center content-center">
                    <a href="{{route('menus.indice')}}" class="text-4xl hover:text-5xl">MENUS <br> <span class="text-5xl hover:text-6xl">📒</span></a>
                </div>
            </div>
        </div>

    </body>
</html>

