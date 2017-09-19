@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><h1>Liste des évènements</h1></div>
        <div class="panel-body">
            @foreach($events as $event)
                <hr>
                <tr>
                    <td><h3>{{$event->title}}</h3></td>

                    <td><p>{{$event->content}}</p></td>
                    <td>
                        <a href="{!! route('user.articles.destroy', ['id'=>$event->id]) !!}" class="btn btn-danger">Delete</a>
                    </td>
                    <td>
                        <a href="{!! route('user.articles.edit', ['id'=>$event->id]) !!}" class="btn btn-warning">Edit</a>
                    </td>
                    <td>
                        <a href="{!! route('user.articles.show', ['id'=>$event->id]) !!}" class="btn btn-success">Show</a>
                    </td>
                </tr>
            @endforeach
        </div>
    </div>
@endsection