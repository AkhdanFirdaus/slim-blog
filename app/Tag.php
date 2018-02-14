<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
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
        return $this->belongsToMany('App\Post');
    }
}
