<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class ProductType extends Model
{

    protected $fillable = [
        'name',
        'id_category',
    ];
    // protected $guarded = ['id'];

    public function product()
    {
        return $this->hasMany('App\Product', 'id_type', 'id');
    }

    public function category()
    {
        return $this->belongsTo('App\Category', 'id_category', 'id');
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
