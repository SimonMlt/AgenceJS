@extends('layouts.base')

@section('content')
    <h1>Catégories</h1>
    <p>Cette section permet de voir la liste des catégories.</p>

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
                        <td>{{$user->name}}</td>
                        <td>
                            <form method="post" action="{{route('deleteCategory', $user->id)}}">
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
        <div class="col-md-5 offset-md-1">
            <h2>Ajouter une catégorie</h2>
            <form method="post" action="{{route('storeCategory')}}">
                @csrf
                <div class="form-group mt-3">
                    <input type="text" name="name" class="form-control" required value="{{old('name')}}" placeholder="Entrer le nom de la catégorie...">
                </div>
                <button type="submit" id="btn_classic" class="btn btn-primary bg-danger">Ajouter</button>
                @include('components.errors')
            </form>
        </div>
    </div>


@endsection
