<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGRIGNAN Abdou Manaf | Développeur Web & Mobile</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <!-- Header / Navbar -->
    <header>
        <div class="nav-container">
            <div class="logo">
                <a href="{{ route('home') }}">Manaf<span>Dev</span></a>
            </div>
            <nav id="nav-menu">
                <a href="{{ route('home') }}">Accueil</a>
                <a href="{{ route('services') }}">Services</a>
                <a href="{{ route('projects') }}">Projets</a>
                <a href="{{ route('cv') }}">CV</a>
                <a href="{{ route('contact') }}">Contact</a>
            </nav>
            <div class="menu-toggle" id="mobile-menu">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <!-- Contenu principal -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; {{ date('Y') }} AGRIGNAN Abdou Manaf. Tous droits réservés.</p>
    </footer>

    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
