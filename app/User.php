<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'email', 'password', 'role', 'description','fb_account','telegram_account','youtube_account','card','path'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin(){
        return $this->role=='admin' ? true : false;
    }
    public function getPathAttribute($value)
    {
        if($value) {
            $path = $value; //photos/4/photo1.jpg
            $arr = explode('/', $path);
            return '/'.$arr[1] . '/' . $arr[2] . '/thumbs/' . $arr[3];
        }
        return  '/photos/nophoto.png' ;
    }

    public function setPasswordAttribute($value)
    {
        if($value=='')
            $this->attributes['password'] = $this->password;
        else
            $this->attributes['password'] = \Hash::make($value);
    }

    function getThumb(){
        $path = $this->path; //photos/shares/photo1.jpg
        $arr = explode('/', $path);
        return $arr[1].'/'. $arr[2].'/thumbs/'. $arr[3];
    }
    function   shortDescription(){
        $str = strip_tags($this->description);
        if(strlen($str)>120)
            return mb_substr($str, 0, 120).'...';
        return $str;
    }

    public function verses(){
        return $this->hasMany('App\Verse', 'user_id');
    }
    public function books(){
        return $this->hasMany('App\Book');
    }
}
