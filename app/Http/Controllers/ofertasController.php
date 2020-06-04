<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ofertas;
class ofertasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ofertas = ofertas::all();
        return view('ofertas.index', compact('ofertas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ofertas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ['ofNombre','ofFechaInicio','ofFechaFinal','ofLimite'];
        $this->validate($request,[
          'ofNombre'=>'required|string|max:50',
          'ofFechaInicio'=>'required|string|max:10',
          'ofFechaFinal'=>'required|max:10',
          'ofLimite'=>'required|int|max:300',
        ]);
        ofertas::create($request->all());
        return redirect()->route('ofertas.index')->with('success','Oferta creada exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $ofertas = ofertas::find($id);
      return view('ofertas.show',compact('ofertas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ofertas = ofertas::find($id);
        return view('ofertas.edit',compact('ofertas'));
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
            'ofNombre'=>'required|string|max:50',
            'ofFechaInicio'=>'required|string|max:10',
            'ofFechaFinal'=>'required|max:10',
            'ofLimite'=>'required|int|max:4',
          ]);
          ofertas::find($id)->update($request->all());
        return redirect()->route('ofertas.index')->with('success','Oferta actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ofertas::find($id)->delete();
        return redirect()->route('ofertas.index')->with('success','Oferta Eliminada con Exito');
    }
}
