<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Bill;

class Customer extends Model
{
    public function bill(){
        return $this->hasMany('Bill', 'id_customer', 'id');
    }
}
