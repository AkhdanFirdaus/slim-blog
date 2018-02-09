<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

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
        return $this->hasMany('App\Post');
    }
}
