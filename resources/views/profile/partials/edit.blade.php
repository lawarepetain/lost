<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un objet - Loster</title>
    <link rel="stylesheet" href="{{ asset('style/formulaire.css') }}">
</head>
<body>
    <div class="container">
        <h1>Ajouter un objet ramassé</h1>
        <form id="ajout-objet-form" action="{{route("update", $objet->id)}}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="objet">Objet ramassé :</label>
                <input type="text" id="objet" name="objet" required value="{{ $objet->Objet_ramasse }}">
            </div>
            <div class="form-group">
                <label for="objet">Image de l'objet :</label>
                <input type="text" id="objet" name="lien_image" required value="{{ $objet->lien_image }}">
            </div>
            <div class="form-group">
                <label for="description">Description :</label>
                <textarea id="description" name="description" required value="{{ $objet->description }}"></textarea>
            </div>
            <div class="form-group">
                <label for="date">Date :</label>
                <input type="date" id="date" name="date" required value="{{ $objet->date }}">
            </div>
            <div class="form-group">
                <label for="lieu">Lieu :</label>
                <input type="text" id="lieu" name="lieu" required value="{{ $objet->lieu }}">
            </div>
            <div class="form-group">
                <label for="adresse">Adresse :</label>
                <input type="text" id="adresse" name="adresse" required value="{{ $objet->adress }}">
            </div>
            <div class="form-group">
                <label for="telephone">Téléphone :</label>
                <input type="tel" id="telephone" name="telephone" required value="{{ $objet->telephone }}">
            </div>
            <button type="submit">Mise à jour</button>
        </form>
    </div>
</body>
</html>