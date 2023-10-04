<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Validate_controller extends Controller
{
    public function proceso_store_validate($request){
        $request->validate(
            [
                'nom_proceso' => 'required|not_in:0',
                'size_proceso' => 'required|not_in:0'
            ],
            [
                'nom_proceso.required' => 'El campo "Nombre del proceso", es requerido',
                'size_proceso.required' => 'El campo "Tamaño del proceso", es requerido',
                'size_proceso.not_in' => 'Tienes que elegir una opcion',
                'nom_proceso.not_in' => 'Tienes que elegir una opcion'
            ]
        );
    }
}
