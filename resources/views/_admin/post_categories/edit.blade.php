@extends('_layouts.app')

@section('content')
    <form action="{!! route('posts.update', ['id'=>$post->id])!!}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Title </label>
            <input type="text" value="{{$post->name}}" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="description">Contenu</label>
            <textarea name="description" class="form-control" id="description">{{$post->description}}</textarea>
        </div>
        <button type="submit" value="edit" class="btn btn-success">Edit</button>
    </form>
@endsection