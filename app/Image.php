<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Product;


class Image extends Model
{
    protected $fillable = [
	    'name',
	    'id_product',
    ];

    public function product()
    {
        return $this->belongsTo('Product', 'id_product', 'id');
    }
}
