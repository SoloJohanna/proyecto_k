<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactanosMailable;
use App\Mail\ContactanosReturnMailable;
use Exception;
use Swift_TransportException;

class ContactanosController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'correo' => 'required|email', // Valida que el correo sea válido
            'nombre' => 'required|string',
            'mensaje' => 'required|string',
        ]);

        try {
            // Enviar correo al administrador
            Mail::to("proyectokquintajunge@gmail.com")->send(new ContactanosMailable($request->all()));

            // Enviar correo de confirmación al usuario
            Mail::to($request['correo'])->send(new ContactanosReturnMailable());
            // Mensaje de éxito
            session()->flash('info', '¡Mensaje enviado con éxito!');
            return redirect()->back();
        } catch (Swift_TransportException $e) {
            Log::error('Error de transporte de correo: ' . $e->getMessage());
            // Captura errores relacionados con el transporte de correos
            return redirect()->back()->withErrors(['error' => 'No se pudo enviar el correo. Problema con el servidor de correo.']);
        } catch (\Exception $e) {
            Log::error('Error de transporte de correo: ' . $e->getMessage());
            // Captura cualquier otro error
            return redirect()->back()->withErrors(['error' => 'Ocurrió un error inesperado. Inténtalo nuevamente.']);
        }
    }
}
