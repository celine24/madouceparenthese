<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class Page extends Model
{
    protected $fillable = [
        'title',
        'content',
        'url',
        'location',
        'published'
    ];

    public $timestamps = true;

    /**
     * @param $query
     * @return mixed
     */
	public function scopeString($query, $string)
	{
  		return $query->where('url', $string);
	}

	/**
     * @param $query
     * @return mixed
     */
    public function scopePublished($query)
    {
        return $query->where('published', '1');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts() {
        return $this->hasMany('App\Post');
    }

}
