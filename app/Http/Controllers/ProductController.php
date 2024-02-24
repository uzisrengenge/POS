<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //food-beverage
    public function foodBeverage()
    {
        return view('product.food-beverage');
    }
    //beauty-health
    public function beautyHealth()
    {
        return view('product.beauty-health');
    }
}
