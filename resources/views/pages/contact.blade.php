@extends('layouts.app')

@section('content')
<section class="contact">
    <h2 class="section-title">Contactez-moi</h2>
    <div class="contact-container">
        <!-- Informations -->
        <div class="contact-info">
            <p><i class="fas fa-phone"></i> 79 77 11 47</p>
            <p><i class="fas fa-envelope"></i> agrignanmanaf6@gmail.com</p>
            <p><i class="fas fa-map-marker-alt"></i> Lomé, Togo</p>
        </div>

        <!-- Formulaire -->
        <div class="contact-form">
            <form action="{{ route('contact.send') }}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Votre nom" required>
                <input type="email" name="email" placeholder="Votre email" required>
                <textarea name="message" rows="5" placeholder="Votre message" required></textarea>
                <button type="submit">Envoyer le message</button>
            </form>
        </div>
    </div>
</section>
@endsection
