<?php

namespace App\Http\Controllers;

use App\Like;
use App\Replay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class RepliesController extends Controller
{
    public function like($id) {
        Like::create([
            'replay_id' =>$id,
            'user_id' => Auth::id()
        ]);
        Session::flash('success','You liked the reply');
        return redirect()->back();

    }

    public function unlike($id) {
        $like = Like::where('replay_id',$id)->where('user_id',Auth::id())->first();
        $like->delete();
        Session::flash('success','You UnLiked the reply');
        return redirect()->back();

    }
}
