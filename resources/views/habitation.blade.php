@extends('layouts.base')

@section('content')
    <h1>Liste des annonces</h1>

    @if(\Illuminate\Support\Facades\Auth::check() && Auth::user()->role == 'Admin')
        <div class="mb-3">
            <a href="{{route('addHabitation')}}" class="btn btn-primary">Déposer une annonce</a>
        </div>
    @endif
    <br><br>

    <div class="row pl-4">
        <div class="mb-3 pr-2">
            <a href="{{route('habitation')}}" class="btn btn-outline-primary">Tous</a>
        </div>
        <div class="mb-3 pr-2">
            <a href="{{route('habitationMaison')}}" class="btn btn-outline-primary">Maison</a>
        </div>
        <div class="mb-3 pr-2">
            <a href="{{route('habitationVilla')}}" class="btn btn-outline-primary">Villa</a>
        </div>
        <div class="mb-3">
            <a href="{{route('habitationAppartement')}}" class="btn btn-outline-primary">Appartement</a>
        </div>
    </div>

    <div class="row">
        @foreach($habitation as $habitations)
            <div class="col-md-4 mb-5">
                <div class="card">
                    <img src="{{asset('storage/'.$habitations->image1)}}" width="348" height="150" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{$habitations->nom}}</h5>
                        <p class="card-text">{{$habitations->category->name}}</p>
                        <p class="card-text">{{$habitations->description}}</p>
                        <p class="card-text">{{$habitations->prix}} €</p>

                        <p>Mise en ligne le {{$habitations->created_at->format('d/m/Y')}}
                        </p>

                        <a href="#" class="btn btn-primary">En savoir plus</a>
                        @if(\Illuminate\Support\Facades\Auth::check() && Auth::user()->role == 'Admin')
                        <a href="{{route('editHabitation', $habitations->slug)}}" class="btn btn-primary">Modifier</a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
