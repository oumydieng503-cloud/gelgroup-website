@extends('admin.layout')

@section('title', 'Tableau de bord')

@section('content')
<div class="admin-page">
    <h1>Tableau de bord</h1>
    <p class="admin-subtitle">Gérez les candidatures et les messages de contact.</p>

    <div class="admin-stats">
        <div class="admin-stat">
            <strong>{{ $applications->count() }}</strong>
            <span>Candidatures</span>
        </div>
        <div class="admin-stat">
            <strong>{{ $applications->where('status', 'en_attente')->count() }}</strong>
            <span>En attente</span>
        </div>
        <div class="admin-stat">
            <strong>{{ $messages->count() }}</strong>
            <span>Messages contact</span>
        </div>
    </div>

    <section class="admin-section">
        <h2>Candidatures emploi</h2>
        @if($applications->isEmpty())
            <p class="admin-empty">Aucune candidature pour le moment.</p>
        @else
        <div class="admin-table-wrap">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Nom</th>
                        <th>Poste</th>
                        <th>Expérience</th>
                        <th>Statut</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($applications as $app)
                    <tr>
                        <td>{{ $app->created_at->format('d/m/Y') }}</td>
                        <td>{{ $app->name }}</td>
                        <td>{{ $app->position }}</td>
                        <td>{{ $app->experience ?: '—' }}</td>
                        <td><span class="admin-badge admin-badge--{{ $app->status }}">{{ str_replace('_', ' ', $app->status) }}</span></td>
                        <td><a href="{{ route('admin.applications.show', $app) }}" class="admin-link">Voir</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </section>

    <section class="admin-section">
        <h2>Messages contact</h2>
        @if($messages->isEmpty())
            <p class="admin-empty">Aucun message pour le moment.</p>
        @else
        <div class="admin-table-wrap">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Nom</th>
                        <th>Sujet</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($messages as $msg)
                    <tr>
                        <td>{{ $msg->created_at->format('d/m/Y') }}</td>
                        <td>{{ $msg->name }}</td>
                        <td>{{ $msg->subject }}</td>
                        <td>{{ $msg->email }}</td>
                        <td><a href="{{ route('admin.messages.show', $msg) }}" class="admin-link">Voir</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </section>
</div>
@endsection
