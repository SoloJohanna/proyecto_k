<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactanosMailable;
use App\Mail\ContactanosReturnMailable;

class ContactanosController extends Controller
{
    public function store(Request $request){
        Mail::to("carolina@quintajungepropiedades.cl")->send(new ContactanosMailable($request->all()));
        Mail::to($request['correo'])->send(new ContactanosReturnMailable());
        session()->flash('info', 'mensaje enviado con éxito!');
        return redirect()->back();
    }
}
