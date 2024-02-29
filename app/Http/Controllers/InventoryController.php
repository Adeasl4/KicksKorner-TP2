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
}
