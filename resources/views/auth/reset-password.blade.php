<x-layout>
    <x-formcard class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Reset Password</h2>
            <p class="mb-4">Remember to set a password that you can remember</p>
        </header>

        <form action="/reset-password" method="POST">
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
                <label for="confirm_password" class="inline-block text-lg-mb-2">Confirm Password</label>
                <input type="password" name="password_confirmation" class="border border-gray-200 rounded p-2 w-full"
                value="{{old('password_confirmation')}}">
                @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

            <!-- Alternatively, a helper can be used to implement the hidden input and token

            {{!! csrf_token() !!}} 
            The above helper is also equivalent to @csrf method

            -->
            
            <div class="mb-6">
                <button class="bg-sky-950 text-white rounded py-2 px-4 hover:bg-sky-700">
                    Reset
                </button>
            </div>


        </form>
    </x-formcard>
    @include('partials._fpage') 
</x-layout>