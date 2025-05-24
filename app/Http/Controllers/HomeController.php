<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public $whatsapp_number;

    public function __construct()
    {
        $this->whatsapp_number = env('WHATSAPP_NUMBER', '56991288701');
    }


    public function index()
    {
        $whatsapp_message = 'Hola, quiero cotizar departamentos en el Proyecto K.';
        $whatsapp_url = "https://wa.me/$this->whatsapp_number?text=" . urlencode($whatsapp_message);
        return view('home', [
            'whatsapp_url' => $whatsapp_url,
        ]);
    }

    public function planta_k1()
    {
        $whatsapp_message = 'Hola, quiero cotizar departamentos en el Proyecto K modelo K1.';
        $whatsapp_url = "https://wa.me/$this->whatsapp_number?text=" . urlencode($whatsapp_message);
        return view('planta_k1', [
            'whatsapp_url' => $whatsapp_url,
        ]);
    }
    public function planta_k2()
    {
        $whatsapp_message = 'Hola, quiero cotizar departamentos en el Proyecto K modelo K2.';
        $whatsapp_url = "https://wa.me/$this->whatsapp_number?text=" . urlencode($whatsapp_message);
        return view('planta_k2', [
            'whatsapp_url' => $whatsapp_url,
        ]);
    }
    public function planta_k3()
    {
        $whatsapp_message = 'Hola, quiero cotizar departamentos en el Proyecto K modelo K3.';
        $whatsapp_url = "https://wa.me/$this->whatsapp_number?text=" . urlencode($whatsapp_message);
        return view('planta_k3', [
            'whatsapp_url' => $whatsapp_url,
        ]);
    }
    public function contactanos()
    {
        return view('contactanos');
    }
}
