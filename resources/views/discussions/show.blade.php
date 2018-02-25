@extends('layouts.app')

@section('content')
    <div class="card card-default">
        <div class="card-header">
            <img src="{{$discussion->user->avatar}}" alt="{{$discussion->user->name}}" width="40px" height="40px">
            &nbsp; &nbsp;<span>{{$discussion->user->name}} <b>{{$discussion->created_at->diffForHumans()}}</b></span>
              @if($discussion->biengWatchedByAuthUser())
                <a href="{{route('discussion.unwatch',['id'=>$discussion->id])}}" class="btn btn-success float-right">Un Follow</a>
            @else
                <a href="{{route('discussion.watch',['id'=>$discussion->id])}}" class="btn btn-success float-right">Follow</a>
             @endif
        </div>

        <div class="card-body">
            <h4 class="text-center">{{$discussion->title}}</h4>
            <hr>
            <p class="text-center">{{$discussion->content}}</p>
        </div>

        <div class="card-footer">
            <p >{{$discussion->replies->count()}} Replies</p>
        </div>
    </div>
    <br>
    <br>
@foreach($discussion->replies as $reply)
    <div class="card card-default">
        <div class="card-header">
            <img src="{{$reply->user->avatar}}" alt="{{$reply->user->name}}" width="40px" height="40px">
            &nbsp; &nbsp;<span>{{$reply->user->name}} <b>{{$reply->created_at->diffForHumans()}}</b></span>
        </div>

        <div class="card-body">
            <p class="text-center">{{$reply->content}}</p>
        </div>

        <div class="card-footer">
           @if($reply->isLikedByAuthUser())
                <a href="{{route('reply.unlike',['id'=>$reply->id])}}" class="btn btn-danger"><span class="badge ">{{$reply->likes->count()}}</span>Unlike</a>
            @else
                <a href="{{route('reply.like',['id'=>$reply->id])}}" class="btn btn-success"><span class="badge ">{{$reply->likes->count()}}</span>Like</a>
           @endif
        </div>
    </div>
    <br>
@endforeach

    <div class="card car-default">
        <div class="card-body">
            @if(Auth::check())
                <form action="{{route('discussion.reply',['id'=>$discussion->id])}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="reply">Leave a reply....</label>
                        <textarea name="reply" id="reply" cols="20" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary float-right" type="submit">Reply</button>
                    </div>
                </form>
             @else
                <div class="text-center">
                    <h2>Sign in to leave a reply ..</h2>
                </div>
            @endif

        </div>
    </div>


@endsection
