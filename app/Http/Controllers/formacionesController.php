<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\formaciones;
class formacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formaciones = formaciones::all();
        return view('formaciones.index', compact('formaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ['foCurriculum','foTitulo','foEspecialidad','foInstitucion', 'foFecha'];
        $this->validate($request,[
          'foCurriculum'=>'required|int|max:3',
          'foTitulo'=>'required|string|max:30',
          'foEspecialidad'=>'required|max:50',
          'foInstitucion'=>'required|string|max:50',
          'foFecha'=>'required|string|max:10',
        ]);
        formaciones::create($request->all());
        return redirect()->route('formaciones.index')->with('success','Formación creada exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $formaciones = formaciones::find($id);
      return view('formaciones.show',compact('formaciones'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formaciones = formaciones::find($id);
        return view('formaciones.edit',compact('formaciones'));
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
            'foCurriculum'=>'required|int|max:3',
            'foTitulo'=>'required|string|max:30',
            'foEspecialidad'=>'required|max:50',
            'foInstitucion'=>'required|string|max:50',
            'foFecha'=>'required|string|max:10',
          ]);
          formaciones::find($id)->update($request->all());
        return redirect()->route('formaciones.index')->with('success','Formación actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        formaciones::find($id)->delete();
        return redirect()->route('formaciones.index')->with('success','Formación Eliminada con Exito');
    }
}
