<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=ABeeZee&family=Caveat:wght@400;500&family=Hanalei&family=Kavoon&family=Lato:wght@100;300;400;700&family=Lobster+Two:ital@0;1&family=Roboto:ital,wght@0,100;0,300;0,500;0,900;1,100;1,500&family=Satisfy&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=ABeeZee&family=Caveat:wght@400;500&family=Hanalei&family=Kavoon&family=Lato:wght@100;300;400;700&family=Lobster+Two:ital@0;1&family=Roboto:ital,wght@0,100;0,300;0,500;0,900;1,100;1,500&family=Satisfy&family=Sora:wght@300;400;500;600&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@livewireStyles
@vite(['resources/css/style.css', 'resources/js/script.js'])
</head>
<body>

<!-- <div class="section-annonce  bg-green-200">
  
  <div >
    <div class="announcement-promo h-8">
      
      <p class="text-gray-800 flex text-lg"><svg xmlns="http://www.w3.org/2000/svg" class="m-1" width="18" height="18" fill="black" class="bi bi-shield-check" viewBox="0 0 16 16">
  <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
  <path d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
</svg></i>security</p>
      <p class="text-gray-800 text-lg"><i class="fas fa-certificate" aria-hidden="true"></i> qualité Garantie</p>
      <p class="text-gray-800 text-lg"><i class="fa fa-bolt" aria-hidden="true"></i>Vente Flash</p>
      <p class="text-gray-800 text-lg"><i class="fa fa-tag fa-lg" aria-hidden="true"></i>Promotions</p>
    </div>
  </div>
</div> -->
  
<div class="container">
<nav id="navbar" class="fixed w-full z-20 top-0 left-0  ">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto ">
  <a href="#" class="flex items-center">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="70" zoomAndPan="magnify" viewBox="0 0 375 374.999991"  preserveAspectRatio="xMidYMid meet" version="1.0"><defs><clipPath id="be1f2c0e82"><path d="M 78 55 L 299.449219 55 L 299.449219 312 L 78 312 Z M 78 55 " clip-rule="nonzero"/></clipPath></defs><g clip-path="url(#be1f2c0e82)"><path fill="#16a9d6" d="M 136.984375 231.453125 C 135.820312 226.472656 138.601562 221.390625 143.460938 219.730469 L 158.949219 214.292969 L 156.164062 206.496094 C 149.6875 188.226562 159.355469 168.097656 177.726562 161.660156 C 196.097656 155.21875 216.34375 164.828125 222.824219 183.09375 L 225.605469 190.894531 L 241.09375 185.460938 C 245.953125 183.75 251.316406 185.964844 253.542969 190.542969 L 289.378906 263.8125 L 299.09375 143.339844 C 299.652344 136.347656 294.84375 130.058594 287.960938 128.699219 L 265.945312 124.421875 L 268.121094 113.300781 C 273.234375 87.234375 256.125 61.921875 229.90625 56.789062 C 203.691406 51.707031 178.234375 68.714844 173.070312 94.78125 L 170.894531 105.902344 L 148.878906 101.625 C 141.941406 100.265625 135.109375 104.292969 132.984375 110.984375 L 78.929688 280.820312 C 76.347656 288.921875 81.460938 297.476562 89.863281 299.136719 L 155.609375 311.96875 Z M 261.996094 144.597656 C 261.339844 147.921875 258.097656 150.085938 254.757812 149.429688 C 251.417969 148.777344 249.242188 145.554688 249.898438 142.234375 C 250.558594 138.914062 253.796875 136.75 257.136719 137.402344 C 260.425781 138.058594 262.65625 141.277344 261.996094 144.597656 Z M 185.269531 97.195312 C 189.113281 77.824219 208.042969 65.140625 227.578125 68.917969 C 247.117188 72.691406 259.820312 91.5625 256.023438 110.984375 L 253.847656 122.105469 L 183.089844 108.316406 Z M 174.234375 121.25 C 177.574219 121.90625 179.75 125.125 179.09375 128.445312 C 178.433594 131.769531 175.195312 133.929688 171.855469 133.277344 C 168.515625 132.625 166.339844 129.402344 166.996094 126.082031 C 167.605469 122.761719 170.84375 120.597656 174.234375 121.25 Z M 174.234375 121.25 " fill-opacity="1" fill-rule="nonzero"/></g><path fill="#16a9d6" d="M 214.320312 186.0625 C 209.511719 172.476562 194.429688 165.28125 180.710938 170.113281 C 167.046875 174.894531 159.808594 189.890625 164.667969 203.527344 L 167.453125 211.324219 L 217.101562 193.914062 Z M 214.320312 186.0625 " fill-opacity="1" fill-rule="nonzero"/><path fill="#16a9d6" d="M 166.691406 222.75 C 164.363281 223.554688 163.097656 226.121094 163.960938 228.484375 C 164.769531 230.800781 167.351562 232.058594 169.730469 231.203125 C 172.058594 230.398438 173.324219 227.832031 172.460938 225.464844 C 171.652344 223.152344 169.070312 221.894531 166.691406 222.75 Z M 166.691406 222.75 " fill-opacity="1" fill-rule="nonzero"/><path fill="#16a9d6" d="M 227.882812 210.773438 C 230.210938 209.96875 231.476562 207.402344 230.617188 205.035156 C 229.808594 202.71875 227.226562 201.460938 224.847656 202.316406 C 222.46875 203.171875 221.253906 205.691406 222.113281 208.054688 C 222.972656 210.371094 225.554688 211.628906 227.882812 210.773438 Z M 227.882812 210.773438 " fill-opacity="1" fill-rule="nonzero"/><path stroke-linecap="butt" transform="matrix(1.539404, 0.29809, -0.296732, 1.532388, 146.753433, 302.584199)" fill="none" stroke-linejoin="miter" d="M -0.0000625621 2.49929 L 45.286909 2.499554 " stroke="#16a9d6" stroke-width="5" stroke-opacity="1" stroke-miterlimit="4"/><path stroke-linecap="round" transform="matrix(7.697017, 1.49045, -1.483658, 7.661941, 219.576451, 320.660252)" fill="none" stroke-linejoin="round" d="M -2.500096 -1.499956 L -0.500196 -0.0000876759 L -2.499911 1.499819 " stroke="#16a9d6" stroke-width="1" stroke-opacity="1" stroke-miterlimit="4"/><path stroke-linecap="butt" transform="matrix(-1.524741, -0.329028, 0.329242, -1.525733, 179.672952, 294.813057)" fill="none" stroke-linejoin="miter" d="M -0.000195213 2.499206 L 45.535476 2.500427 " stroke="#ffffff" stroke-width="5" stroke-opacity="1" stroke-miterlimit="4"/><path stroke-linecap="round" transform="matrix(-7.623704, -1.64514, 1.646211, -7.628667, 107.255469, 275.193937)" fill="none" stroke-linejoin="round" d="M -2.499797 -1.500071 L -0.499861 0.0000857661 L -2.500126 1.500093 " stroke="#ffffff" stroke-width="1" stroke-opacity="1" stroke-miterlimit="4"/></svg>
      <!-- <span class="self-center text-xl font-semibold whitespace-nowrap text-gradient-to-r from-cyan-500 to-blue-500 " style="font-family: 'Sora', sans-serif;">Exproduct</span> -->
  </a>
  <div class="flex md:order-2">
      <!-- <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get started</button> -->
      <a href="#" class="display-picture"><img src="https://i.pravatar.cc/85" alt=""></a>
      
      <div class="card hidden">
        <ul>
          <li><a href="/profile">Profile</li></a>
          <li><a href="/dashboard">dashboard</li></a>
          <li><a href="/chatify">Chat</li></a>
          <li><form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form></li>
          
        </ul>
      </div>
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg  md:flex-row md:space-x-8 md:mt-0 md:border-0  ">
      <li>
        <a href="/home" class="block py-2 pl-3 pr-4 text-gray-800 rounded md:bg-transparent md:text-gray-700 md:p-0 " aria-current="page">Home</a>
      </li>
      <li>
        <a href="/products" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">Products</a>  
      </li>
      <!-- <li>
        <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">Profiles</a>
      </li> -->
      <li>
        <a href="/contact" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">Contact</a>
      </li>
    </ul>
   
  </div>
  </div>
