<x-layout>
    @include('partials._search')
   <div class="flex mx-auto">
      <div class="grid grid-col sm:grid-cols-2 md:grid-cols-3 gap-4 mt-6 ml-6 ">
         @foreach ($cars as $car)
           <x-car-card :car="$car" />
        @endforeach

         
      </div>
   </div>
   <div class="mt-6 p-4">
        {{$cars->links()}}
    </div>
</x-layout>

