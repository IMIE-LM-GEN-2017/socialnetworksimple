@extends('_layouts.app')

@section('content')
    <h1>Liste des utilisateurs</h1>

    @foreach($users as $user)
        <a href="{{route('users.show', ['id'=>$user->id])}}">{{$user->username}}</a>
    @endforeach
@endsection
