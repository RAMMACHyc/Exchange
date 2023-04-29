@extends('layouts.app')
@section('content')


<div class="flex text-gray-800 min-h-screen overflow-x-hidden">
  <aside
    class="hidden z-40 top-0 bottom-0 md:top-auto md:bottom-auto md:flex flex-col w-72 bg-white shadow-sm"
  >
    <a href="#" class="flex items-center mx-auto my-12">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="70" zoomAndPan="magnify" viewBox="0 0 375 374.999991" preserveAspectRatio="xMidYMid meet" version="1.0"><defs><clipPath id="be1f2c0e82"><path d="M 78 55 L 299.449219 55 L 299.449219 312 L 78 312 Z M 78 55 " clip-rule="nonzero"></path></clipPath></defs><g clip-path="url(#be1f2c0e82)"><path fill="#6366F1" d="M 136.984375 231.453125 C 135.820312 226.472656 138.601562 221.390625 143.460938 219.730469 L 158.949219 214.292969 L 156.164062 206.496094 C 149.6875 188.226562 159.355469 168.097656 177.726562 161.660156 C 196.097656 155.21875 216.34375 164.828125 222.824219 183.09375 L 225.605469 190.894531 L 241.09375 185.460938 C 245.953125 183.75 251.316406 185.964844 253.542969 190.542969 L 289.378906 263.8125 L 299.09375 143.339844 C 299.652344 136.347656 294.84375 130.058594 287.960938 128.699219 L 265.945312 124.421875 L 268.121094 113.300781 C 273.234375 87.234375 256.125 61.921875 229.90625 56.789062 C 203.691406 51.707031 178.234375 68.714844 173.070312 94.78125 L 170.894531 105.902344 L 148.878906 101.625 C 141.941406 100.265625 135.109375 104.292969 132.984375 110.984375 L 78.929688 280.820312 C 76.347656 288.921875 81.460938 297.476562 89.863281 299.136719 L 155.609375 311.96875 Z M 261.996094 144.597656 C 261.339844 147.921875 258.097656 150.085938 254.757812 149.429688 C 251.417969 148.777344 249.242188 145.554688 249.898438 142.234375 C 250.558594 138.914062 253.796875 136.75 257.136719 137.402344 C 260.425781 138.058594 262.65625 141.277344 261.996094 144.597656 Z M 185.269531 97.195312 C 189.113281 77.824219 208.042969 65.140625 227.578125 68.917969 C 247.117188 72.691406 259.820312 91.5625 256.023438 110.984375 L 253.847656 122.105469 L 183.089844 108.316406 Z M 174.234375 121.25 C 177.574219 121.90625 179.75 125.125 179.09375 128.445312 C 178.433594 131.769531 175.195312 133.929688 171.855469 133.277344 C 168.515625 132.625 166.339844 129.402344 166.996094 126.082031 C 167.605469 122.761719 170.84375 120.597656 174.234375 121.25 Z M 174.234375 121.25 " fill-opacity="1" fill-rule="nonzero"></path></g><path fill="#6366F1" d="M 214.320312 186.0625 C 209.511719 172.476562 194.429688 165.28125 180.710938 170.113281 C 167.046875 174.894531 159.808594 189.890625 164.667969 203.527344 L 167.453125 211.324219 L 217.101562 193.914062 Z M 214.320312 186.0625 " fill-opacity="1" fill-rule="nonzero"></path><path fill="#6366F1" d="M 166.691406 222.75 C 164.363281 223.554688 163.097656 226.121094 163.960938 228.484375 C 164.769531 230.800781 167.351562 232.058594 169.730469 231.203125 C 172.058594 230.398438 173.324219 227.832031 172.460938 225.464844 C 171.652344 223.152344 169.070312 221.894531 166.691406 222.75 Z M 166.691406 222.75 " fill-opacity="1" fill-rule="nonzero"></path><path fill="#16a9d6" d="M 227.882812 210.773438 C 230.210938 209.96875 231.476562 207.402344 230.617188 205.035156 C 229.808594 202.71875 227.226562 201.460938 224.847656 202.316406 C 222.46875 203.171875 221.253906 205.691406 222.113281 208.054688 C 222.972656 210.371094 225.554688 211.628906 227.882812 210.773438 Z M 227.882812 210.773438 " fill-opacity="1" fill-rule="nonzero"></path><path stroke-linecap="butt" transform="matrix(1.539404, 0.29809, -0.296732, 1.532388, 146.753433, 302.584199)" fill="none" stroke-linejoin="miter" d="M -0.0000625621 2.49929 L 45.286909 2.499554 " stroke="#6366F1" stroke-width="5" stroke-opacity="1" stroke-miterlimit="4"></path><path stroke-linecap="round" transform="matrix(7.697017, 1.49045, -1.483658, 7.661941, 219.576451, 320.660252)" fill="none" stroke-linejoin="round" d="M -2.500096 -1.499956 L -0.500196 -0.0000876759 L -2.499911 1.499819 " stroke="#6366F1" stroke-width="1" stroke-opacity="1" stroke-miterlimit="4"></path><path stroke-linecap="butt" transform="matrix(-1.524741, -0.329028, 0.329242, -1.525733, 179.672952, 294.813057)" fill="none" stroke-linejoin="miter" d="M -0.000195213 2.499206 L 45.535476 2.500427 " stroke="#ffffff" stroke-width="5" stroke-opacity="1" stroke-miterlimit="4"></path><path stroke-linecap="round" transform="matrix(-7.623704, -1.64514, 1.646211, -7.628667, 107.255469, 275.193937)" fill="none" stroke-linejoin="round" d="M -2.499797 -1.500071 L -0.499861 0.0000857661 L -2.500126 1.500093 " stroke="#ffffff" stroke-width="1" stroke-opacity="1" stroke-miterlimit="4"></path></svg>
      
    </a>
    <a
      href="#"
      class="block text-center text-white text-lg font-semibold bg-indigo-500 hover:bg-indigo-600 py-3 px-4 mx-8 rounded-lg"
      >   
