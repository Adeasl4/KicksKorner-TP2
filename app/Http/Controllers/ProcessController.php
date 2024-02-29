<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProcessController extends Controller
{
    public function index()
    {
        return view('frontend.process'); // Load the view for your new page
    }
}
