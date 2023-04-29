<?php



namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class EditProduct extends Component
{
    public $productId;
    public $productName;
    public $productCategory;
    public $description;
    public $image_path;

    public function mount($id)
    {
        $product = Product::findOrFail($id);
        $this->productId = $product->id;
        $this->productName = $product->productName;
        $this->productCategory = $product->productCategory;
        $this->description = $product->description;
        $this->image_path = $product->image_path;
    }

    public function update()
    {
        $product = Product::findOrFail($this->productId);
    
        if (isset($this->image_path) && !empty($this->image_path) && $this->image_path instanceof UploadedFile) {
            $newImageName = uniqid() . '-' . '.' . $this->image_path->extension();
            $this->image_path->storeAs('public/images', $newImageName);
            $product->image_path = $newImageName;
        }
    
        $product->productName = $this->productName;
        $product->productCategory = $this->productCategory;
        $product->description = $this->description;
        $product->save();
    
        session()->flash('success', 'Product updated successfully.');
    
        return redirect()->route('products.show', $product->id);
    }
    

    public function render()
    {
        return view('livewire.edit-product');
    }
}

