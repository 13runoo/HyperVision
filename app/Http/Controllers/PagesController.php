<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller

{


    public function index()
    {
        return view('listaDePlacasDeVideo');

    }

    public function Home()
    {
        return view("home");
    }

    public function showlogin()
    {
        return view('login');
    }

    public function edit()
    {
        return view('edicao');
    }

    public function register()
    {
        return view('cadastro');
    }

    public function list()
    {
        return view ('listaUsuarios');
    }
}


