@extends('_layouts.app')

@section('content')
    <h1>Forum</h1>
    <button class="alert alert-info">Veuillez cliquer sur une catégorie ci-dessous</button>

    @foreach($list as $cat)
        <div class="well well-sm">
            <h2><a href="{{route('postsCats.show', ['id'=>$cat->id])}}">{{$cat->name}}</a></h2>
            <p>{{$cat->description}}</p>
        </div>
    @endforeach
@endsection