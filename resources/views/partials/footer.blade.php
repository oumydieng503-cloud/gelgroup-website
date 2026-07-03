<footer class="site-footer">
    <div class="container footer-grid">
        <div class="footer-col">
            <img src="{{ asset('images/logo.png') }}" alt="GEL Group" class="footer-logo">
            <p>Global Engineering & Logistics — votre partenaire au Sénégal et au Canada.</p>
        </div>
        <div class="footer-col">
            <h4>Navigation</h4>
            <ul class="footer-links">
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li><a href="{{ route('secteurs') }}">Secteurs</a></li>
                <li><a href="{{ route('carrieres') }}">Carrières</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>Contact</h4>
            <ul class="footer-links">
                <li><a href="mailto:medoune0701@gmail.com">medoune0701@gmail.com</a></li>
                <li><a href="https://wa.me/221774932200" target="_blank" rel="noopener">SN · +221 77 493 22 00</a></li>
                <li><a href="tel:+221773781251">SN · +221 77 378 12 51</a></li>
                <li><a href="tel:+12635669051">CA · +1 (263) 566-9051</a></li>
                <li>Almadies 2, Dakar</li>
            </ul>
            <h4 class="footer-social-title">Réseaux</h4>
            <ul class="footer-links">
                <li>
                    <a href="https://www.tiktok.com/@conception_construction1" target="_blank" rel="noopener noreferrer">
                        TikTok · @conception_construction1
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container footer-bottom">
        <p>&copy; {{ date('Y') }} GEL Group. Tous droits réservés.</p>
    </div>
</footer>
