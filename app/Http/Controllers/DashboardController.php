<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $products = Product::all();
        return view('dashboard', compact('products'));   
    }
    
}
