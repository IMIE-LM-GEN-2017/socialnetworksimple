@extends('_layouts.app')

@section('content')
    <h1>Nouveau post</h1>
    <form action="{{route('user.posts.store')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title">Titre </label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label for="content">Contenu</label>
            <textarea name="content" class="form-control" id="content"></textarea>
        </div>

        <div class="form-group">
            <label for="post_category_id">Catégorie</label>
            <select name="post_category_id" id="post_category_id" class="form-control">
                @foreach($categories as $key=>$value)
                    <option value="{{$key}}" {{$catId ? 'selected' : ''}}>{{$value}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" value="Créer" class="btn btn-success">Créer</button>
    </form>
@endsection