</nav>


<div class="mt-6 sm:mt-10 flex justify-center space-x-6 text-sm" id="open" style=" margin-top: 9%;"><button type="submi" class="hidden sm:flex items-center w-72 text-left space-x-3 px-4 h-12 bg-white ring-1 ring-slate-900/10 hover:ring-slate-300 focus:outline-none focus:ring-2 focus:ring-sky-500 shadow-sm rounded-lg text-slate-400 " ><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="flex-none text-slate-300 dark:text-slate-400" ><path d="m19 19-3.5-3.5"></path><circle cx="11" cy="11" r="6"></circle></svg><span class="flex-auto">Quick search...</span><kbd class="font-sans font-semibold dark:text-slate-500"><abbr title="Control" class="no-underline text-slate-300 ">Ctrl </abbr> K</kbd></button>

</div>
@include('components.alert')
<div>
 
  
  <div class="flex flex-col flex-1">

    <main class="flex-1">
      <!------------------------------->
      <div class="py-6">
       
        <div class="max-w-7xl mx-auto  ">
          <!-- Replace with your content -->
          <div id="close" class="relative z-10 flex items-baseline justify-between pb-4 border-b border-gray-200">
        <h1 class="text-2xl font-bold tracking-tight text-gray-900">All Products</h1>
       
        

        @livewire('search-products')
       
 


        <div class="flex items-center">
          <div class="relative inline-block text-left">
          <div>
                <!-- <a href="{{ route('products.index', ['category' => 'ELECTRONIC']) }}">ELECTRONIC</a>
                  <a href="{{ route('products.index', ['category' => 'FURNITURE']) }}">FURNITURE</a>
                     <a href="{{ route('products.index', ['category' => 'VEHICLES']) }}">VEHICLES</a> -->
                             <div>
                                               <!-- @livewire('product-filter') -->
</div>
</div>
            
        
           
          </div>

          <button id="view-grid"  type="button" class="p-2 -m-2 ml-5 sm:ml-7 text-gray-400 hover:text-gray-500">
            <span class="sr-only">View grid</span>
            <!-- Heroicon name: solid/view-grid -->
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
            </svg>
          </button>
          <button type="button" class="p-2 -m-2 ml-4 sm:ml-6 text-gray-400 hover:text-gray-500 lg:hidden">
            <span class="sr-only">Filters</span>
            <!-- Heroicon name: solid/filter -->
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
      </div>
    
    
    


      <div id="scroll" class="overflow-x-scroll pb-10 hide-scroll-bar ">
    <div id="grid" class="grid grid-flow-col-dense ">
    @foreach ($products as $product)
    <div class="w-80 rounded-sm overflow-hidden shadow-lg m-2 inline-block box">
      <div class="h-64 bg-cover relative ">
        <a href="/products/{{$product->id}}"><img  src="{{ asset('images/'.$product->image_path) }}"   class="h-full w-full object-cover view"></a>
        <div><svg xmlns="http://www.w3.org/2000/svg" class="icon"  style="position: absolute;  right: 50%; bottom: 50%; display: none;" width="30" height="30" fill="white" class="bi bi-eye" viewBox="0 0 16 16">
        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
        </svg>
        <span id="spani" class="electronics w-28 text-center border-l border-r-4 border-gray-600" >{{ $product->productCategory }}</span>
        <button  class="absolute top-1  right-0 z-10 openFavorite">
       <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="40px" height="40px"><radialGradient id="0s9AHyobNDm8hduiB_Ah9a" cx="-117.362" cy="41.791" r="180.784" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#f5e3a5"/><stop offset=".25" stop-color="#f8e9b6"/><stop offset=".724" stop-color="#fcf2d2"/><stop offset="1" stop-color="#fef5dc"/></radialGradient><path fill="url(#0s9AHyobNDm8hduiB_Ah9a)" d="M59.5,33h-4.401c-0.982,0-1.893-0.663-2.066-1.63C53.011,31.244,53,31.119,53,30.996 c0.002-1.06,0.829-1.927,1.873-1.992c1.515-0.095,2.906-1.098,3.101-2.604C57.991,26.264,58,26.13,58,25.997 C57.998,24.342,56.656,23,55,23h-5v-4.941c0.626-0.641,1.492-1.047,2.456-1.059c0.001,0,0.002,0,0.003,0c0.004,0,0.007,0,0.01,0 c0.001,0,0.003,0,0.004,0c0.003,0,0.007,0,0.01,0c0.001,0,0.002,0,0.004,0c0.005,0,0.009,0,0.013,0h1.802 c1.884,0,3.574-1.402,3.691-3.278c0.001-0.011,0.001-0.022,0.002-0.033C57.998,13.625,58,13.563,58,13.5c0-1.933-1.567-3.5-3.5-3.5 H47h-6l7,7H14v-3h-2.302c-1.896,0-3.594,1.419-3.693,3.311c-0.001,0.024-0.002,0.047-0.003,0.071C7.937,19.369,9.528,21,11.5,21H14 v7H9c-1.381,0-2.5,1.119-2.5,2.5S7.619,33,9,33h0.5c1.381,0,2.5,1.119,2.5,2.5c0,1.381-1.119,2.5-2.5,2.5H4.17 c-1.625,0-3.081,1.217-3.166,2.839C1.002,40.893,1,40.947,1,41c0,1.656,1.343,3,3,3h4.893c0.996,0,1.919,0.681,2.08,1.664 C10.991,45.777,11,45.888,11,45.997C11.001,47.103,10.106,48,9,48H8.17c-1.624,0-3.081,1.217-3.165,2.839 C5.002,50.893,5,50.947,5,51c0,1.656,1.343,3,3,3h6v-2l18-11l18,11h4.83c1.57,0,3.083-1.271,3.165-2.839 C58.086,47.431,56.71,46,55,46h-0.013c-0.006,0-0.011,0-0.017,0c-0.777,0-1.539-0.254-2.078-0.768 c-0.17-0.162-0.318-0.35-0.438-0.564C51.166,42.35,52.809,40,55,40h4.302c1.896,0,3.595-1.42,3.693-3.313 C63.1,34.669,61.495,33,59.5,33z"/><radialGradient id="0s9AHyobNDm8hduiB_Ah9b" cx="-9.546" cy="31.613" r="14.612" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#f5e3a5"/><stop offset=".25" stop-color="#f8e9b6"/><stop offset=".724" stop-color="#fcf2d2"/><stop offset="1" stop-color="#fef5dc"/></radialGradient><path fill="url(#0s9AHyobNDm8hduiB_Ah9b)" d="M5,30.5C5,29.119,3.881,28,2.5,28C1.119,28,0,29.119,0,30.5S1.119,33,2.5,33 C3.881,33,5,31.881,5,30.5z"/><linearGradient id="0s9AHyobNDm8hduiB_Ah9c" x1="32" x2="32" y1="56.969" y2="10" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#ff634d"/><stop offset=".204" stop-color="#fe6464"/><stop offset=".521" stop-color="#fc6581"/><stop offset=".794" stop-color="#fa6694"/><stop offset=".989" stop-color="#fa669a"/><stop offset="1" stop-color="#fa669a"/></linearGradient><path fill="url(#0s9AHyobNDm8hduiB_Ah9c)" d="M47.08,56.969L47.08,56.969c-0.697,0-1.371-0.249-1.9-0.703l-11.064-9.484 c-1.217-1.043-3.014-1.043-4.231,0L18.82,56.266c-0.529,0.454-1.203,0.703-1.9,0.703h0c-1.613,0-2.92-1.307-2.92-2.92V14 c0-2.209,1.791-4,4-4h28c2.209,0,4,1.791,4,4v40.049C50,55.662,48.693,56.969,47.08,56.969z"/></svg> -->
       <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24" fill="none">
