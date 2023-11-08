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

        $total_A1 = Procesos::where('nom_proceso','A1')->where('procesos_activos',1)->get()->sum('size_proceso');
        $total_B2 = Procesos::where('nom_proceso','B2')->where('procesos_activos',1)->get()->sum('size_proceso');
        $total_C3 = Procesos::where('nom_proceso','C3')->where('procesos_activos',1)->get()->sum('size_proceso');
        $total_D4 = Procesos::where('nom_proceso','D4')->where('procesos_activos',1)->get()->sum('size_proceso');
        $total_E5 = Procesos::where('nom_proceso','E5')->where('procesos_activos',1)->get()->sum('size_proceso');
        $total_F6 = Procesos::where('nom_proceso','F6')->where('procesos_activos',1)->get()->sum('size_proceso');
        $total_G7 = Procesos::where('nom_proceso','G7')->where('procesos_activos',1)->get()->sum('size_proceso');
        $total_H8 = Procesos::where('nom_proceso','H8')->where('procesos_activos',1)->get()->sum('size_proceso');
        
        $A1 = Procesos::where('nom_proceso','A1')->where('procesos_activos',1)->first() != null ? Procesos::where('nom_proceso','A1')->first() : 'no hay';
        $B2 = Procesos::where('nom_proceso','B2')->where('procesos_activos',1)->first() != null ? Procesos::where('nom_proceso','B2')->first() : 'no hay';
        $C3 = Procesos::where('nom_proceso','C3')->where('procesos_activos',1)->first() != null ? Procesos::where('nom_proceso','C3')->first() : 'no hay';
        $D4 = Procesos::where('nom_proceso','D4')->where('procesos_activos',1)->first() != null ? Procesos::where('nom_proceso','D4')->first() : 'no hay';
        $E5 = Procesos::where('nom_proceso','E5')->where('procesos_activos',1)->first() != null ? Procesos::where('nom_proceso','E5')->first() : 'no hay';
        $F6 = Procesos::where('nom_proceso','F6')->where('procesos_activos',1)->first() != null ? Procesos::where('nom_proceso','F6')->first() : 'no hay';
        $G7 = Procesos::where('nom_proceso','G7')->where('procesos_activos',1)->first() != null ? Procesos::where('nom_proceso','G7')->first() : 'no hay';
        $H8 = Procesos::where('nom_proceso','H8')->where('procesos_activos',1)->first() != null ? Procesos::where('nom_proceso','H8')->first() : 'no hay';
        
        $total_espera = Procesos::where('procesos_espera', 1)->get()->sum('size_proceso');
        return view('inicio', compact('titulo','procesos','total_activos','total_espera','total_A1','total_B2','total_C3','total_D4','total_E5','total_F6','total_G7','total_H8',
                                        'A1','B2','C3','D4','E5','F6','G7','H8'));
    }
}
