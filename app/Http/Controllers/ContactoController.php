<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoMail;

class ContactoController extends Controller
{
    public function store(Request $request)
    {
        // Validación de datos
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'asunto' => 'required|string|max:255',
            'mensaje' => 'required|string|max:5000',
        ], [
            'nombre.required' => 'El nombre es obligatorio',
            'email.required' => 'El email es obligatorio',
            'email.email' => 'El email debe ser válido',
            'asunto.required' => 'El asunto es obligatorio',
            'mensaje.required' => 'El mensaje es obligatorio',
        ]);

        try {
            // Enviar email (opcional - puedes comentar esto si no tienes configurado el mail)
            // Mail::to('tu-email@ejemplo.com')->send(new ContactoMail($validated));

            // También puedes guardar en base de datos (opcional)
            // Contacto::create($validated);

            return redirect()->back()->with('success', '¡Mensaje enviado correctamente! Te contactaré pronto.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Hubo un error al enviar el mensaje. Por favor intenta nuevamente.');
        }
    }
}