<path d="M13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6C12.5523 6 13 5.55228 13 5Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
       <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="40px" height="40px" ><path fill="#ffff"  d="M37,43l-13-6l-13,6V9c0-2.2,1.8-4,4-4h18c2.2,0,4,1.8,4,4V43z"/></svg> -->
</button>
<livewire:favorite-product-button :product="$product" wire:key="product-{{ $product->id }}" />
        </div>
      </div>
      <div class="mx-6 my-4 border-b border-gray-300">
        <div class="font-medium text-base text-gray-700 mb-4">{{ $product->productName }}</div>
        <p class="font-normal text-gray-600 text-sm mb-2">{{ $product->description }}.</p>
       
      </div>
      <div class="flex m-2">
        <a href="{{ route('profile.edit') }}">
        <img class="w-12 h-12 rounded-lg skeleton" src="{{ asset('images/image1.png') }}" alt="">
        </a>
        <h1 class="flex items-center m-2">{{$product->user->name}}
          <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" width="16" height="16" class="style-scope yt-icon" style="pointer-events: none; "><g class="style-scope yt-icon"><path d="M12,2C6.5,2,2,6.5,2,12c0,5.5,4.5,10,10,10s10-4.5,10-10C22,6.5,17.5,2,12,2z M9.8,17.3l-4.2-4.1L7,11.8l2.8,2.7L17,7.4 l1.4,1.4L9.8,17.3z" class="style-scope yt-icon"></path></g></svg></h1>

          <p class="text-xs text-gray-400 " style=" margin-top:15px;margin-left: 29%;"> {{$product->created_at->diffForHumans()}}</p>
          
      </div>
      <a href="/products/{{$product->id}}/exchange" class="inline-flex justify-center border-t border-gray-300 items-center bg-blue-400 hover:bg-blue-500  py-2 px-4 w-full focus:outline-none focus:shadow-outline">
 
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-5" width="25px" height="25px" viewBox="0 0 512 512"><path fill="white" d="M258.148 20.822c-1.112.008-2.226.026-3.343.055-39.32 1.041-81.507 15.972-123.785 50.404l-6.028 4.91-5.732-5.25c-12.644-11.578-20.276-27.633-25.653-43.716-8.974 36.98-14.631 81.385-9.232 114.523 18.065.908 45.409-2.177 73.7-7.818 17.858-3.561 36.048-8.126 53.064-13.072-13.419-2.911-25.896-6.882-38.143-12.082l-16.088-6.832 14.906-9.127c46.367-28.393 80.964-40.686 120.235-35.553 33.105 4.327 69.357 20.867 119.066 47.271-25.373-36.314-62.243-64.737-104.728-76.994-15.402-4.443-31.553-6.828-48.239-6.719zM346 116c-46.667 0-46.666 0-46.666 46.666V349.4c0 9.596.007 17.19.414 23.242a664.804 664.804 0 0 1 50.656-12.223c24.649-4.915 48.367-8.224 67.916-8.41 6.517-.062 12.571.224 18.041.912l6.31.793 1.358 6.213c2.464 11.265 3.673 23.447 3.914 36.059 38.032-.19 38.057-3.06 38.057-46.65V162.665C486 116 486 116 439.334 116a226.98 226.98 0 0 1 3.978 7.64l12.624 25.536-25.004-13.648c-13.085-7.143-25.164-13.632-36.452-19.528zm-281.943.016c-38.032.19-38.057 3.06-38.057 46.65V349.4C26 396 26 396 72.666 396a226.98 226.98 0 0 1-3.978-7.64l-12.624-25.536 25.004 13.649c13.085 7.142 25.164 13.632 36.452 19.527H166c46.667 0 46.666 0 46.666-46.666V162.666c0-9.626-.006-17.24-.416-23.304a664.811 664.811 0 0 1-50.654 12.22c-32.865 6.554-64.077 10.25-85.957 7.498l-6.31-.793-1.358-6.213c-2.464-11.265-3.673-23.446-3.914-36.058zm354.619 254.078c-17.543.25-40.826 3.206-64.75 7.977-17.859 3.56-36.05 8.125-53.065 13.072 13.419 2.91 25.896 6.881 38.143 12.082l16.088 6.832-14.906 9.127c-46.367 28.392-80.964 40.685-120.235 35.553-33.105-4.327-69.357-20.868-119.066-47.272 25.373 36.315 62.243 64.738 104.728 76.994 52.573 15.166 113.872 6.343 175.367-43.74l6.028-4.91 5.732 5.25c12.644 11.579 20.276 27.633 25.653 43.717 8.974-36.981 14.631-81.386 9.232-114.524-2.788-.14-5.748-.204-8.95-.158z"/></svg>

</a>


      
    </div>
    @endforeach
  
   
   
    
   
  
  
  </div>

  </div>





  
 
          <!-- /End replace -->
        </div>
      </div>


      <div class="flex justify-center">
              <img  class="w-24 h-24" src="{{ asset('images/ktabo.png') }}" alt="">
              </div>
      <!-- ------------------------- -->
      <div class="py-6">
       
        <div class="max-w-7xl mx-auto">
          <!-- Replace with your content -->
          <div id="close" class="relative z-10 flex items-baseline justify-between pb-4 border-b border-gray-200">
            <div class="flex">
              <svg id="SvgjsSvg1029" width="26" height="26" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"><defs id="SvgjsDefs1030"></defs><g id="SvgjsG1031"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="26" height="26"><path fill="#fc987a" d="M28.895 13.718A12.375 12.375 0 0 1 16.52 26.093 12.375 12.375 0 0 1 4.145 13.718 12.375 12.375 0 0 1 16.52 1.343a12.375 12.375 0 0 1 12.375 12.375z" class="colorfc987a svgShape"></path><g fill="#3a3640" fill-rule="evenodd" color="#000" font-family="sans-serif" font-weight="400" class="color3a3640 svgShape"><path d="M2913.334 2034.002v5.5h1v-5.5zm-6.809 4.717a.5.5 0 0 0-.181.029l-1.797.611-1.797.61-3.596 1.222a.5.5 0 1 0 .32.946l3.596-1.221 1.8-.611 1.796-.61a.5.5 0 0 0-.14-.976zm1.973-.686a.5.5 0 0 0-.13.027l-.225.076a.5.5 0 1 0 .32.948l.224-.076a.5.5 0 0 0-.189-.975z" overflow="visible" style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;white-space:normal;isolation:auto;mix-blend-mode:normal;solid-color:#000;solid-opacity:1" transform="translate(-2885.585 -2014.346)" fill="#000000" class="color000 svgShape"></path><path d="M2913.666 2036.277a.5.5 0 0 0-.13.027l-1.8.612-.898.304-.898.307a.5.5 0 1 0 .322.945l.898-.304.899-.305 1.797-.611a.5.5 0 0 0-.19-.975z" overflow="visible" style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;white-space:normal;isolation:auto;mix-blend-mode:normal;solid-color:#000;solid-opacity:1" transform="translate(-2885.585 -2014.346)" fill="#000000" class="color000 svgShape"></path><path d="M2904.064 2017.002a.5.5 0 0 0-.146.027l-15.996 5.5a.5.5 0 0 0-.338.473v5.5a.5.5 0 0 0 .088.283l10.998 16a.5.5 0 0 0 .574.19l15.996-5.5a.5.5 0 1 0-.326-.946l-15.637 5.377-10.693-15.559v-4.988l15.299-5.26 10.41 15.143-15.375 5.287a.5.5 0 1 0 .326.945l15.996-5.5a.5.5 0 0 0 .248-.756l-10.996-16a.5.5 0 0 0-.427-.216z" overflow="visible" style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;white-space:normal;isolation:auto;mix-blend-mode:normal;solid-color:#000;solid-opacity:1" transform="translate(-2885.585 -2014.346)" fill="#000000" class="color000 svgShape"></path><path d="M2888.242 2022.633a.5.5 0 0 0-.4.787l3.664 5.373a.5.5 0 1 0 .826-.564l-3.664-5.372a.5.5 0 0 0-.426-.224zm4.666 6.838a.5.5 0 0 0-.402.787l.668.976a.5.5 0 1 0 .824-.564l-.666-.977a.5.5 0 0 0-.424-.222zm1.666 2.441a.5.5 0 0 0-.402.787l4.334 6.35a.5.5 0 1 0 .824-.565l-4.332-6.347a.5.5 0 0 0-.424-.225z" overflow="visible" style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;white-space:normal;isolation:auto;mix-blend-mode:normal;solid-color:#000;solid-opacity:1" transform="translate(-2885.585 -2014.346)" fill="#000000" class="color000 svgShape"></path><path d="M2898.584 2039.002v5.5h1v-5.5z" overflow="visible" style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;white-space:normal;isolation:auto;mix-blend-mode:normal;solid-color:#000;solid-opacity:1" transform="translate(-2885.585 -2014.346)" fill="#000000" class="color000 svgShape"></path></g></svg></g></svg>
        <h1 class="text-2xl font-bold tracking-tight text-gray-900 border-b-2 border-red-300">Books</h1>
       
        </div>

        @livewire('search-products')
       
 


        <div class="flex items-center">
          <div class="relative inline-block text-left">
          <div>
    <!-- <a href="{{ route('products.index', ['category' => 'ELECTRONIC']) }}">ELECTRONIC</a>
    <a href="{{ route('products.index', ['category' => 'FURNITURE']) }}">FURNITURE</a>
    <a href="{{ route('products.index', ['category' => 'VEHICLES']) }}">VEHICLES</a> -->
    <div>
    <!-- @livewire('product-filter') -->
