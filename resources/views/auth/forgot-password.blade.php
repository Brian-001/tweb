<x-layout>
<x-formcard class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Forgot Password</h2>
            <p class="mb-4">Write your email address and submit to get reset password link
                in your email inbox
            </p>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{session('status')}}
            </div>
        @endif
        </header>

        <form action="/forgot-password" method="POST">
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
                <button class="bg-sky-950 text-white rounded py-2 px-4 hover:bg-sky-700">
                    Submit
                </button>
            </div>

            
        </form>
    </x-formcard>
    
</x-layout>