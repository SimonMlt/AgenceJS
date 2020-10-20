@extends('layouts.base')

@section('content')
    <h1>Réservation</h1>

    <table>
        <thead>
        <tr>
            <th>Habitation</th>
            <th>Prix</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <form method="post" action="{{route('storeReservation', $habitation->id)}}" enctype="multipart/form-data">
            <th>{{$habitation->nom}}</th>
            <th>{{number_format($habitation->prix,2)}} €</th>
                @csrf
                <th><input type="date" id="date" name="date"></th>
                <button type="submit" class="btn btn-primary mt-5">Ajouter</button>
            </form>
        </tr>
        </tbody>
    </table>
@endsection
