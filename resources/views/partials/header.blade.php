<header class="site-header">
    <div class="header-inner">
        <a href="{{ route('home') }}" class="header-logo">
            <img src="{{ asset('images/logo.png') }}" alt="GEL Group">
        </a>

        <nav class="header-nav-wrap" aria-label="Navigation principale">
            <ul class="header-nav">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'is-active' : '' }}">
                        Accueil
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('secteurs') }}" class="nav-link {{ request()->routeIs('secteurs') ? 'is-active' : '' }}">
                        Secteurs
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('carrieres') }}" class="nav-link {{ request()->routeIs('carrieres') ? 'is-active' : '' }}">
                        Carrières
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'is-active' : '' }}">
                        Contact
                    </a>
                </li>
            </ul>
        </nav>

        <div class="header-actions">
            <div class="header-flags" aria-hidden="true">
                <span title="Sénégal">SN</span>
                <span class="flag-sep">|</span>
                <span title="Canada">CA</span>
            </div>
            <a href="{{ route('contact') }}" class="header-cta">Demander un devis</a>
            <button class="nav-toggle" type="button" aria-label="Ouvrir le menu" aria-expanded="false">
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>
</header>
