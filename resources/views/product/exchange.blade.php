@extends('layouts.app')
@section('content')

<div >

        <div class="container px-5 py-24 mx-auto" style="cursor: auto;">
        
          <div class="lg:w-4/5 mx-auto md:flex">
            <img alt="product" class="lg:w-1/2 h lg:h-auto   object-cover object-center rounded relative blur-[2px]" name="myimage" src="{{ asset('images/'.$requestedProduct->image_path) }}" style="height:325px; background-color: rgba(0,0,0,">
            
         
            <div class=" absolute" style="cursor: auto; left: 17%; top: 20%;  " >      <h2 class="text-sm title-font text-gray-50 tracking-widest" style="cursor: auto;">ON Échange</h2>
              <h1 class="text-white text-3xl title-font font-medium mb-1" style="cursor: auto;">{{ $requestedProduct->productName }}</h1>
              <div class="flex mb-4">
                <span class="flex items-center">
                  
                  <span class="text-indigo-200 font-bold text-sm ml-3">{{ $requestedProduct->productCategory }}</span>
                </span>
                <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200 space-x-2s">
                 
                </span>
              </div>
              <p class="leading-relaxed text-gray-50">{{ $requestedProduct->description }}</p>
</div>
            
            
          
    <div class="w-64 md:w-64 ml-8 sm:w-60 sm:ml-8" >
            
           
              <form method="POST" action="{{ route('products.completeExchange', $requestedProduct->id) }}" class="max-w-md mx-auto ">
               
    @csrf
    <div class="mb-4">
   
            
            <div class="relative" data-te-dropdown-ref>
 
                <a
    class="flex items-center whitespace-nowrap rounded  px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-gray-500 shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-gray-200 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-gray-400 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-gray-400 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] motion-reduce:transition-none dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
    href=""
    type="button"
    id="dropdownMenuButton2"
    data-te-dropdown-toggle-ref
    aria-expanded="false"
    data-te-ripple-init
    data-te-ripple-color="light">
    Choose a product to exchange
    <span class="ml-1 w-2">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 20 20"
        fill="currentColor"
        class="h-5 w-5">
        <path
          fill-rule="evenodd"
          d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
          clip-rule="evenodd" />
      </svg>
    </span>
  </a>
 
  <ul
    class="absolute z-[1000] float-left m-0 hidden w-full list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-500 [&[data-te-dropdown-show]]:block"
    aria-labelledby="dropdownMenuButton2"
    data-te-dropdown-menu-ref>
     @if ($userProducts)
                @foreach($userProducts as $userProduct) 
  
    <li class="flex mb-2" data-product-id="{{ $userProduct->id }}">
    <input type="hidden"  id="exchange_product_id" value =' {{ $userProduct->id }}'>

      <img class="w-24 h-10" src="{{ asset('images/'.$userProduct->image_path) }}" alt="">
      <a
        class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm text-gray font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-700 " 
        href="#"
        data-te-dropdown-item-ref
        >{{ $userProduct->productName }}</a
      >
      <span class="w-full h-1 border-b border-gray-200"></span>
    </li>
   
     @endforeach
            @endif

  </ul>

  <div id="salam">
            
            </div>

</div>

<script>
  const dropdownItems = document.querySelectorAll('[data-product-id]');
  const exchangeProductId = document.getElementById('exchange_product_id');
  const selectedProduct = document.getElementById("salam");
  console.log("im")
  
  dropdownItems.forEach(item => {
    item.addEventListener('click', () => {

    console.log(selectedProduct)
    id= item.querySelector('#exchange_product_id').value
    console.log(id)
          selectedProduct.innerHTML = `
    <li class="flex mb-2 mt-3" data-product-id="{{ $userProduct->id }}">
      
         <input type="hidden" name="exchange_product_id" id="exchange_product_id" value='${id}'>

      <img class="w-24 h-10" src="{{ asset('images/'.$userProduct->image_path) }}" alt="">
      <a
        class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-600" 
        href="#"
        data-te-dropdown-item-ref
        >{{ $userProduct->productName }}</a
      >
      <span class="w-full h-1 border-b border-gray-200"></span>
    </li>
      `
      
    });
  });

</script>



        <!-- </select> -->
        <!-- @foreach($userProducts as $userProduct)
        <img class="w-32 h-32" src="{{ asset('images/'.$userProduct->image_path) }}" alt="">
                    
                @endforeach -->
    </div>
    <div class="mb-4">
        <label for="added_amount" class="block text-gray-700 font-bold mb-2">Added Prix:</label>
        <input type="number" id="added_amount" name="added_amount" class="form-input block w-full border-gray-300 rounded-md shadow-sm" value="0">
    </div>
    <div class="mb-4">
        <label for="description" class="block text-gray-700 font-bold mb-2">Description:</label>
        <textarea name="description" id="description" class="form-textarea block w-full border-gray-300 rounded-md shadow-sm"></textarea>
    </div>
    <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 w-full rounded focus:outline-none focus:shadow-outline">Submit</button>
</form>
</div>

            </div>

          </div>
          
        </div>
        
        </div>
<div>





