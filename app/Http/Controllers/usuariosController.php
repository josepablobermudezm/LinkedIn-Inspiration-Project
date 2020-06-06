<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App;

class usuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user = auth()->user();
        $usuarios  = DB::table('users')->orderBy('id', 'asc')->where('id', $user->id)->get()->toArray();
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
    /*public function store(Request $request)
    {
        //['usNombreReal','usNombreUsuario','usContrasena','usDireccion', 'usTelefono', 'usTipoUsuario', 'usFoto', 'usCedula'];
 
        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'address' => ['required', 'string', 'max:50'],
            'phone' => ['required', 'string', 'max:50'],
            'tipoUsuario' => ['required', 'string', 'max:1'],
            'photo' => ['required', 'string', 'max:50'],
            'cedula' => ['required', 'string', 'max:50']
        ]);
        user::create($request->all());
        return redirect()->route('usuarios.index')->with('success','Usuario creado exitosamente');
    }*/

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $usuarios = user::find($id);
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
        $usuarios = user::find($id);
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
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255'],
            //'password' => ['required', 'string', 'min:8', 'confirmed'],
            'address' => ['required', 'string', 'max:50'],
            'phone' => ['required', 'string', 'max:50'],
            'tipoUsuario' => ['required', 'string', 'max:1'],
            'photo' => ['required', 'string', 'max:50'],
            'cedula' => ['required', 'string', 'max:50']
          ]);
        user::find($id)->update($request->all());
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
        user::find($id)->delete();
        return redirect()->route('usuarios.index')->with('success','Usuario Eliminado con Exito');
    }
}