@php
    $totalProducts = auth()->user()->products->count();
@endphp

<p>Total products: {{ $totalProducts }}</p></a
    >
    <nav class="font-semibold text-gray-600 my-12">
      <ul class="space-y-3">
        <li>
          <a href="#" class="flex items-center px-8 py-3 bg-gradient-to-r hover:from-purple-200 hover:text-indigo-400">
            <svg
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              class="h-5 w-5 mr-5"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"
              />
            </svg>
            Dashboard
          </a>
        </li>
        <li>
          <a href="#" class="flex items-center px-8 py-3 bg-gradient-to-r hover:from-purple-200 hover:text-indigo-400">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-5 " width="25px" height="25px" viewBox="0 0 512 512"><path fill="gray" d="M258.148 20.822c-1.112.008-2.226.026-3.343.055-39.32 1.041-81.507 15.972-123.785 50.404l-6.028 4.91-5.732-5.25c-12.644-11.578-20.276-27.633-25.653-43.716-8.974 36.98-14.631 81.385-9.232 114.523 18.065.908 45.409-2.177 73.7-7.818 17.858-3.561 36.048-8.126 53.064-13.072-13.419-2.911-25.896-6.882-38.143-12.082l-16.088-6.832 14.906-9.127c46.367-28.393 80.964-40.686 120.235-35.553 33.105 4.327 69.357 20.867 119.066 47.271-25.373-36.314-62.243-64.737-104.728-76.994-15.402-4.443-31.553-6.828-48.239-6.719zM346 116c-46.667 0-46.666 0-46.666 46.666V349.4c0 9.596.007 17.19.414 23.242a664.804 664.804 0 0 1 50.656-12.223c24.649-4.915 48.367-8.224 67.916-8.41 6.517-.062 12.571.224 18.041.912l6.31.793 1.358 6.213c2.464 11.265 3.673 23.447 3.914 36.059 38.032-.19 38.057-3.06 38.057-46.65V162.665C486 116 486 116 439.334 116a226.98 226.98 0 0 1 3.978 7.64l12.624 25.536-25.004-13.648c-13.085-7.143-25.164-13.632-36.452-19.528zm-281.943.016c-38.032.19-38.057 3.06-38.057 46.65V349.4C26 396 26 396 72.666 396a226.98 226.98 0 0 1-3.978-7.64l-12.624-25.536 25.004 13.649c13.085 7.142 25.164 13.632 36.452 19.527H166c46.667 0 46.666 0 46.666-46.666V162.666c0-9.626-.006-17.24-.416-23.304a664.811 664.811 0 0 1-50.654 12.22c-32.865 6.554-64.077 10.25-85.957 7.498l-6.31-.793-1.358-6.213c-2.464-11.265-3.673-23.446-3.914-36.058zm354.619 254.078c-17.543.25-40.826 3.206-64.75 7.977-17.859 3.56-36.05 8.125-53.065 13.072 13.419 2.91 25.896 6.881 38.143 12.082l16.088 6.832-14.906 9.127c-46.367 28.392-80.964 40.685-120.235 35.553-33.105-4.327-69.357-20.868-119.066-47.272 25.373 36.315 62.243 64.738 104.728 76.994 52.573 15.166 113.872 6.343 175.367-43.74l6.028-4.91 5.732 5.25c12.644 11.579 20.276 27.633 25.653 43.717 8.974-36.981 14.631-81.386 9.232-114.524-2.788-.14-5.748-.204-8.95-.158z"/></svg>

            Exchange
          </a>
        </li>
        <li>
          <a
            href="#"
            class="flex items-center px-8 py-3 bg-gradient-to-r from-purple-200 text-indigo-400 inset-active-link"
          >
            <svg
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              class="h-5 w-5 mr-5"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
              />
            </svg>
            Products
          </a>
        </li>
        <li>
          <a href="#" class="flex items-center px-8 py-3 bg-gradient-to-r hover:from-purple-200 hover:text-indigo-400">
          <svg id="SvgjsSvg1015" width="25px" height="25px" class="h-5 w-5 mr-5" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"><defs id="SvgjsDefs1016"></defs><g id="SvgjsG1017"><svg xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" image-rendering="optimizeQuality" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" viewBox="0 0 213.33 213.33" width="25px" height="25px"><path fill-rule="nonzero"  d="M0 22.36c0,-2.76 2.24,-5 5,-5 2.76,0 5,2.24 5,5l0 137.53c0,7.18 2.93,13.7 7.65,18.42 4.72,4.72 11.24,7.65 18.42,7.65l172.25 0c2.76,0 5,2.24 5,5 0,2.76 -2.24,5 -5,5l-172.25 0c-9.94,0 -18.96,-4.05 -25.49,-10.58 -6.53,-6.54 -10.58,-15.56 -10.58,-25.49l0 -137.53zm42.07 86.8c0,-2.76 2.24,-5 5,-5 2.76,0 5,2.24 5,5l0 44.73c0,2.76 -2.24,5 -5,5 -2.76,0 -5,-2.24 -5,-5l0 -44.73zm39.43 -49.73c0,-2.76 2.24,-5 5,-5 2.76,0 5,2.24 5,5l0 94.46c0,2.76 -2.24,5 -5,5 -2.76,0 -5,-2.24 -5,-5l0 -94.46zm39.43 45.31c0,-2.76 2.24,-5 5,-5 2.76,0 5,2.24 5,5l0 49.14c0,2.76 -2.24,5 -5,5 -2.76,0 -5,-2.24 -5,-5l0 -49.14zm39.43 -39.43c0,-2.76 2.24,-5 5,-5 2.76,0 5,2.24 5,5l0 88.57c0,2.76 -2.24,5 -5,5 -2.76,0 -5,-2.24 -5,-5l0 -88.57z" fill="#000000" class="color000 svgShape"></path></svg></g></svg>
          Stats
          </a>
        </li>
        <li>
          <a href="#" class="flex items-center px-8 py-3 bg-gradient-to-r hover:from-purple-200 hover:text-indigo-400">
            <svg
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              class="h-5 w-5 mr-5"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
              />
            </svg>
            History
          </a>
        </li>
      
      
      </ul>
    </nav>
  
  </aside>
  <div class="flex-grow bg-gray-100">
    <header class="mt-12 px-16">
      <div class="flex items-center mb-2">
        <h1 class="text-3xl font-semibold mr-4">Your products</h1>
   
        
        <div class="ml-auto flex items-center space-x-3">

          <a href="/home"
            class="p-2 text-gray-600 relative bg-gray-100 rounded-md hover:shadow hover:bg-gray-50 hover:text-gray-700"
          >
           
            <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 1000 1000" data-name="Layer 2" id="Layer_2"><defs><style>.cls-1{fill:none;stroke:#020202;stroke-linecap:round;stroke-miterlimit:10;stroke-width:22px;}</style></defs><path class="cls-1" d="M168.45,471,494.57,182.05a8.41,8.41,0,0,1,10.86,0l164,145.25"/><line class="cls-1" x1="831.55" x2="712.86" y1="471" y2="365.83"/><path class="cls-1" d="M748.67,471V798.19c0,12-10.85,21.75-24.22,21.75H275.55c-13.37,0-24.22-9.74-24.22-21.75V471"/><polyline class="cls-1" points="403.52 713.41 403.52 550.89 596.48 550.89 596.48 819.94"/><path class="cls-1" d="M669.38,327.3V253.1a16,16,0,0,1,16-16h11.55a16,16,0,0,1,16,16V365.83"/></svg>
