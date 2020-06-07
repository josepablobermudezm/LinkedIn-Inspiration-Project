<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ofertas;
use App\categorias;
use Illuminate\Support\Facades\DB;


class ofertasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $userID = auth()->user()->id;
        $user = auth()->user()->tipoUsuario;
        if ($user == 'C') {//en el caso de que sea un candidato entonces mostramos toda la lista 
            $ofertas = DB::table('ofertas')
                ->join('categorias', 'ofertas.ofCategoria', '=', 'categorias.cgID')
                ->select(
                    'ofID',
                    'ofNombre',
                    'ofUbicacion',
                    'ofSueldo',
                    'ofDescripcion',
                    'categorias.cgNombre as ofNomCategoria',
                    'ofHorario',
                    'ofFechaInicio',
                    'ofFechaFinal',
                    'ofVacantes',
                    'ofEmpresa'
                )->get()->toArray();
        } else {//si es una empresa mostramos solamente las ofertas que esa empresa ha creado
            $ofertas = DB::table('ofertas')
                ->join('categorias', 'ofertas.ofCategoria', '=', 'categorias.cgID')
                ->select(
                    'ofID',
                    'ofNombre',
                    'ofUbicacion',
                    'ofSueldo',
                    'ofDescripcion',
                    'categorias.cgNombre as ofNomCategoria',
                    'ofHorario',
                    'ofFechaInicio',
                    'ofFechaFinal',
                    'ofVacantes',
                    'ofEmpresa'
                )->where('ofEmpresa', $userID)->get()->toArray();
        }
        //$ofertas = DB::table('inscripciones')->orderBy('ofID', 'asc')->where('ofEmpresa', $userID)->get()->toArray();
        return view('ofertas.index', compact('ofertas'))->with('tipoUsuario', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $empresa = auth()->user()->id;
        $categories = DB::table('categorias')->orderBy('cgID', 'asc')->where('cgEmpresa', $empresa)->get()->toArray();

        //$categories = categorias::all();
        return view('ofertas.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empresa = auth()->user()->id;
        // ['ofNombre','ofFechaInicio','ofFechaFinal','ofLimite'];
        $this->validate($request, [
            'ofNombre' => 'required|string|max:50',
            'ofHorario' => 'required|string|max:300',
            'ofDescripcion' => 'required|string|max:300',
            'ofUbicacion' => 'required|string|max:300',
            'ofSueldo' => 'required|max:8,2',
            'ofCategoria' => 'required|int|max:10000',
            'ofFechaInicio' => 'required|string|max:10',
            'ofFechaFinal' => 'required|string|max:10',
            'ofVacantes' => 'required|int|max:999',
        ]);
            
        $request->request->add(['ofEmpresa' => $empresa]);

        ofertas::create($request->all());
        return redirect()->route('ofertas.index')->with('success', 'Oferta creada exitosamente');
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
        return view('ofertas.show', compact('ofertas'));
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
        $categories = categorias::all();
        return view('ofertas.edit', compact('ofertas', 'categories'));
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
            'ofNombre' => 'required|string|max:50',
            'ofHorario' => 'required|string|max:300',
            'ofDescripcion' => 'required|string|max:300',
            'ofUbicacion' => 'required|string|max:300',
            'ofSueldo' => 'required|max:8,2',
            'ofCategoria' => 'required|int|max:10000',
            'ofFechaInicio' => 'required|string|max:10',
            'ofFechaFinal' => 'required|string|max:10',
            'ofVacantes' => 'required|int|max:999',
        ]);
        $empresa = auth()->user()->id;        
        ofertas::find($id)->update($request->all());
        return redirect()->route('ofertas.index')->with('success', 'Oferta actualizada con exito');
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
        return redirect()->route('ofertas.index')->with('success', 'Oferta Eliminada con Exito');
    }
}
