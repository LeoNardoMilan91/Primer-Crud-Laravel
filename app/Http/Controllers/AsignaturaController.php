<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use Illuminate\Http\Request;
use App\Models\Profesor;

class AsignaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asignaturas=Asignatura::orderBy('nombre')->paginate(5);
        return view('asignaturas.index', compact('asignaturas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $misProfesores=Profesor::getArrayIdNombre();
        return view('asignaturas.create', compact('misProfesores'));
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
            'nombre'=>['required','string', 'min:3','max:50'],
            'descripcion'=>['required','string','min:1','max:200'],
            'creditos'=>['required','int','min:0','max:100'],
            'profesor_id'=>['required']
        ]);
        //2.- Procesador
        try{
            Asignatura::create($request->all());
        }catch(\Exception $ex){
            return redirect()->route('asignaturas.index')->with("mensaje", "Error con la BBDD".$ex->getMessage());
        }
        return redirect()->route('asignaturas.index')->with("mensaje", "Asignatura creada");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function show(asignatura $asignatura)
    {
        return view('asignaturas.mostrar', compact('asignatura'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function edit(asignatura $asignatura)
    {
        $misProfesores=Profesor::getArrayIdNombre();
        return view('asignaturas.edit', compact('asignatura','misProfesores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, asignatura $asignatura)
    {
        //1.- Validamos
        $request->validate([
            'nombre'=>['required','string', 'min:3','max:50'],
            'descripcion'=>['required','string','min:1','max:200'],
            'creditos'=>['required','int','min:0','max:100'],
            'profesor_id'=>['required']
        ]);
        //2.- Procesador
        try{
            Asignatura::create($request->all());
        }catch(\Exception $ex){
            return redirect()->route('asignaturas.index')->with("mensaje", "Error con la BBDD".$ex->getMessage());
        }
        return redirect()->route('asignaturas.index')->with("mensaje", "Asignatura actualizada");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asignatura $asignatura)
    {
        try{
            $asignatura->delete();
        }catch(\Exception $ex){
            return redirect()->route('asignaturas.index')->with("mensaje", "Error con la BBDD");
        }
        return redirect()->route('asignaturas.index')->with("mensaje","Asignatura Borrada");
    }
}
