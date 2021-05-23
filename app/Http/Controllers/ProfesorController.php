<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profesores=Profesor::orderBy('nombre')->orderBy('localidad')->paginate(5);
        return view('profesores.index', compact('profesores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profesores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //1.- Validamos
        $request->validate([
            'nombre'=>['required','string', 'min:3','max:50','unique:profesores,nombre'],
            'apellidos'=>['required','string','min:10','max:90'],
            'localidad'=>['requiered','string','min:3','max:50'],
            'email'=>['required', 'string','min:5','max:60','unique:profesores,email']
        ]);
        //2.- Procesador
        try{
            Profesor::create($request->all());
        }catch(\Exception $ex){
            return redirect()->route('profesores.index')->with("mensaje", "Error con la BBDD".$ex->getMessage());
        }
        return redirect()->route('profesores.index')->with("mensaje", "Profesor creado");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function show(Profesor $profesore)
    {
        return view('profesores.mostrar', compact('profesore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function edit(Profesor $profesore)
    {
        return view('profesores.edit', compact('profesore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profesor $profesore)
    {
         //1.- Validamos
         $request->validate([
            'nombre'=>['required','string', 'min:3','max:50'],
            'apellidos'=>['required','string','min:10','max:90'],
            'localidad'=>['required','string','min:3','max:50'],
            'email'=>['required','string','min:5','max:60','unique:profesors,email,'.$profesore->id],
        ]);
        //2.- Procesador
        try{
            $profesore->update($request->all());
        }catch(\Exception $ex){
            return redirect()->route('profesores.index')->with("mensaje", "Error con la BBDD".$ex->getMessage());
        }
        return redirect()->route('profesores.index')->with("mensaje", "Profesor actualizado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profesor $profesore)
    {
        try{
            $profesore->delete();
        }catch(\Exception $ex){
            return redirect()->route('profesores.index')->with("mensaje", "Error con la BBDD");
        }
        return redirect()->route('profesores.index')->with("mensaje","Profesor Borrado");
    }
}
