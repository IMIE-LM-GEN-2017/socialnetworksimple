@extends('_layouts.app')

@section('content')
    <h1>Forum - {{$category->name}}</h1>
    <p>{{$category->description}}</p>

    @auth
        <a href="{{route('admin.posts.createWithCategory', ['catId'=>$category->id])}}" class="btn btn-primary">Ecrire un post</a>
    @endauth

    @guest
        <div>Veuillez vous connecter pour poster des messages</div>
    @endguest

    <table class="table table-condensed">
        <thead>
        <tr>
            <th>Sujet</th>
            <th>Auteur</th>
            <th>Réponses</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>
        @foreach($category->posts as $post)
            <tr>
                <td><a href="{{route('admin.postsCats.show', ['id'=>$post->id])}}">{{$post->title}}</a></td>
                <td>{{$post->user->username}}</td>
                <td>{{$post->answers->count()}}</td>
                <td>{{$post->created_at->diffForHumans(now())}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection