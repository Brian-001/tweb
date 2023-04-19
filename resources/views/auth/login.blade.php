<x-layout>
    <x-formcard class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Login</h2>
            <p class="mb-4">Log into your account</p>
            <p>
                @if (session('status'))
                  <div class="mb-4 font-medium text-sm text-green-600">
                      {{ session('status') }}
                  </div>
                @endif
         </p>
        </header>

        <form action="/login" method="POST">
            @csrf
            
            <div class="mb-6">
                <label for="Email" class="inline-block text-lg-mb-2">Email</label>
                <input type="email" name="email" class="border border-gray-200 rounded p-2 w-full"
                value="{{old('email')}}">

                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="Password" class="inline-block text-lg-mb-2">Password</label>
                <input type="password" name="password" class="border border-gray-200 rounded p-2 w-full"
                value="{{old('password')}}">
                
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <button class="bg-sky-950 text-white rounded py-2 px-4 hover:bg-sky-700">
                    Sign in
                </button>
            </div>

            <div class="mt-8">
                <p>
                    Don't have an Account?
                    <a href="/register" class="text-sky-950 hover:text-sky-700">Register</a>
                </p>
            </div>
            <div class="mt-7 mb-7">
                <p>
                    Forgot Password?
                    <a href="/forgot-password" class="text-sky-950 hover:text-sky-700">Change</a>
                </p>
            </div>
        </form>
    </x-formcard>
    @include('partials._fpage') 
</x-layout>