<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function getPathAttribute($value)
    {
        if($value) {
            $path = $value;
            return $path;
        }
        return  '/cover/noimages.png' ;
    }

}
