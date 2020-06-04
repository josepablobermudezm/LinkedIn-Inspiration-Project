<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\requisitos;
class requisitosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requisitos = requisitos::all();
        return view('requisitos.index', compact('requisitos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('requisitos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ['rqNombre','rqOfertaTrabajo'];
        $this->validate($request,[
          'rqNombre'=>'required|string|max:30',
          'rqDescripcion'=>'required|string|max:300'
        ]);
        requisitos::create($request->all());
        return redirect()->route('requisitos.index')->with('success','Requisito creada exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $requisitos = requisitos::find($id);
      return view('requisitos.show',compact('requisitos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $requisitos = requisitos::find($id);
        return view('requisitos.edit',compact('requisitos'));
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
            'rqNombre'=>'required|string|max:30',
            'rqDescripcion'=>'required|string|max:300'
          ]);
          requisitos::find($id)->update($request->all());
        return redirect()->route('requisitos.index')->with('success','Requisito actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        requisitos::find($id)->delete();
        return redirect()->route('requisitos.index')->with('success','Requisito Eliminada con Exito');
    }
}
