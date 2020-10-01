@extends('layouts.base')

@section('title') Accueil @endsection

@section('content')

    <h1 class="m-auto text-center">Bienvenue chez l'AgenceJS</h1>

    <div class="row">
        <div class="col-md-12 col-sm-12">
            @include('components.carousel')
        </div>
    </div>

    <div class="row">
        <p class="text-justify mt-5 ml-auto mr-auto w-75">
            Au sein de l'AgenceJS, vous pouvez retrouver tous les logements que nous proposons. Appartement, maison ou bien villa,
            vous avez l'embaras du choix. N'hésitez pas : rentrez votre code postal, et naviguez sur notre site pour découvrir
            les logements disponibles dans votre département. N'hésitez pas à nous contacter en cas de problèmes,
            nous nous tenons à votre entière disposition.
        </p>
    </div>

    <div class="row">
        <h2 class="col-md-12 m-auto text-center">Nos dernières annonces :</h2>

        <div class="mt-5 col-md-4 col-sm-12">
            <div class="card" style="width: 18rem;">
                <img src="storage/img/appartement.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Appartement</h5>
                    <p class="card-text">Exemple d'une annonce d'appartement proposé par l'AgenceJS pour ses clients.</p>
                    <a href="#" class="btn btn-primary">Voir l'annonce</a>
                </div>
            </div>
        </div>

        <div class="mt-5 col-md-4 col-sm-12">
            <div class="card" style="width: 18rem;">
                <img src="storage/img/maison.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Maison</h5>
                    <p class="card-text">Exemple d'une annonce de maison proposé par l'AgenceJS pour ses clients.</p>
                    <a href="#" class="btn btn-primary">Voir l'annonce</a>
                </div>
            </div>
        </div>

        <div class="mt-5 col-md-4 col-sm-12">
            <div class="card" style="width: 18rem;">
                <img src="storage/img/villa.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Villa</h5>
                    <p class="card-text">Exemple d'une annonce de villa proposé par l'AgenceJS pour ses clients.</p>
                    <a href="#" class="btn btn-primary">Voir l'annonce</a>
                </div>
            </div>
        </div>
    </div>

@endsection
