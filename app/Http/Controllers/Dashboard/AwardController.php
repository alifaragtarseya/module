<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreAward;
use App\Models\Award;
use Illuminate\Http\Request;

class AwardController extends Controller
{

    protected $model ;

    public function __construct(Award $model){
        $this->model = $model;
    }

    public function index()
    {
        $title = __('lang.delete_item');
        $text = __('lang.are_you_sure');
        confirmDelete($title, $text);

        return view('dashboard.awards.index', [
            'data' => $this->model->paginate(20)
        ]);
    }

     /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('dashboard.awards.form' ,[
            'resource' => $this->model
        ]);
    }


      /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(StoreAward $request)
    {

       // Validate the image
       $inputs = $request->validated();
       $id = $this->model->max('id')+1;
       // Handle the image upload
       $inputs['image'] = uploadImage($inputs['image'], config('path.AWARDS_PATH'),$id);
    //    dd($inputs);

       // Save the data
       $this->model->create($inputs);

       toast(__('lang.created'), 'success');
       return redirect()->route('admin.award');
    }



      /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('dashboard.awards.form' ,[
            'resource' => $this->model->findOrFail($id)
        ]);
    }



    /**
     * Update the specified resource in storage.
     * @param StoreAward $request
     * @param int $id
     * @return Renderable
     */
    public function update(StoreAward $request, $id)
    {
        $inputs = $request->validated();
        $resource = $this->model->findOrFail($id);
        if(isset($inputs['image'])){
            $inputs['image'] = uploadImage($inputs['image'], config('path.AWARDS_PATH'),$resource->id, $resource->image);
        }
        $resource->update($inputs);
        toast(__('lang.updated'), 'success');
        return redirect()->route('admin.award');
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
        return redirect()->route('admin.award');
    }



}
