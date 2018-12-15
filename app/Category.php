<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;
use App\ProductType;

class Category extends Model
{
    protected $fillable = [
        'name'
    ];

    protected $guarded = ['id'];

    public function product_type() {
        return $this->hasMany('ProductType', 'id_category', 'id');
    }

    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
