<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $products = Product::paginate(50);
        return view("home", compact("products"));
    }
    public function login(){
        return view("login");
    }
}
