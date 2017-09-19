@extends('_layouts.app')

@section('content')
    <div class="container">
        <h2>Utilisateurs inscrits</h2>
        <table class="table">
            <thead>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Profil</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>
                        {{$user->first_name}}
                    </td>
                    <td>
                        {{$user->last_name}}
                    </td>
                    <td>
                        {{$user->email}}
                    </td>
                    <td>
                        <a href="{{route('users.show', ['id'=>$user->id])}}">
                        <button class="btn btn-default">Visiter le profil</button></a>
                    </td>
                </tr>@endforeach
            </tbody>
        </table>

    </div>
@endsection
