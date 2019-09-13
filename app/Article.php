<?php

namespace Dnv;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title','img','alias','text','desc','keywords','description','category_id'];
    public function user()
    {
        return $this->belongsTo('Dnv\User');
    }

    public function category()
    {
        return $this->belongsTo('Dnv\Category');
    }

    public function comments()
    {
        return $this->hasMany('Dnv\Comment');
    }
}
