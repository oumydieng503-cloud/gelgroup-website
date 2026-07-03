@extends('layouts.app')

@section('title', 'GEL Group — Global Engineering & Logistics')

@section('content')

<section class="hero">
    <div class="hero-media">
        <img src="{{ asset('images/fondateur-chantier-2.jpg') }}" alt="GEL Group sur chantier">
        <div class="hero-overlay"></div>
    </div>
    <div class="container hero-grid">
        <div class="hero-copy">
            <span class="eyebrow">Sénégal · Canada</span>
            <h1><span class="text-white">GEL</span> <span class="text-gold">GROUP</span></h1>
            <p class="hero-lead">Global Engineering & Logistics</p>
            <p class="hero-text">
                De la conception au déploiement — nous réalisons tout ce qu'un ingénieur
                en génie civil et un développeur informatique peuvent accomplir :
                devis, appels d'offres, chantiers et solutions numériques.
            </p>
            <div class="hero-actions">
                <a href="{{ route('secteurs') }}" class="btn btn-primary">Découvrir nos secteurs</a>
                <a href="{{ route('contact') }}" class="btn btn-secondary">Nous contacter</a>
            </div>
        </div>
        <div class="hero-visual">
            <div class="hero-card hero-card--featured">
                <img src="{{ asset('images/fondateur-portrait.jpg') }}" alt="Fondateur GEL Group">
                <span>Fondateur</span>
            </div>
            <div class="hero-card hero-card--1">
                <img src="{{ asset('images/fondateur-chantier-3.jpg') }}" alt="Conduite de travaux">
                <span>Sur le terrain</span>
            </div>
            <div class="hero-card hero-card--2">
                <img src="{{ asset('images/fondateur-electronique.jpg') }}" alt="Solutions techniques">
                <span>Innovation</span>
            </div>
        </div>
    </div>
</section>

<section class="section section--light">
    <div class="container">
        <div class="intro-block">
            <div class="intro-text">
                <span class="eyebrow">À propos</span>
                <h2>Un partenaire fiable, partout dans le monde</h2>
                <p>
                    GEL Group regroupe des expertises complémentaires en génie civil,
                    développement numérique et mobilité. Nous établissons des devis,
                    participons aux appels d'offres et accompagnons vos projets de A à Z,
                    au Sénégal et au Canada.
                </p>
            </div>
            <div class="stats-grid">
                <div class="stat-box">
                    <strong>8+</strong>
                    <span>Années d'expérience</span>
                </div>
                <div class="stat-box">
                    <strong>3</strong>
                    <span>Secteurs d'activité</span>
                </div>
                <div class="stat-box">
                    <strong>2</strong>
                    <span>Pays d'implantation</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section founder-section">
    <div class="container">
        <div class="founder-showcase">
            <div class="founder-showcase__portrait">
                <img src="{{ asset('images/fondateur-portrait.jpg') }}" alt="Fondateur de GEL Group">
                <div class="founder-showcase__badge">Fondateur &amp; Directeur</div>
            </div>
            <div class="founder-showcase__content">
                <span class="eyebrow">Leadership</span>
                <h2>L'expertise au cœur de chaque projet</h2>
                <p class="founder-quote">
                    « GEL Group est né d'une conviction : allier le terrain et la technologie
                    pour livrer des projets concrets, durables et de qualité. »
                </p>
                <p>
                    Ingénieur et entrepreneur, le fondateur de GEL Group cumule plus de 8 ans
                    d'expérience en génie civil et conduite de travaux sur des chantiers
                    d'envergure — camps militaires, marchés publics et infrastructures
                    nationales. Présent sur chaque phase du projet, de la conception à la livraison.
                </p>
                <ul class="founder-credentials">
                    <li>Devis et chiffrage de projets</li>
                    <li>Participation aux appels d'offres</li>
                    <li>Génie civil — tout le spectre métier</li>
                    <li>Développement informatique complet</li>
                </ul>
                <a href="{{ route('contact') }}" class="btn btn-primary">Prendre rendez-vous</a>
            </div>
        </div>

        <div class="founder-gallery">
            <figure class="founder-gallery__item">
                <img src="{{ asset('images/fondateur-chantier-1.jpg') }}" alt="Direction de chantier">
                <figcaption>Direction de chantier</figcaption>
            </figure>
            <figure class="founder-gallery__item">
                <img src="{{ asset('images/fondateur-chantier-2.jpg') }}" alt="Supervision de projet">
                <figcaption>Supervision de projet</figcaption>
            </figure>
            <figure class="founder-gallery__item">
                <img src="{{ asset('images/fondateur-chantier-3.jpg') }}" alt="Conduite de travaux">
                <figcaption>Conduite de travaux</figcaption>
            </figure>
            <figure class="founder-gallery__item">
                <img src="{{ asset('images/fondateur-electronique.jpg') }}" alt="Innovation technique">
                <figcaption>Innovation technique</figcaption>
            </figure>
        </div>
    </div>
