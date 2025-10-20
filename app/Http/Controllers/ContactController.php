<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mensaje' => 'required|string',
        ]);

        // Enviar el correo
        Mail::raw($request->mensaje, function ($message) use ($request) {
            $message->from($request->email, $request->nombre)
                   ->to(env('MAIL_TO_ADDRESS', 'lean.cebreiros.a@gmail.com'))
                   ->subject('Nuevo mensaje de contacto - Portfolio');
        });

        return back()->with('success', '¡Mensaje enviado con éxito!');
    }
}