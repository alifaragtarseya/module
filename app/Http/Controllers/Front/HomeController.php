<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Admin;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
           // Get Meta & Banner From DB
           $metaBanner =getMeta('home');
           // Set Meta Home
           metaGenerate($metaBanner);
        return view('front.home.index',[
            'sliders' =>Slider::active()->get(),
            'about' => About::first(),
            'categories' => \App\Models\Category::get(),
            'products' => \App\Models\Product::latest()->take(6)->get(),
            'projects' => \App\Models\Project::take(6)->get(),
            'services' => \App\Models\Service::take(6)->get(),
            'counters' => \App\Models\Countr::get(),
            'parteners' => \App\Models\Partener::get(),
            'features' => \App\Models\Feature::get(),
        ]);
    }



}
