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
        $location_items = [
            [
                'name' => 'Country Club',
                'distance' => '200m',
                'walkTime' => '3 min',
                'textClass' => 'location-info-list-item-text-two'
            ],
            [
                'name' => 'Verdulerías y Almacenes cercanos',
                'distance' => '750m',
                'walkTime' => '10 min',
                'textClass' => 'location-info-list-item-text-two'
            ],
            [
                'name' => 'Universidad del Desarrollo',
                'distance' => '800m',
                'walkTime' => '11 min',
                'textClass' => 'location-info-list-item-text-two'
            ],
            [
                'name' => 'Pub y Cafeterías - Calle Pedro de Valdivia',
                'distance' => '1km',
                'walkTime' => '15 min',
                'textClass' => 'location-info-list-item-text-two-chico'
            ],
            [
                'name' => 'supermercados',
                'distance' => '1.5k',
                'walkTime' => '20 min',
                'textClass' => 'location-info-list-item-text-two-mediano'
            ],
            [
                'name' => 'Clinica Sanatorio Alemán',
                'distance' => '1.5k',
                'walkTime' => '20 min',
                'textClass' => 'location-info-list-item-text-two-mediano'
            ],
            [
                'name' => 'Colegio Concepción',
                'distance' => '1.3k',
                'walkTime' => '18 min',
                'textClass' => 'location-info-list-item-text-two-mediano'
            ]
        ];
        $whatsapp_message = 'Hola, quiero cotizar departamentos en el Proyecto K.';
        $whatsapp_url = "https://wa.me/$this->whatsapp_number?text=" . urlencode($whatsapp_message);
        return view('home', [
            'location_items' => $location_items,
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
