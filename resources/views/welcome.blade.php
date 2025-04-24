
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
                <a href="/dashboard" class="btn">Tableau de bord</a>
            @else
                <a href="{{ route('login') }}" class="btn">Connexion</a>
            @endauth
        </div>
    </header>

    <section class="pourquoi_loster">
        <h2 class="texte">Pourquoi Loster?</h2>
        <div class="pourquoi_1">
            <div class="pourquoi_2">
                <div class="ligne"></div>
                <p>Vous avez perdu votre précieux objet? Ne <br>paniquez pas! Loster est là pour vous aider à <br>retrouver ce que vous avez égaré. Que ce soit <br>un parapluie, un téléphone ou même un chat, <br>notre plateforme facilite la restitution des objets <br>perdus au Togo. Ne laissez pas vos souvenirs <br>s'envoler!</p>
            </div>
        </div>
    </section>

    <section id="fonctionnalites" class="section">
        <h2>Fonctionnalités</h2>
        <div class="features">
            <div class="feature">
                <img src="/image/zoom_2113465-removebg-preview.png" alt="Recherche">
                <h3>Recherche facile</h3>
                <p>Trouvez rapidement vos objets perdus grâce à notre moteur de recherche puissant.</p>
            </div>
            <a href="/geo">
                <div class="feature">
                    <img src="/image/R__4_-removebg-preview.png" alt="Localisation">
                    <h3>Géolocalisation</h3>
                    <p>Localisez les objets trouvés sur une carte interactive.</p>
                </div>
            </a>
            <a href="/messagerie">
                <div class="feature">
                    <img src="/image/R__3_-removebg-preview.png" alt="Message">
                    <h3>Messagerie intégrée</h3>
                    <p>Contactez directement le dépositaire de l'objet via notre messagerie sécurisée.</p>
                </div>
            </a>
        </div>
    </section>

    <section class="ajout">
        <p class="ajout_1">Ajoutez vos objets ici</p>
        <p class="ajout_2">Déclarez vos <br>trouvailles ou <br>pertes</p>
        <button class="bouton_ajout">Ajouter Maintenant</button>
    </section>

    <section id="comment-ca-marche" class="section">
        <h2>Comment ça marche</h2>
        <div class="steps">
            <div class="step">
                <span>1</span>
                <h3>Signalez l'objet perdu</h3>
                <p>Décrivez l'objet perdu et indiquez le lieu et la date de la perte.</p>
            </div>
            <div class="step">
                <span>2</span>
                <h3>Parcourez les objets trouvés</h3>
                <p>Consultez la liste des objets trouvés et utilisez les filtres pour affiner votre recherche.</p>
            </div>
            <div class="step">
                <span>3</span>
                <h3>Contactez le dépositaire</h3>
                <p>Envoyez un message au dépositaire pour récupérer votre objet.</p>
            </div>
        </div>
    </section>


    <section class="action_l">
        <div class="action">
            <h2 class="action_1">Loster en Action</h2>
        <iframe width="800" height="500" src="https://www.youtube.com/embed/YIP7TbNvkOM?list=TLGGxlN7YxcTwNUxNTA0MjAyNQ" title="How To REMOVE OBJECTS From VIDEO In Davinci Resolve (Studio)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </section>


    <div class="ramasse">
        <section id="objets-ramasses">
            <h2>Les objets ramassés au TOGO</h2>
            <div class="item-list">
                <div class="item">
                    <img src="/image/R__5_-removebg-preview.png" alt="Portefeuille">
                    <h3>Portefeuille</h3>
                    <p>Trouvé le 12/03/2023 à Lomé.</p>
                </div>
                <div class="item">
                    <img src="/image/OIP__1_-removebg-preview (3).png" alt="Moto">
                    <h3>Moto</h3>
                    <p>Trouvé le 15/03/2023 à Kara.</p>
                </div>
                <div class="item">
                    <img src="/image/OIP__2_-removebg-preview (1).png" alt="Clés">
                    <h3>Clés</h3>
                    <p>Trouvées le 18/03/2023 à Sokodé.</p>
                </div>
                <div class="item">
                    <img src="/image/R__1_-removebg-preview.png" alt="Lunettes">
                    <h3>Lunettes</h3>
                    <p>Trouvées le 20/03/2023 à Atakpamé.</p>
                </div>
            </div>
        </section>

        <section id="telecharger" class="section">
            <h2>Télécharger l'application</h2>
            <div class="download">
                <a href="#" class="btn">Télécharger sur App Store</a>
                <a href="#" class="btn">Télécharger sur Google Play</a>
            </div>
        </section>
    </div>


    <section class="add">
       <div class="add_loster">
        <div>
            <p class="add_1">Rejoignez Loster Maintenant</p>
            <p class="add_2">Ne laissez pas vos objets perdus en plan, rejoignez-nous et retrouvez-les !</p>
        </div>
        <div class="add_l">
                <a href="" class="add_3">Commencer Ici</a>
        </div>
       </div>
    </section>
         
    <footer>
        <p>&copy; {{ date('Y') }} Loster. Tous droits réservés.</p>
    </footer>
{{-- </x-guest-layout> --}}