<?php

namespace App\Http\Controllers;

use App\Discussion;
use App\Replay;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Notification;

class DiscussionsController extends Controller
{
  public function create() {
      return view('discuss');
  }

  public function store(Request $request) {
      $this->validate($request, [
        'channel_id' => 'required',
        'title' => 'required',
        'content' => 'required',
      ]);

      $discussion =  Discussion::create([
          'title' => $request->title,
          'content' => $request->content,
          'channel_id' => $request->channel_id,
          'user_id' => Auth::id(),
          'slug' => str_slug($request->title),

      ]);
        Session::flash('success' , 'discussion created');
        return redirect()->route('discussion',['slug'=>$discussion->slug]);
  }

  public function show($slug){
        $discussion = Discussion::where('slug',$slug)->first();
        return view('discussions.show')->with('discussion',$discussion);
  }

  public function reply($id) {
      $discussion = Discussion::find($id);
      $reply = Replay::create([
          'user_id' => Auth::id(),
          'discussion_id' => $id,
          'content' => request('reply')
      ]);

      $watchers = array();

      foreach ($discussion->watchers as $watcher):
          array_push($watchers , User::find($watcher->user_id));
      endforeach;

      Notification::send($watchers ,new \App\Notifications\NewReplyAdded($discussion));

      Session::flash('success','Replied to discussion');
      return redirect()->back();
  }


}
