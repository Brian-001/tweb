
<x-layout>
    {{-- <div class="h-48 w-96 bg-white rounded hover:shadow-sm hover:shadow-white duration-100">
        <div class="flex flex-row h-full">
            <img src="{{$car->logo? asset('storage/' .$car->logo) : asset('/images/mustung1.jpg')}}" alt="No Image" class="h-full w-1/2 bg-cover rounded-tl rounded-bl">
            <div class="inline-block p-2">
                <h1 class="flex justify-center items-center font-bold">{{$car->name}}</h1>
                <p>HorsePower: <span class="font-sm text-slate-400">{{$car->horsepower}}</span></p>
                <p>Top Speed: <span class="font-sm text-slate-400">{{$car->topspeed}}</span></p>
                <p>Acceleration <span class="font-sm text-slate-400">{{$car->acceleration}}</span></p>
                <p>Model<span class="font-sm text-slate-400">{{$car->model}}</span></p>
                <p>Price: <span class="font-sm text-slate-400">{{$car->price}}</span></p>
                <a href="#" class=" bg-slate-400 text-white py-1 px-2 rounded">Explore More</a>
            </div>
        </div>
    </div>  --}}

    <div class="flex justify-center">
        <div class="w-full md:w-2/3 h-full bg-white">
            <div class="flex flex-wrap py-6">
                <div class="w-full md:w-1/2 px-6">
                  <img src="{{$car->logo? asset('storage/' .$car->logo) : asset('/images/mustung1.jpg')}}" alt="No Image" class="w-full">
                </div>
                <div class="w-full md:w-1/2 px-6">
                  <h2 class="text-2xl font-bold mb-2">{{$car->name}}</h2>
                  <p class="text-gray-700 leading-normal mb-2"><span class="font-bold">HorsePower </span>{{$car->horsepower}}</p>
                  <p class="text-gray-700 leading-normal mb-2"><span class="font-bold">Topspeed </span>{{$car->topspeed}}</p>
                  <p class="text-gray-700 leading-normal mb-2"><span class="font-bold">Acceleration </span>{{$car->acceleration}}</p>
                  <p class="text-gray-700 leading-normal mb-2"><span class="font-bold">Model </span>{{$car->model}}</p>
                  <p class="text-gray-700 leading-normal mb-2"><span class="font-bold">Price </span>{{$car->price}}</p>
                  <button class="bg-slate-700 hover:bg-slate-500 text-white font-bold py-2 px-4 rounded">Add to Cart</button>
                </div>
            </div>

        </div>
    </div>
</x-layout>