<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'nombre'  => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'asunto'  => 'required|string|max:255',
            'mensaje' => 'required|string',
        ]);

        $body = "Nuevo mensaje desde el portfolio:\n\n" .
                "Nombre: {$validated['nombre']}\n" .
                "Email: {$validated['email']}\n" .
                "Asunto: {$validated['asunto']}\n\n" .
                "Mensaje:\n{$validated['mensaje']}\n";

        try {
            Mail::raw($body, function ($message) use ($validated) {
                // Usamos el remitente de la app para evitar rechazos de SPF/DMARC
                $fromAddress = env('MAIL_FROM_ADDRESS');
                $fromName    = env('MAIL_FROM_NAME', config('app.name'));

                if ($fromAddress) {
                    $message->from($fromAddress, $fromName);
                }

                $message->to(config('mail.to_address'))
                        ->replyTo($validated['email'], $validated['nombre'])
                        ->subject('Contacto: ' . $validated['asunto']);
            });

            return redirect()->to(route('home') . '#contacto')
                ->with('success', 'Mensaje enviado correctamente, me pondré en contacto con vos brevemente.');
        } catch (\Throwable $e) {
            return redirect()->to(route('home') . '#contacto')
                ->with('error', 'No se pudo enviar el mensaje. Inténtalo de nuevo.');
        }
    }
}
