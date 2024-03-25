<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Checkout;

class OrderController extends Controller
{
    /**
     * Place a new order and save checkout details.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function placeOrder(Request $request)
    {
        // Validate the request data as needed

        // Extract total price and products from the request
        $totalPrice = $request->input('total_price');
        $products = $request->input('products');

        // Save order details to orders table
        $order = new Order();
        $order->total_price = $totalPrice;
        // Save other order details as needed
        $order->save();

        // Generate and return the order number
        $orderNumber = rand(10000, 99999); // Example random order number generation

        // Save checkout details to checkouts table
        foreach ($products as $product) {
            $checkout = new Checkout();
            $checkout->order_id = $order->id; // Assuming the order has been saved
            $checkout->product_id = $product['id'];
            $checkout->user_id = auth()->user()->id; // Assuming the user is authenticated
            $checkout->quantity = $product['quantity'];
            $checkout->total_price = $product['price'] * $product['quantity'];
            // Save other checkout details as needed
            $checkout->save();
        }

        return response()->json(['orderNumber' => $orderNumber]);
    }
}



