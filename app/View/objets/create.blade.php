@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter un objet perdu</h1>

    <form method="POST" action="{{ route('objets.store') }}" enctype="multipart/form-data">
        @csrf

        @include('objets.form')

        <button type="submit" class="btn btn-success">Enregistrer</button>
    </form>
</div>
@endsection
