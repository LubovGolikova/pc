<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public  $timestamps = false;
    public function parent(){
        return $this->belongsTo('App\Category', 'parent_id');
    }

    function getParentName(){
        return $this->parent_id ? $this->parent->name : '';
    }
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = \Str::slug($this->attributes['name'], '-');
    }
}
