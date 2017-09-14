@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="" alt="">
                <div class="caption">
                    <h1>{{$article->title}}</h1>
                    <p class="panel-body">{{$article->content}}</p>
                    Ecrit par {{$article->user->username}}, il y
                        a {{$article->created_at->diffForHumans()}}</>
                </div>
            </div>
        </div>
    </div>
@endsection