<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
           // Get Meta & Banner From DB
           $metaBanner =getMeta('project');
           // Set Meta Home
           metaGenerate($metaBanner);

           $query =  \App\Models\Product::Latest();

          
        return view('front.projects.index',[
            'projects' =>  $query->get(),
            'categories' =>  \App\Models\Category::where('type','projects')->latest()->get(),
            'metaBanner' => $metaBanner
        ]);
    }

    public function show($id)
    {
           // Get Meta & Banner From DB
           $metaBanner =getMeta('project');
           // Set Meta Home
           metaGenerate($metaBanner);
        return view('front.projects.show',[
            'project' =>  \App\Models\Product::findOrFail($id),
            'metaBanner' => $metaBanner
        ]);
    }
}
