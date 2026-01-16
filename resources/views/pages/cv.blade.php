@extends('layouts.app')

@section('content')
<section class="cv">
    <div class="container">
        <div class="cv-layout">
            <!-- Sidebar: Profil & Infos -->
            <aside class="cv-sidebar">
                <div class="glass-card profile-card">
                    <div class="profile-img-container">
                        <!-- Image placeholder if needed, otherwise just name -->
                        <div class="initials">AM</div>
                    </div>
                    <h1>AGRIGNAN Abdou Manaf</h1>
                    <p class="tagline">Développeur Web & Web Mobile</p>
                    
                    <div class="contact-links">
                        <div class="contact-item">
                            <i class="fas fa-phone-alt"></i>
                            <span>+228 79 77 11 47</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <span>agrignanmanaf6@gmail.com</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Lomé, Togo</span>
                        </div>
                    </div>
                </div>

                <div class="glass-card skills-card">
                    <h3><i class="fas fa-tools"></i> Compétences</h3>
                    <div class="skills-categories">
                        <div class="skill-category">
                            <h4>Frontend</h4>
                            <div class="skill-tags">
                                <span>HTML5</span>
                                <span>CSS3</span>
                                <span>JavaScript</span>
                                <span>React</span>
                            </div>
                        </div>
                        <div class="skill-category">
                            <h4>Backend</h4>
                            <div class="skill-tags">
                                <span>PHP</span>
                                <span>Laravel</span>
                                <span>Java</span>
                            </div>
                        </div>
                        <div class="skill-category">
                            <h4>Outils</h4>
                            <div class="skill-tags">
                                <span>Git/GitHub</span>
                                <span>MySQL</span>
                                <span>API REST</span>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Main Content: Experience & Education -->
            <main class="cv-main-content">
                <div class="glass-card info-section">
                    <h3><i class="fas fa-user"></i> Mon Profil</h3>
                    <p>
                        Développeur web full stack junior, motivé par la conception d’applications web
                        modernes, sécurisées et performantes. Bonne capacité d’adaptation et fort intérêt
                        pour les projets à impact social et institutionnel.
                    </p>
                </div>

                <div class="glass-card timeline-section">
                    <h3><i class="fas fa-briefcase"></i> Projets Réalisés</h3>
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-date">2025</div>
                            <div class="timeline-content">
                                <h4>Application de vote en ligne</h4>
                                <span class="tech-stack">ReactJS & Laravel</span>
                                <p>Application web de vote sans création de compte, avec gestion des candidats et votes multiples.</p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-date">2025</div>
                            <div class="timeline-content">
                                <h4>Application mobile Todo List</h4>
                                <span class="tech-stack">React Native / API</span>
                                <p>Gestion complète des tâches connectée à une API REST pour la synchronisation en temps réel.</p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-date">2025</div>
                            <div class="timeline-content">
                                <h4>Gestion de stock</h4>
                                <span class="tech-stack">Laravel (MVC)</span>
                                <p>Module CRUD complet pour la gestion de stocks et catégories d'articles.</p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-date">2025</div>
                            <div class="timeline-content">
                                <h4>Gestion de football</h4>
                                <span class="tech-stack">Laravel</span>
                                <p>Système de gestion des joueurs, statistiques et scores pour championnats locaux.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="glass-card education-section">
                    <h3><i class="fas fa-graduation-cap"></i> Formation</h3>
                    <div class="education-item">
                        <div class="edu-dot"></div>
                        <div class="edu-content">
                            <h4>Développeur Web & Web Mobile</h4>
                            <p>Académie Digitale Numérique du Golfe 1 (Togo)</p>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</section>
@endsection
