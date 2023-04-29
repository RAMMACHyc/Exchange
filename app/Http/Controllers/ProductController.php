<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\propositions;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Livewire\EditProduct;
use Livewire\Livewire;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index()
{
    $products = Product::all();
   
    
    $electronics = Product::where('productCategory', 'ELECTRONIC')->get();
    $books = Product::where('productCategory', 'BOOK')->get();
    $furniture = Product::where('productCategory', 'FURNITURE')->get();
    
    return view('product.index', ['electronics' => $electronics, 'books' => $books, 'furniture' => $furniture,'products' => $products]);
    
   
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("product.create");
   
    }


  

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $newImageName = uniqid() . '-' . '.' . $request->image_path->extension();
        $request->image_path->move(public_path('images'), $newImageName);

        


        $Product = Product::create([
            'productName' => $request->input('productName'),
            'productCategory' => $request->input('productCategory'),
            'description' => $request->input('description'),
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id,

        ]);
        return redirect('/products');
    
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('product.show')
            ->with('product', Product::findOrFail($id));
    }

 
  
    public function edit($id)
    {
        return view('product.edit', [
            'productId' => $id,
            'component' => EditProduct::class,
        ]);
    }


  
    
    public function exchange(Product $product)
    {
        
       
        $userProducts = auth()->user()->products;
        
       
        return view('product.exchange', [
            'requestedProduct' => $product,
            'userProducts' => $userProducts,
        ]);
    }
    
    public function completeExchange(Request $request, Product $product)
    {
        
        // Validate the request
        $request->validate([
            'exchange_product_id' => 'required|exists:products,id',
            'added_amount' => 'required|numeric|min:0',
        ]);
             if (auth()->id() === $product->user_id  ) {

             return redirect('/products')->with('error', 'You are not authorized to accept this exchange request.');
           }
        // Create a new proposition
        $proposition = propositions::create([
            'product_id' => $product->id,
            'user1_id' => $product->user_id,
            'user2_id' => auth()->id(),
            'description' => $request->input('description'),
            'addedAmount' => $request->input('added_amount'),
            'exchange_product_id' => auth()->user()->products ? $request->input('exchange_product_id') : null,
            'status' => 'pending',
        ]);
    
        return redirect('/products')->with('success', 'Exchange request sent.');    }

 


}