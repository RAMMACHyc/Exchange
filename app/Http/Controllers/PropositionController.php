<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\propositions;

class PropositionController extends Controller
{

    public function index()
{
    $propositions = propositions::where('user1_id',auth()->id())->where('status','pending')->get();
    
    return view('proposition.index', ['propositions'=>$propositions]);
}


    public function acceptExchange(Request $request, $id)
    {
        // Find the proposition by id
        $proposition = propositions::findOrFail($id);
    
        // Check if the logged-in user is User1
        if (auth()->id() === $proposition->user2_id  ) {
            
            
             return redirect('/products')->with('error', 'You are not authorized to accept this exchange request.');
           
        }
    
        

       
        $product1 = Product::findOrFail($proposition->product_id);
        $product2 = Product::findOrFail($proposition->exchange_product_id);
        
   
         // Swap the user_id of the two products if they are not the same product
    if ($product1->id !== $product2->id) {
      
        $tempUserId = $product1->user_id;
   
        $product1->user_id = $product2->user_id;
      
        $product2->user_id = $tempUserId;
      
        
        $product1->save();
       
        $product2->save();
    
        
        $proposition->status = 'accepted';
        $proposition->save();
    
        
        return redirect('/products')->with('success', 'Exchange request accepted, products have been exchanged.');

        
    }
    }

    public function destroy($id)
{
    
    $proposition = propositions::findOrFail($id);

    
    if (auth()->id() != $proposition->user1_id && auth()->id() != $proposition->user2_id) {
        return redirect('/propositions')->with('error', 'You are not authorized to delete this proposition.');
    }

    
    $proposition->delete();

    
    return redirect('/propositions')->with('success', 'Proposition deleted successfully.');
}
}
