@extends('layouts.app')

@section('content')
<section class="contact">
    <div class="container">
        <h2 class="section-title">Prenons contact</h2>
        <p class="section-subtitle">Une idée ? Un projet ? N'hésitez pas à me contacter.</p>
        
        <div class="contact-wrapper">
            <!-- Informations de contact -->
            <div class="contact-info-cards">
                <div class="info-card">
                    <div class="icon-box">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="info-details">
                        <h3>Téléphone</h3>
                        <p>+228 79 77 11 47</p>
                    </div>
                </div>

                <div class="info-card">
                    <div class="icon-box">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="info-details">
                        <h3>Email</h3>
                        <p>agrignanmanaf6@gmail.com</p>
                    </div>
                </div>

                <div class="info-card">
                    <div class="icon-box">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="info-details">
                        <h3>Localisation</h3>
                        <p>Lomé, Togo</p>
                    </div>
                </div>
            </div>

            <!-- Formulaire de contact -->
            <div class="contact-form-container">
                @if(session('success'))
                    <div class="alert alert-success">
                        <i class="fas fa-check-circle"></i> {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger">
                        <i class="fas fa-exclamation-circle"></i> {{ session('error') }}
                    </div>
                @endif

                <form action="{{ route('contact.send') }}" method="POST" class="modern-form">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" id="name" placeholder=" " required>
                        <label for="name">Votre nom complet</label>
                    </div>
                    
                    <div class="form-group">
                        <input type="email" name="email" id="email" placeholder=" " required>
                        <label for="email">Votre adresse email</label>
                    </div>
                    
                    <div class="form-group">
                        <textarea name="message" id="message" rows="5" placeholder=" " required></textarea>
                        <label for="message">Votre message</label>
                    </div>
                    
                    <button type="submit" class="submit-btn">
                        <span>Envoyer le message</span>
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
