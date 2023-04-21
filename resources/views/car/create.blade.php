<x-layout>
    <form action="#" method="POST" class=" bg-white mt-6 h-[80vh] w-1/2 mx-auto shadow-md" >
        @csrf
        <div class="p-6">
          <div class="mb-6 mt-2 flex items-center justify-center">
            <header class="inline-block">
              <h1 class="font-medium">Mustang Car Details</h1>
              <p>Post a new car</p>
            </header>
          </div>

          <!-- Name field -->
          <div class="mb-6">
            <label for="horsepower" class="mb-2">Name</label>
            <input type="text" name="horsepower" id="horsepower" required min=0 max="1000" 
            value="{{ old('name') }}" class="w-1/2 p-3 border border-slate-800">
          </div>

          <!-- Horsepower field -->
          <div class="mb-6">
            <label for="horsepower">Horsepower</label>
            <input type="number" name="horsepower" id="horsepower" required min=0 max="1000" 
            value="{{ old('horsepower')}}"class="w-1/2 p-3 border border-slate-800">
          </div>

          <!-- Top Speed field  -->
          <div class="mb-6">
            <label for="topspeed">Top Speed</label>
            <input type="number" name="topspeed" id="topspeed" required min=0 max="1000" 
            value="{{ old('topspeed')}}" class="w-1/2 p-3 border border-slate-800">
          </div>

          <!-- Acceleration field -->
          <div class="mb-6">
            <label for="acceleration">Acceleration</label>
            <input type="number" name="acceleration" id="acceleration" required min=0 max="5" 
            value="{{ old('acceleration') }}" class="w-1/2 p-3 border border-slate-800">
          </div>

          <!-- Model Field -->
          <div class="mb-6">
            <label for="model">Model</label>
            <input type="date" name="w-1/2 model" id="model" 
            value="{{ old('model') }}" class="w-1/2 p-3 border border-slate-800">
          </div>

          Image Upload
          <div class="mb-6">
            <input type="file" name="image" id="" class="outline-none">
          </div>

          <div class="mb-6 flex items-center justify-center">
            <input type="submit" value="Create" class="bg-slate-800 text-white px-4 py-2 cursor-pointer">
          </div>
        </div>
    </form>
</x-layout>