</section>

<section class="section section--light team-section">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Notre équipe</span>
            <h2>La force du collectif</h2>
            <p>Sur le terrain, en industrie et en équipe — les femmes et les hommes qui font GEL Group.</p>
        </div>
        <div class="team-grid">
            <figure class="team-card team-card--wide">
                <img src="{{ asset('images/equipe-collecte.jpg') }}" alt="Équipe GEL Group">
                <figcaption>
                    <strong>Collectif entreprise</strong>
                    <span>Une équipe unie, du chantier au bureau</span>
                </figcaption>
            </figure>
            <figure class="team-card">
                <img src="{{ asset('images/equipe-chantier.jpg') }}" alt="Sur chantier">
                <figcaption>
                    <strong>Sur le chantier</strong>
                    <span>Présence terrain et sécurité</span>
                </figcaption>
            </figure>
            <figure class="team-card">
                <img src="{{ asset('images/equipe-industrie.jpg') }}" alt="Site industriel">
                <figcaption>
                    <strong>Sites industriels</strong>
                    <span>Supervision et expertise terrain</span>
                </figcaption>
            </figure>
        </div>
        <div class="team-cta">
            <a href="{{ route('carrieres') }}" class="btn btn-primary">Rejoindre l'équipe</a>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Nos activités</span>
            <h2>Trois secteurs, une exigence commune</h2>
            <p>Des équipes spécialisées pour répondre à chaque besoin métier.</p>
        </div>
        <div class="cards-grid cards-grid--3">
            <article class="sector-card">
                <div class="sector-card__img">
                    <img src="{{ asset('images/fondateur-chantier-1.jpg') }}" alt="Ingénierie & BTP">
                </div>
                <div class="sector-card__body">
                    <h3>Ingénierie & BTP</h3>
                    <p>Tout le métier du génie civil : études, devis, appels d'offres, conduite de travaux et livraison de chantiers.</p>
                    <a href="{{ route('secteurs') }}#ingenierie" class="link-arrow">En savoir plus</a>
                </div>
            </article>
            <article class="sector-card">
                <div class="sector-card__img">
                    <img src="{{ asset('images/informatique.jpg') }}" alt="Informatique">
                </div>
                <div class="sector-card__body">
                    <h3>Informatique</h3>
                    <p>Tout le métier du développeur : applications, sites web, bases de données, automatisation et solutions IT.</p>
                    <a href="{{ route('secteurs') }}#informatique" class="link-arrow">En savoir plus</a>
                </div>
            </article>
            <article class="sector-card">
                <div class="sector-card__img">
                    <img src="{{ asset('images/transport-moto.jpg') }}" alt="Transport">
                </div>
                <div class="sector-card__body">
                    <h3>Transport & Mobilité</h3>
                    <p>Gestion de flotte moto et réseau de conducteurs partenaires.</p>
                    <a href="{{ route('secteurs') }}#transport" class="link-arrow">En savoir plus</a>
                </div>
            </article>
        </div>
    </div>
</section>

<section class="section section--dark cta-strip">
    <div class="container cta-strip__inner">
        <div>
            <h2>Vous avez un projet ?</h2>
            <p>Devis gratuit, réponse sous 24 h — ingénierie, informatique ou appel d'offres.</p>
        </div>
        <a href="{{ route('contact') }}" class="btn btn-primary">Contactez-nous</a>
    </div>
</section>

@endsection
