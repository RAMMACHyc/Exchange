<input type="text"  class="h-12 w-full bg-transparent pl-11 pr-4 text-gray-900 placeholder-gray-500  sm:text-sm" placeholder="Search..."  wire:model="searchQuery">

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
                        
<button
  type="button"
  class="inline-block rounded bg-indigo-300 px-3 pb-1 pt-1 uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-indigo-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow"
  data-te-toggle="modal"
  data-te-target="#staticBackdrop"
  data-te-ripple-init
  data-te-ripple-color="light"
   wire:click="$emit('editProduct', {{ $product->id }})">
  
  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" data-name="Layer 1" viewBox="0 0 24 24" id="edit"><path d="M3.5,24h15A3.51,3.51,0,0,0,22,20.487V12.95a1,1,0,0,0-2,0v7.537A1.508,1.508,0,0,1,18.5,22H3.5A1.508,1.508,0,0,1,2,20.487V5.513A1.508,1.508,0,0,1,3.5,4H11a1,1,0,0,0,0-2H3.5A3.51,3.51,0,0,0,0,5.513V20.487A3.51,3.51,0,0,0,3.5,24Z"/><path d="M9.455,10.544l-.789,3.614a1,1,0,0,0,.271.921,1.038,1.038,0,0,0,.92.269l3.606-.791a1,1,0,0,0,.494-.271l9.114-9.114a3,3,0,0,0,0-4.243,3.07,3.07,0,0,0-4.242,0l-9.1,9.123A1,1,0,0,0,9.455,10.544Zm10.788-8.2a1.022,1.022,0,0,1,1.414,0,1.009,1.009,0,0,1,0,1.413l-.707.707L19.536,3.05Zm-8.9,8.914,6.774-6.791,1.4,1.407-6.777,6.793-1.795.394Z"/></svg>
</button>
                 
                </td>
                <td class="relative whitespace-nowrap   "> <livewire:manage-products :id="$product->id" />
       
                </td>
              </tr>

              <!-- More people... -->
            </tbody>
        
            @endforeach