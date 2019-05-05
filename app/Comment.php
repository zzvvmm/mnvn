<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
	    'content',
	    'email',
	    'phone',
	    'content',
	    'post_id',
	    'post_type',
    ];

  public function product()
	{
		return $this->belongsTo('App\Product');
	}

	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function post()
	{
		return $this->morphTo();
	}
}
