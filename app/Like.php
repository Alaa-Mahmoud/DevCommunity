<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable= ['user_id' , 'replay_id'];

    public function reply() {
        return $this->belongsTo('App\Replay');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
