<?php

namespace App\Http\Controllers;

use App\Models\catUnidade;
use Illuminate\Http\Request;

class catUnidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = catUnidade::where("Codigo", $request->Codigo)
            ->where("Descripcion", $request->Descripcion)
            ->count();
        if ($validate == 0) {
            $unidad = new catUnidade;
            $unidad->Codigo = $request->Codigo;
            $unidad->Descripcion = $request->Descripcion;

            $conf = $unidad->save();
        } else {
            $conf  = false;
        }

        return response()->json($conf);
    }

    /**
     * Display the specified resource.
     */
    public function show(catUnidade $catUnidade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(catUnidade $catUnidade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, catUnidade $catUnidade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(catUnidade $catUnidade)
    {
        //
    }
}