</div>
</div>
         
             
        
           
          </div>

          <button id="view-grid"  type="button" class="p-2 -m-2 ml-5 sm:ml-7 text-gray-400 hover:text-gray-500">
            <span class="sr-only">View grid</span>
            <!-- Heroicon name: solid/view-grid -->
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
            </svg>
          </button>
          <button type="button" class="p-2 -m-2 ml-4 sm:ml-6 text-gray-400 hover:text-gray-500 lg:hidden">
            <span class="sr-only">Filters</span>
            <!-- Heroicon name: solid/filter -->
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
      </div>
    
    
    


      <div id="scroll" class="overflow-x-scroll pb-10 hide-scroll-bar ">
    <div id="grid" class="grid grid-flow-col-dense ">
    @foreach ($books as $book)
    <div class="w-80 rounded-sm overflow-hidden shadow-lg m-2 inline-block box">
      <div class="h-64 bg-cover relative ">
        <a href="view.html"><img  src="{{ asset('images/'. $book->image_path) }}"   class="h-full w-full object-cover view"></a>
        <div><svg xmlns="http://www.w3.org/2000/svg" class="icon"  style="position: absolute;  right: 50%; bottom: 50%; display: none;" width="30" height="30" fill="white" class="bi bi-eye" viewBox="0 0 16 16">
        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
        </svg>
        
        <span id="spana" class="electronics w-28 text-center border-l border-r-4 border-red-300" >{{  $book->productCategory }}</span>
        </div>
      </div>
      <div class="mx-6 my-4 border-b border-gray-300">
        <div class="font-medium text-base text-gray-700 mb-4">{{ $book->productName }}</div>
        <p class="font-normal text-gray-600 text-sm mb-2">{{ $book->description }}.</p>
       
      </div>
      <div class="flex m-2">
        <a href="{{ route('profile.edit') }}">
        <img class="w-12 h-12 rounded-lg skeleton" src="{{ asset('images/image1.png') }}" alt="">
        </a>
        <h1 class="flex items-center m-2">{{$book->user->name}}
          <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" width="16" height="16" class="style-scope yt-icon" style="pointer-events: none; "><g class="style-scope yt-icon"><path d="M12,2C6.5,2,2,6.5,2,12c0,5.5,4.5,10,10,10s10-4.5,10-10C22,6.5,17.5,2,12,2z M9.8,17.3l-4.2-4.1L7,11.8l2.8,2.7L17,7.4 l1.4,1.4L9.8,17.3z" class="style-scope yt-icon"></path></g></svg></h1>

          <p class="text-xs text-gray-400 " style=" margin-top:15px;margin-left: 29%;"> {{ $book->created_at->diffForHumans()}}</p>
          
      </div>
      <a href="/products/{{$book->id}}/exchange" class="inline-flex justify-center border-t border-gray-300 items-center bg-blue-400 hover:bg-blue-500  py-2 px-4 w-full focus:outline-none focus:shadow-outline">
 
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-5" width="25px" height="25px" viewBox="0 0 512 512"><path fill="white" d="M258.148 20.822c-1.112.008-2.226.026-3.343.055-39.32 1.041-81.507 15.972-123.785 50.404l-6.028 4.91-5.732-5.25c-12.644-11.578-20.276-27.633-25.653-43.716-8.974 36.98-14.631 81.385-9.232 114.523 18.065.908 45.409-2.177 73.7-7.818 17.858-3.561 36.048-8.126 53.064-13.072-13.419-2.911-25.896-6.882-38.143-12.082l-16.088-6.832 14.906-9.127c46.367-28.393 80.964-40.686 120.235-35.553 33.105 4.327 69.357 20.867 119.066 47.271-25.373-36.314-62.243-64.737-104.728-76.994-15.402-4.443-31.553-6.828-48.239-6.719zM346 116c-46.667 0-46.666 0-46.666 46.666V349.4c0 9.596.007 17.19.414 23.242a664.804 664.804 0 0 1 50.656-12.223c24.649-4.915 48.367-8.224 67.916-8.41 6.517-.062 12.571.224 18.041.912l6.31.793 1.358 6.213c2.464 11.265 3.673 23.447 3.914 36.059 38.032-.19 38.057-3.06 38.057-46.65V162.665C486 116 486 116 439.334 116a226.98 226.98 0 0 1 3.978 7.64l12.624 25.536-25.004-13.648c-13.085-7.143-25.164-13.632-36.452-19.528zm-281.943.016c-38.032.19-38.057 3.06-38.057 46.65V349.4C26 396 26 396 72.666 396a226.98 226.98 0 0 1-3.978-7.64l-12.624-25.536 25.004 13.649c13.085 7.142 25.164 13.632 36.452 19.527H166c46.667 0 46.666 0 46.666-46.666V162.666c0-9.626-.006-17.24-.416-23.304a664.811 664.811 0 0 1-50.654 12.22c-32.865 6.554-64.077 10.25-85.957 7.498l-6.31-.793-1.358-6.213c-2.464-11.265-3.673-23.446-3.914-36.058zm354.619 254.078c-17.543.25-40.826 3.206-64.75 7.977-17.859 3.56-36.05 8.125-53.065 13.072 13.419 2.91 25.896 6.881 38.143 12.082l16.088 6.832-14.906 9.127c-46.367 28.392-80.964 40.685-120.235 35.553-33.105-4.327-69.357-20.868-119.066-47.272 25.373 36.315 62.243 64.738 104.728 76.994 52.573 15.166 113.872 6.343 175.367-43.74l6.028-4.91 5.732 5.25c12.644 11.579 20.276 27.633 25.653 43.717 8.974-36.981 14.631-81.386 9.232-114.524-2.788-.14-5.748-.204-8.95-.158z"/></svg>

