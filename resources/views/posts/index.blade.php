@extends('layouts.app')

@section('content')
    <h1>Les posts du forum</h1>

    @foreach($posts as $post)
        <h2>{{$post->title}}</h2>
        <small>Ecrit par {{$post->user->username}}, le {{$post->created_at->diffForHumans()}}</small>
        <p>{{$post->content}}</p>
    @endforeach

@endsection