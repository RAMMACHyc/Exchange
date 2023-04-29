<div>
    <div>
        <button wire:click="$set('category', 'ELECTRONIC')">ELECTRONIC</button>
        <button wire:click="$set('category', 'FURNITURE')">FURNITURE</button>
        <button wire:click="$set('category', 'VEHICLES')">VEHICLES</button>
    </div>

    <ul>
        @foreach ($products as $product)
            <li>{{ $product->productName }}</li>
        @endforeach
    </ul>
</div>