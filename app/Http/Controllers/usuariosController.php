<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\usuarios;

class usuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $usuarios = usuarios::all();
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create');
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
 
        $this->validate($request,[
          'usNombreReal'=>'required|string|max:50',
          'usNombreUsuario'=>'required|string|max:50',
          'usContrasena'=>'required|max:100',
          'usDireccion'=>'required|string|max:300',
          'usTelefono'=>'required|string|max:20',
          'usTipoUsuario'=>'required|string|max:2',
          'usFoto'=>'required|string|max:20',
          'usCedula'=>'required|string|max:30',
        ]);
        usuarios::create($request->all());
        return redirect()->route('usuarios.index')->with('success','Usuario creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $usuarios = usuarios::find($id);
      return view('usuarios.show',compact('usuarios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuarios = usuarios::find($id);
        return view('usuarios.edit',compact('usuarios'));
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
            'usNombreReal'=>'required|string|max:50',
            'usNombreUsuario'=>'required|string|max:50',
            'usContrasena'=>'required|max:100',
            'usDireccion'=>'required|string|max:300',
            'usTelefono'=>'required|string|max:20',
            'usTipoUsuario'=>'required|string|max:2',
            'usFoto'=>'required|string|max:20',
            'usCedula'=>'required|string|max:30',
          ]);
        usuarios::find($id)->update($request->all());
        return redirect()->route('usuarios.index')->with('success','Usuario actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        usuarios::find($id)->delete();
        return redirect()->route('usuarios.index')->with('success','Usuario Eliminado con Exito');
    }
}
