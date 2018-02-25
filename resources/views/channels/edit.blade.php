@extends('layouts.app')

@section('content')

                <div class="card card-default">
                    <div class="card-header">Edit channel: {{$channel->title}}</div>

                    <div class="card-body">
                        <form action="{{route('channels.update', ['channel' =>$channel->id])}}" method="post">
                            {{csrf_field()}}
                            {{method_field('PUT')}}

                            <div class="form-group">
                                <input type="text" name="channel" value="{{$channel->title}}" class="form-control">
                            </div>


                            <div class="form-group">

                                <div class="text-center">
                                    <button  type="submit" class=" btn btn-success">Edit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

@endsection
