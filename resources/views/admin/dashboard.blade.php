@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tableau de bord Admin</h1>

    <h3>Objets perdus</h3>
    @foreach($objets as $objet)
        <p>{{ $objet->titre }} - {{ $objet->user->name }}</p>
    @endforeach

    <h3>Utilisateurs</h3>
    @foreach($users as $user)
        <p>{{ $user->name }} ({{ $user->email }}) - Rôle : {{ $user->role }}</p>
    @endforeach
</div>
@endsection
