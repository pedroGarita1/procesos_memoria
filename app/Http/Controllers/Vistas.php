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
        $total_A1 = Procesos::where('nom_proceso','A1')->get()->sum('size_proceso');
        $total_B2 = Procesos::where('nom_proceso','B2')->get()->sum('size_proceso');
        $total_C3 = Procesos::where('nom_proceso','C3')->get()->sum('size_proceso');
        $total_D4 = Procesos::where('nom_proceso','D4')->get()->sum('size_proceso');
        $total_E5 = Procesos::where('nom_proceso','E5')->get()->sum('size_proceso');
        $total_F6 = Procesos::where('nom_proceso','F6')->get()->sum('size_proceso');
        $total_G7 = Procesos::where('nom_proceso','G7')->get()->sum('size_proceso');
        $total_H8 = Procesos::where('nom_proceso','H8')->get()->sum('size_proceso');
        $total_espera = Procesos::where('procesos_espera', 1)->get()->sum('size_proceso');
        return view('inicio', compact('titulo','procesos','total_activos','total_espera','total_A1','total_B2','total_C3','total_D4','total_E5','total_F6','total_G7','total_H8'));
    }
}
