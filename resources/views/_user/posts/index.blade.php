@extends('_layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><h1>Mes posts</h1></div>
        <div class="panel-body">
            @foreach($posts as $post)
                <tr>
                    <td><h3>{{$post->title}}</h3></td>

                    <td><p>{{$post->content}}</p></td>
                    <td>
                        <a href="{!! route('user.posts.destroy', ['id'=>$post->id]) !!}" class="btn btn-danger">Delete</a>
                    </td>
                    <td>
                        <a href="{!! route('user.posts.edit', ['id'=>$post->id]) !!}" class="btn btn-warning">Edit</a>
                    </td>
                    <td>
                        <a href="{!! route('user.posts.show', ['id'=>$post->id]) !!}" class="btn btn-success">Show</a>
                    </td>
                </tr>
            @endforeach
        </div>
    </div>
@endsection