</a>


      
    </div>
    @endforeach
  
   
   
    
   
  
  
  </div>

  </div>





  
 
          <!-- /End replace -->
        </div>
      </div>
      <div class="flex justify-center">
              <img  class="w-28 h-24" src="{{ asset('images/tkharb.png') }}" alt="">
              </div>

      <div class="py-6">
       
        <div class="max-w-7xl mx-auto">
          <!-- Replace with your content -->
          <div id="close" class="relative z-10 flex items-baseline justify-between pb-4 border-b border-gray-200">
          <div class="flex">
            <div class="w-8 h-8 bg-indigo-200 rounded-full ">  <svg class="av-icon z-10 " height="22" width="22" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-labelledby="InformatiqueEtMultimediaTitleID" style="fill:white; stroke: rgb(46, 201, 102); stroke-width: 0; margin: 2%;"><title id="InformatiqueEtMultimediaTitleID">InformatiqueEtMultimedia Icon</title><path fill-rule="evenodd" d="M22.5 7A1.5 1.5 0 0124 8.5v14c0 .826-.671 1.5-1.5 1.5h-7c-.829 0-1.5-.675-1.5-1.5v-14c0-.827.673-1.5 1.5-1.5h7zm-8.937 17H8c.279-2.892 1.559-2.657 2.108-4H13v2.5c0 .524.182 1.175.563 1.5zM7 24H3c-.177-1.993-.667-2.729-1.413-3.408a4.816 4.816 0 01-.002-7.146C2.333 12.766 2.831 11.97 3 10h4c.202 1.97.583 2.766 1.332 3.446a4.828 4.828 0 011.544 2.971h.624v1.166h-.618a4.83 4.83 0 01-1.552 3.009C7.583 21.271 7.154 21.983 7 24zm12-1a1 1 0 110-2 1 1 0 010 2zM5 20.5a3.5 3.5 0 110-7 3.5 3.5 0 010 7zm18-.5V9.976h-8V20h8zM7 18H4v-3h1v2h2v1zM19.5 8h-1a.5.5 0 000 1h1a.5.5 0 000-1zM5 9H3V2a2 2 0 012-2h15a2 2 0 012 2v4h-2V3H5v6z" clip-rule="evenodd"></path></svg></div>
         
       
        <h1 class="text-2xl font-bold tracking-tight border-b-2 border-indigo-300 text-gray-900 ">Electronics</h1>
       
        </div>
       
        

        @livewire('search-products')
       
 


        <div class="flex items-center">
          <div class="relative inline-block text-left">
          <div>
                <!-- <a href="{{ route('products.index', ['category' => 'ELECTRONIC']) }}">ELECTRONIC</a>
                  <a href="{{ route('products.index', ['category' => 'FURNITURE']) }}">FURNITURE</a>
                     <a href="{{ route('products.index', ['category' => 'VEHICLES']) }}">VEHICLES</a> -->
                             <div>
                                               <!-- @livewire('product-filter') -->
</div>
</div>
            
             
        
        
          </div>

          <button id="view-grid"  type="button" class="p-2 -m-2 ml-5 sm:ml-7 text-gray-400 hover:text-gray-500">
            <span class="sr-only">View grid</span>
            <!-- Heroicon name: solid/view-grid -->
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
            </svg>
          </button>
          <button type="button" class="p-2 -m-2 ml-4 sm:ml-6 text-gray-400 hover:text-gray-500 lg:hidden">
            <span class="sr-only">Filters</span>
            <!-- Heroicon name: solid/filter -->
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
      </div>
    
    
    


      <div id="scroll" class="overflow-x-scroll pb-10 hide-scroll-bar">
    <div id="grid" class="grid grid-flow-col-dense ">
    @foreach ($electronics as $electronic)
    <div class="w-80 rounded-sm overflow-hidden shadow-lg m-2 inline-block box">
      <div class="h-64 bg-cover relative ">
        <a href="view.html"><img  src="{{ asset('images/'.$electronic->image_path) }}"   class="h-full w-full object-cover view"></a>
        <div><svg xmlns="http://www.w3.org/2000/svg" class="icon"  style="position: absolute;  right: 50%; bottom: 50%; display: none;" width="30" height="30" fill="white" class="bi bi-eye" viewBox="0 0 16 16">
        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
        </svg>
        <span id="span" class="electronics border-r-4 border-gray-50" >{{ $electronic->productCategory }}</span>
        </div>
      </div>
      <div class="mx-6 my-4 border-b border-gray-300">
        <div class="font-medium text-base text-gray-700 mb-4">{{ $electronic->productName }}</div>
        <p class="font-normal text-gray-600 text-sm mb-2">{{ $electronic->description }}.</p>
       
      </div>
      <div class="flex m-2">
        <a href="{{ route('profile.edit') }}">
        <img class="w-12 h-12 rounded-lg skeleton" src="{{ asset('images/image1.png') }}" alt="">
        </a>
        <h1 class="flex items-center m-2">{{$electronic->user->name}}
          <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" width="16" height="16" class="style-scope yt-icon" style="pointer-events: none; "><g class="style-scope yt-icon"><path d="M12,2C6.5,2,2,6.5,2,12c0,5.5,4.5,10,10,10s10-4.5,10-10C22,6.5,17.5,2,12,2z M9.8,17.3l-4.2-4.1L7,11.8l2.8,2.7L17,7.4 l1.4,1.4L9.8,17.3z" class="style-scope yt-icon"></path></g></svg></h1>

          <p class="text-xs text-gray-400 " style=" margin-top:15px;margin-left: 29%;"> {{$electronic->created_at->diffForHumans()}}</p>
          
      </div>
      <a href="/products/{{$electronic->id}}/exchange" class="inline-flex justify-center border-t border-gray-300 items-center bg-blue-400 hover:bg-blue-500   py-2 px-4 w-full focus:outline-none focus:shadow-outline">
 
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-5" width="25px" height="25px" viewBox="0 0 512 512"><path fill="white" d="M258.148 20.822c-1.112.008-2.226.026-3.343.055-39.32 1.041-81.507 15.972-123.785 50.404l-6.028 4.91-5.732-5.25c-12.644-11.578-20.276-27.633-25.653-43.716-8.974 36.98-14.631 81.385-9.232 114.523 18.065.908 45.409-2.177 73.7-7.818 17.858-3.561 36.048-8.126 53.064-13.072-13.419-2.911-25.896-6.882-38.143-12.082l-16.088-6.832 14.906-9.127c46.367-28.393 80.964-40.686 120.235-35.553 33.105 4.327 69.357 20.867 119.066 47.271-25.373-36.314-62.243-64.737-104.728-76.994-15.402-4.443-31.553-6.828-48.239-6.719zM346 116c-46.667 0-46.666 0-46.666 46.666V349.4c0 9.596.007 17.19.414 23.242a664.804 664.804 0 0 1 50.656-12.223c24.649-4.915 48.367-8.224 67.916-8.41 6.517-.062 12.571.224 18.041.912l6.31.793 1.358 6.213c2.464 11.265 3.673 23.447 3.914 36.059 38.032-.19 38.057-3.06 38.057-46.65V162.665C486 116 486 116 439.334 116a226.98 226.98 0 0 1 3.978 7.64l12.624 25.536-25.004-13.648c-13.085-7.143-25.164-13.632-36.452-19.528zm-281.943.016c-38.032.19-38.057 3.06-38.057 46.65V349.4C26 396 26 396 72.666 396a226.98 226.98 0 0 1-3.978-7.64l-12.624-25.536 25.004 13.649c13.085 7.142 25.164 13.632 36.452 19.527H166c46.667 0 46.666 0 46.666-46.666V162.666c0-9.626-.006-17.24-.416-23.304a664.811 664.811 0 0 1-50.654 12.22c-32.865 6.554-64.077 10.25-85.957 7.498l-6.31-.793-1.358-6.213c-2.464-11.265-3.673-23.446-3.914-36.058zm354.619 254.078c-17.543.25-40.826 3.206-64.75 7.977-17.859 3.56-36.05 8.125-53.065 13.072 13.419 2.91 25.896 6.881 38.143 12.082l16.088 6.832-14.906 9.127c-46.367 28.392-80.964 40.685-120.235 35.553-33.105-4.327-69.357-20.868-119.066-47.272 25.373 36.315 62.243 64.738 104.728 76.994 52.573 15.166 113.872 6.343 175.367-43.74l6.028-4.91 5.732 5.25c12.644 11.579 20.276 27.633 25.653 43.717 8.974-36.981 14.631-81.386 9.232-114.524-2.788-.14-5.748-.204-8.95-.158z"/></svg>

