@extends('layouts.base')

@section('content')
    <h1 style="font-family: 'Roboto', sans-serif; text-align: center">Réservation</h1>

    <div id="carouselExampleCaptions" class="carousel slide w-50 h-25" data-ride="carousel"
         style="margin: 2% auto!important;">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('storage/'.$habitation->image1)}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('storage/'.$habitation->image2)}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('storage/'.$habitation->image3)}}" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <table class="table table-hover text-center mt-5">
        <thead>
        <tr>
            <th>Habitation</th>
            <th>Description</th>
            <th>Prix</th>
            <th>Date</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <form method="post" action="{{route('storeReservation', $habitation->id)}}" enctype="multipart/form-data">
                <th>{{$habitation->nom}}</th>
                <th style="text-align: justify">{{$habitation->description}}</th>
                <th>{{number_format($habitation->prix,2)}} €</th>
                @csrf
                <th><input type="date" id="date" name="date"></th>
                <th>
                    <button type="submit" class="btn btn-danger">Ajouter</button>
                </th>
            </form>
        </tr>
        </tbody>
    </table>
@endsection