</a>
          <button
            class="h-10 w-10 bg-gray-200 border shadow rounded-full overflow-hidden"
          >
            <img
              src="https://tinyfac.es/data/avatars/475605E3-69C5-4D2B-8727-61B7BB8C4699-500w.jpeg"
              class="h-full w-full object-cover"
            />
          </button>
        </div>
      </div>
      
    </header>

   
    <main class="relative px-16 py-4 space-y-4">
@php
$electronicProducts = auth()->user()->products->where('productCategory', 'ELECTRONIC');

$bookProducts = auth()->user()->products->where('productCategory', 'BOOK');
$furnitureProducts = auth()->user()->products->where('productCategory', 'FURNITURE');
$totalProducts = $electronicProducts->merge($bookProducts);

$electronicProductCount = $electronicProducts->count();
$bookProductCount = $bookProducts->count();
$totalProductCount = $totalProducts->count();
$furnitureProductCount = $furnitureProducts->count();
@endphp
<div>
  

  <dl class=" grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
    <div class="relative  pt-5 px-4 pb-12 sm:pt-6 sm:px-6  rounded-lg overflow-hidden">
      <dt>
        <div class="absolute bg-indigo-500 rounded-md p-3">
          <!-- Heroicon name: outline/users -->
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="20px" width="20px" version="1.1" id="Layer_1" viewBox="0 0 512 512" xml:space="preserve">
<g>
	<g>
		<g>
			<path style="fill:#ffff;" d="M490.259,311.983h-27.176v-16.306c0-35.873-29.35-65.223-65.223-65.223H113.053     c-35.873,0-65.223,29.35-65.223,65.223v16.306H21.741C9.783,311.983,0,321.766,0,333.724v119.575     c0,11.958,9.783,21.741,21.741,21.741H47.83v15.219c0,11.958,9.783,21.741,21.741,21.741c11.958,0,21.741-9.783,21.741-21.741     V475.04h328.289v15.219c0,11.958,9.783,21.741,21.741,21.741s20.654-9.783,21.741-21.741V475.04h26.089     c11.958,0,21.741-8.696,22.828-21.741V333.724C512,321.766,502.217,311.983,490.259,311.983z M91.312,296.764     c0-11.958,9.783-21.741,21.741-21.741H397.86c11.958,0,21.741,9.783,21.741,21.741v15.219H91.312V296.764z M468.518,432.645     h-20.42c-2.13-0.702-4.4-1.087-6.756-1.087s-4.627,0.385-6.756,1.087H76.327c-2.13-0.702-4.4-1.087-6.756-1.087     s-4.627,0.385-6.756,1.087h-20.42v-77.18h20.42c2.13,0.702,4.4,1.087,6.756,1.087h371.771c2.357,0,4.584-0.385,6.654-1.087     h20.522V432.645z"/>
			<path style="fill:#ffff;" d="M135.881,195.669h239.151c11.958,0,20.654-8.696,21.741-21.741V21.741     C396.773,9.783,386.989,0,375.032,0H135.881c-11.958,0-21.741,9.783-21.741,21.741v152.187     C114.14,185.885,123.924,195.669,135.881,195.669z M157.622,43.482h195.669v109.792H157.622V43.482z"/>
		</g>
	</g>
</g>
</svg>
        </div>
        <p class="ml-16 text-sm font-medium text-gray-500 truncate">Furniture</p>
      </dt>
      <dd class="ml-16 pb-6 flex items-baseline sm:pb-7">
        <p class="text-2xl font-semibold text-gray-900">{{$furnitureProductCount}}</p>
      
        
      </dd>
    </div>

    <div class="relative  pt-5 px-4 pb-12 sm:pt-6 sm:px-6 rounded-lg overflow-hidden">
      <dt>
        <div class="absolute bg-indigo-500 rounded-md p-3">
          <!-- Heroicon name: outline/mail-open -->
          <svg xmlns="http://www.w3.org/2000/svg" fill="#ffff" width="27px" height="27px" viewBox="0 0 32 32" version="1.1">
<title>book</title>
<path d="M30.728 18.612l-2.112-0.697 0.050 0.052-11.683 4.24-11.184-11.823-2.745-0.906c-1.386 0.981-1.541 3.774-0.61 4.746l13.805 14.19 14.602-5.228c-1.33-0.727-2.409-2.796-0.123-4.573zM15.474 22.441l-11.504-11.928h0.344l11.453 11.693-0.294 0.235zM16.353 27.987c0 0-1.592-1.86 0.471-4.334l12.501-4.527c0 0-1.438 2.469 0.245 3.927l-13.217 4.935zM5.799 10.384l-0.382-0.404 11.654-4.138 11.544 12.073 2.112 0.697c-0.010 0.008-0.020 0.016-0.030 0.024l0.246-0.088-13.623-14.125-14.212 5.072 2.69 0.888z"/>
</svg>
        </div>
        <p class="ml-16 text-sm font-medium text-gray-500 truncate">Books</p>
      </dt>
      <dd class="ml-16 pb-6 flex items-baseline sm:pb-7">
        <p class="text-2xl font-semibold text-gray-900">{{$bookProductCount}}</p>
      
       
      </dd>
    </div>

    <div class="relative  pt-5 px-4 pb-12 sm:pt-6 sm:px-6  rounded-lg overflow-hidden">
      <dt>
        <div class="absolute bg-indigo-500 rounded-md p-3">
          <!-- Heroicon name: outline/cursor-click -->
          <svg class="av-icon z-10 " height="22" width="22" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-labelledby="InformatiqueEtMultimediaTitleID" style="fill:white; stroke: rgb(46, 201, 102); stroke-width: 0; margin: 2%;"><title id="InformatiqueEtMultimediaTitleID">InformatiqueEtMultimedia Icon</title><path fill-rule="evenodd" d="M22.5 7A1.5 1.5 0 0124 8.5v14c0 .826-.671 1.5-1.5 1.5h-7c-.829 0-1.5-.675-1.5-1.5v-14c0-.827.673-1.5 1.5-1.5h7zm-8.937 17H8c.279-2.892 1.559-2.657 2.108-4H13v2.5c0 .524.182 1.175.563 1.5zM7 24H3c-.177-1.993-.667-2.729-1.413-3.408a4.816 4.816 0 01-.002-7.146C2.333 12.766 2.831 11.97 3 10h4c.202 1.97.583 2.766 1.332 3.446a4.828 4.828 0 011.544 2.971h.624v1.166h-.618a4.83 4.83 0 01-1.552 3.009C7.583 21.271 7.154 21.983 7 24zm12-1a1 1 0 110-2 1 1 0 010 2zM5 20.5a3.5 3.5 0 110-7 3.5 3.5 0 010 7zm18-.5V9.976h-8V20h8zM7 18H4v-3h1v2h2v1zM19.5 8h-1a.5.5 0 000 1h1a.5.5 0 000-1zM5 9H3V2a2 2 0 012-2h15a2 2 0 012 2v4h-2V3H5v6z" clip-rule="evenodd"></path></svg>
        </div>
        <p class="ml-16 text-sm font-medium text-gray-500 truncate">Electronics</p>
      </dt>
      <dd class="ml-16 pb-6 flex items-baseline sm:pb-7">
        <p class="text-2xl font-semibold text-gray-900">{{ $electronicProductCount}}</p>
       
       
      </dd>
    </div>
  </dl>
