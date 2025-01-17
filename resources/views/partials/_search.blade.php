<div class="flex justify-center items-center">
  <div class="relative">
    <div class="absolute top-4 left-3">
      <x-ei-search class="w-6 h-6"/>
    </div>
    <form action="{{route('index')}}">
      <input type="search" name="search" class="h-14 w-96 pl-10 pr-10 rounded-lg outline-none border-none" placeholder="Search Cars..">
      <div class="absolute top-2 right-2">
        <button type="submit" class="px-4 py-2 text-white bg-slate-700 hover:bg-slate-900 rounded-lg">Search</button>
      </div>
    </form>
  </div>
</div>













<!-- <x-ei-search class="text-blue-900 w-6 h-6 inline"/> -->