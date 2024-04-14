<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
           // Get Meta & Banner From DB
           $metaBanner =getMeta('about');
           // Set Meta Home
           metaGenerate($metaBanner);
        return view('front.about.index',[
            'about' =>  \App\Models\About::first(),
            'metaBanner' => $metaBanner,
            'counters' => \App\Models\Countr::get(),
            'certifications' => \App\Models\Certification::get(),
            'teams' => \App\Models\Team::get(),
        ]);
    }
}
