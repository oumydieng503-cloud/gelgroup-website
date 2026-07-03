@extends('layouts.app')

@section('title', 'Nos secteurs — GEL Group')

@section('content')

<section class="page-banner">
    <div class="page-banner__media">
        <img src="{{ asset('images/ingenierie-1.jpg') }}" alt="">
        <div class="page-banner__overlay"></div>
    </div>
    <div class="container page-banner__content">
        <span class="eyebrow eyebrow--light">Nos secteurs</span>
        <h1>Expertise multidisciplinaire</h1>
        <p>Devis, appels d'offres, ingénierie, informatique et transport — une offre complète.</p>
    </div>
</section>

<section class="section" id="ingenierie">
    <div class="container">
        <div class="detail-row">
            <div class="detail-row__media">
                <img src="{{ asset('images/fondateur-chantier-1.jpg') }}" alt="Ingénierie civile — fondateur sur chantier">
            </div>
            <div class="detail-row__content">
                <span class="eyebrow">Secteur 01</span>
                <h2>Ingénierie & BTP</h2>
                <p>
                    Nous couvrons l'intégralité du métier d'ingénieur en génie civil : de l'étude
                    initiale à la réception des travaux. Plus de 8 ans d'expérience sur des chantiers
                    d'envergure — camps militaires, marchés publics remportés auprès de l'État
                    et projets d'infrastructure au Sénégal et au Canada.
                </p>
                <ul class="feature-list">
                    <li>Études de faisabilité et calculs de structure</li>
                    <li>Conception, dimensionnement et plans techniques</li>
                    <li>Devis, métrés et chiffrage de projets</li>
                    <li>Participation aux appels d'offres et marchés publics</li>
                    <li>Conduite et supervision de travaux</li>
                    <li>Contrôle qualité et réception de chantiers</li>
                    <li>Infrastructures, bâtiments et ouvrages d'art</li>
                </ul>
                <a href="{{ route('contact') }}" class="btn btn-primary">Demander un devis</a>
            </div>
        </div>
    </div>
</section>

<section class="section section--light" id="plans">
    <div class="container">
        <div class="detail-row detail-row--reverse">
            <div class="detail-row__media">
                <img src="{{ asset('images/ingenierie-4.jpg') }}" alt="Plans et conception">
            </div>
            <div class="detail-row__content">
                <span class="eyebrow">Plans & Conception</span>
                <h2>Conception et vente de plans</h2>
                <p>
                    Nous réalisons des plans architecturaux et techniques sur mesure,
                    conformes aux normes en vigueur, et proposons également la vente
                    de plans prêts à l'emploi pour vos projets de construction.
                </p>
                <ul class="feature-list">
                    <li>Plans architecturaux et structurels</li>
                    <li>Études de faisabilité et métrés</li>
                    <li>Plans pour bâtiments et infrastructures</li>
                    <li>Vente de plans professionnels</li>
                </ul>
                <a href="{{ route('contact') }}" class="btn btn-primary">Demander un devis</a>
            </div>
        </div>
    </div>
</section>

<section class="section" id="informatique">
    <div class="container">
        <div class="detail-row">
            <div class="detail-row__media">
                <img src="{{ asset('images/informatique.jpg') }}" alt="Informatique">
            </div>
            <div class="detail-row__content">
                <span class="eyebrow">Secteur 02</span>
                <h2>Informatique</h2>
                <p>
                    Nous couvrons l'intégralité du métier de développeur informatique :
                    conception, développement, déploiement et maintenance de vos solutions
                    numériques, pour entreprises et institutions.
                </p>
                <ul class="feature-list">
                    <li>Développement d'applications web et mobiles</li>
                    <li>Création de sites web et plateformes sur mesure</li>
                    <li>Bases de données, API et intégrations système</li>
                    <li>Automatisation de processus et scripts métier</li>
                    <li>Infrastructure réseau, serveurs et déploiement</li>
                    <li>Maintenance, support et évolutions logicielles</li>
                    <li>Devis et accompagnement de projets numériques</li>
                </ul>
                <a href="{{ route('contact') }}" class="btn btn-primary">Demander un devis</a>
            </div>
        </div>
    </div>
