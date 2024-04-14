<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
           // Get Meta & Banner From DB
           $metaBanner = getMeta('service');
           // Set Meta Home
           metaGenerate($metaBanner);
           $query =  \App\Models\Service::Latest();



        return view('front.services.index',[
            'services' =>  $query->get(),
            'metaBanner' => $metaBanner
        ]);
    }

    public function show($id)
    {
           // Get Meta & Banner From DB
           $metaBanner =getMeta('service');
           // Set Meta Home
           metaGenerate($metaBanner);
        return view('front.services.show',[
            'service' =>  \App\Models\Service::findOrFail($id),
            'metaBanner' => $metaBanner
        ]);
    }
}
