@extends('layouts.base')

@section('content')
    @if(Auth::check() && Auth::user()->role == 'Admin')
    <h1 style="font-family: 'Roboto', sans-serif">Liste de réservations</h1>
    <div class="row">
            <table class="table table-hover text-center mt-5">
                <thead>
                <tr>
                    <th>Habitation</th>
                    <th>Client</th>
                    <th>Prix</th>
                    <th>Date</th>
                </tr>
                </thead>
                <tbody>
                @foreach($reservation as $reservations)
                <tr>
                        <th>{{$reservations->habitation->nom}}</th>
                        <th>{{strtoupper($reservations->user->nom).' '.$reservations->user->prenom}}</th>
                        <th>{{number_format($reservations->habitation->prix,2)}} €</th>
                        <th>{{date('d/m/Y', strtotime($reservations->date))}}</th>
                </tr>
                @endforeach
                </tbody>
            </table>
    </div>
    @else
        <script>window.location = "/";</script>
    @endif
@endsection
