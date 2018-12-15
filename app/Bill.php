<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bill extends Model
{
    public function bill_detail() {
    	return $this->hasMany('App\BillDetail', 'id_bill', 'id');
    }

    public function getBill_detail($id) {
        $bill_detail = BillDetail::where('id_bill', $id)->first();

        return $bill_detail;
    }

    public function customer() {
    	return $this->belongsTo('App\Customer', 'id_customer', 'id');
    }

}