</section>

<section class="section section--light" id="devis">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Devis & Marchés</span>
            <h2>Devis et appels d'offres</h2>
            <p>
                GEL Group établit des devis détaillés et répond aux appels d'offres
                pour des projets publics et privés, en ingénierie comme en informatique.
            </p>
        </div>
        <div class="cards-grid cards-grid--3">
            <article class="sector-card">
                <div class="sector-card__body">
                    <h3>Devis & chiffrage</h3>
                    <p>Estimation précise de vos projets BTP, plans ou développements informatiques. Devis gratuit sur demande.</p>
                </div>
            </article>
            <article class="sector-card">
                <div class="sector-card__body">
                    <h3>Appels d'offres</h3>
                    <p>Préparation de dossiers, réponse aux marchés publics et privés, avec expérience sur des projets d'État.</p>
                </div>
            </article>
            <article class="sector-card">
                <div class="sector-card__body">
                    <h3>Accompagnement complet</h3>
                    <p>De la candidature à la livraison : un interlocuteur unique pour piloter votre projet de bout en bout.</p>
                </div>
            </article>
        </div>
    </div>
</section>

<section class="section" id="transport">
    <div class="container">
        <div class="detail-row detail-row--reverse">
            <div class="detail-row__media">
                <img src="{{ asset('images/transport-moto.jpg') }}" alt="Transport">
            </div>
            <div class="detail-row__content">
                <span class="eyebrow">Secteur 03</span>
                <h2>Transport & Mobilité</h2>
                <p>
                    Modèle de mobilité structuré : acquisition de motos, mise à disposition
                    de conducteurs partenaires et gestion quotidienne d'un réseau de transport
                    fiable en zone urbaine et interurbaine.
                </p>
                <ul class="feature-list">
                    <li>Flotte de motos gérée professionnellement</li>
                    <li>Réseau de conducteurs partenaires</li>
                    <li>Modèle économique transparent</li>
                    <li>Suivi et maintenance de la flotte</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Réalisations</span>
            <h2>Nos projets en images</h2>
            <p>Le fondateur et son équipe sur le terrain, au cœur de chaque réalisation.</p>
        </div>
        @php
            $projectPhotos = [
                ['src' => 'equipe-collecte.jpg', 'alt' => 'Équipe GEL Group', 'caption' => 'Collectif entreprise — notre équipe'],
                ['src' => 'equipe-chantier.jpg', 'alt' => 'Sur chantier', 'caption' => 'Présence terrain et sécurité'],
                ['src' => 'equipe-industrie.jpg', 'alt' => 'Site industriel', 'caption' => 'Supervision sur site industriel'],
                ['src' => 'fondateur-portrait.jpg', 'alt' => 'Fondateur GEL Group', 'caption' => 'Fondateur & Directeur — GEL Group'],
                ['src' => 'fondateur-chantier-1.jpg', 'alt' => 'Direction de chantier', 'caption' => 'Direction de chantier sur site'],
                ['src' => 'fondateur-chantier-2.jpg', 'alt' => 'Supervision de projet', 'caption' => 'Supervision de projet avec l\'équipe'],
                ['src' => 'fondateur-chantier-3.jpg', 'alt' => 'Conduite de travaux', 'caption' => 'Conduite de travaux — inspection sur échafaudage'],
                ['src' => 'fondateur-electronique.jpg', 'alt' => 'Innovation technique', 'caption' => 'Innovation & solutions techniques'],
                ['src' => 'image1.jpeg', 'alt' => 'Cérémonie professionnelle', 'caption' => 'Événement et cérémonie professionnelle'],
                ['src' => 'image.jpeg', 'alt' => 'Projet GEL Group', 'caption' => 'Réalisation GEL Group'],
                ['src' => 'image2.jpeg', 'alt' => 'Projet GEL Group', 'caption' => 'Nos réalisations'],
                ['src' => 'image4.jpeg', 'alt' => 'Projet GEL Group', 'caption' => 'Nos réalisations'],
                ['src' => 'image5.jpeg', 'alt' => 'Plan architectural', 'caption' => 'Conception architecturale'],
                ['src' => 'image6.jpeg', 'alt' => 'Projet GEL Group', 'caption' => 'Nos réalisations'],
                ['src' => 'image7.jpeg', 'alt' => 'Projet GEL Group', 'caption' => 'Nos réalisations'],
                ['src' => 'image8.jpeg', 'alt' => 'Infrastructure', 'caption' => 'Projet d\'infrastructure'],
                ['src' => 'image9.jpeg', 'alt' => 'Projet GEL Group', 'caption' => 'Nos réalisations'],
                ['src' => 'image10.jpeg', 'alt' => 'Projet GEL Group', 'caption' => 'Nos réalisations'],
                ['src' => 'image11.jpeg', 'alt' => 'Projet GEL Group', 'caption' => 'Nos réalisations'],
                ['src' => 'image12.jpeg', 'alt' => 'Bâtiment', 'caption' => 'Réalisation BTP'],
                ['src' => 'image13.jpeg', 'alt' => 'Projet GEL Group', 'caption' => 'Nos réalisations'],
                ['src' => 'image14.jpeg', 'alt' => 'Projet GEL Group', 'caption' => 'Nos réalisations'],
                ['src' => 'image15.jpeg', 'alt' => 'Projet GEL Group', 'caption' => 'Nos réalisations'],
                ['src' => 'image16 (1).jpeg', 'alt' => 'Projet GEL Group', 'caption' => 'Nos réalisations'],
                ['src' => 'image16 (2).jpeg', 'alt' => 'Projet GEL Group', 'caption' => 'Nos réalisations'],
                ['src' => 'ingenierie-1.jpg', 'alt' => 'Ingénierie', 'caption' => 'Ingénierie civile'],
                ['src' => 'ingenierie-2.jpg', 'alt' => 'Chantier', 'caption' => 'Chantier de construction'],
                ['src' => 'ingenierie-3.jpg', 'alt' => 'Conduite de travaux', 'caption' => 'Conduite de travaux'],
                ['src' => 'ingenierie-4.jpg', 'alt' => 'Grand chantier', 'caption' => 'Projets d\'envergure'],
                ['src' => 'informatique.jpg', 'alt' => 'Informatique', 'caption' => 'Solutions informatiques'],
                ['src' => 'transport-moto.jpg', 'alt' => 'Transport', 'caption' => 'Transport & mobilité'],
            ];
        @endphp

        <div class="projects-carousel" data-carousel>
            <div class="projects-carousel__viewport">
                @foreach($projectPhotos as $index => $photo)
                <figure class="projects-carousel__slide {{ $index === 0 ? 'is-active' : '' }}">
                    <img src="{{ asset('images/' . $photo['src']) }}" alt="{{ $photo['alt'] }}">
                    <figcaption>{{ $photo['caption'] }}</figcaption>
                </figure>
                @endforeach
            </div>

            <button type="button" class="projects-carousel__btn projects-carousel__btn--prev" aria-label="Photo précédente">&lsaquo;</button>
            <button type="button" class="projects-carousel__btn projects-carousel__btn--next" aria-label="Photo suivante">&rsaquo;</button>

            <div class="projects-carousel__footer">
                <div class="projects-carousel__counter" aria-live="polite">
                    <span data-carousel-current>1</span> / {{ count($projectPhotos) }}
                </div>
                <div class="projects-carousel__dots" role="tablist" aria-label="Pagination des photos">
                    @foreach($projectPhotos as $index => $photo)
                    <button type="button" class="projects-carousel__dot {{ $index === 0 ? 'is-active' : '' }}" aria-label="Photo {{ $index + 1 }}" data-index="{{ $index }}"></button>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section--dark cta-strip">
    <div class="container cta-strip__inner">
        <div>
            <h2>Un besoin spécifique ?</h2>
            <p>Contactez notre équipe pour un accompagnement sur mesure.</p>
        </div>
        <a href="{{ route('contact') }}" class="btn btn-primary">Nous contacter</a>
    </div>
</section>

@endsection
