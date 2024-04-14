<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreService;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\ServiceImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{

    protected $model ;

    public function __construct(Service $model){
        $this->model = $model;
    }

    public function index()
    {
        $title = __('lang.delete_item');
        $text = __('lang.are_you_sure');
        confirmDelete($title, $text);

        return view('dashboard.services.index', [
            'data' => $this->model->paginate(20)
        ]);
    }

     /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('dashboard.services.form' ,[
            'resource' => $this->model,
        ]);
    }


      /**
     * Store a newly created resource in storage.
     * @param StoreService $request
     * @return Renderable
     */
    public function store(StoreService $request)
    {
        $inputs = $request->validated();
        if (isset($inputs['image'])) {
            $inputs['image'] = uploadImage( $inputs['image'] , config('path.SER_PATH'), $inputs['en']['title']);
        }
        DB::beginTransaction();
        $service = $this->model->create($inputs);
        if ($request->images) {
            foreach ($request->images as $image) {

                $item = uploadImage($image, config('path.SER_IMAGE_PATH'), $inputs['en']['title']);
                $service->images()->create([
                    'image' => $item
                ]);
            }
        }
        DB::commit();
        toast(__('lang.created') , 'success');
        return redirect()->route('admin.service');
    }


      /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $title = __('lang.delete_item');
        $text = __('lang.are_you_sure');
        confirmDelete($title, $text);
        return view('dashboard.services.form' ,[
            'resource' => $this->model->findOrFail($id),

        ]);
    }



    /**
     * Update the specified resource in storage.
     * @param StoreService $request
     * @param int $id
     * @return Renderable
     */
    public function update(StoreService $request, $id)
    {
        $inputs = $request->validated();
        $resource = $this->model->findOrFail($id);
        if (isset($inputs['image'])) {
            $inputs['image'] = uploadImage($inputs['image'], config('path.SER_PATH'),$inputs['en']['title'], $resource->image);
        }
        DB::beginTransaction();
        $resource->update($inputs);
        if ($request->images) {
            foreach ($request->images as $image) {

                $item = uploadImage($image, config('path.SER_IMAGE_PATH'), $inputs['en']['title']);
                $resource->images()->create([
                    'image' => $item
                ]);
            }
        }
        DB::commit();
        toast(__('lang.updated'), 'success');
        return redirect()->route('admin.service');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $resource = $this->model->findOrFail($id);
        // dd($resource->images()->pluck('image')->toArray());
        deleteImage($resource->images()->pluck('image')->toArray());
        deleteImage($resource->image);
        $resource->images()->delete();
        $resource->delete();
        toast(__('lang.deleted'), 'success');
        return redirect()->route('admin.service');
    }


    public function deleteImage($id, $it)
    {
        $resource = ServiceImages::where('service_id', $id)->where('id', $it)->first();
        deleteImage($resource->image);
        $resource->delete();
        toast(__('lang.deleted'), 'success');
        return redirect()->route('admin.service.edit', $id);
    }


}
