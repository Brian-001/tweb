@props(['car'])
 <!-- car Details -->

<div class="h-48 w-96 bg-white rounded hover:shadow-sm hover:shadow-white duration-100">
    <div class="flex flex-row h-full">
        <img src="{{$car->logo? asset('storage/' .$car->logo) : asset('/images/mustung1.jpg')}}" alt="No Image" class="h-full w-1/2 bg-cover rounded-tl rounded-bl">
        <div class="inline-block p-2">
            <h1 class="flex justify-center items-center font-bold">{{$car->name}}</h1>
            <p>HorsePower: <span class="font-sm text-slate-400">{{$car->horsepower}}</span></p>
            <p>Top Speed: <span class="font-sm text-slate-400">{{$car->topspeed}}</span></p>
            <p>Acceleration <span class="font-sm text-slate-400">{{$car->acceleration}}</span></p>
            <p>Model<span class="font-sm text-slate-400">{{$car->model}}</span></p>
            <p>Price: <span class="font-sm text-slate-400">{{$car->price}}</span></p>
            <a href="/cars/{{$car->id}}" class=" bg-slate-700 hover:bg-slate-500 text-white py-1 px-2 rounded">Explore More</a>
        </div>
    </div>
</div> 