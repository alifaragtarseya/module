<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreProduct;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    protected $model ;

    public function __construct(Product $model){
        $this->model = $model;
    }

    public function index()
    {
        $title = __('lang.delete_item');
        $text = __('lang.are_you_sure');
        confirmDelete($title, $text);

        return view('dashboard.products.index', [
            'data' => $this->model->paginate(20)
        ]);
    }

     /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('dashboard.products.form' ,[
            'resource' => $this->model,
            
        ]);
    }


      /**
     * Store a newly created resource in storage.
     * @param StoreProduct $request
     * @return Renderable
     */
    public function store(StoreProduct $request)
    {
        $inputs = $request->validated();
        if (isset($inputs['image'])) {
            $inputs['image'] = uploadImage( $inputs['image'] , config('path.PRODUCTS_PATH'), $inputs['en']['title']);
        }
        DB::beginTransaction();
        $product = $this->model->create($inputs);
        if ($request->images) {
            foreach ($request->images as $image) {

                $item = uploadImage($image, config('path.PRODUCTS_IMAGE_PATH'), $inputs['en']['title']);
                $product->images()->create([
                    'image' => $item
                ]);
            }
        }
        DB::commit();
        toast(__('lang.created') , 'success');
        return redirect()->route('admin.product');
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
        return view('dashboard.products.form' ,[
            'resource' => $this->model->findOrFail($id),
            'categories' => Category::where('type','products')->get()->pluck('title','id')->toArray(),
            'brands' => Brand::get()->pluck('title','id')->toArray(),
        ]);
    }



    /**
     * Update the specified resource in storage.
     * @param StoreProduct $request
     * @param int $id
     * @return Renderable
     */
    public function update(StoreProduct $request, $id)
    {
        $inputs = $request->validated();
        $resource = $this->model->findOrFail($id);
        if (isset($inputs['image'])) {
            $inputs['image'] = uploadImage($inputs['image'], config('path.PRODUCTS_PATH'),$inputs['en']['title'], $resource->image);
        }
        DB::beginTransaction();
        $resource->update($inputs);
        if ($request->images) {
            foreach ($request->images as $image) {

                $item = uploadImage($image, config('path.PRODUCTS_IMAGE_PATH'), $inputs['en']['title']);
                $resource->images()->create([
                    'image' => $item
                ]);
            }
        }
        DB::commit();
        toast(__('lang.updated'), 'success');
        return redirect()->route('admin.product');
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
        return redirect()->route('admin.product');
    }


    public function deleteImage($id, $it)
    {
        $resource = ProductImage::where('product_id', $id)->where('id', $it)->first();
        deleteImage($resource->image);
        $resource->delete();
        toast(__('lang.deleted'), 'success');
        return redirect()->route('admin.product.edit', $id);
    }


}

