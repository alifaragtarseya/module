<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
           // Get Meta & Banner From DB
           $metaBanner =getMeta('products');
           // Set Meta Home
           metaGenerate($metaBanner);


        return view('front.products.index',[
            // 'products' =>  $query->get(),
            'categories' => \App\Models\Category::with('products')->where('type','products')->get(),
            'metaBanner' => $metaBanner
        ]);
    }

    public function show($id)
    {
           // Get Meta & Banner From DB
           $metaBanner =getMeta('products');
           // Set Meta Home
           metaGenerate($metaBanner);
        return view('front.products.show',[
            'product' =>  \App\Models\Product::findOrFail($id),
            'metaBanner' => $metaBanner
        ]);
    }
}
