@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
    <p>{{$post->content}}</p>
    Ecrit par {{$post->user->username}}, il y
    a {{$post->created_at->diffForHumans()}}

    <h2>Commentaires</h2>

    @if(session('successComment'))
        <div class="alert alert-success">
            {{session('successComment')}}
        </div>
    @endif

    @auth
        <form action="{{route('user.answers.store')}}" method="post">
            <textarea name="content" placeholder="Contenu"></textarea>
            <input type="hidden" name="post_id" value="{{$post->id}}">
            {{csrf_field()}}
            <input type="submit" value="Commenter">
        </form>
    @endauth

    @guest
        <div class="alert alert-info">
            Veuillez vous <a href="{{route('login')}}">connecter</a> pour poster une réponse
        </div>
    @endguest

    @if($post->answers->count() > 0)
        @foreach($post->answers as $answer)
            <div>
                <strong>{{$answer->user->username}}</strong>, il y
                a {{$answer->created_at->diffForHumans()}}
            </div>
            <p>{{$answer->content}}</p>
        @endforeach
    @else
        <div class="alert alert-info">Il n'y a pas encore de commentaire</div>
    @endif


@endsection