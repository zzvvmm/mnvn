<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Image;

class ImageController extends Controller
{
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Image::findOrFail($id);
        $image->delete();

        return redirect()->back()->with('success', __('Xóa thành công'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // dd($request);
        // $product_type = ProductType::all();

        return view('backend.images.create', compact('product_type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('image')) {
            foreach($request->image as $image) {
                $filename = $image->getClientOriginalName();
                $image->move(config('app.link_product'), $filename);
 
                $image = new Image([
                    'id_product' => $request->id_product,
                    'name' => $filename,
                ]);
                $image->save();
            }
        }

        return redirect()->route('products.index')->with('success', __('Tạo thành công'));
    }
    // function postImages(Request $request)
    // {
    //     if ($request->ajax()) {
    //         if ($request->hasFile('file')) {
    //             $imageFiles = $request->file('file');
    //             // set destination path
    //             $folderDir = 'source/img/product';
    //             $destinationPath = base_path() . '/' . $folderDir;
    //             // this form uploads multiple files
    //             foreach ($request->file('file') as $fileKey => $fileObject) {
    //                 // make sure each file is valid
    //                 if ($fileObject->isValid()) {
    //                     // make destination file name
    //                     $destinationFileName = time() . $fileObject->getClientOriginalName();
    //                     // move the file from tmp to the destination path
    //                     $fileObject->move($destinationPath, $destinationFileName);
    //                     // save the the destination filename
    //                     $prodcuctImage = new Image;
    //                     $ProdcuctImage->image_path = $folderDir . $destinationFileName;
    //                     $prodcuctImage->title = $originalNameWithoutExt;
    //                     $prodcuctImage->alt = $originalNameWithoutExt;
    //                     $prodcuctImage->save();
    //                 }
    //             }
    //         }
    //     }
    // }
}
