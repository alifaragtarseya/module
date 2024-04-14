<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreMetaTag;
use App\Models\MetaTagBanner;
use Illuminate\Http\Request;

class MetaTagController extends Controller
{
    public function index($page)
    {
        $data = MetaTagBanner::where('page', $page)->first() ?? new MetaTagBanner();
        $page = $page;
        return view('dashboard.metatags.form', compact('data','page'));
    }



    public function saveMetatag($page, StoreMetaTag $request)
    {
        $inputs = $request->validated();
        if (isset($inputs['image'])) {
            $inputs['image'] = uploadImage( $inputs['image'] , config('path.METATAG_PATH'), $inputs['title_en']);
        }
        $inputs['page'] = $page;
        // dd($inputs);
        $data = MetaTagBanner::where('page', $page)->first() ;
        if(!$data){
            MetaTagBanner::create($inputs);
        }else{
            $data->update($inputs);
        }

        toast(__('lang.updated') , 'success');
        return redirect()->route('admin.meta', $page);
    }
}
