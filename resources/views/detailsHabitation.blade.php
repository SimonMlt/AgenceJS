@extends('layouts.base')

@section('content')
        <div class="row pt-5">
            <div id="carouselExampleCaptions" class="carousel slide w-50 h-25" data-ride="carousel">
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
            <div class="ml-5 col-md-5 col-sm-13">
                <h1>{{$habitation->nom}}</h1>
                <p>{{$habitation->ville}}</p>
                <p style="font-weight: 600; text-align: justify">{{$habitation->description}}</p><br>
                <div class="row pl-3">
                    <p class="pr-4"><img class="pb-2" src="/storage/img/kitchen.png" width="25" alt="kitchen">
                        : {{$habitation->cuisine}}</p>
                    <p class="pr-4"><img class="pb-2" src="/storage/img/bathroom.png" width="25" alt="bathroom">
                        : {{$habitation->salle_de_bain}}</p>
                    <p class="pr-4"><img class="pb-2" src="/storage/img/toilet.png" width="25" alt="toilet">
                        : {{$habitation->toilettes}}</p>
                    <p class="pr-4"><img class="pb-2" src="/storage/img/room.png" width="25" alt="room">
                        : {{$habitation->nb_pieces}}</p>
                    <p class="pr-4"><img class="pb-2" src="/storage/img/bedroom.png" width="25" alt="bedroom">
                        : {{$habitation->nb_chambres}}</p>
                </div>
                <div class="row pl-3">
                    <p class="pr-4" style="font-weight: 600">Surface : {{$habitation->surface}} m²</p>
                    <p class="pr-4" style="font-weight: 600">Année : {{$habitation->annee}}</p>
                    <p class="pr-4" style="font-weight: 600">Prix : {{number_format($habitation->prix,2)}} €</p>
                </div>
                @if(\Illuminate\Support\Facades\Auth::check())
                <a class="btn_a" href="{{route('reservationHabitation', $habitation->slug)}}"><div class="svg-wrapper mt-5">
                    <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
                        <rect class="shape" height="60" width="320" />
                    </svg>
                    <div class="text">RESERVER</div>
                </div></a>
                @else
                    <a class="btn_a" href="{{route('register')}}"><div class="svg-wrapper mt-5">
                            <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
                                <rect class="shape" height="60" width="320" />
                            </svg>
                            <div class="text">RESERVER</div>
                        </div></a>
                @endif
            </div>
        </div>
@endsection
