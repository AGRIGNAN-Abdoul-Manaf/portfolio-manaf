<?php



namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validation
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        try {
            // Envoi de l'email
            Mail::to('agrignanmanaf6@gmail.com')->send(new ContactMail(
                $data['name'],
                $data['email'],
                $data['message']
            ));

            return back()->with('success', 'Votre message a été envoyé avec succès !');
        } catch (\Exception $e) {
            // En cas d'erreur de configuration mail
            return back()->with('error', 'Désolé, une erreur est survenue lors de l\'envoi. Veuillez réessayer plus tard.');
        }
    }
}
