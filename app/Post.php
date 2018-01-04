<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $dates = ['created_at'];

    public function setTitleAttribute($value)
    {
    	$this->attributes['title'] = $value;

    	if (! $this->exist)
    	{
    		$this->attributes['slug'] = str_slug($value);
    	}
    }
}
