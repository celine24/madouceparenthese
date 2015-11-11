<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class Sidebar extends Model
{
    protected $fillable = [
        'title',
        'content',
        'published'
    ];

    public $timestamps = true;
    
	/**
     * @param $query
     * @return mixed
     */
    public function scopePublished($query)
    {
        return $query->where('published', '1');
    }

}
