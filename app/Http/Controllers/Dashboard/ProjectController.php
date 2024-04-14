<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreProject;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    protected $model ;

    public function __construct(Project $model){
        $this->model = $model;
    }

    public function index()
    {
        $title = __('lang.delete_item');
        $text = __('lang.are_you_sure');
        confirmDelete($title, $text);

        return view('dashboard.projects.index', [
            'data' => $this->model->paginate(20)
        ]);
    }

     /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('dashboard.projects.form' ,[
            'resource' => $this->model,
        ]);
    }


      /**
     * Store a newly created resource in storage.
     * @param StoreProject $request
     * @return Renderable
     */
    public function store(StoreProject $request)
    {
        $inputs = $request->validated();
        if (isset($inputs['image'])) {
            $inputs['image'] = uploadImage( $inputs['image'] , config('path.PROJECT_PATH'), 'image');
        }
        // dd($inputs);
        $this->model->create($inputs);
        toast(__('lang.created') , 'success');
        return redirect()->route('admin.project');
    }


      /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('dashboard.projects.form' ,[
            'resource' => $this->model->findOrFail($id),
            'categories' => Category::where('type','projects')->get()->pluck('title','id')->toArray(),

        ]);
    }



    /**
     * Update the specified resource in storage.
     * @param StoreProject $request
     * @param int $id
     * @return Renderable
     */
    public function update(StoreProject $request, $id)
    {
        $inputs = $request->validated();
        $resource = $this->model->findOrFail($id);
        if (isset($inputs['image'])) {
            $inputs['image'] = uploadImage($inputs['image'], config('path.PROJECT_PATH'),'image', $resource->image);
        }
        $resource->update($inputs);
        toast(__('lang.updated'), 'success');
        return redirect()->route('admin.project');
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
        return redirect()->route('admin.project');
    }



}
