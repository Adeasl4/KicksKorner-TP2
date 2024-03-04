<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class InventoryController extends Controller
{
    public function index()
    {
        // Retrieve all products from the database
        $products = Product::all();
        
        // Pass the products data to the view
        return view('frontend.inventory', compact('products'));

    }

    public function store(Request $request)
        {
            // Validate incoming request data
            $validatedData = $request->validate([
                'name' => 'required', //Validation rules
                'description' => 'required',
                'price' => 'required',
                'units_in_stock' => 'required',
                'image_url' => 'required',
            ]);
    
            // Create a new user record in the database
            $products = Product::create($validatedData);
    
            // Or redirect
            return redirect('/inventory-management')->with('success', 'Product added successfully!');
        }

        public function update(Request $request)
        {
            // Validate incoming request data
            $validatedData = $request->validate([
                'product_id' => 'required|numeric', // Validation rules
                'name' => 'required',
                'description' => 'required',
                'price' => 'required',
                'units_in_stock' => 'required',
                'image_url' => 'required',
            ]);
    
            // Retrieve the user data using the provided user ID
            $product = Product::find($validatedData['product_id']);
    
            // Check if it exists
            if (!$product) {
                return redirect()->back()->with('error', 'Product not found! Please enter a valid product ID.');
            }
    
            // Update the user's information
            $product->update([
                'name' => $validatedData['name'],
                'description' => $validatedData['description'],
                'price' => $validatedData['price'],
                'units_in_stock' => $validatedData['units_in_stock'],
                'image_url' => $validatedData['image_url'],
            ]);
    
            return redirect()->back()->with('success', 'Product information updated successfully!');
        }
}
