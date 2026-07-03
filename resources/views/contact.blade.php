@extends('layouts.app')

@section('title', 'Contact — GEL Group')

@section('content')

<section class="page-banner">
    <div class="page-banner__media">
        <img src="{{ asset('images/ingenierie-2.jpg') }}" alt="">
        <div class="page-banner__overlay"></div>
    </div>
    <div class="container page-banner__content">
        <span class="eyebrow eyebrow--light">Contact</span>
        <h1>Parlons de votre projet</h1>
        <p>Notre équipe vous répond sous 24 heures.</p>
    </div>
</section>

<section class="section section--light">
    <div class="container">
        <div class="contact-grid">
            <div class="contact-info-block">
                <h2>Coordonnées</h2>
                <p>Joignable par email ou téléphone au Sénégal et au Canada.</p>

                <div class="contact-list">
                    <a href="mailto:medoune0701@gmail.com" class="contact-list__item">
                        <span class="contact-list__label">Email</span>
                        <span class="contact-list__value">medoune0701@gmail.com</span>
                    </a>
                    <a href="https://wa.me/221774932200" class="contact-list__item" target="_blank" rel="noopener">
                        <span class="contact-list__label">WhatsApp — Sénégal</span>
                        <span class="contact-list__value">+221 77 493 22 00</span>
                    </a>
                    <a href="tel:+221773781251" class="contact-list__item">
                        <span class="contact-list__label">Téléphone — Sénégal</span>
                        <span class="contact-list__value">+221 77 378 12 51</span>
                    </a>
                    <a href="tel:+12635669051" class="contact-list__item">
                        <span class="contact-list__label">Téléphone — Canada</span>
                        <span class="contact-list__value">+1 (263) 566-9051</span>
                    </a>
                    <a href="https://www.tiktok.com/@conception_construction1" class="contact-list__item" target="_blank" rel="noopener noreferrer">
                        <span class="contact-list__label">TikTok</span>
                        <span class="contact-list__value">@conception_construction1</span>
                    </a>
                    <div class="contact-list__item contact-list__item--static">
                        <span class="contact-list__label">Adresse</span>
                        <span class="contact-list__value">Almadies 2, Dakar — Sénégal</span>
                    </div>
                </div>
            </div>

            <div class="contact-form-block">
                <h2>Envoyer un message</h2>
                <p class="form-intro">Devis, appel d'offres ou projet — décrivez votre besoin, nous vous répondons rapidement.</p>

                <form action="{{ route('contact.store') }}" method="POST" class="form">
                    @csrf
                    <div class="form-row">
                        <div class="form-field">
                            <label for="name">Nom complet</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                            @error('name')<span class="field-error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-field">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                            @error('email')<span class="field-error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="form-field">
                        <label for="phone">Téléphone</label>
                        <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" placeholder="+221 77 ...">
                        @error('phone')<span class="field-error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-field">
                        <label for="subject">Sujet</label>
                        <select id="subject" name="subject" required>
                            <option value="">Choisir un sujet</option>
                            <option value="Demande de devis" @selected(old('subject') === 'Demande de devis')>Demande de devis</option>
                            <option value="Appel d'offres" @selected(old('subject') === 'Appel d\'offres')>Appel d'offres</option>
                            <option value="Ingénierie & BTP" @selected(old('subject') === 'Ingénierie & BTP')>Ingénierie & BTP</option>
                            <option value="Conception / Achat de plans" @selected(old('subject') === 'Conception / Achat de plans')>Conception / Achat de plans</option>
                            <option value="Informatique" @selected(old('subject') === 'Informatique')>Informatique</option>
                            <option value="Transport & Mobilité" @selected(old('subject') === 'Transport & Mobilité')>Transport & Mobilité</option>
                            <option value="Autre" @selected(old('subject') === 'Autre')>Autre</option>
                        </select>
                        @error('subject')<span class="field-error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-field">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
                        @error('message')<span class="field-error">{{ $message }}</span>@enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Envoyer le message</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
