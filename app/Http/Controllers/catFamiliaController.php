<?php

namespace App\Http\Controllers;

use App\Models\catFamilia;
use Illuminate\Http\Request;

class catFamiliaController extends Controller
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
        $validate = catFamilia::where("Codigo", $request->Codigo)
            ->where("Descripcion", $request->Descripcion)
            ->count();
        if ($validate == 0) {
            $familia = new catFamilia;
            $familia->Codigo = $request->Codigo;
            $familia->Descripcion = $request->Descripcion;

            $conf = $familia->save();
        } else {
            $conf  = false;
        }

        return response()->json($conf);
    }

    /**
     * Display the specified resource.
     */
    public function show(catFamilia $catFamilia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(catFamilia $catFamilia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, catFamilia $catFamilia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(catFamilia $catFamilia)
    {
        //
    }
}
