<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    
	protected $fillable = [
        'title',
        'content',
        'state'
    ];

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
