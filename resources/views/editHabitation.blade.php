@extends('layouts.base')

@section('content')
    <div class="detailsPost__container">
        @if(\Illuminate\Support\Facades\Auth::check())
        <h2>Modifier l'annonce</h2>

        <form method="post" action="{{route('updatePost', $habitation->id)}}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label>Nom</label>
                <input type="text" class="form-control" name="name" value="{{$habitation->nom}}" required>
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" class="form-control" name="description" required value="{{$habitation->description}}">
            </div>
            <div class="form-group">
                <label>Ville</label>
                <input type="text" class="form-control" name="ville" required value="{{$habitation->ville}}">
            </div>
            <div class="form-group">
                <label>Code Postale</label>
                <input type="text" class="form-control" name="cp" required value="{{$habitation->cp}}">
            </div>
            <div class="form-group">
                <label>Cuisine</label>
                <input type="text" class="form-control" name="cuisine" required value="{{$habitation->cuisine}}">
            </div>
            <div class="form-group">
                <label>Salle de bain</label>
                <input type="text" class="form-control" name="salle_de_bain" required value="{{$habitation->salle_de_bain}}">
            </div>
            <div class="form-group">
                <label>Toilettes</label>
                <input type="text" class="form-control" name="toilettes" required value="{{$habitation->toilettes}}">
            </div>
            <div class="form-group">
                <label>Nb de pièces</label>
                <input type="text" class="form-control" name="nb_pieces" required value="{{$habitation->nb_pieces}}">
            </div>
            <div class="form-group">
                <label>Nb de chambres</label>
                <input type="text" class="form-control" name="nb_chambres" required value="{{$habitation->nb_chambres}}">
            </div>
            <div class="form-group">
                <label>Surface</label>
                <input type="text" class="form-control" name="surface" required value="{{$habitation->surface}}">
            </div>
            <div class="form-group">
                <label>Année</label>
                <input type="text" class="form-control" name="annee" required value="{{$habitation->annee}}">
            </div>
            <div class="form-group">
                <label>Prix</label>
                <input type="text" class="form-control" name="prix" required value="{{$habitation->prix}}">
            </div>

            <div class="form-group">
                <label>Image 1</label>
                <input type="file" name="image1" accept="image/jpg" required class="form-control">
            </div>

            <div class="form-group">
                <label>Image 2</label>
                <input type="file" name="image2" accept="image/jpg" required class="form-control">
            </div>

            <div class="form-group">
                <label>Image 3</label>
                <input type="file" name="image3" accept="image/jpg" required class="form-control">
            </div>

            <label>Catégorie</label>
            <select class="form-control" name="category_id">
                @foreach($categories as $category)
                    @if($category->id === $habitation->category_id)
                        <option value="{{$category->id}}" selected>{{$category->name}}</option>
                    @else
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endif
                @endforeach
            </select>

            <div class="form-group mt-3">
                <button type="submit" class="btn btn-warning">Modifier</button>
            </div>
        </form>
            <form method="post" action="{{route('deletePost', $habitation->id)}}">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
    </div>
{{--        @else--}}
{{--            <h1>{{$habitation->name}}</h1>--}}
{{--            <h2>{{$habitation->category->name}}</h2>--}}
{{--            <p>{{$habitation->description}}</p>--}}
{{--            <p>Ecrit le {{$habitation->created_at->format('d/m/Y')}}</p>--}}
        @endif

@endsection
