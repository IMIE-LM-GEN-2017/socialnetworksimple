@extends('_layouts.app')

@section('content')
    <h1>Profil de {{$user->username}}</h1>
    <strong>username : </strong>{{$user->username}}<br>
    <strong>first_name : </strong>{{$user->first_name}}<br>
    <strong>last_name : </strong>{{$user->last_name}}<br>
    <strong>picture_url : </strong>{{$user->picture_url}}<br>
    <strong>birthdate : </strong>{{$user->birthdate}}<br>
    <strong>role : </strong>{{$user->role}}<br>

    <h2>Dernier messages du forum</h2>
    @foreach($user->posts as $post)
        <a href="{{route('posts.show', ['id'=>$post->id])}}">{{$post->title}}</a>
    @endforeach()
    <h2>Dernier articles</h2>
    @foreach($user->articles as $article)
        <a href="{{route('articles.show', ['id'=>$article->id])}}">{{$article->title}}</a>
    @endforeach()
    <h2>Dernier evènements</h2>
    @foreach($user->events as $event)
        <a href="{{route('events.show', ['id'=>$event->id])}}">{{$event->name}}</a>
    @endforeach()
@endsection
