<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Replay extends Model
{
    protected $fillable = ['user_id' , 'discussion_id' , 'content'];

    public function disscussion() {
        return $this->belongsTo('App\Discussion');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function likes(){
        return $this->hasMany('App\Like');
    }

    public function isLikedByAuthUser(){
        $id = Auth::id();
        $likers = array();

        foreach ($this->likes as $like):
            array_push($likers , $like->user_id);
        endforeach;

        if(in_array($id,$likers)){
            return true;
        }else{
            return false;
        }
    }
}
