<x-layout>
    {{-- <x-search /> --}}
    @include('partials._search')
   <div class="flex mx-auto">
      <div class="grid grid-col sm:grid-cols-2 md:grid-cols-3 gap-4 mt-6 ml-6 ">
         @foreach ($cars as $car)
           <x-car-card :car="$car" />
        @endforeach
      </div>
   </div>
    <div class="flex justify-center mt-4 gap-4">
      {{ $cars->links('vendor/pagination/tailwind') }} 
  </div>
</x-layout>

