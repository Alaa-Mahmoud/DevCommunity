<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Discussion extends Model
{
    protected $fillable = ['title', 'content' , 'channel_id' , 'user_id' ,'slug'];

    public function channel() {
        return $this->belongsTo('App\Channel');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function replies() {
        return $this->hasMany('App\Replay');
    }

    public function watchers() {
        return $this->hasMany('App\Watcher');
    }

  public function biengWatchedByAuthUser() {
        $id = Auth::id();
        $watchers = array();

        foreach ($this->watchers as $watcher):
            array_push($watchers , $watcher->user_id );
        endforeach;
        if(in_array($id , $watchers)){
            return true;
        }else{
            return false;
        }
  }
}
