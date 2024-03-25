<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout; // Assuming you have a Checkout model

class CheckoutController extends Controller
{
    public function processCheckout(Request $request)
{
    // Validate the request data first
    $validatedData = $request->validate([
        'total_cost' => 'required|numeric',
        'product_id' => 'required|exists:products,id',
        'user_id' => 'required|exists:users,id',
        'quantity' => 'required|integer|min:1',
        'order_id' => 'exists:orders,id', 
    ]);

    try {
        // Now you can be sure that validated data is being used
        $checkout = new Checkout();
        $checkout->product_id = $validatedData['product_id'];
        $checkout->user_id = $validatedData['user_id'];
        $checkout->quantity = $validatedData['quantity'];
        $checkout->total_price = $validatedData['total_cost'];
        // $checkout->order_id = $validatedData['order_id']; // Include this if you're using order_id

        $checkout->save();
        
        return response()->json(['message' => 'Checkout processed successfully']);
    } catch (\Exception $e) {
        // Log the error or handle it as per your application's need
        return response()->json(['message' => 'Checkout failed', 'error' => $e->getMessage()], 500);
    }
}

}
