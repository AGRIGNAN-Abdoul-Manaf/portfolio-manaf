@extends('layouts.app')

@section('content')
<section class="services">
    <div class="container">
        <h2 class="section-title">Mes Services</h2>
        <p class="section-subtitle">Des solutions sur mesure pour vos besoins numériques.</p>
        
        <div class="service-grid">
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-code"></i>
                </div>
                <h3>Développement Web</h3>
                <p>Création de sites vitrines, e-commerce et applications web puissantes avec Laravel.</p>
                <div class="service-badge">Moderne & Sécurisé</div>
            </div>
            
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3>Applications Mobiles</h3>
                <p>Applications performantes pour Android & iOS développées avec Flutter.</p>
                <div class="service-badge">Multi-plateforme</div>
            </div>
            
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-vote-yea"></i>
                </div>
                <h3>Systèmes de Vote</h3>
                <p>Applications de vote sécurisées intégrant des solutions de paiement mobile.</p>
                <div class="service-badge">Spécialisé</div>
            </div>
            
            <div class="service-card">
                <div class="service-icon">
                    <i class="fab fa-wordpress-simple"></i>
                </div>
                <h3>WordPress</h3>
                <p>Sites professionnels personnalisés pour entreprises et agences numériques.</p>
                <div class="service-badge">CMS Flexible</div>
            </div>
        </div>

        <h2 class="section-title">Compétences Techniques</h2>
        <div class="skills-showcase">
            <div class="skill-group">
                <h4><i class="fas fa-laptop-code"></i> Frontend</h4>
                <div class="skills-grid">
                    <span>HTML / CSS</span>
                    <span>JavaScript</span>
                    <span>React</span>
                </div>
            </div>
            
            <div class="skill-group">
                <h4><i class="fas fa-server"></i> Backend</h4>
                <div class="skills-grid">
                    <span>PHP</span>
                    <span>Laravel</span>
                    <span>MySQL</span>
                    <span>API REST</span>
                </div>
            </div>
            
            <div class="skill-group">
                <h4><i class="fas fa-mobile"></i> Mobile & Autres</h4>
                <div class="skills-grid">
                    <span>Flutter</span>
                    <span>Java / JavaFX</span>
                    <span>WordPress</span>
                    <span>Git</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
