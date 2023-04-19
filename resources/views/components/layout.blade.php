<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Ford Mustang')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-sky-950">
    <nav class="flex items-center justify-between p-3 h-[10vh]">

        {{-- logo --}}
        <div>
          <span><a href="#">
            <div class="inline-flex items-center justify-center">
                <img src="{{asset('images/fordbg.png')}}" alt="No image" class="w-16 h-16">
                <h2 class="text-xl text-white "> Ford Mustung</h2>
            </div>    
        </a></span>
        </div>
        @auth
        {{-- navigation links --}}
        <div class="space-x-2 ">
          <span class="text-white p-4"><a href="/">Home</a></span>
          <span class="text-white p-4"><a href="#">Services</a></span>
          <span class="text-white p-4"><a href="{{ route('index') }}">Gallery</a></span>
          <span class="text-white p-4"><a href="#">Contact</a></span>
          
          <span class="text-white p-4">
            <form action="/logout" method="POST" class="inline">
                @csrf
                <button type="submit">Logout</button>
            </form>
          </span>
        </div>
        {{-- <audio controls hidden>
            <source src="/public/audio/Mustanghome.mp3" type="audio/mpeg">
        </audio> --}}
        @else
        {{-- Register/login --}}
        <div class="space-x-2">
            <span class="text-white p-4"><a href="/register">Register</a></span>
            <span class="text-white p-4"><a href="/login">Login</a></span>
        </div>
        @endauth
    </nav>


    <main>
        {{$slot}}
    </main>
</body>
</html>