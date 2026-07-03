@extends('admin.layout')

@section('title', 'Candidature — ' . $application->name)

@section('content')
<div class="admin-page">
    <a href="{{ route('admin.dashboard') }}" class="admin-back">&larr; Retour au tableau de bord</a>

    <div class="admin-detail-header">
        <div>
            <h1>{{ $application->name }}</h1>
            <p class="admin-subtitle">{{ $application->position }} — reçue le {{ $application->created_at->format('d/m/Y à H:i') }}</p>
        </div>
        <a href="{{ route('admin.applications.cv', $application) }}" class="admin-btn">Télécharger le CV (PDF)</a>
    </div>

    <div class="admin-detail-grid">
        <div class="admin-card">
            <h3>Coordonnées</h3>
            <p><strong>Email :</strong> <a href="mailto:{{ $application->email }}">{{ $application->email }}</a></p>
            <p><strong>Téléphone :</strong> {{ $application->phone ?: 'Non renseigné' }}</p>
            <p><strong>Expérience :</strong> {{ $application->experience ?: 'Non renseignée' }}</p>
        </div>

        <div class="admin-card">
            <h3>Statut de la candidature</h3>
            <form method="POST" action="{{ route('admin.applications.update', $application) }}" class="admin-status-form">
                @csrf
                @method('PATCH')
                <select name="status">
                    <option value="en_attente" @selected($application->status === 'en_attente')>En attente</option>
                    <option value="en_cours" @selected($application->status === 'en_cours')>En cours d'étude</option>
                    <option value="accepte" @selected($application->status === 'accepte')>Accepté</option>
                    <option value="refuse" @selected($application->status === 'refuse')>Refusé</option>
                </select>
                <button type="submit" class="admin-btn admin-btn--small">Mettre à jour</button>
            </form>
        </div>
    </div>

    <div class="admin-card">
        <h3>Lettre de motivation</h3>
        <p class="admin-message-body">{{ $application->message }}</p>
    </div>
</div>
@endsection
