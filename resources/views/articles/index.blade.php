@extends('_layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><h1>Liste des articles</h1></div>
        <div class="panel-body">
            @foreach($articles as $article)
                <hr>
                <tr>
                    <td><h3>{{$article->title}}</h3></td>

                    <td><p>{{$article->content}}</p></td>
                    <td>
                        <a href="{!! route('user.articles.destroy', ['id'=>$article->id]) !!}" class="btn btn-danger">Supprimer</a>
                    </td>
                    <td>
                        <a href="{!! route('user.articles.edit', ['id'=>$article->id]) !!}" class="btn btn-warning">Editer</a>
                    </td>
                    <td>
                        <a href="{!! route('user.articles.show', ['id'=>$article->id]) !!}" class="btn btn-success">Afficher</a>
                    </td>
                </tr>
            @endforeach
        </div>
    </div>
@endsection