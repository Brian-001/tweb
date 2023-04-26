@props(['cars'])
    <!-- Car Details -->

<div class="h-48 w-96 bg-white rounded hover:shadow-sm hover:shadow-white duration-100">
    <div class="flex flex-row h-full">
        <img src="{{asset('images/mustung1.jpg')}}" alt="No Image" class="h-full w-1/2 bg-cover rounded-tl rounded-bl">
        <div class="inline-block p-2">
            <h1 class="flex justify-center items-center font-bold">{{$car->name}}</h1>
            <p>HorsePower: <span class="font-sm text-slate-400">horsep</span></p>
            <p>Top Speed: <span class="font-sm text-slate-400">topspeed</span></p>
            <p>Acceleration <span class="font-sm text-slate-400">accel</span></p>
            <p>Model<span class="font-sm text-slate-400">$car</span></p>
            <p>Price: <span class="font-sm text-slate-400"> $ price </span></p>
            <a href="#" class=" bg-slate-400 text-white py-1 px-2 rounded">Buy</a>
        </div>
    </div>
</div> 