@extends('layouts.app')

@section('content')
<section class="services">
    <h2 class="section-title">Mes Services</h2>
    <div class="service-grid">
        <div class="service-card">
            <h3>Développement Web</h3>
            <p>Sites vitrines, e-commerce, applications Laravel.</p>
        </div>
        <div class="service-card">
            <h3>Applications mobiles</h3>
            <p>Applications Flutter Android & iOS connectées à des API.</p>
        </div>
        <div class="service-card">
            <h3>Systèmes de vote</h3>
            <p>Applications de vote en ligne avec paiement mobile.</p>
        </div>
        <div class="service-card">
            <h3>WordPress</h3>
            <p>Sites professionnels pour entreprises et agences.</p>
        </div>
    </div>

    <h2 class="section-title">Compétences</h2>
    <div class="skills-grid">
        <span>HTML / CSS</span>
        <span>PHP</span>
        <span>Laravel</span>
        <span>MySQL</span>
        <span>WordPress</span>
        <span>React</span>
        <span>Flutter</span>
        <span>Java (bases)</span>
        <span>JavaFX</span>
        <span>API REST</span>
    </div>
</section>
@endsection
