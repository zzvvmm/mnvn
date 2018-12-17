<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Image;
use App\ProductType;
use App\Category;
use Illuminate\Support\Str;
use App\Http\Requests\ProductFormRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        $product_type = ProductType::all();
        
        return view('backend.products.index', compact('product', 'product_type'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('id', $id)->first();
        $image = Image::where('id_product', $id)->get();
        // dd($image->name);

        return view('backend.products.show', compact('product', 'image'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->back()->with('success', __('Xóa thành công'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product_type = ProductType::all();
        $category = Category::all();

        return view('backend.products.create', compact('product_type', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductFormRequest $request)
    {
        $product = new Product([
            'name' => $request->name,
            'include' => $request->include,
            'detail_description' => $request->detail_description,
            'id_type' => $request->id_type,
            'price' => $request->price,
            'weight' => $request->weight,
            'unit' => $request->unit,
            'height' => $request->height,
            'color' => $request->color,
            'guarantee' => $request->guarantee,
            'material' => $request->material,
            // 'avatar' => $request->avatar->getClientOriginalName(),
            
        ]);
        // if($request->hasFile('avatar')) {
        //     $filename= $request->avatar->getClientOriginalName();
        //     $request->avatar->move(config('app.link_product'), $filename);
        // }
        // // $product->avatar = 

        $product->save();
        if($request->hasFile('image')) {
            foreach($request->image as $image) {
                $filename = $image->getClientOriginalName();
                $image->move(config('app.link_product'), $filename);
 
                $image = new Image([
                    'id_product' => $product->id,
                    'name' => $filename,
                ]);
                $image->save();
            }
        }
        $product->avatar = $product->getImage($product->id)->name;
        $product->save();

        return redirect()->route('products.index') ->with('success', __('Tạo thành công'));
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::where('id', $id)->first();
        // $image = Image::where('id_product', $id)->get();

        return view('backend.products.edit', compact('product', 'product_type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::where('id', $id)->first();
        $product->name = $request->name;
        $product->id_type = $request->id_type;
        $product->include = $request->include;
        $product->detail_description = $request->detail_description;
        $product->price = $request->price;
        $product->guarantee = $request->guarantee;
        $product->height = $request->height;
        $product->unit = $request->unit;
        $product->color = $request->color;
        $product->material = $request->material;
        $product->save();

        return redirect()->route('products.index')->with('success', __('Sửa thành công'));
    }
}
