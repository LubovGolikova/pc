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
//            $arr = explode('/', $path);
////            dd($arr);
//         return '/'.$arr[1] . '/' . $arr[2] . '/thumbs/' . $arr[3];
            return $path;
        }
        return  '/photos/noimages.png' ;
    }
    function getThumb(){
        $path = $this->path; //photos/shares/photo1.jpg
        $arr = explode('/', $path);
        return $arr[1].'/'. $arr[2].'/thumbs/'. $arr[3];
    }
}
