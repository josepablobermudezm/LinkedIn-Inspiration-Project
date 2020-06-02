<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\experiencias;

class experienciasController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiencias = experiencias::all();
        return view('experiencias.index', compact('experiencias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('experiencias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ['exPuesto','exEmpresa','exCurriculum','exFechaInicio', 'fechaFinal', 'exDescripcion'];
        $this->validate($request,[
          'exPuesto'=>'required|string|max:50',
          'exEmpresa'=>'required|string|max:50',
          'exCurriculum'=>'required|max:3',
          'exFechaInicio'=>'required|string|max:10',
          'fechaFinal'=>'required|string|max:10',
          'exDescripcion'=>'required|string|max:300',
        ]);
        experiencias::create($request->all());
        return redirect()->route('experiencias.index')->with('success','Experiencia creada exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $experiencias = experiencias::find($id);
      return view('experiencias.show',compact('experiencias'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $experiencias = experiencias::find($id);
        return view('experiencias.edit',compact('experiencias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'exPuesto'=>'required|string|max:50',
            'exEmpresa'=>'required|string|max:50',
            'exCurriculum'=>'required|max:3',
            'exFechaInicio'=>'required|string|max:10',
            'fechaFinal'=>'required|string|max:10',
            'exDescripcion'=>'required|string|max:300',
          ]);
        experiencias::find($id)->update($request->all());
        return redirect()->route('experiencias.index')->with('success','Experiencia actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        experiencias::find($id)->delete();
        return redirect()->route('experiencias.index')->with('success','Experiencia Eliminada con Exito');
    }
}
