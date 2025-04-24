{{-- <x-guest-layout> --}}
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">

    <header>
        <nav>
            <div class="logo">
                <img src="{{ asset('image/logo (2).png') }}" class="logo1">
            </div>
            <ul>
                <li><a href="#fonctionnalites">Fonctionnalités</a></li>
                <li><a href="#comment-ca-marche">Comment ça marche</a></li>
                <li><a href="{{ route('dashboard') }}">Parcourir</a></li>
                @auth
                    <li><a href="{{ route('profile.show') }}">Mon Profil</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="link-style">Déconnexion</button>
                        </form>
                    </li>
                @else
                    <li><a href="{{ route('login') }}">Connexion</a></li>
                    <li><a href="{{ route('register') }}">Inscription</a></li>
                @endauth
            </ul>
        </nav>
        <div class="hero">
            <h1>Retrouvez vos objets perdus facilement</h1>
            <p>Loster vous aide à retrouver les objets que vous avez égarés grâce à une communauté solidaire.</p>
            @auth
                <a href="{{ route('dashboard') }}" class="btn">Tableau de bord</a>
            @else
                <a href="{{ route('login') }}" class="btn">Connexion</a>
            @endauth
        </div>
    </header>

    <!-- Le reste du contenu (sections, fonctionnalités, etc.) reste inchangé -->

    <footer>
        <p>&copy; {{ date('Y') }} Loster. Tous droits réservés.</p>
    </footer>
{{-- </x-guest-layout> --}}