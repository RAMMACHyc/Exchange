<?php

namespace App\Http\Livewire;
use App\Models\User;
use App\Models\Product;
use Livewire\Component;

class SearchMyProducts extends Component
{
    public $searchQuery;
    public $products;

    public function search()

    {
        $this->products = Product::query()
            ->where('productName', 'LIKE', '%'.$this->searchQuery.'%')
            ->orWhere('productCategory', 'LIKE', '%'.$this->searchQuery.'%')
            ->orWhereHas('user', function ($query) {
                $query->where('name', 'LIKE', '%'.$this->searchQuery.'%');
            })
            ->get();
    
    }
    
    public function render()
    {
        $this->search();
    
        return view('livewire.searh-my-products');
    }
    
}
