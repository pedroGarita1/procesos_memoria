<?php

namespace App\Http\Controllers;

use App\Models\Procesos;
use Illuminate\Http\Request;

class Proceso_memoria extends Controller
{
    public function store(Request $request){
        $validate = new Validate_controller();
        $validate->proceso_store_validate($request);
        $procesos = new Procesos();
        $procesos->nom_proceso = $request->nom_proceso;
        $procesos->size_proceso = $request->size_proceso;
        $procesos->procesos_activos = 1;
        $procesos->save();
        return redirect()->back();
    }
    public function update_puase($id){
        $procesos = Procesos::find($id);
        $procesos->procesos_activos = 0;
        $procesos->procesos_espera = 1;
        $procesos->save();
        return redirect()->back();
    }
    public function update_activo($id){
        $procesos = Procesos::find($id);
        $procesos->procesos_activos = 1;
        $procesos->procesos_espera = 0;
        $procesos->save();
        return redirect()->back();
    }
    public function destroy($id){
        $procesos = Procesos::find($id);
        $procesos->delete();
        return redirect()->back();
    }
}
