@extends('_layouts.app')

@section('content')
    <h1>{{$event->title}}</h1>
    <p>{{$event->content}}</p>
    Ecrit par {{$event->user->username}}, il y
    a {{$event->created_at->diffForHumans()}}

    <h2>Commentaires</h2>

    @if(session('successComment'))
        <div class="alert alert-success">
            {{session('successComment')}}
        </div>
    @endif

    @auth
        <form action="{{route('user.events.store')}}" method="post">
            <textarea name="content" placeholder="Contenu"></textarea>
            <input type="hidden" name="event_id" value="{{$event->id}}">
            {{csrf_field()}}
            <input type="submit" value="Commenter">
        </form>
    @endauth

    @guest
        <div class="alert alert-info">
            Veuillez vous <a href="{{route('login')}}">connecter</a> pour poster une réponse
        </div>
    @endguest

    @if($event->comments->count() > 0)
        @foreach($event->comments as $comment)
            <div>
                <strong>{{$comment->user->username}}</strong>, il y
                a {{$comment->created_at->diffForHumans()}}
            </div>
            <p>{{$comment->description}}</p>
        @endforeach
    @else
        <div class="alert alert-info">Il n'y a pas encore de commentaire</div>
    @endif

@endsection