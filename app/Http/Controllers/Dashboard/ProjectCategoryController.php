<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreServiceCategory;
use App\Models\Category;
use Illuminate\Http\Request;

class ProjectCategoryController extends Controller
{

    protected $model ;

    public function __construct(Category $model){
        $this->model = $model;
    }

    public function index()
    {
        $title = __('lang.delete_item');
        $text = __('lang.are_you_sure');
        confirmDelete($title, $text);

        return view('dashboard.projects-categories.index', [
            'data' => $this->model->where('type','projects')->paginate(20)
        ]);
    }

     /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('dashboard.projects-categories.form' ,[
            'resource' => $this->model
        ]);
    }


      /**
     * Store a newly created resource in storage.
     * @param StoreServiceCategory $request
     * @return Renderable
     */
    public function store(StoreServiceCategory $request)
    {
        $inputs = $request->validated();
        if (isset($inputs['image'])) {
            $inputs['image'] = uploadImage( $inputs['image'] , config('path.SER_CAT_PATH'), $inputs['en']['title']);
        }
        $inputs['type'] = 'projects';
        // dd($inputs);
        $this->model->create($inputs);
        toast(__('lang.created') , 'success');
        return redirect()->route('admin.pro_cat');
    }


      /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('dashboard.projects-categories.form' ,[
            'resource' => $this->model->findOrFail($id)
        ]);
    }



    /**
     * Update the specified resource in storage.
     * @param StoreServiceCategory $request
     * @param int $id
     * @return Renderable
     */
    public function update(StoreServiceCategory $request, $id)
    {
        $inputs = $request->validated();
        $resource = $this->model->findOrFail($id);
        if (isset($inputs['image'])) {
            $inputs['image'] = uploadImage($inputs['image'], config('path.SER_CAT_PATH'),$inputs['en']['title'], $resource->image);
        }
        $resource->update($inputs);
        toast(__('lang.updated'), 'success');
        return redirect()->route('admin.pro_cat');
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
        return redirect()->route('admin.pro_cat');
    }


}
