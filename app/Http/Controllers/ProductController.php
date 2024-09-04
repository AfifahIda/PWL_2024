<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function foodBeverage()
    {
       return view('blog.product') ->with('category', 'FoodBeverages');
    }

    public function beautyHealth()
    {
        return view('blog.product') ->with('category', 'BeautyHealth');
    }

    public function homeCare()
    {
        return view('blog.product') ->with('category', 'HomeCare');
    }

    public function babyKid()
    {
        return view('blog.product') ->with('category', 'BabyKid');
    }
}
