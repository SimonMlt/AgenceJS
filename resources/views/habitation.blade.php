@extends('layouts.base')

@section('content')
    @if(\Illuminate\Support\Facades\Auth::check() && Auth::user()->role == 'Admin')
        <div class="mb-3">
            <a href="{{route('addHabitation')}}" id="btn_classic" class="btn btn-primary bg-danger">Déposer une
                annonce</a>
        </div>
    @endif
{{--    @if(\Illuminate\Support\Facades\Auth::check())--}}
{{--        <div class="mb-3">--}}
{{--            <a href="{{route('userReservation', $reservation->id)}}" id="btn_classic" class="btn btn-primary bg-danger">Mes réservations</a>--}}
{{--        </div>--}}
{{--    @endif--}}
    <br><br>

    <div class="row pl-4">
        <div class="pr-2">
            <a href="{{route('habitation')}}" class="btn btn-outline-dark">Tous</a>
        </div>
        <div class="pr-2">
            <a href="{{route('habitationMaison')}}" class="btn btn-outline-danger">Maison</a>
        </div>
        <div class="pr-2">
            <a href="{{route('habitationVilla')}}" class="btn btn-outline-danger">Villa</a>
        </div>
        <div>
            <a href="{{route('habitationAppartement')}}" class="btn btn-outline-danger">Appartement</a>
        </div>
    </div>

    <hr>

    <div class="row">
        @foreach($habitation as $habitations)
            <div class="col-md-4 mb-5">
                <div class="card">
                    <img src="{{asset('storage/'.$habitations->image1)}}" width="348" height="150" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{$habitations->nom}}</h5>
                        <p class="card-text">{{$habitations->category->name}}</p>
                        <p class="card-text">{{number_format($habitations->prix,2)}} €</p>

                        <p>Mise en ligne le {{$habitations->created_at->format('d/m/Y')}}
                        </p>

                        <a href="{{route('detailsHabitation', $habitations->slug)}}" class="btn btn-primary bg-dark">En
                            savoir plus</a>

                        @if(\Illuminate\Support\Facades\Auth::check() && Auth::user()->role == 'Admin')
                            <a href="{{route('editHabitation', $habitations->id)}}" class="btn btn-primary bg-danger">Modifier</a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
