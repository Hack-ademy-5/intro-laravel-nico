<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function aboutUs(){
        // sacamos todos los componentes del team de nuestra empresa
        $equipo = [
            "Nico",
            "Gracia",
            "Nicola",
            "Nahu",
            "Mario"
        ];
        return view('about',['personas'=>$equipo]);
    }

    public function where()
    {
        return view('where');
    }

    public function who()
    {
        return view('who');
    }

    public function contact()
    {
        return view('contact');
    }
}
