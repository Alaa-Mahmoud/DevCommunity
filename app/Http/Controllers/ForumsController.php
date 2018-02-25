<?php

namespace App\Http\Controllers;

use App\Channel;
use App\Discussion;
class ForumsController extends Controller
{
    public function index() {
        $discussions = Discussion::orderBy('created_at','desc')->paginate(3);
        return view('forum',['discussions'=>$discussions]);
    }

    public function channel($slug) {
        $channel = Channel::where('slug',$slug)->first();
        return view('channel',['discussions' => $channel->discussions()->paginate(5)]);
    }
}
