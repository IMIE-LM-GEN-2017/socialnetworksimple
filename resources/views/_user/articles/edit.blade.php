@extends('_layouts.app')

@section('content')
    <form action="{!! route('user.articles.update', ['id'=>$article->id])!!}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title">Titre </label>
            <input type="text" value="{{$article->title}}" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label for="content">Contenu</label>
            <textarea name="content" class="form-control">{{$article->content}}</textarea>
        </div>
        <button type="submit" value="edit" class="btn btn-success">Editer</button>
    </form>
@endsection