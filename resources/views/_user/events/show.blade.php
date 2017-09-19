@extends('_layouts.app')

@section('content')
    <h1>{{$event->name}}</h1>
    <p>{{$event->description}}</p>
    Ecrit par {{$event->user->username}}, il y
    a {{$event->created_at->diffForHumans()}}


@endsection