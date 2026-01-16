@extends('layouts.app')

@section('content')
<section class="projects">
    <div class="container">
        <h2 class="section-title">Mes Réalisations</h2>
        <p class="section-subtitle">Découvrez une sélection de mes projets les plus récents et passionnants.</p>
        
        <div class="projects-grid">
            <!-- Projet 1 -->
            <div class="project-card">
                <div class="project-image">
                    <div class="project-overlay">
                        <i class="fas fa-external-link-alt"></i>
                    </div>
                </div>
                <div class="project-info">
                    <div class="tech-badges">
                        <span class="badge">Laravel</span>
                        <span class="badge">React</span>
                        <span class="badge">Flutter</span>
                    </div>
                    <h3>Application de vote en ligne</h3>
                    <p>Système de vote sécurisé avec intégration de paiements mobiles TMoney et Flooz.</p>
                    <a href="#" class="project-link">
                        <span>Détails du projet</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Projet 2 -->
            <div class="project-card">
                <div class="project-image">
                    <div class="project-overlay">
                        <i class="fas fa-external-link-alt"></i>
                    </div>
                </div>
                <div class="project-info">
                    <div class="tech-badges">
                        <span class="badge">WordPress</span>
                    </div>
                    <h3>Site d’agence marketing</h3>
                    <p>Création d'un site vitrine haut de gamme pour une agence de marketing digital.</p>
                    <a href="#" class="project-link">
                        <span>Détails du projet</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Projet 3 -->
            <div class="project-card">
                <div class="project-image">
                    <div class="project-overlay">
                        <i class="fas fa-external-link-alt"></i>
                    </div>
                </div>
                <div class="project-info">
                    <div class="tech-badges">
                        <span class="badge">Laravel</span>
                        <span class="badge">MySQL</span>
                    </div>
                    <h3>Gestion de stock</h3>
                    <p>Interface intuitive pour la gestion intelligente des inventaires et des catégories.</p>
                    <a href="#" class="project-link">
                        <span>Détails du projet</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Projet 4 -->
            <div class="project-card">
                <div class="project-image">
                    <div class="project-overlay">
                        <i class="fas fa-external-link-alt"></i>
                    </div>
                </div>
                <div class="project-info">
                    <div class="tech-badges">
                        <span class="badge">Flutter</span>
                        <span class="badge">API REST</span>
                    </div>
                    <h3>Applications mobiles</h3>
                    <p>Collection d'applications utilitaires (Todo, Quiz) connectées en temps réel.</p>
                    <a href="#" class="project-link">
                        <span>Détails du projet</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
