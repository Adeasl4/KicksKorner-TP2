<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;


class InventoryController extends Controller
{

    public function checkLowStock()
    {
        $products = Product::all();

        $threshold = 10; // Define what 'low' is
        $warnings = [];

        foreach ($products as $product) {
            if ($product->units_in_stock < $threshold) {
                // Display a notification to the user
                $warnings[] = 'Low stock alert: '.$product->name.' is low in stock!';
            }
        }

        session()->flash('warnings', $warnings);
    }

    public function index()
    {
        // Call the function to check for low stock
        $this->checkLowStock();

        // Retrieve all products from the database
        $products = Product::all();
        
        // Pass the products data to the view
        return view('frontend.inventory', ['products' => $products]);
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

        // Call the function to check for low stock
        $this->checkLowStock();
    
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

        // Call the function to check for low stock
        $this->checkLowStock();
    
        return redirect()->back()->with('success', 'Product information updated successfully!');
    }

    public function delete(Request $request)
    {
        $selectedProducts = $request->input('selectedProducts');
    
        //if not empty then delete
        if (!empty($selectedProducts)) {
            DB::table('products')->whereIn('id', $selectedProducts)->delete();
            return redirect('/inventory-management')->with('success', 'Selected products deleted successfully!');
        } else {//nothing selected
            return redirect('/inventory-management')->with('error', 'No products selected for deletion!');
        }
    }

    public function search(Request $request)
    {
        // Get the search query from the request
        $query = $request->input('query');

        // Perform the search query on your database
        $products = Product::where('name', 'LIKE', "%$query%")
                       ->orWhere('description', 'LIKE', "%$query%")
                       ->get();

        $this->checkLowStock();
        // Return the search results to the view
        return view('frontend.inventory', compact('products'));
    }


}
