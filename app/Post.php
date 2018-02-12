<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $dates = ['created_at'];

	public function setTitleAttribute($value)
	{
	$this->attributes['title'] = $value;

		if (! $this->exists)
		{
		  $this->attributes['slug'] = str_slug($value);
		}
	}

	public function authors()
    {
        return $this->belongsTo('App\User', 'author_id');
    }

	public function category()
	{
		return $this->belongsTo('App\Category', 'category_id');
	}
}
