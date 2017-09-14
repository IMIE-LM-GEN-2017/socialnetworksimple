@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="" alt="">
                <div class="caption">
                    <h1>{{$post->title}}</h1>
                    <p class="panel-body">{{$post->content}}</p>
                    Ecrit par {{$post->user->username}}, il y
                        a {{$post->created_at->diffForHumans()}}</>
                </div>
            </div>
        </div>
    </div>
@endsection