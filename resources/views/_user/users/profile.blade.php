@extends('_layouts.app')

@section('content')
    <h1>Mon profil</h1>
    <strong>username : </strong>{{$user->username}}<br>
    <strong>first_name : </strong>{{$user->first_name}}<br>
    <strong>last_name : </strong>{{$user->last_name}}<br>
    <strong>picture_url : </strong>{{$user->picture_url}}<br>
    <strong>birthdate : </strong>{{$user->birthdate}}<br>
    <strong>role : </strong>{{$user->role}}<br>
@endsection
