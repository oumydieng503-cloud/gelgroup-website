<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin') — GEL Group</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body class="admin-body">
    @if(session('admin_authenticated'))
    <header class="admin-header">
        <div class="admin-header__inner">
            <a href="{{ route('admin.dashboard') }}" class="admin-brand">GEL Group — Admin</a>
            <div class="admin-header__actions">
                <a href="{{ route('home') }}" target="_blank">Voir le site</a>
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit">Déconnexion</button>
                </form>
            </div>
        </div>
    </header>
    @endif

    <main class="admin-main">
        @if(session('success'))
            <div class="admin-alert admin-alert--success">{{ session('success') }}</div>
        @endif
        @yield('content')
    </main>
</body>
</html>