</a>


      
    </div>
    @endforeach
  
   
   
    
   
  
  
  </div>

  </div>


<script>
    document.addEventListener("DOMContentLoaded", function() {
  let pop = document.querySelector("#cont-pop");
  let openClik = document.querySelector("#open");

  // toggle popup visibility when clicking the open button
  openClik.addEventListener("click", function() {
    pop.classList.remove("hidden");
  });

  // close popup when clicking outside
  document.addEventListener("click", function(event) {
    if (!pop.contains(event.target) && !openClik.contains(event.target)) {
      pop.classList.add("hidden");
    }
  });
});
</script>


  
 
          <!-- /End replace -->
        </div>
      </div>

      <div class="flex justify-center">
              <img  class="w-28 h-24" src="{{ asset('images/FURNITURE.jpg') }}" alt="">
              </div>
      <div class="py-6">
       
       <div class="max-w-7xl mx-auto  ">
         <!-- Replace with your content -->
         <div id="close" class="relative z-10 flex items-baseline justify-between pb-4 border-b border-gray-200">
         <div class="flex">
              <img class="w-16 " src="{{ asset('images/fall.png') }}" alt="">
        <h1 class="text-2xl font-bold tracking-tight border-b-2 border-red-400 text-gray-900 ">Furniture</h1>
       
        </div>
      
       

       @livewire('search-products')
      



       <div class="flex items-center">
         <div class="relative inline-block text-left">
         <div>
               <!-- <a href="{{ route('products.index', ['category' => 'ELECTRONIC']) }}">ELECTRONIC</a>
                 <a href="{{ route('products.index', ['category' => 'FURNITURE']) }}">FURNITURE</a>
                    <a href="{{ route('products.index', ['category' => 'VEHICLES']) }}">VEHICLES</a> -->
                            <div>
                                              <!-- @livewire('product-filter') -->
</div>
</div>
          
            
       
         
         </div>

         <button id="view-grid"  type="button" class="p-2 -m-2 ml-5 sm:ml-7 text-gray-400 hover:text-gray-500">
           <span class="sr-only">View grid</span>
           <!-- Heroicon name: solid/view-grid -->
           <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
             <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
           </svg>
         </button>
         <button type="button" class="p-2 -m-2 ml-4 sm:ml-6 text-gray-400 hover:text-gray-500 lg:hidden">
           <span class="sr-only">Filters</span>
           <!-- Heroicon name: solid/filter -->
           <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
             <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd"></path>
           </svg>
         </button>
       </div>
     </div>
   
   
   


     <div id="scroll" class="overflow-x-scroll pb-10 hide-scroll-bar ">
   <div id="grid" class="grid grid-flow-col-dense ">
   @foreach ($furniture as $furnitures)
   <div class="w-80 rounded-sm overflow-hidden shadow-lg m-2 inline-block box">
     <div class="h-64 bg-cover relative ">
       <a href="view.html"><img  src="{{ asset('images/'.$furnitures->image_path) }}"   class="h-full w-full object-cover view"></a>
       <div><svg xmlns="http://www.w3.org/2000/svg" class="icon"  style="position: absolute;  right: 50%; bottom: 50%; display: none;" width="30" height="30" fill="white" class="bi bi-eye" viewBox="0 0 16 16">
       <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
       <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
       </svg>
       
       <span id="flater" class="electronics border-r-4 border-red-500" >{{ $furnitures->productCategory }}</span>
       <button id="openFavorite" class="absolute top-1  right-0 z-10 openFavorite">
       <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="40px" height="40px"><radialGradient id="0s9AHyobNDm8hduiB_Ah9a" cx="-117.362" cy="41.791" r="180.784" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#f5e3a5"/><stop offset=".25" stop-color="#f8e9b6"/><stop offset=".724" stop-color="#fcf2d2"/><stop offset="1" stop-color="#fef5dc"/></radialGradient><path fill="url(#0s9AHyobNDm8hduiB_Ah9a)" d="M59.5,33h-4.401c-0.982,0-1.893-0.663-2.066-1.63C53.011,31.244,53,31.119,53,30.996 c0.002-1.06,0.829-1.927,1.873-1.992c1.515-0.095,2.906-1.098,3.101-2.604C57.991,26.264,58,26.13,58,25.997 C57.998,24.342,56.656,23,55,23h-5v-4.941c0.626-0.641,1.492-1.047,2.456-1.059c0.001,0,0.002,0,0.003,0c0.004,0,0.007,0,0.01,0 c0.001,0,0.003,0,0.004,0c0.003,0,0.007,0,0.01,0c0.001,0,0.002,0,0.004,0c0.005,0,0.009,0,0.013,0h1.802 c1.884,0,3.574-1.402,3.691-3.278c0.001-0.011,0.001-0.022,0.002-0.033C57.998,13.625,58,13.563,58,13.5c0-1.933-1.567-3.5-3.5-3.5 H47h-6l7,7H14v-3h-2.302c-1.896,0-3.594,1.419-3.693,3.311c-0.001,0.024-0.002,0.047-0.003,0.071C7.937,19.369,9.528,21,11.5,21H14 v7H9c-1.381,0-2.5,1.119-2.5,2.5S7.619,33,9,33h0.5c1.381,0,2.5,1.119,2.5,2.5c0,1.381-1.119,2.5-2.5,2.5H4.17 c-1.625,0-3.081,1.217-3.166,2.839C1.002,40.893,1,40.947,1,41c0,1.656,1.343,3,3,3h4.893c0.996,0,1.919,0.681,2.08,1.664 C10.991,45.777,11,45.888,11,45.997C11.001,47.103,10.106,48,9,48H8.17c-1.624,0-3.081,1.217-3.165,2.839 C5.002,50.893,5,50.947,5,51c0,1.656,1.343,3,3,3h6v-2l18-11l18,11h4.83c1.57,0,3.083-1.271,3.165-2.839 C58.086,47.431,56.71,46,55,46h-0.013c-0.006,0-0.011,0-0.017,0c-0.777,0-1.539-0.254-2.078-0.768 c-0.17-0.162-0.318-0.35-0.438-0.564C51.166,42.35,52.809,40,55,40h4.302c1.896,0,3.595-1.42,3.693-3.313 C63.1,34.669,61.495,33,59.5,33z"/><radialGradient id="0s9AHyobNDm8hduiB_Ah9b" cx="-9.546" cy="31.613" r="14.612" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#f5e3a5"/><stop offset=".25" stop-color="#f8e9b6"/><stop offset=".724" stop-color="#fcf2d2"/><stop offset="1" stop-color="#fef5dc"/></radialGradient><path fill="url(#0s9AHyobNDm8hduiB_Ah9b)" d="M5,30.5C5,29.119,3.881,28,2.5,28C1.119,28,0,29.119,0,30.5S1.119,33,2.5,33 C3.881,33,5,31.881,5,30.5z"/><linearGradient id="0s9AHyobNDm8hduiB_Ah9c" x1="32" x2="32" y1="56.969" y2="10" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#ff634d"/><stop offset=".204" stop-color="#fe6464"/><stop offset=".521" stop-color="#fc6581"/><stop offset=".794" stop-color="#fa6694"/><stop offset=".989" stop-color="#fa669a"/><stop offset="1" stop-color="#fa669a"/></linearGradient><path fill="url(#0s9AHyobNDm8hduiB_Ah9c)" d="M47.08,56.969L47.08,56.969c-0.697,0-1.371-0.249-1.9-0.703l-11.064-9.484 c-1.217-1.043-3.014-1.043-4.231,0L18.82,56.266c-0.529,0.454-1.203,0.703-1.9,0.703h0c-1.613,0-2.92-1.307-2.92-2.92V14 c0-2.209,1.791-4,4-4h28c2.209,0,4,1.791,4,4v40.049C50,55.662,48.693,56.969,47.08,56.969z"/></svg> -->
       <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24" fill="none">
