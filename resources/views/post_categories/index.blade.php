@extends('layouts.app')

@section('content')
    <h1>Forum</h1>
    Veuillez cliquer sur une catégorie

    @foreach($list as $cat)
        <div class="well well-sm">
            <h2><a href="{{route('postsCat.show', ['id'=>$cat->id])}}">{{$cat->name}}</a></h2>
            <p>{{$cat->description}}</p>
        </div>
    @endforeach
@endsection