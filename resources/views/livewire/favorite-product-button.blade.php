<div class="favorite hidden">
    
    <button wire:click="toggleFavorite" class="absolute bottom-48 right-1   w-20 h-8 bg-white rounded-md {{ $isFavorite ? 'hidden' : '' }}">
        <div class="flex border-b  border-gray-200 mt-1">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="20px" height="20px" ><path fill="#f9b76d"   d="M37,43l-13-6l-13,6V9c0-2.2,1.8-4,4-4h18c2.2,0,4,1.8,4,4V43z"/></svg>
            <p class="text-gray-500 text-sm">favorite</p>
        </div>
    </button>
    <button wire:click="toggleFavorite" class="absolute bottom-48 right-1  w-20 h-8 bg-white rounded-md {{ $isFavorite ? '' : 'hidden' }}">
        <div class="flex border-b  border-gray-200 mt-1">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="20px" height="20px" ><path fill="#e0dddd"   d="M37,43l-13-6l-13,6V9c0-2.2,1.8-4,4-4h18c2.2,0,4,1.8,4,4V43z"/></svg>
            <p class="text-gray-500 text-sm">unfavorite</p>
        </div>
    </button>
</div>
