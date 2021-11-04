<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        $data['products'] =$products->toArray();
        return view('product',$data);
    }
}
