
<x-layout>
    <div class="flex justify-center">
        <div class="w-full md:w-2/3 h-full bg-white rounded-md">
            <div class="flex flex-wrap py-6">
                <div class="w-full md:w-1/2 px-6">
                    <img src="{{ asset('storage/' . $car->car_image) }}" alt="Car Image" class="w-full">
                </div>
                <div class="w-full md:w-1/2 px-6">
                  <h2 class="text-2xl font-bold mb-2">{{$car->name}}</h2>
                  <p class="text-gray-700 leading-normal mb-2"><span class="font-bold">HorsePower </span>{{$car->horsepower}}</p>
                  <p class="text-gray-700 leading-normal mb-2"><span class="font-bold">Topspeed </span>{{$car->topspeed}} mph</p>
                  <p class="text-gray-700 leading-normal mb-2"><span class="font-bold">Acceleration </span>{{$car->acceleration}} s</p>
                  <p class="text-gray-700 leading-normal mb-2"><span class="font-bold">Model </span>{{$car->model}}</p>
                  <p class="text-gray-700 leading-normal mb-2"><span class="font-bold">Price </span>{{$car->formatted_price}}</p>
                  <button class="bg-slate-700 hover:bg-slate-500 text-white font-bold py-2 px-4 rounded">Add to Cart</button>
                </div>
            </div>

        </div>
    </div>
</x-layout>