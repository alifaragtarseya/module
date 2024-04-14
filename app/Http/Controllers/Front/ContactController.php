<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
           // Get Meta & Banner From DB
           $metaBanner =getMeta('contact');
           // Set Meta Home
           metaGenerate($metaBanner);
        return view('front.contact.index',[
            'metaBanner' => $metaBanner
        ]);
    }
}
