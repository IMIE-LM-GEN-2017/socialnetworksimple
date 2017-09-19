@extends('layouts.app')

@section('content')
    <form action="{{route('user.events.store')}}" method="post">
        {{csrf_field()}}
        <input type="text" name="name" placeholder="name">
        <textarea name="description" id="description" placeholder="description"></textarea>
        <input type="text">
        <input type="submit" value="Créer">
    </form>
@endsection