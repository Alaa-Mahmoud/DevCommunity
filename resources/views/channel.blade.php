@extends('layouts.app')

@section('content')
    @foreach($discussions as $discussion)
        <div class="card card-default">
            <div class="card-header">
                <img src="{{$discussion->user->avatar}}" alt="{{$discussion->user->name}}" width="40px" height="40px">
                &nbsp; &nbsp;<span>{{$discussion->user->name}} <b>{{$discussion->created_at->diffForHumans()}}</b></span>
                <a href="{{route('discussion',['slug'=>$discussion->slug])}}" class="btn btn-primary float-right">View</a>
            </div>

            <div class="card-body">
                <h4 class="text-center">{{$discussion->title}}</h4>
                <p class="text-center">{{str_limit($discussion->content , 50)}}</p>
            </div>

            <div class="card-footer">
                <p >{{$discussion->replies->count()}} Replies</p>
            </div>
        </div>

    @endforeach

    <div class="text-center">
        {{$discussions->links()}}
    </div>
@endsection
