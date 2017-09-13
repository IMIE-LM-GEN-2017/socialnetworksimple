@extends('layouts.app')

@section('content')
    <h1>Liste des articles</h1>

    @foreach($articles as $article)
        <tr>
            <td><h2>{{$article->title}}</h2></td>
            <td>
                <small>Ecrit par {{$article->user->username}}, le {{$article->created_at->diffForHumans()}}</small>
            </td>
            <td><p>{{$article->content}}</p></td>
            <td class="td-actions text-right">
                <a  href="{{action('ArticlesController@edit',$article->id)}}"
                    type="button" rel="tooltip" title="Edit article"
                    class="btn btn-info btn-simple btn-xs" data-original-title="Edit Article">
                    <i class="fa fa-edit">Edit</i>
                </a>

                {{ Form::open([ 'method'  => 'delete', 'route' => [ 'posts.index', $article->id ] ])}}
                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                {{ Form::close() }}

            </td>
        </tr>
    @endforeach
@endsection