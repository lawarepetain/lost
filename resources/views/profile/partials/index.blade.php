<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loster - Objets perdus</title>
    <link rel="stylesheet" href="{{ asset('style/produit.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <div class="header-content">
                <a href="#" class="back-button"></a>
                <div class="header-icons">
                    <a href="#">Q</a>
                    <a href="#">✉</a>
                    <a href="#">&#x1F319;</a>
                    <a href="#">⇧</a>
                    <a href="#">⋮</a>
                </div>
            </div>
            <div class="header-title">
                <img src="/image/logo (2).png" alt="Loster Logo" class="logo" >
                <a href="/create" class="add-button">Ajouter une information</a>
            </div>
        </header>

        <section class="items-section">
            <h1>Recueil des objets perdus au Togo</h1>
            
            @foreach ($objets as $objet)
            <div class="item-card">
                <img src="{{ $objet->lien_image }}" alt="Clés ramassées" class="item-image" >
                <div class="item-details">
                    <h3>{{ $objet->Objet_ramasse }} ramassées</h3>
                    
                    <p>J'ai trouvé un(e) <span>{{$objet->Objet_ramasse}}</span> ({{$objet->description}}) ce <span>{{ $objet->date }} </span> à {{$objet->lieu}}</p>
                    <p><div class="localisation">
                        <img src="/image/mkt-memorialDay-icon-map-removebg-preview.png" alt="" width="20" height="20">
                        <span>{{$objet->adress}}</span>
                       </div>
                    </p>
                    <p>☎ <span>{{$objet->telephone}}</span> </p>
                    <div class="Lien">
                        <a href="/edit/{{$objet->id}}" class="modifier">Modifier</a>
                    <form action="{{route('delete', $objet->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="bouton">Suprimer</button>
                    </form>
                    </div>
                </div>
            </div>
            @endforeach
        </section>
    </div>
</body>
</html>
