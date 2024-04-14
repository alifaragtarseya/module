<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ChangeStatus;
use App\Http\Requests\Dashboard\Slider\StoreSlider;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    protected $model ;

    public function __construct(Slider $model){
        $this->model = $model;
    }

    public function index()
    {
        $title = __('lang.delete_item');
        $text = __('lang.are_you_sure');
        confirmDelete($title, $text);

        return view('dashboard.sliders.index', [
            'data' => $this->model->paginate(20)
        ]);
    }

     /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('dashboard.sliders.form' ,[
            'resource' => $this->model,
            'types' => Slider::TYPE
        ]);
    }


      /**
     * Store a newly created resource in storage.
     * @param StoreSlider $request
     * @return Renderable
     */
    public function store(StoreSlider $request)
    {
        $inputs = $request->validated();
        if (isset($inputs['image'])) {
            $inputs['image'] = uploadImage( $inputs['image'] , config('path.SLIDER_PATH'), $inputs['en']['title']);
        }
        // dd($inputs);
        $this->model->create($inputs);
        toast(__('lang.created') , 'success');
        return redirect()->route('admin.slider');
    }


      /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('dashboard.sliders.form' ,[
            'resource' => $this->model->findOrFail($id),
            'types' => Slider::TYPE

        ]);
    }



    /**
     * Update the specified resource in storage.
     * @param StoreSlider $request
     * @param int $id
     * @return Renderable
     */
    public function update(StoreSlider $request, $id)
    {
        $inputs = $request->validated();
        $resource = $this->model->findOrFail($id);
        if (isset($inputs['image'])) {
            $inputs['image'] = uploadImage($inputs['image'], config('path.SLIDER_PATH'),$inputs['en']['title'], $resource->image);
        }
        // dd($inputs);
        $resource->update($inputs);
        toast(__('lang.updated'), 'success');
        return redirect()->route('admin.slider');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $resource = $this->model->findOrFail($id);
        deleteImage($resource->image);
        $resource->delete();
        toast(__('lang.deleted'), 'success');
        return redirect()->route('admin.slider');
    }


     /**
     *Change the status of a slider.
     * @param ChangeStatus $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function changeStatus(ChangeStatus $request)
    {
        $inputs = $request->validated();
        $this->model->findOrFail($inputs['id'])->update([
            'status' => $inputs['status']
        ]);
        return response()->json([
            'success' => true,
            'message' => __('lang.updated')
        ]);
    }
}
