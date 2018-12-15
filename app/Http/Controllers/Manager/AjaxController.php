<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProductType;
use App\Category;

class AjaxController extends Controller
{
    public function getProductType($idcategory) 
    {
        $product_type = ProductType::where('id_category', $idcategory)->get();
        // dd($idcategory);

            foreach($product_type as $type)
        {
            echo "<option value='".$type->id."'>".$type->name."</option>";
        }
    }
}
?>
