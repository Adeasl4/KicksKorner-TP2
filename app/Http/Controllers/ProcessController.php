<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProcessController extends Controller
{
    public function index()
    {

        $transactions = Checkout::all();
        return view('frontend.process', compact('transactions'));

    }

        public function processOrders(Request $request)
    {
        $selectedOrderIds = $request->input('transaction_ids');

        // Fetch selected transactions
        $selectedTransactions = Checkout::whereIn('id', $selectedOrderIds)->get();

        foreach ($selectedTransactions as $transaction) {

            $transaction->status = 'processed';
            $transaction->save();
            
            // Fetch the product for this checkout
            $product = Product::find($transaction->product_id);

            if ($product) {
                // Update inventory
                $product->decrement('stock', $transaction->quantity);
            }
        }

        return redirect('/process')->with('success', 'Order processed');
    }



}
