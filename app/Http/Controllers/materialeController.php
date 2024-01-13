<?php

namespace App\Http\Controllers;

use App\Models\catFamilia;
use App\Models\catUnidade;
use App\Models\materiale;
use Illuminate\Http\Request;

class materialeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materiales = materiale::get();
        return response()->json($materiales);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $catalogos = [
            "unidades" => catUnidade::get(),
            "familys" => catFamilia::get()
        ];

        return response()->json($catalogos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $code = uniqid();

        $validate = materiale::where("Descripcion", $request->Descripcion)
            ->where("Unidad", $request->Unidad)
            ->where("Familia", $request->Familia)
            ->where("Costo_Unitario", $request->Costo_Unitario)
            ->count();

        if ($validate  == 0) {
            $material =  new materiale;
            $material->Codigo = $code;
            $material->Descripcion = $request->Descripcion;
            $material->Unidad = $request->Unidad;
            $material->Familia = $request->Familia;
            $material->Costo_Unitario = $request->Costo_Unitario;
            $material->Ultimo_Costo = $request->Ultimo_Costo;

            $conf = $material->save();
        } else {
            $conf  = false;
        }

        return response()->json($conf);
    }

    /**
     * Display the specified resource.
     */
    public function show(materiale $materiale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(materiale $materiale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, materiale $materiale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(materiale $materiale)
    {
        $conf = $materiale->delete();
        return response()->json($conf);
    }
}
