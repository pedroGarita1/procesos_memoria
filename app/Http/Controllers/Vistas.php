<?php

namespace App\Http\Controllers;

use App\Models\Procesos;
use Illuminate\Http\Request;

class Vistas extends Controller
{
    public function index(){
        $titulo = 'inicio';
        $procesos = Procesos::all();
        $total_activos = Procesos::where('procesos_activos', 1 )->get()->sum('size_proceso');
        $total_espera = Procesos::where('procesos_espera', 1)->get()->sum('size_proceso');
        return view('inicio', compact('titulo','procesos','total_activos','total_espera'));
    }
}
