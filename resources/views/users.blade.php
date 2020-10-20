@extends('layouts.base')

@section('content')
    <h1>Utilisateurs</h1>

    <div class="row">
        <div class="col-md-6">
            <table class="table mt-5">
                <thead>
                <tr>
                    <td>#</td>
                    <td>Name</td>
                    <td>Actions</td>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->nom.' '.$user->prenom}}</td>
                        <td>
                            <form method="post" action="{{route('deleteUser', $user->id)}}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection
