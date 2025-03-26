<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Pais;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = Departamento::with('pais')->get();
        return view('departamento.index', compact('departamentos'));
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paises = Pais::all();
        return view('departamento.new', compact('paises'));
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'depa_nomb' => 'required|string|max:52',
            'pais_codi' => 'required|exists:tb_pais,pais_codi',
        ]);

        Departamento::create($request->all());
        return redirect()->route('departamento.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        $departamento = Departamento::findOrFail($id);
        $paises = Pais::all();
        return view('departamento.edit', compact('departamento', 'paises'));
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'depa_nomb' => 'required|string|max:52',
            'pais_codi' => 'required|exists:tb_pais,pais_codi',
        ]);

        $departamento = Departamento::findOrFail($id);
        $departamento->update($request->all());
        return redirect()->route('departamento.index');
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $departamento = Departamento::findOrFail($id);
        $departamento->delete();
        return redirect()->route('departamento.index');
    }
}
