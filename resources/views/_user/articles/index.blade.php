@extends('_layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><h1>Mes articles</h1></div>
        <div class="panel-body">
            @foreach($articles as $article)
                <tr>
                    <td><h3>{{$article->title}}</h3></td>

                    <td><p>{{$article->content}}</p></td>
                    <td>
                        <a href="{!! route('user.articles.destroy', ['id'=>$article->id]) !!}" class="btn btn-danger">Delete</a>
                    </td>
                    <td>
                        <a href="{!! route('user.articles.edit', ['id'=>$article->id]) !!}" class="btn btn-warning">Edit</a>
                    </td>
                    <td>
                        <a href="{!! route('user.articles.show', ['id'=>$article->id]) !!}" class="btn btn-success">Show</a>
                    </td>
                </tr>
            @endforeach
        </div>
    </div>
@endsection