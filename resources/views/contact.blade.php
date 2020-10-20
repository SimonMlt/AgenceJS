@extends('layouts.base')

@section('content')
    <h1>Contact</h1>
    <p>Ceci est un formulaire de contact</p>

    <form id="form-contact" action="#">
        @csrf
        <div class="form-group">
            <label>Nom et prénom</label>
            <input type="text" class="form-control" name="name" required>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>

        <div class="form-group">
            <label>Message</label>
            <textarea name="message" rows="5" class="form-control" required></textarea>
        </div>

        <button type="submit" id="btn-contact" class="btn btn-primary mt-5">Envoyer le message</button>
    </form>

@endsection
