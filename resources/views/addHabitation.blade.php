@extends('layouts.base')

@section('content')
    <h1>Ajouter un post</h1>

    <form method="post" action="{{route('storeHabitation')}}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label>Nom</label>
            <input type="text" class="form-control" name="nom" required>
        </div>

        <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" name="description" required>
        </div>

        <div class="form-group">
            <label>Ville</label>
            <input type="text" class="form-control" name="ville" required>
        </div>

        <div class="form-group">
            <label>Code Postal</label>
            <input type="text" class="form-control" name="cp" required>
        </div>

        <div class="form-group">
            <label>Cuisine</label>
            <input type="text" class="form-control" name="cuisine" required>
        </div>

        <div class="form-group">
            <label>Salle de bain</label>
            <input type="text" class="form-control" name="salle_de_bain" required>
        </div>

        <div class="form-group">
            <label>Toilettes</label>
            <input type="text" class="form-control" name="toilettes" required>
        </div>

        <div class="form-group">
            <label>Nb de pièces</label>
            <input type="text" class="form-control" name="nb_pieces" required>
        </div>

        <div class="form-group">
            <label>Nb de chambres</label>
            <input type="text" class="form-control" name="nb_chambres" required>
        </div>

        <div class="form-group">
            <label>Surface</label>
            <input type="text" class="form-control" name="surface" required>
        </div>

        <div class="form-group">
            <label>Année</label>
            <input type="text" class="form-control" name="annee" required>
        </div>

        <div class="form-group">
            <label>Prix</label>
            <input type="text" class="form-control" name="prix" required>
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
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>

        <button type="submit" class="btn btn-primary mt-5">Ajouter</button>
        @include('components.errors')
    </form>



@endsection
