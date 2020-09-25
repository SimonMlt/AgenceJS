@extends('layouts.base')

@section('title') Accueil @endsection

@section('content')

    <h1 class="titre_accueil">Bienvenue sur votre Agence</h1>

    <div class="row">
        <div class="col">
            @include('components.carousel')
        </div>

        <div class="col">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="storage/img/appartement.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="storage/img/appartement.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
        </div>
    </div>

@endsection
