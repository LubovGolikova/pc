<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verse extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public  function getYoutube(){
        return substr($this->youtube, strrpos($this->youtube,'=')+1);
    }
    function   shortContent($len=350){
        $str = $this->contentVerse;
        if(strlen($str)>$len)
            return mb_substr($str, 0, $len).'...';
        return $str;
    }
}