</div>

      <div class="flex">
        <div class="relative flex-grow mr-8">
          <span class="absolute top-0 left-0 mt-3 ml-4">
            <svg
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              class="h-5 w-5 text-gray-500"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
              />
            </svg>
          </span>
          <input
            type="text"
            placeholder="Search"
            class="pl-12 pr-2 py-2 w-full font-medium bg-white border-2 border-transparent focus:outline-none focus:border-purple-600 rounded-lg"
          />
        </div>
        
        <button
          class="py-2 pl-5 pr-6 mr-3 flex items-center flex-shrink-0 bg-indigo-500 rounded-lg text-white text-sm font-semibold hover:bg-indigo-600"
          data-te-toggle="modal"
          data-te-target="#exampleModal"
          data-te-ripple-init
          data-te-ripple-color="light">
        
          <svg viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5 mr-2">
            <path
              fill-rule="evenodd"
              d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
              clip-rule="evenodd"
            />
          </svg>
          
          Add new
          
        </button>


        
<!-- Button trigger modal -->


<!-- Modal -->
<div
  data-te-modal-init
  class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
  id="exampleModal"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div
    data-te-modal-dialog-ref
    class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
    <div
      class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto mt-12  relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
      <div
        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
        <!--Modal title-->
        <h5
          class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
          id="exampleModalLabel">
          <h1 class="text-2xl font-bold mt-2">{{ __('Create Product') }}</h1>
        </h5>
        <!--Close button-->
        <button
          type="button"
          class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
          data-te-modal-dismiss
          aria-label="Close">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="h-6 w-6">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

      <!--Modal body-->
      <div class="relative flex-auto pt-0  pl-4 pr-4" data-te-modal-body-ref>
          
           
               

                <form method="POST" action="/products" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <label for="productName" class="block text-gray-700 font-bold mb-2">{{ __('Product Name') }}</label>
                        <input id="productName" type="text" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('productName') border-red-500 @enderror" name="productName" value="{{ old('productName') }}" required autocomplete="productName" autofocus>
                        
                        @error('productName')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- <div class="mb-4">
                        <label for="productVille" class="block text-gray-700 font-bold mb-2">{{ __('Ville') }}</label>
                    <select id="productVille" class="form-control @error('productCategory') is-invalid @enderror" name="productVille" required autocomplete="productVille">
                        <option value="">Choose a city</option>
                        <option value="Agadir" {{ old('productVille') == 'Agadir' ? 'selected' : '' }}>Agadir</option>
                        <option value="Al-Hoceïma" {{ old('productVille') == 'Al-Hoceïma' ? 'selected' : '' }}>Al-Hoceïma</option>
                        <option value="Azemmour" {{ old('productVille') == 'Azemmour' ? 'selected' : '' }}>Azemmour</option>
                        <option value="Beni Mellal" {{ old('productVille') == 'Beni Mellal' ? 'selected' : '' }}>Beni Mellal</option>
                        <option value="Boujdour" {{ old('productVille') == 'Boujdour' ? 'selected' : '' }}>Boujdour</option>
                        <option value="Dakhla" {{ old('productVille') == 'Dakhla' ? 'selected' : '' }}>Dakhla</option>
                        <option value="Casablanca" {{ old('productVille') == 'Casablanca' ? 'selected' : '' }}>Casablanca</option>
                        <option value="Chefchaouen" {{ old('productVille') == 'Chefchaouen' ? 'selected' : '' }}>Chefchaouen</option>
                        <option value="Essaouira" {{ old('productVille') == 'Essaouira' ? 'selected' : '' }}>Essaouira</option>
                        <option value="El-Jadida" {{ old('productVille') == 'El-Jadida' ? 'selected' : '' }}>El-Jadida</option>
                        <option value="Fès" {{ old('productVille') == 'Fès' ? 'selected' : '' }}>Fès</option>
                        <option value="Inezgane" {{ old('productVille') == 'Inezgane' ? 'selected' : '' }}>Inezgane</option>
                        <option value="Kénitra" {{ old('productVille') == 'Kénitra' ? 'selected' : '' }}>Kénitra</option>
                        <option value="Khémisset" {{ old('productVille') == 'Khémisset' ? 'selected' : '' }}>Khémisset</option>
                        <option value="Khouribga" {{ old('productVille') == 'Khouribga' ? 'selected' : '' }}>Khouribga</option>
                        <option value="Larache" {{ old('productVille') == 'Larache' ? 'selected' : '' }}>Larache</option>
                        <option value="Marrakech" {{ old('productVille') == 'Marrakech' ? 'selected' : '' }}>Marrakech</option>
                        <option value="Meknès" {{ old('productVille') == 'Meknès' ? 'selected' : '' }}>Meknès</option>
                        <option value="Mohammédia" {{ old('productVille') == 'Mohammédia' ? 'selected' : '' }}>Mohammédia</option>
                        <option value="Nador" {{ old('productVille') == 'Nador' ? 'selected' : '' }}>Nador</option>
                        <option value="Safi" {{ old('productVille') == 'Safi' ? 'selected' : '' }}>Safi</option>
                        <option value="Ouarzazate" {{ old('productVille') == 'Ouarzazate' ? 'selected' : '' }}>Ouarzazate</option>
                        <option value="Rabat" {{ old('productVille') == 'Rabat' ? 'selected' : '' }}>Rabat</option>
                        <option value="Tanger" {{ old('productVille') == 'Tanger' ? 'selected' : '' }}>Tanger</option>
                        <option value="Tétouan" {{ old('productVille') == 'Tétouan' ? 'selected' : '' }}>Tétouan</option>
                        <option value="Taza" {{ old('productVille') == 'Taza' ? 'selected' : '' }}>Taza</option>
                        <option value="Témara" {{ old('productVille') == 'Témara' ? 'selected' : '' }}>Témara</option>
                        <option value="Tiznit" {{ old('productVille') == 'Tiznit' ? 'selected' : '' }}>Tiznit</option>  
                    </select>
                        
                        @error('productCategory')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                        </div> -->
                        <div class="mb-4">
                        <label for="productCategory" class="block text-gray-700 font-bold mb-2">{{ __('Product Category') }}</label>
                    <select id="productCategory" class="form-control @error('productCategory') is-invalid @enderror" name="productCategory" required autocomplete="productCategory">
                        <option value="">Choose a category</option>
                        <option value="ELECTRONIC" {{ old('productCategory') == 'ELECTRONIC' ? 'selected' : '' }}>ELECTRONIC</option>
                        <option value="BOOK" {{ old('productCategory') == 'BOOK' ? 'selected' : '' }}>BOOK</option>
                        <option value="FURNITURE" {{ old('productCategory') == 'FURNITURE' ? 'selected' : '' }}>FURNITURE</option>
                    </select>
                        
                        @error('productCategory')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                        </div>

                    <div class="mb-4">
                        <label for="description" class="block text-gray-700 font-bold mb-2">{{ __('Description') }}</label>
                        <textarea id="description" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('description') border-red-500 @enderror" name="description" required autocomplete="description">{{ old('description') }}</textarea>
                        
                        @error('description')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="image_path" class="block text-gray-700 font-bold mb-2">{{ __('Image') }}</label>
                        <input id="image_path" type="file" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('image_path') border-red-500 @enderror" name="image_path" accept="image/*">
                        
                        @error('image_path')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                     <!--Modal footer-->
      <div
        class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
        <button
          type="button"
          class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
          data-te-modal-dismiss
          data-te-ripple-init
          data-te-ripple-color="light">
          Close
        </button>
        <button
        type="submit"
          class="ml-1 inline-block rounded bg-indigo-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-indigo-700 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-indigo-800 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
          data-te-ripple-init
          data-te-ripple-color="light">
         
          {{ __('Create') }}
        </button>
      </div>
                </form>
            </div>
       
     

    
    </div>
  </div>
</div>


<script>
  tailwind.config = {
    darkMode: "class",
    theme: {
      fontFamily: {
        sans: ["Roboto", "sans-serif"],
        body: ["Roboto", "sans-serif"],
        mono: ["ui-monospace", "monospace"],
      },
    },
    corePlugins: {
      preflight: false,
    },
  };
</script>
  
        <button
          class="p-2 bg-indigo-500 rounded-lg text-white text-sm font-semibold hover:bg-indigo-600"
        >
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
</svg>
        </button>
      </div>
      <div class=""><!-- This example requires Tailwind CSS v2.0+ -->
<div class="px-4 sm:px-6 lg:px-8">
 
  <div class="mt-8 flex flex-col">
    <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
        <div class=" shadow ring-1 ring-black ring-opacity-5 md:rounded-lg h-96 scrollbar scrollbar-thumb-gray-900 scrollbar-track-gray-100" style="max-height: 450px; overflow-y: auto;">
  <!-- <style>

  ::-webkit-scrollbar {
    display: none;
  }
</style> -->

          <table class="min-w-full divide-y divide-gray-300">
            <thead class="bg-gray-50">
              <tr>
              <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6 "></th>
                
               
                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Title</th>
                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Description</th>
                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Category</th>
                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">statut</th>
                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                  <span class="sr-only">Edit</span>
                </th>
                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                  <span class="sr-only">delete</span>
                </th>
                
              </tr>
            </thead>
            @foreach(auth()->user()->products as $product)
            <tbody class="divide-y divide-gray-200 bg-white">
              <tr>
                
              <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"><img class="w-12 h-12" src="{{ asset('images/'.$product->image_path) }}" alt=""></td>
                
                
                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $product->productName }}</td>
                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $product->description }}</td>
                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $product->productCategory}}</td>
                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $product->statut }}</td>
                <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                    
                        <!-- Button trigger modal -->
                        <!-- data-te-toggle="modal"
  data-te-target="#staticBackdrop"
  data-te-ripple-init
  data-te-ripple-color="light"
   wire:click="$emit('editProduct', {{ $product->id }})" -->
                        
 <a href="/products/{{$product->id}}/edit"><button
  type="button"
  class="inline-block rounded bg-indigo-300 px-3 pb-1 pt-1 uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-indigo-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow"
 >
  
  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" data-name="Layer 1" viewBox="0 0 24 24" id="edit"><path d="M3.5,24h15A3.51,3.51,0,0,0,22,20.487V12.95a1,1,0,0,0-2,0v7.537A1.508,1.508,0,0,1,18.5,22H3.5A1.508,1.508,0,0,1,2,20.487V5.513A1.508,1.508,0,0,1,3.5,4H11a1,1,0,0,0,0-2H3.5A3.51,3.51,0,0,0,0,5.513V20.487A3.51,3.51,0,0,0,3.5,24Z"/><path d="M9.455,10.544l-.789,3.614a1,1,0,0,0,.271.921,1.038,1.038,0,0,0,.92.269l3.606-.791a1,1,0,0,0,.494-.271l9.114-9.114a3,3,0,0,0,0-4.243,3.07,3.07,0,0,0-4.242,0l-9.1,9.123A1,1,0,0,0,9.455,10.544Zm10.788-8.2a1.022,1.022,0,0,1,1.414,0,1.009,1.009,0,0,1,0,1.413l-.707.707L19.536,3.05Zm-8.9,8.914,6.774-6.791,1.4,1.407-6.777,6.793-1.795.394Z"/></svg>
</button></a>
                 
                </td>
                <td class="relative whitespace-nowrap   "> <livewire:manage-products :id="$product->id" />
       
                </td>
              </tr>

              <!-- More people... -->
            </tbody>
        
            @endforeach
          </table>
        </div>
      </div>
    </div>
    
  </div>
</div>

</div>




<!-- Modal -->
<div
  data-te-modal-init
  class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
  id="staticBackdrop"
  data-te-backdrop="static"
  data-te-keyboard="false"
  tabindex="-1"
  aria-labelledby="staticBackdropLabel"
  aria-hidden="true">
  <div
    data-te-modal-dialog-ref
    class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
    <div
      class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
      <div
        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
        
        <!--Modal title-->
        <h5
          class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-300 border-b-2 neutral-200"
          id="exampleModalLabel">
          Edit Product
        </h5>
        <!--Close button-->
        <button
          type="button"
          class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
          data-te-modal-dismiss
          aria-label="Close">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="h-6 w-6">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

      <!--Modal body-->
      <div data-te-modal-body-ref class="relative p-4"> 
      
      <!--Modal footer-->
      <div
        class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
        <button
          type="button"
          class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
          data-te-modal-dismiss
          data-te-ripple-init
          data-te-ripple-color="light">
          Close
        </button>
        <button
          type="button"
          class="ml-1 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
          data-te-ripple-init
          data-te-ripple-color="light">
          update
        </button>


        
    </main>
  </div>
</div>


</div>









