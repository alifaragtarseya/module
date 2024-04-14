<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{

    protected $model;

    public function __construct(Setting $model){
        $this->model = $model;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('dashboard.settings.index' , ['settings' => $this->model->all()]);
    }

   public function update(Request $request){
        $setting = $this->model->all();
        $inputs = $request->except('_token');
        if (isset($inputs['logo'])) {
            $inputs['logo'] = uploadImage($inputs['logo'] , config('path.SETTING_PATH'),'logo' , optional($setting->where('key','logo')->first())->value);
        }

        if (isset($inputs['logo_white'])) {
            $inputs['logo_white'] = uploadImage($inputs['logo_white'] , config('path.SETTING_PATH') ,'logo_white' , optional($setting->where('key','logo_white')->first())->value);
        }

        if (isset($inputs['favicon'])) {
            $inputs['favicon'] = uploadImage($inputs['favicon'] , config('path.SETTING_PATH'),'favicon' , optional($setting->where('key','favicon')->first())->value);
        }
        if (isset($inputs['contact_image'])) {
            $inputs['contact_image'] = uploadImage($inputs['contact_image'] , config('path.SETTING_PATH') ,'', optional($setting->where('key','contact_image')->first())->value);
        }
        if (isset($inputs['company_profile'])) {
            $inputs['company_profile'] = uploadImage($inputs['company_profile'] , config('path.SETTING_PATH') ,'', optional($setting->where('key','company_profile')->first())->value);
        }
        if (isset($inputs['bg_footer'])) {
            $inputs['bg_footer'] = uploadImage($inputs['bg_footer'] , config('path.SETTING_PATH') ,'', optional($setting->where('key','bg_footer')->first())->value);
        }
        if (isset($inputs['vision_bg'])) {
            $inputs['vision_bg'] = uploadImage($inputs['vision_bg'] , config('path.SETTING_PATH') ,'', optional($setting->where('key','vision_bg')->first())->value);
        }

        $this->model->setMany($inputs);
        toast(__('lang.updated') , 'success');
        return redirect()->back();
   }
}
