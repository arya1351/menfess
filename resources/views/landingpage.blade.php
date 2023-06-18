<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Menfess</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body class="antialiased bg-neutral">
            <div class="flex flex-col w-full min-h-screen justify-center items-center text-center">
                    <a href="" class="font-bold text-2xl text-white">MenfessVII</a>
                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg rounded-md">
                        <div class="max-w-xl">
                            <p><h1>RULES</h1></p>
                            <p><li>no Rasis dan sara</li></p>
                            <p><li>disarankan menggunakan password yang tidak sama dengan aplikasi lain.</li></p>
                            @if (Route::has('login'))
                    @auth
                    <a  href="{{ url('/timeline') }}" >
                        <button class="ml-4 font-semibold btn btn-success hover:text-gray-200 hover:btn-ghost  ">Timeline</button>
                    </a>
                        @else
                    <a href="{{ route('login') }}" >
                        <button  class="ml-4 font-semibold btn btn-success hover:text-gray-200 hover:btn-ghost ">Log in</button>
                    </a>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" >
                            <button class="ml-4 font-semibold btn btn-info hover:text-gray-200 hover:btn-ghost ">Register</button>
                        </a>
                        @endif
                    @endauth
                </div>
            @endif
                        </div>
                    </div>
        
         

            <div class="m mx-auto p-6 lg:p-8">
              
        </div>
    </body>
</html>
