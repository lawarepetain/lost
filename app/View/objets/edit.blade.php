@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifier l'objet</h1>

    <form method="POST" action="{{ route('objets.update', $objet->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        @include('objets.form', ['objet' => $objet])

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection
