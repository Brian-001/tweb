<x-layout>
    <form action="/car/{{$car->id}}" method="POST" enctype="multipart/form-data" class=" bg-white mt-6 h-[80vh] w-1/2 mx-auto shadow-md" >
        @csrf
        @method('PUT')

        <div class="p-6">
          <div class="mb-6 mt-2 flex items-center justify-center">
            <header class="inline-block">
              <h1 class="font-medium">Mustang Car Details</h1>
              <p>Post a new car</p>
            </header>
          </div>

          <!-- Name field -->
          <div class="mb-6">
            <label for="name" class="mb-2">Name</label>
            <input type="text" name="name" id="name" required min=0 max="1000" 
            value="{{ $car->name }}" class="w-1/2 p-3 border border-slate-800">

            @error('name')
              <p class = "text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
          </div>

          <!-- Horsepower field -->
          <div class="mb-6">
            <label for="horsepower">Horsepower</label>
            <input type="number" name="horsepower" id="horsepower" required min=0 max="1000" 
            value="{{ $car->horsepower }}"class="w-1/2 p-3 border border-slate-800">

            @error('horsepower')
              <p class = "text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

          </div>

          <!-- Top Speed field  -->
          <div class="mb-6">
            <label for="topspeed">Top Speed</label>
            <input type="number" name="topspeed" id="topspeed" required min=0 max="1000" 
            value="{{ $car->topspeed }}" class="w-1/2 p-3 border border-slate-800">

            @error('topspeed')
              <p class = "text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

          </div>

          <!-- Acceleration field -->
          <div class="mb-6">
            <label for="acceleration">Acceleration</label>
            <input type="number" name="acceleration" id="acceleration" required min=0 max="5" 
            value="{{ $car->acceleration }}" class="w-1/2 p-3 border border-slate-800">

            @error('acceleration')
              <p class = "text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

          </div>

          <!-- Model Field -->
          <div class="mb-6">
            <label for="model">Model</label>
            <input type="date" name="model" id="model" 
            value="{{ $car->model }}" class="w-1/2 p-3 border border-slate-800">

            @error('model')
              <p class = "text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

          </div>
          <!-- Price Field -->
          <div class="mb-6">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" 
            value="{{ $car->price }}" class="w-1/2 p-3 border border-slate-800">

            @error('price')
              <p class = "text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

          </div>

          <!-- Image Upload -->
          <div class="mb-6">
            <input type="file" name="image" id="" class="outline-none">
          </div>

          <div class="mb-6 flex items-center justify-center">
            <input type="submit" value="Create" class="bg-slate-800 text-white px-4 py-2 cursor-pointer">
          </div>
        </div>
    </form>
</x-layout>