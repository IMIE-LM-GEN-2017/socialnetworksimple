@extends('_layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><h1>Mes évènements</h1></div>
        <div class="panel-body">
            @foreach($events as $event)
                <hr>
                <tr>
                    <td><h3>{{$event->name}}</h3></td>

                    <td><p>{{$event->description}}</p></td>
                    <td>
                        <a href="{!! route('user.events.destroy', ['id'=>$event->id]) !!}" class="btn btn-danger">Supprimer</a>
                    </td>
                    <td>
                        <a href="{!! route('_user.events.edit', ['id'=>$event->id]) !!}" class="btn btn-warning">Editer</a>
                    </td>
                    <td>
                        <a href="{!! route('_user.events.show', ['id'=>$event->id]) !!}" class="btn btn-success">Afficher</a>
                    </td>
                </tr>
            @endforeach
        </div>
    </div>
@endsection