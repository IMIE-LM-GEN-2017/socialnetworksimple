@extends('layouts.app')

@section('content')
    <h1>Les posts du forum</h1>

    @foreach($posts as $post)
        <tr>
            <td><h2>{{$post->title}}</h2></td>
            <td>
                <small>Ecrit par {{$post->user->username}}, il y a {{$post->created_at->diffForHumans()}}</small>
            </td>
            <td><p>{{$post->content}}</p></td>
        </tr>
    @endforeach

@endsection