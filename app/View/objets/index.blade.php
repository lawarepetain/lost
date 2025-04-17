@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Objets Perdus</h1>
    <a href="{{ route('objets.create') }}" class="btn btn-primary mb-3">Ajouter un objet</a>

    @foreach($objets as $objet)
        <div class="card mb-3">
            <div class="card-body">
                <h5>{{ $objet->titre }}</h5>
                <p>{{ Str::limit($objet->description, 100) }}</p>
                <p><strong>Lieu :</strong> {{ $objet->lieu }} | <strong>Date :</strong> {{ $objet->date }}</p>
                <a href="{{ route('objets.show', $objet->id) }}" class="btn btn-sm btn-info">Voir</a>
            </div>
        </div>
    @endforeach

    {{ $objets->links() }}
</div>
@endsection
