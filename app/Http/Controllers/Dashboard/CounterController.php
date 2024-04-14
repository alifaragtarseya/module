<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Dashboard\StoreCounter;
use App\Models\Countr;

class CounterController extends Controller
{

    protected $model ;

    public function __construct(Countr $model){
        $this->model = $model;
    }

    public function index()
    {
        $title = __('lang.delete_item');
        $text = __('lang.are_you_sure');
        confirmDelete($title, $text);

        return view('dashboard.counters.index', [
            'data' => $this->model->paginate(20)
        ]);
    }

     /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('dashboard.counters.form' ,[
            'resource' => $this->model
        ]);
    }


      /**
     * Store a newly created resource in storage.
     * @param StoreCounter $request
     * @return Renderable
     */
    public function store(StoreCounter $request)
    {

        $inputs = $request->validated();
       $inputs['image'] = uploadImage($inputs['image'], config('path.COUNTER_PATH'),$inputs['en']['title']);

       // Save the data
       $this->model->create($inputs);

       toast(__('lang.created'), 'success');
       return redirect()->route('admin.counter');
    }



      /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('dashboard.counters.form' ,[
            'resource' => $this->model->findOrFail($id)
        ]);
    }



    /**
     * Update the specified resource in storage.
     * @param StoreCounter $request
     * @param int $id
     * @return Renderable
     */
    public function update(StoreCounter $request, $id)
    {
        $inputs = $request->validated();

        $resource = $this->model->findOrFail($id);
        if(isset($inputs['image'])){
            $inputs['image'] = uploadImage($inputs['image'], config('path.COUNTER_PATH'),$inputs['en']['title'], $resource->image);
        }
        $resource->update($inputs);
        toast(__('lang.updated'), 'success');
        return redirect()->route('admin.counter');
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
        return redirect()->route('admin.counter');
    }



}
