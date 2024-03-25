<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout; 
use Illuminate\Support\Facades\Session; 


class CheckoutController extends Controller
{

    public function processCheckout(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'total_cost' => 'required|numeric',
            'product_ids' => 'required|array',
            'product_ids.*' => 'required|exists:products,id',
            'quantities' => 'required|array',
            'quantities.*' => 'required|integer|min:1',
        ]);
    
        try {
            // Create Checkout records based on the submitted data
            foreach ($validatedData['product_ids'] as $key => $productId) {
                $checkout = new Checkout();
                $checkout->product_id = $productId;
                $checkout->quantity = $validatedData['quantities'][$key];
                $checkout->total_price = $validatedData['total_cost'];
                $checkout->save();
            }
            
        // Flash success message to session
        Session::flash('success', 'Order placed successfully');

        // Redirect back to the homepage
        return redirect()->route('home.page');
    } catch (\Exception $e) {
        // Log the error
        \Log::error('Checkout failed: ' . $e->getMessage());
        // Redirect back with error message
        return redirect()->back()->with('error', 'Checkout failed: ' . $e->getMessage());
    }
    }
    
    
    
    

}
