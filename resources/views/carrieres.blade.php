@extends('layouts.app')

@section('title', 'Carrières — GEL Group')

@section('content')

<section class="page-banner">
    <div class="page-banner__media">
        <img src="{{ asset('images/equipe-collecte.jpg') }}" alt="Équipe GEL Group">
        <div class="page-banner__overlay"></div>
    </div>
    <div class="container page-banner__content">
        <span class="eyebrow eyebrow--light">Carrières</span>
        <h1>Rejoignez GEL Group</h1>
        <p>Ingénierie, informatique ou transport — construisez votre avenir avec nous.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Notre collectif</span>
            <h2>Une équipe engagée sur le terrain</h2>
        </div>
        <div class="team-grid team-grid--careers">
            <figure class="team-card team-card--wide">
                <img src="{{ asset('images/equipe-collecte.jpg') }}" alt="Équipe GEL Group">
                <figcaption>
                    <strong>Collectif entreprise</strong>
                    <span>Travailler ensemble, avancer ensemble</span>
                </figcaption>
            </figure>
            <figure class="team-card">
                <img src="{{ asset('images/equipe-chantier.jpg') }}" alt="Sur chantier">
                <figcaption>
                    <strong>Chantier</strong>
                    <span>Sécurité et professionnalisme</span>
                </figcaption>
            </figure>
            <figure class="team-card">
                <img src="{{ asset('images/equipe-industrie.jpg') }}" alt="Site industriel">
                <figcaption>
                    <strong>Industrie</strong>
                    <span>Expertise et supervision</span>
                </figcaption>
            </figure>
        </div>
    </div>
</section>

<section class="section section--light">
    <div class="container">
        <div class="careers-grid">
            <div class="careers-info">
                <span class="eyebrow">Pourquoi nous rejoindre</span>
                <h2>Intégrez une équipe pluridisciplinaire</h2>
                <p>
                    GEL Group recrute des profils motivés au Sénégal et au Canada.
                    Que vous soyez ingénieur en génie civil, développeur informatique
                    ou conducteur, envoyez-nous votre candidature.
                </p>

                <div class="careers-sectors">
                    <div class="careers-sector">
                        <strong>Ingénierie & BTP</strong>
                        <span>Génie civil, conducteurs de travaux, dessinateurs, techniciens chantier</span>
                    </div>
                    <div class="careers-sector">
                        <strong>Informatique</strong>
                        <span>Développeurs, intégrateurs web, techniciens réseau, automatisation</span>
                    </div>
                    <div class="careers-sector">
                        <strong>Transport</strong>
                        <span>Conducteurs, gestion de flotte, logistique urbaine</span>
                    </div>
                </div>

                <ul class="careers-steps">
                    <li>Remplissez le formulaire ci-contre</li>
                    <li>Joignez votre CV au format <strong>PDF uniquement</strong></li>
                    <li>Notre équipe étudie votre profil sous 7 jours</li>
                </ul>
            </div>

            <div class="contact-form-block">
                <h2>Postuler</h2>
                <p class="form-intro">Tous les champs marqués * sont obligatoires.</p>

                <form action="{{ route('carrieres.store') }}" method="POST" enctype="multipart/form-data" class="form">
                    @csrf
                    <div class="form-field">
                        <label for="name">Nom complet *</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                        @error('name')<span class="field-error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-row">
                        <div class="form-field">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                            @error('email')<span class="field-error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-field">
                            <label for="phone">Téléphone</label>
                            <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" placeholder="+221 77 ...">
                            @error('phone')<span class="field-error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-field">
                            <label for="position">Poste souhaité *</label>
                            <select id="position" name="position" required>
                                <option value="">Choisir un secteur</option>
                                <option value="Ingénieur génie civil" @selected(old('position') === 'Ingénieur génie civil')>Ingénieur génie civil</option>
                                <option value="Conducteur de travaux" @selected(old('position') === 'Conducteur de travaux')>Conducteur de travaux</option>
                                <option value="Dessinateur / Plans" @selected(old('position') === 'Dessinateur / Plans')>Dessinateur / Plans</option>
                                <option value="Technicien chantier" @selected(old('position') === 'Technicien chantier')>Technicien chantier</option>
                                <option value="Développeur informatique" @selected(old('position') === 'Développeur informatique')>Développeur informatique</option>
                                <option value="Technicien IT / Réseau" @selected(old('position') === 'Technicien IT / Réseau')>Technicien IT / Réseau</option>
                                <option value="Conducteur / Transport" @selected(old('position') === 'Conducteur / Transport')>Conducteur / Transport</option>
                                <option value="Autre" @selected(old('position') === 'Autre')>Autre</option>
                            </select>
                            @error('position')<span class="field-error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-field">
                            <label for="experience">Années d'expérience</label>
                            <select id="experience" name="experience">
                                <option value="">Sélectionner</option>
                                <option value="Débutant" @selected(old('experience') === 'Débutant')>Débutant</option>
                                <option value="1-3 ans" @selected(old('experience') === '1-3 ans')>1 à 3 ans</option>
                                <option value="3-5 ans" @selected(old('experience') === '3-5 ans')>3 à 5 ans</option>
                                <option value="5-8 ans" @selected(old('experience') === '5-8 ans')>5 à 8 ans</option>
                                <option value="8+ ans" @selected(old('experience') === '8+ ans')>8 ans et plus</option>
                            </select>
                            @error('experience')<span class="field-error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="form-field">
                        <label for="message">Lettre de motivation *</label>
                        <textarea id="message" name="message" rows="5" required placeholder="Présentez-vous et expliquez pourquoi vous souhaitez rejoindre GEL Group...">{{ old('message') }}</textarea>
                        @error('message')<span class="field-error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-field">
                        <label for="cv">CV (PDF uniquement, max 5 Mo) *</label>
                        <input type="file" id="cv" name="cv" accept=".pdf,application/pdf" required>
                        @error('cv')<span class="field-error">{{ $message }}</span>@enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Envoyer ma candidature</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
