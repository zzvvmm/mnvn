<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Image;
use Cviebrock\EloquentSluggable\Sluggable;

use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{

    protected $fillable = [
        'name',
        'id_type',
        'include',
        'price',
        'guarantee',
        'detail_description',
        'weight',
        'height',
        'material',
        'color',
        'unit',
        'avatar',
        'image',
        'rate'
    ];

    // protected $guarded = ['id'];

    public function product_type()
    {
    	return $this->belongsTo('App\ProductType', 'id_type', 'id');
    }

    public function image()
    {
        return $this->hasMany('App\Image', 'id_product', 'id');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment', 'id_product', 'id');
    }
    public function getImage($id)
    {
        $image = Image::where('id_product', $id)->first();

        return $image;
    }

    public function getAllImage($id)
    {
        $image = Image::where('id_product', $id)->get();

        return $image;
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

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
