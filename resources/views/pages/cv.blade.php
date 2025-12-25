@extends('layouts.app')

@section('content')
<section class="cv">
    <div class="cv-container">
        <!-- Header / Profil -->
        <div class="cv-header">
            <h1>AGRIGNAN ABDOU MANAF</h1>
            <h2>Développeur Web & Web Mobile</h2>
        </div>

        <!-- Coordonnées -->
        <div class="cv-contact">
            <p><strong>Téléphone :</strong> 79 77 11 47</p>
            <p><strong>Email :</strong> agrignanmanaf6@gmail.com</p>
            <p><strong>Adresse :</strong> Lomé, Togo</p>
        </div>

        <!-- Profil -->
        <div class="cv-profile">
            <h3>Profil</h3>
            <p>
                Développeur web full stack junior, motivé par la conception d’applications web
                modernes, sécurisées et performantes. Bonne capacité d’adaptation et fort intérêt
                pour les projets à impact social et institutionnel.
            </p>
        </div>

        <!-- Compétences -->
        <div class="cv-skills">
            <h3>Compétences</h3>
            <div class="skills-grid">
                <span>HTML5</span>
                <span>CSS3</span>
                <span>JavaScript</span>
                <span>PHP</span>
                <span>Java</span>
                <span>Laravel (MVC)</span>
                <span>MySQL</span>
                <span>API REST</span>
                <span>Git/GitHub</span>
                <span>Responsive Design</span>
                <span>Notions React</span>
            </div>
        </div>

        <!-- Projets réalisés -->
        <div class="cv-projects">
            <h3>Projets Réalisés (2025)</h3>
            <ul>
                <li><strong>Application de vote en ligne (ReactJS & Laravel)</strong> – Application web de vote sans création de compte, gestion des candidats et votes multiples.</li>
                <li><strong>Application mobile Todo List</strong> – Application mobile connectée à une API pour la gestion complète des tâches.</li>
                <li><strong>Application de gestion de stock (Laravel)</strong> – Module CRUD complet pour la gestion des catégories.</li>
                <li><strong>Application de gestion de football (Laravel)</strong> – Gestion des joueurs, statistiques et scores des matchs.</li>
            </ul>
        </div>

        <!-- Formation -->
        <div class="cv-education">
            <h3>Formation</h3>
            <ul>
                <li>Développeur Web & Web Mobile – Académie Digitale Numérique du Golfe 1 (Togo)</li>
            </ul>
        </div>
    </div>
</section>
@endsection
<style>
    /* ===== CV Section ===== */
.cv-container {
    max-width: 900px;
    margin: 0 auto;
    background: #111827;
    padding: 40px;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.5);
}

.cv-header h1 {
    font-size: 2.8rem;
    color: #38bdf8;
    margin-bottom: 10px;
    text-align: center;
}

.cv-header h2 {
    font-size: 1.5rem;
    font-weight: 400;
    color: #e5e7eb;
    text-align: center;
    margin-bottom: 30px;
}

.cv-contact p {
    margin-bottom: 8px;
    color: #e5e7eb;
    text-align: center;
}

.cv-profile, .cv-skills, .cv-projects, .cv-education {
    margin-bottom: 30px;
}

.cv-profile h3, .cv-skills h3, .cv-projects h3, .cv-education h3 {
    font-size: 1.8rem;
    color: #38bdf8;
    margin-bottom: 15px;
    border-bottom: 2px solid #38bdf8;
    display: inline-block;
    padding-bottom: 5px;
}

.cv-profile p, .cv-projects p, .cv-education p, .cv-projects li {
    color: #e5e7eb;
    margin-bottom: 10px;
    line-height: 1.5;
}

.cv-skills .skills-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.cv-skills .skills-grid span {
    background: #1e293b;
    padding: 8px 15px;
    border-radius: 25px;
    transition: 0.3s;
}

.cv-skills .skills-grid span:hover {
    background: #38bdf8;
    color: #0f172a;
}

.cv-projects ul, .cv-education ul {
    padding-left: 20px;
}

.cv-projects li, .cv-education li {
    margin-bottom: 10px;
}

/* Responsive */
@media screen and (max-width: 768px) {
    .cv-container {
        padding: 20px;
    }

    .cv-header h1 {
        font-size: 2rem;
    }

    .cv-header h2 {
        font-size: 1.2rem;
    }
}

</style>