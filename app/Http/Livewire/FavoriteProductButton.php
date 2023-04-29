<?php

namespace App\Http\Livewire;

use App\Models\FavoriteProduct;
use Livewire\Component;

class FavoriteProductButton extends Component
{
    public $product;

    public function mount($product)
    {
        $this->product = $product;
    }

    public function toggleFavorite()
    {
        $favorite = FavoriteProduct::where('user_id', auth()->id())
            ->where('product_id', $this->product->id)
            ->first();

        if ($favorite) {
            $favorite->delete();
        } else {
            FavoriteProduct::create([
                'user_id' => auth()->id(),
                'product_id' => $this->product->id,
            ]);
        }
    }

    public function render()
    {
        $isFavorite = FavoriteProduct::where('user_id', auth()->id())
            ->where('product_id', $this->product->id)
            ->exists();

        return view('livewire.favorite-product-button', [
            'isFavorite' => $isFavorite,
        ]);
    }
}