<path d="M13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6C12.5523 6 13 5.55228 13 5Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
       <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="40px" height="40px" ><path fill="#ffff"  d="M37,43l-13-6l-13,6V9c0-2.2,1.8-4,4-4h18c2.2,0,4,1.8,4,4V43z"/></svg> -->
       
      </button>
      <!-- <div id="favorite" class="absolute bottom-48 right-1  w-20 h-8 bg-white rounded-md hidden">
        <div class="flex border-b  border-gray-200 mt-1">
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="20px" height="20px" ><path fill="#f9b76d"   d="M37,43l-13-6l-13,6V9c0-2.2,1.8-4,4-4h18c2.2,0,4,1.8,4,4V43z"/></svg>
       <p class="text-gray-500 text-sm">favorite</p>
       </div>

      </div> -->
      <!-- <livewire:favorite-product-button :product="$product" wire:key="product-{{ $product->id }}" /> -->

       </div>
     </div>
     
     <div class="mx-6 my-4 border-b border-gray-300">
       <div class="font-medium text-base text-gray-700 mb-4">{{ $furnitures->productName }}</div>

       <p class="font-normal text-gray-600 text-sm mb-2">{{ $furnitures->description }}.</p>
      
     </div>
     <div class="flex m-2">
       <a href="{{ route('profile.edit') }}">
       <img class="w-12 h-12 rounded-lg skeleton" src="{{ asset('images/image1.png') }}" alt="">
       </a>
       <h1 class="flex items-center m-2">{{$furnitures->user->name}}
      </h1>

         <p class="text-xs text-gray-400 " style=" margin-top:15px;margin-left: 29%;"> {{$furnitures->created_at->diffForHumans()}}</p>
         
     </div>
     <a href="/products/{{$furnitures->id}}/exchange" class="inline-flex justify-center border-t border-gray-300 items-center bg-blue-400 hover:bg-blue-500    py-2 px-4 w-full focus:outline-none focus:shadow-outline">

     <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-5" width="25px" height="25px" viewBox="0 0 512 512"><path fill="white" d="M258.148 20.822c-1.112.008-2.226.026-3.343.055-39.32 1.041-81.507 15.972-123.785 50.404l-6.028 4.91-5.732-5.25c-12.644-11.578-20.276-27.633-25.653-43.716-8.974 36.98-14.631 81.385-9.232 114.523 18.065.908 45.409-2.177 73.7-7.818 17.858-3.561 36.048-8.126 53.064-13.072-13.419-2.911-25.896-6.882-38.143-12.082l-16.088-6.832 14.906-9.127c46.367-28.393 80.964-40.686 120.235-35.553 33.105 4.327 69.357 20.867 119.066 47.271-25.373-36.314-62.243-64.737-104.728-76.994-15.402-4.443-31.553-6.828-48.239-6.719zM346 116c-46.667 0-46.666 0-46.666 46.666V349.4c0 9.596.007 17.19.414 23.242a664.804 664.804 0 0 1 50.656-12.223c24.649-4.915 48.367-8.224 67.916-8.41 6.517-.062 12.571.224 18.041.912l6.31.793 1.358 6.213c2.464 11.265 3.673 23.447 3.914 36.059 38.032-.19 38.057-3.06 38.057-46.65V162.665C486 116 486 116 439.334 116a226.98 226.98 0 0 1 3.978 7.64l12.624 25.536-25.004-13.648c-13.085-7.143-25.164-13.632-36.452-19.528zm-281.943.016c-38.032.19-38.057 3.06-38.057 46.65V349.4C26 396 26 396 72.666 396a226.98 226.98 0 0 1-3.978-7.64l-12.624-25.536 25.004 13.649c13.085 7.142 25.164 13.632 36.452 19.527H166c46.667 0 46.666 0 46.666-46.666V162.666c0-9.626-.006-17.24-.416-23.304a664.811 664.811 0 0 1-50.654 12.22c-32.865 6.554-64.077 10.25-85.957 7.498l-6.31-.793-1.358-6.213c-2.464-11.265-3.673-23.446-3.914-36.058zm354.619 254.078c-17.543.25-40.826 3.206-64.75 7.977-17.859 3.56-36.05 8.125-53.065 13.072 13.419 2.91 25.896 6.881 38.143 12.082l16.088 6.832-14.906 9.127c-46.367 28.392-80.964 40.685-120.235 35.553-33.105-4.327-69.357-20.868-119.066-47.272 25.373 36.315 62.243 64.738 104.728 76.994 52.573 15.166 113.872 6.343 175.367-43.74l6.028-4.91 5.732 5.25c12.644 11.579 20.276 27.633 25.653 43.717 8.974-36.981 14.631-81.386 9.232-114.524-2.788-.14-5.748-.204-8.95-.158z"/></svg>

</a>


     
   </div>
   @endforeach
 
  
  

  
 
 
 </div>

 </div>





 

         <!-- /End replace -->
       </div>
     </div>

      
    </main>
  </div>
</div>

