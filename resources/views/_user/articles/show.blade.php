@extends('_layouts.app')

@section('content')
    <h1>{{$article->title}}</h1>
    <p>{{$article->content}}</p>
    Ecrit par {{$article->user->username}}, il y
    a {{$article->created_at->diffForHumans()}}

    <h2>Commentaires</h2>

    @if(session('successComment'))
        <div class="alert alert-success">
            {{session('successComment')}}
        </div>
    @endif

    @auth
        <form action="{{route('user.comments.store')}}" method="post">
            <textarea name="content" placeholder="Contenu"></textarea>
            <input type="hidden" name="article_id" value="{{$article->id}}">
            {{csrf_field()}}
            <input type="submit" value="Commenter">
        </form>
    @endauth

    @guest
        <div class="alert alert-info">
            Veuillez vous <a href="{{route('login')}}">connecter</a> pour poster une réponse
        </div>
    @endguest

    @if($article->comments->count() > 0)
        @foreach($article->comments as $comment)
            <div>
                <strong>{{$comment->user->username}}</strong>, il y
                a {{$comment->created_at->diffForHumans()}}
            </div>
            <p>{{$comment->content}}</p>
        @endforeach
    @else
        <div class="alert alert-info">Il n'y a pas encore de commentaire</div>
    @endif

@endsection