<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Product;

class ProductFilter extends Component
{
    public $category;

    public function render()
    {
        if ($this->category) {
            $products = Product::where('productCategory', $this->category)->get();
        } else {
            $products = Product::all();
        }

        return view('livewire.product-filter', [
            'products' => $products
        ]);
    }
}