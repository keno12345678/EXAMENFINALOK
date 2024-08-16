<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //

    public function home(){
        return view('home')->with('mensaje','Bienvenido a la sección Home');
    }

    public function servicios(){
        return view('servicios')->with('mensaje','Bienvenido a la sección Servicios');
    }

    public function proyectos(){
        return view('proyectos')->with('mensaje','Bienvenido a la sección Proyectos');

    }

    public function blog(){
        return view('blog')->with('mensaje','Bienvenido a la sección Blog');
    }

    public function contacto(){
        return view('contacto')->with('mensaje','Bienvenido a la sección Contacto');
    }

}

