<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactanosMailable;
use App\Mail\ContactanosReturnMailable;
use Exception;
use Illuminate\Mail\TransportException;
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
                'telefono' => 'nullable|string',
            ]);
            // Crear un nuevo cliente con sanitizar los datos
            $client = Client::create([
                'nombre' => htmlspecialchars($request['nombre']),
                'correo' => htmlspecialchars($request['correo']),
                'telefono' => htmlspecialchars($request['telefono']),
                'mensaje' => htmlspecialchars($request['mensaje']),
                'ip' => $request->ip(), // IP del cliente
                'user_agent' => $request->header('User-Agent'), // User-Agent del cliente
                'referer' => $request->headers->get('referer') // Referer del cliente
            ]);
            $client->save();
            if (env('APP_ENV') === 'production') {
                //Enviar correo al administrador
                Mail::to(["carolina@quintajungepropiedades.cl", "cbelmar@bglarquitectos.cl", "paola@behumans.cl"])->send(new ContactanosMailable($request->all()));
                //Enviar correo de retorno al usuario
                Mail::to($request['correo'])->send(new ContactanosReturnMailable());
            } else {
                //Enviar mails a desarrollador solo si no es producción
                Mail::to(env('MAIL_DEV'))->send(new ContactanosMailable($request->all()));
                Mail::to(env('MAIL_DEV'))->send(new ContactanosReturnMailable());
            }
            // Mensaje de éxito
            session()->flash('info', '¡Mensaje enviado con éxito!');
            return redirect()->back();
        } catch (TransportException $e) {
            //Captura errores relacionados con el transporte de correos
            return redirect()->back()->withErrors(['error' => 'No se pudo enviar el correo. Problema con el servidor de correo.']);
        } catch (\Exception $e) {
            // Captura cualquier otro error
            return redirect()->back()->withErrors(['error' => 'Ocurrió un error inesperado. Inténtalo nuevamente.']);
        }
    }

    public function index()
    {
        $clientes = Client::paginate(10); // Paginación de 10 contactos por página
        return view('dashboard', [
            'title' => 'Listado de leads/clientes',
            'clientes' => $clientes,
        ]);
    }
}
