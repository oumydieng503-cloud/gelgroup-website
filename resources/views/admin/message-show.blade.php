@extends('admin.layout')

@section('title', 'Message — ' . $message->name)

@section('content')
<div class="admin-page">
    <a href="{{ route('admin.dashboard') }}" class="admin-back">&larr; Retour au tableau de bord</a>

    <h1>{{ $message->name }}</h1>
    <p class="admin-subtitle">{{ $message->subject }} — {{ $message->created_at->format('d/m/Y à H:i') }}</p>

    <div class="admin-detail-grid">
        <div class="admin-card">
            <h3>Coordonnées</h3>
            <p><strong>Email :</strong> <a href="mailto:{{ $message->email }}">{{ $message->email }}</a></p>
            <p><strong>Téléphone :</strong> {{ $message->phone ?: 'Non renseigné' }}</p>
        </div>
    </div>

    <div class="admin-card">
        <h3>Message</h3>
        <p class="admin-message-body">{{ $message->message }}</p>
    </div>
</div>
@endsection
