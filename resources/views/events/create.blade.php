@extends('layouts.app')

@section('content')
    <h1>Nouvel évènement</h1>
    <form action="{{route('user.events.store')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Name </label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description"></textarea>
        </div>
        <button type="submit" value="Créer" class="btn btn-success">Créer</button>
    </form>
@endsection