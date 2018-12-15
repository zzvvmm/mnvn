<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BillDetail extends Model
{
    public function product() {
    	return $this->belongsTo('App\Product', 'id_product', 'id');
    }

    public function bill() {
    	return $this->belongsTo('App\Bill', 'id_bill', 'id');
    }
}
