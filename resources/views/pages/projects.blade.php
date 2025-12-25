@extends('layouts.app')

@section('content')
<section class="projects">
    <h2 class="section-title">Mes Projets</h2>
    <div class="projects-grid">
        <div class="project-card">
            <h3>Application de vote en ligne</h3>
            <span>Laravel • React • Flutter</span>
            <p>Application web & mobile avec paiement TMoney et Flooz.</p>
            <a href="#">Voir le projet</a>
        </div>

        <div class="project-card">
            <h3>Site d’agence marketing</h3>
            <span>WordPress</span>
            <p>Site vitrine WordPress pour une agence digitale.</p>
            <a href="#">Voir le projet</a>
        </div>

        <div class="project-card">
            <h3>Gestion de stock</h3>
            <span>Laravel • MySQL</span>
            <p>Application CRUD de gestion de catégories.</p>
            <a href="#">Voir le projet</a>
        </div>

        <div class="project-card">
            <h3>Applications mobiles</h3>
            <span>Flutter • API</span>
            <p>Todo List et Quiz connectés à une API.</p>
            <a href="#">Voir le projet</a>
        </div>
    </div>
</section>
@endsection