</div>   
<footer class="bg-white dark:bg-blue-500">
    <div class="container px-6 py-12 mx-auto">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 sm:gap-y-10 lg:grid-cols-4">
            <div class="sm:col-span-2">
                <h1 class="max-w-lg text-xl font-semibold tracking-tight text-gray-800 xl:text-2xl dark:text-white">Subscribe our newsletter to get update.</h1>

                <div class="flex flex-col mx-auto mt-6 space-y-3 md:space-y-0 md:flex-row">
                    <input id="email" type="text" class="px-4 py-2 text-gray-100 dark:bg-blue-500 border rounded-md  focus:border-blue-200 dark:focus:border-blue-200 focus:outline-none focus:ring focus:ring-opacity-40 focus:ring-blue-300 placeholder-gray-100" placeholder="Email Address">
            
                    <button class="w-full px-6 py-2.5 text-sm font-medium tracking-wider text-white transition-colors duration-300 transform md:w-auto md:mx-4 focus:outline-none bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring focus:ring-gray-300 focus:ring-opacity-80">
                        Subscribe
                    </button>
                </div>
            </div>

            <div>
                <p class="font-semibold text-gray-800 dark:text-white">Quick Link</p>

                <div class="flex flex-col items-start mt-5 space-y-2">
                    <a href="/home" class="text-gray-100 transition-colors duration-300 dark:text-gray-100 dark:hover:text-blue-100 hover:underline hover:text-blue-100">Home</a>
                    <a href="/products" class="text-gray-100 transition-colors duration-300 dark:text-gray-100 dark:hover:text-blue-100 hover:underline hover:text-blue-100">Products</a>
                    <a href="/contact" class="text-gray-100 transition-colors duration-300 dark:text-gray-100 dark:hover:text-blue-100 hover:underline hover:text-blue-100">Contact</a>
                </div>
            </div>

            <div>
                <p class="font-semibold text-gray-800 dark:text-white">Industries</p>

                <div class="flex flex-col items-start mt-5 space-y-2">
                    <a href="#" class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">Retail & E-Commerce</a>
                    <a href="#" class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">Information Technology</a>
                    <a href="#" class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">Finance & Insurance</a>
                </div>
            </div>
        </div>
        
        <hr class="my-6 border-gray-300 md:my-8 ">
        
        <div class="flex items-center justify-between">
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50" zoomAndPan="magnify" viewBox="0 0 375 374.999991"  preserveAspectRatio="xMidYMid meet" version="1.0"><defs><clipPath id="4732d4089b"><path d="M 78 54 L 298.8125 54 L 298.8125 309 L 78 309 Z M 78 54 " clip-rule="nonzero"/></clipPath></defs><g clip-path="url(#4732d4089b)"><path fill="#ffff" d="M 137.269531 228.59375 C 136.113281 223.640625 138.882812 218.585938 143.710938 216.9375 L 159.113281 211.53125 L 156.34375 203.777344 C 149.902344 185.613281 159.515625 165.601562 177.78125 159.195312 C 196.050781 152.792969 216.179688 162.347656 222.621094 180.511719 L 225.390625 188.265625 L 240.789062 182.863281 C 245.621094 181.160156 250.953125 183.363281 253.167969 187.914062 L 288.796875 260.765625 L 298.460938 140.984375 C 299.011719 134.027344 294.234375 127.773438 287.386719 126.421875 L 265.496094 122.171875 L 267.660156 111.113281 C 272.746094 85.195312 255.734375 60.027344 229.667969 54.925781 C 203.597656 49.871094 178.285156 66.78125 173.152344 92.699219 L 170.988281 103.757812 L 149.097656 99.503906 C 142.203125 98.152344 135.410156 102.15625 133.296875 108.8125 L 79.546875 277.679688 C 76.980469 285.734375 82.066406 294.238281 90.417969 295.890625 L 155.789062 308.648438 Z M 261.570312 142.234375 C 260.917969 145.535156 257.695312 147.6875 254.375 147.039062 C 251.054688 146.386719 248.890625 143.183594 249.542969 139.882812 C 250.199219 136.582031 253.417969 134.429688 256.742188 135.078125 C 260.011719 135.730469 262.226562 138.933594 261.570312 142.234375 Z M 185.28125 95.101562 C 189.105469 75.839844 207.925781 63.230469 227.351562 66.980469 C 246.777344 70.734375 259.410156 89.496094 255.632812 108.8125 L 253.46875 119.867188 L 183.117188 106.160156 Z M 174.308594 119.019531 C 177.632812 119.667969 179.796875 122.871094 179.140625 126.171875 C 178.488281 129.476562 175.265625 131.628906 171.945312 130.976562 C 168.621094 130.324219 166.460938 127.125 167.113281 123.820312 C 167.71875 120.519531 170.9375 118.367188 174.308594 119.019531 Z M 174.308594 119.019531 " fill-opacity="1" fill-rule="nonzero"/></g><path fill="#ffff" d="M 214.167969 183.460938 C 209.386719 169.953125 194.390625 162.796875 180.75 167.601562 C 167.164062 172.355469 159.96875 187.265625 164.796875 200.824219 L 167.566406 208.582031 L 216.933594 191.269531 Z M 214.167969 183.460938 " fill-opacity="1" fill-rule="nonzero"/><path fill="#ffff" d="M 166.8125 219.9375 C 164.496094 220.738281 163.238281 223.289062 164.09375 225.640625 C 164.898438 227.945312 167.464844 229.195312 169.832031 228.34375 C 172.144531 227.542969 173.402344 224.992188 172.546875 222.640625 C 171.742188 220.339844 169.175781 219.085938 166.8125 219.9375 Z M 166.8125 219.9375 " fill-opacity="1" fill-rule="nonzero"/><path fill="#16a9d6" d="M 227.652344 208.03125 C 229.96875 207.230469 231.226562 204.675781 230.371094 202.324219 C 229.566406 200.023438 227 198.773438 224.632812 199.625 C 222.269531 200.476562 221.0625 202.976562 221.917969 205.328125 C 222.773438 207.628906 225.339844 208.878906 227.652344 208.03125 Z M 227.652344 208.03125 " fill-opacity="1" fill-rule="nonzero"/><path stroke-linecap="butt" transform="matrix(1.502396, 0.34984, -0.351965, 1.511525, 145.795087, 299.573066)" fill="none" stroke-linejoin="miter" d="M -0.000747697 2.499964 L 51.843468 2.49967 " stroke="#ffff" stroke-width="5" stroke-opacity="1" stroke-miterlimit="4"/><path stroke-linecap="round" transform="matrix(7.511979, 1.749198, -1.759827, 7.557624, 226.560179, 322.36328)" fill="none" stroke-linejoin="round" d="M -2.499804 -1.500244 L -0.499949 -0.0000646435 L -2.499942 1.500172 " stroke="#ffff" stroke-width="1" stroke-opacity="1" stroke-miterlimit="4"/><path stroke-linecap="butt" transform="matrix(-1.492658, -0.454342, 0.451921, -1.484707, 226.80623, 303.28211)" fill="none" stroke-linejoin="miter" d="M -0.000893601 2.500294 L 41.266329 2.500687 " stroke="#4338CA" stroke-width="5" stroke-opacity="1" stroke-miterlimit="4"/><path stroke-linecap="round" transform="matrix(-7.463288, -2.271708, 2.259607, -7.423533, 162.60849, 279.685645)" fill="none" stroke-linejoin="round" d="M -2.500189 -1.499913 L -0.49992 0.000135377 L -2.500048 1.4999 " stroke="#4338CA" stroke-width="1" stroke-opacity="1" stroke-miterlimit="4"/></svg>
            </a>
            
            <div class="flex -mx-2">
                <a href="#" class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400" aria-label="Reddit">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM6.807 10.543C6.20862 10.5433 5.67102 10.9088 5.45054 11.465C5.23006 12.0213 5.37133 12.6558 5.807 13.066C5.92217 13.1751 6.05463 13.2643 6.199 13.33C6.18644 13.4761 6.18644 13.6229 6.199 13.769C6.199 16.009 8.814 17.831 12.028 17.831C15.242 17.831 17.858 16.009 17.858 13.769C17.8696 13.6229 17.8696 13.4761 17.858 13.33C18.4649 13.0351 18.786 12.3585 18.6305 11.7019C18.475 11.0453 17.8847 10.5844 17.21 10.593H17.157C16.7988 10.6062 16.458 10.7512 16.2 11C15.0625 10.2265 13.7252 9.79927 12.35 9.77L13 6.65L15.138 7.1C15.1931 7.60706 15.621 7.99141 16.131 7.992C16.1674 7.99196 16.2038 7.98995 16.24 7.986C16.7702 7.93278 17.1655 7.47314 17.1389 6.94094C17.1122 6.40873 16.6729 5.991 16.14 5.991C16.1022 5.99191 16.0645 5.99491 16.027 6C15.71 6.03367 15.4281 6.21641 15.268 6.492L12.82 6C12.7983 5.99535 12.7762 5.993 12.754 5.993C12.6094 5.99472 12.4851 6.09583 12.454 6.237L11.706 9.71C10.3138 9.7297 8.95795 10.157 7.806 10.939C7.53601 10.6839 7.17843 10.5422 6.807 10.543ZM12.18 16.524C12.124 16.524 12.067 16.524 12.011 16.524C11.955 16.524 11.898 16.524 11.842 16.524C11.0121 16.5208 10.2054 16.2497 9.542 15.751C9.49626 15.6958 9.47445 15.6246 9.4814 15.5533C9.48834 15.482 9.52348 15.4163 9.579 15.371C9.62737 15.3318 9.68771 15.3102 9.75 15.31C9.81233 15.31 9.87275 15.3315 9.921 15.371C10.4816 15.7818 11.159 16.0022 11.854 16C11.9027 16 11.9513 16 12 16C12.059 16 12.119 16 12.178 16C12.864 16.0011 13.5329 15.7863 14.09 15.386C14.1427 15.3322 14.2147 15.302 14.29 15.302C14.3653 15.302 14.4373 15.3322 14.49 15.386C14.5985 15.4981 14.5962 15.6767 14.485 15.786V15.746C13.8213 16.2481 13.0123 16.5208 12.18 16.523V16.524ZM14.307 14.08H14.291L14.299 14.041C13.8591 14.011 13.4994 13.6789 13.4343 13.2429C13.3691 12.8068 13.6162 12.3842 14.028 12.2269C14.4399 12.0697 14.9058 12.2202 15.1478 12.5887C15.3899 12.9572 15.3429 13.4445 15.035 13.76C14.856 13.9554 14.6059 14.0707 14.341 14.08H14.306H14.307ZM9.67 14C9.11772 14 8.67 13.5523 8.67 13C8.67 12.4477 9.11772 12 9.67 12C10.2223 12 10.67 12.4477 10.67 13C10.67 13.5523 10.2223 14 9.67 14Z">
                        </path>
                    </svg>
                </a>

                <a href="#" class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400" aria-label="Facebook">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z">
                        </path>
                    </svg>
                </a>

                <a href="#" class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400" aria-label="Github">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</footer>
    @livewireScripts
    </body>
</html>