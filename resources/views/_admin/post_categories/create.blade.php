@extends('_layouts.app')

@section('content')
    <h1>Nouvelle catégorie de forum</h1>
    <form action="{{route('postsCats.store')}}" method="post">
        {{csrf_field()}}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name">Nom</label>
            <input type="text" class="form-control" name="name">
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
            <label for="content">Description</label>
            <textarea name="description" class="form-control" id="description"></textarea>
            @if ($errors->has('description'))
                <span class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
            @endif
        </div>

        <button type="submit" value="Créer" class="btn btn-success">Créer</button>
    </form>
@endsection