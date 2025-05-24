<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactanosMailable;
use App\Mail\ContactanosReturnMailable;
use Exception;
use Illuminate\Mail\TransportException;
use Illuminate\Support\Facades\Log;
use App\Models\Client;

class ContactanosController extends Controller
{
    public function store(Request $request)
    {


        try {
            $request->validate([
                'correo' => 'required|email', // Valida que el correo sea válido
                'nombre' => 'required|string',
                'mensaje' => 'required|string',
                'phone' => 'nullable|string',
            ]);
            // Sanitizar los datos
            $request['nombre'] = htmlspecialchars($request['nombre']);
            $request['correo'] = htmlspecialchars($request['correo']);
            $request['mensaje'] = htmlspecialchars($request['mensaje']);
            $request['phone'] = htmlspecialchars($request['phone']);
            $ip = $request->ip(); // IP del cliente
            $userAgent = $request->header('User-Agent'); // User-Agent del cliente
            
            // Crear un nuevo cliente
            $client = Client::create($request->all());
            $client->ip = $ip;
            $client->user_agent = $userAgent;
            $client->referer = $request->headers->get('referer'); // Referer del cliente
            $client->save();

            // Enviar correo al administrador
            Mail::to(["carolina@quintajungepropiedades.cl", "cbelmar@bglarquitectos.cl", "paola@behumans.cl"])->send(new ContactanosMailable($request->all()));

            // Enviar correo de confirmación al usuario
            Mail::to($request['correo'])->send(new ContactanosReturnMailable());
            // Mensaje de éxito
            session()->flash('info', '¡Mensaje enviado con éxito!');
        } catch (TransportException $e) {
            //Captura errores relacionados con el transporte de correos
            return redirect()->back()->withErrors(['error' => 'No se pudo enviar el correo. Problema con el servidor de correo.']);
        } catch (\Exception $e) {
            // Captura cualquier otro error
            return redirect()->back()->withErrors(['error' => 'Ocurrió un error inesperado. Inténtalo nuevamente.']);
        }
        }
    }
}
