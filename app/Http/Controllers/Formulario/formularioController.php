<?php

namespace App\Http\Controllers\Formulario;

use App\Http\Controllers\Controller;
use App\Models\Formulario;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class formularioController extends Controller
{
    public function index()
    {
        $listados = Formulario::all();

        return $listados;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        try {
            $datos = $request->validate(
                [
                    'users_id' => 'required',
                    'derechos_culturales_id' => 'required',
                    'nacs_id' => 'required',
                    'fecha' => 'required',
                    'hora_inicio' => 'required',
                    'hora_final' => 'required',
                    'experticias_id' => 'required',
                ]
            );

            $hora1 = strtotime($request['hora_inicio']);
            $hora2 = strtotime($request['hora_final']);

            if ($hora2 < $hora1) {
                return response()->json('La hora final debe ser mayor a la de inicio',500);
            }

            $datos = Formulario::create($datos);

            if ($datos) {
                $datos->update([
                    'consecutivo' => 'F'.$datos->id
                ]);
            }
            return response()->json('Creado con exito',200);

        } catch (QueryException $e) {
            return response()->json($e->getMessage(),500);
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
