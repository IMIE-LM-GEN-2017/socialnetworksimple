@extends('layouts.app')

@section('content')
    <form action="{{route('posts.store')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title">Title </label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label for="content">Contenu</label>
            <textarea name="content" class="form-control" id="content"></textarea>
        </div>
        <button type="submit" value="Créer" class="btn btn-success">Créer</button>
    </form>
@endsection