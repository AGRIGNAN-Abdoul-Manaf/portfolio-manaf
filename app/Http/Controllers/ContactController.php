<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validation simple
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Pour tester, juste rediriger avec un message de succès
        return back()->with('success', 'Message envoyé avec succès !');
    }
}
