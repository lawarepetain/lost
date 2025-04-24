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
        <form id="ajout-objet-form" action="/create" method="post">
            @csrf
            <div class="form-group">
                <label for="objet">Objet ramassé :</label>
                <input type="text" id="objet" name="objet" required>
            </div>
            <div class="form-group">
                <label for="objet">Image de l'objet :</label>
                <input type="text" id="objet" name="lien_image" required>
            </div>
            <div class="form-group">
                <label for="description">Description de l'objet ramassé:</label>
                <textarea id="description" name="description" required></textarea>
            </div>
            <div class="form-group">
                <label for="date">Date :</label>
                <input type="date" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="lieu">Lieu :</label>
                <input type="text" id="lieu" name="lieu" required>
            </div>
            <div class="form-group">
                <label for="adresse">Adresse :</label>
                <input type="text" id="adresse" name="adresse" required>
            </div>
            <div class="form-group">
                <label for="telephone">Téléphone :</label>
                <input type="tel" id="telephone" name="telephone" required>
            </div>
            <button type="submit">Ajouter l'objet</button>
        </form>
    </div>
</body>
</html>