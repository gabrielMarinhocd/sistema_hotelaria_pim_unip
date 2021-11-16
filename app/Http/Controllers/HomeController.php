<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function admin()
    {
        return 'Yeahh autenticado como admin';
    }

    public function atendente(){
       return 'Yeahh autenticado como atendente';
    }

    public function hospede(){
        return 'Yeahh autenticado como hospede';
    }

    public function gerente(){
        return 'Yeahh autenticado como gerente';
    }

}
