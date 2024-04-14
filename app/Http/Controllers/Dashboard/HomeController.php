<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboard.home.index',[
            'totals' => $this->getTotals(),
        ]);
    }


    public function profile()
    {

        return view('dashboard.profile.index',[
            'resource' => Admin::where('id',auth('admin')->user()->id)->first(),
        ]);
    }



    public function updateProfile(Request $request)
    {

        $inputs = $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins,email,'.auth('admin')->user()->id],
            'password' => ['nullable', 'string', 'min:6'],
            'image' => ['nullable', 'image', 'mimes:png,jpg,jpeg'],
            'phone' => ['required', 'string', 'max:255'],

        ]);

        $resource = Admin::where('id',auth('admin')->user()->id)->first();

        if ($request->hasFile('image')) {
            $inputs['image'] = uploadImage($request->image, 'uploads/admins/', $resource->username);
        }
        if (isset($inputs['password'])) {
            $inputs['password'] = bcrypt($inputs['password']);
        }else{
            unset($inputs['password']);
        }
        // dd($inputs);
        $resource->update($inputs);

        toast(__('lang.updated') , 'success');
        return back();

    }


    private function getTotals()
    {

        return [
            [
                'title' => __('lang.sliders'),
                'value' => \App\Models\Slider::count(),
                'icon' => ' <i class="menu-icon tf-icons bx bx-image fs-1"></i>',
                'url' => route('admin.slider')
            ],
            [
                'title' => __('lang.services'),
                'value' => \App\Models\Service::count(),
                'icon' => ' <i class="menu-icon tf-icons bx bx-box fs-1"></i>',
                'url' => route('admin.service')
            ],
            [
                'title' => __('lang.products'),
                'value' => \App\Models\Product::count(),
                'icon' => ' <i class="menu-icon tf-icons bx bx-list-ul fs-1"></i>',
                'url' => route('admin.product')
            ],
            [
                'title' => __('lang.features'),
                'value' => \App\Models\Feature::count(),
                'icon' => ' <i class="menu-icon tf-icons bx bx-diamond fs-1"></i>',
                'url' => route('admin.feature')
            ],
            [
                'title' => __('lang.projects'),
                'value' => \App\Models\Project::count(),
                'icon' => ' <i class="menu-icon tf-icons bx bx-briefcase fs-1"></i>',
                'url' => route('admin.project')
            ],
            [
                'title' => __('lang.parteners'),
                'value' => \App\Models\Partener::count(),
                'icon' => ' <i class="menu-icon tf-icons bx bx-group fs-1"></i>',
                'url' => route('admin.partener')
            ],
            [
                'title' => __('lang.counters'),
                'value' => \App\Models\Countr::count(),
                'icon' => ' <i class="menu-icon tf-icons bx bx-tachometer fs-1"></i>',
                'url' => route('admin.counter')

            ]
        ];
    }
}
