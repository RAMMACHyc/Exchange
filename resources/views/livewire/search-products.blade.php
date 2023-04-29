



<div id="cont-pop" class="fixed inset-0  z-10 hidden  overflow-y-auto p-4 sm:p-6 md:p-20" style="height:83%;" wire:ignore >

  <div class="fixed inset-0 bg-gray-500 backdrop-filter backdrop-blur-md bg-opacity-25 transition-opacity duration-300 ease-in-out
" ></div>

  <div class="mx-auto max-w-2xl transform divide-y divide-gray-500 divide-opacity-10 overflow-hidden rounded-xl bg-white bg-opacity-80 shadow-2xl ring-1 ring-black ring-opacity-5 backdrop-blur backdrop-filter transition-all">
    <div class="relative ">
      <!-- Heroicon name: solid/search -->
      <svg class="pointer-events-none absolute top-3.5 left-4 h-5 w-5 text-gray-900 text-opacity-40" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" >
        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"  />
      </svg>
      <input type="text"  class="h-12 w-full bg-transparent pl-11 pr-4 text-gray-900 placeholder-gray-500  sm:text-sm" placeholder="Search..."  wire:model="searchQuery">
    </div>

   
    @foreach($products as $product)
    <ul class="max-h-80 scroll-py-2 divide-y divide-gray-500 divide-opacity-10 overflow-y-auto">
   
      <li class="p-2">
        <h2 class="mt-4 mb-2 px-3 text-xs font-semibold text-gray-900">{{ $product->productName}}</h2>
        <ul class="text-sm text-gray-700">
         
          <li class="group flex cursor-default select-none items-center rounded-md px-3 py-2">
         
            <img class="w-12 h-12" src="{{ asset('images/'.$product->image_path) }}" alt="">
            <span class="ml-3 flex-auto truncate">{{ $product->description}}</span>
          
            <span class="ml-3 hidden flex-none text-gray-500">Jump to...</span>
          </li>
        </ul>

     
      </li>
      
      
    </ul>

   @endforeach

   
  </div>
  
</div>





