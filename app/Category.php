<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $dates = ['created_at'];

	public function setNameAttribute($value)
	{
    	$this->attributes['name'] = $value;

    		if (! $this->exists)
    		{
    		  $this->attributes['slug'] = str_slug($value);
    		}
	}

    public function posts()
    {
        return $this->hasMany('App\Post', 'category_id');
    }
}
