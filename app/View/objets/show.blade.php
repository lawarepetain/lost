@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $objet->titre }}</h1>
    <p>{{ $objet->description }}</p>
    <p><strong>Lieu :</strong> {{ $objet->lieu }}</p>
    <p><strong>Date :</strong> {{ $objet->date }}</p>

    @if($objet->image)
        <img src="{{ asset('storage/' . $objet->image) }}" alt="Image de l'objet" class="img-fluid mt-3 mb-3">
    @endif

    <a href="{{ route('objets.edit', $objet->id) }}" class="btn btn-warning">Modifier</a>
    
    <form action="{{ route('objets.destroy', $objet->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">Supprimer</button>
    </form>

    <a href="{{ route('objets.index') }}" class="btn btn-secondary mt-3">Retour</a>
</div>
@endsection
