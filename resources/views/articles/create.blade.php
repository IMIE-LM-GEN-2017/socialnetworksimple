@extends('layouts.app')

@section('content')
    <form action="{{route('user.articles.store')}}" method="post">
        {{csrf_field()}}
        <input type="text" name="title" placeholder="Titre">
        <textarea name="content" id="content" placeholder="Contenu"></textarea>

        <input type="submit" value="Créer">
    </form>
@endsection