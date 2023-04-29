<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class ManageProducts extends Component
{
    public $productId;
    public function mount($id)
    {
        $this->productId = $id;
    }
    public function destroy()
{
    $product = Product::findOrFail($this->productId);
    $product->delete();

    return redirect('/dashboard');
}

    public function render()
    {
        return view('livewire.manage-products');
    }
}
