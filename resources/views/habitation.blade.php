@extends('layouts.base')

@section('content')
    <h1>Liste des annonces</h1>

{{--    <div class="mb-3">--}}
{{--        <a href="{{route('addPost')}}" class="btn btn-primary">Ajouter un article</a>--}}
{{--    </div>--}}
    @if(\Illuminate\Support\Facades\Auth::check())
        <div class="mb-3">
            <a href="{{route('addHabitation')}}" class="btn btn-primary">Déposer une annonce</a>
        </div>
    @endif
    <br><br>

    <div class="row">
        @foreach($habitation as $habitations)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{asset('storage/'.$habitations->image1)}}" width="348" height="150" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{$habitations->nom}}</h5>
{{--                        <h6>@if($habitation->category !== null) {{$habitation->category->name}} @endif</h6>--}}
                        <p class="card-text">{{$habitations->description}}</p>
                        <p class="card-text">{{$habitations->prix}} €</p>

                        <p>Mise en ligne le {{$habitations->created_at->format('d/m/Y H:m')}}
{{--                            par {{$habitations->user->id ===\Illuminate\Support\Facades\Auth::id() ? 'Moi' : $habitations->user->name}}--}}
                        </p>

                        <a href="{{route('detailsHabitation', $habitations->slug)}}" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
