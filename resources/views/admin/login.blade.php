@extends('admin.layout')

@section('title', 'Connexion')

@section('content')
<div class="admin-login">
    <div class="admin-login__card">
        <h1>Administration</h1>
        <p>GEL Group — espace de gestion</p>

        <form method="POST" action="{{ route('admin.login.submit') }}">
            @csrf
            <div class="admin-field">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required autofocus>
                @error('password')<span class="admin-error">{{ $message }}</span>@enderror
            </div>
            <button type="submit" class="admin-btn">Se connecter</button>
        </form>
    </div>
</div>
@endsection
