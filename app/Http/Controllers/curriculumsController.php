<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\curriculums;

class curriculumsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curriculums = curriculums::all();
        return view('curriculums.index', compact('curriculums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('curriculums.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //['usNombreReal','usNombreUsuario','usContrasena','usDireccion', 'usTelefono', 'usTipoUsuario', 'usFoto', 'usCedula'];

        $this->validate($request, [
            'crUsuario' => 'required|string|max:20',
            'crObservaciones' => 'required|string|max:300',
        ]);
        curriculums::create($request->all());
        return redirect()->route('curriculums.index')->with('success', 'curriculums creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $curriculums = curriculums::find($id);
        return view('curriculums.show', compact('curriculums'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $curriculums = curriculums::find($id);
        return view('curriculums.edit', compact('curriculums'));
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
        $this->validate($request, [
            'crUsuario' => 'required|string|max:20',
            'crObservaciones' => 'required|string|max:300',
        ]);
        curriculums::find($id)->update($request->all());
        return redirect()->route('curriculums.index')->with('success', 'Usuario actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        curriculums::find($id)->delete();
        return redirect()->route('curriculums.index')->with('success', 'curriculums Eliminado con Exito');
    }
}
