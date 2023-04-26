<x-layout>
    @include('partials._search')
   <div class="flex mx-auto">
      <div class="grid grid-col sm:grid-cols-2 md:grid-cols-3 gap-4 mt-6 ml-6 ">
         @unless(count($cars)==0)
            @foreach ($cars as $car)
              <x-car-card :car="$car"/>
            @endforeach
            @else 
            <div class = "w-screen h-screen flex justify-center">
               <p>Sorry! No car posted recently</p>
            </div>
         @endunless
      </div>
   </div>

</x-layout>

