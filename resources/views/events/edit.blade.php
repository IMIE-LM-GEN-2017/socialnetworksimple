@extends('layouts.app')

@section('content')
    <form action="{!! route('events.update', ['id'=>$event->id])!!}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Name of the event </label>
            <input type="text" value="{{$event->title}}" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control">{{$article->content}}</textarea>
        </div>
        <button type="submit" value="edit" class="btn btn-success">Edit</button>
    </form>
@endsection