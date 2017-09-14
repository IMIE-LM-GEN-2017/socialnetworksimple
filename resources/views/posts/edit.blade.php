@extends('layouts.app')

@section('content')
    <form action="{!! route('posts.update', ['id'=>$post->id])!!}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title">Title </label>
            <input type="text" value="{{$post->title}}" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label for="content">Contenu</label>
            <textarea name="content" class="form-control">{{$post->content}}</textarea>
        </div>
        <button type="submit" value="edit" class="btn btn-success">Edit</button>
    </form>
@endsection