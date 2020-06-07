<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\experiencias;
use App;
use PDF;

class ReportGeneratorController extends Controller
{
    public function ReporteCurriculum(){
        $user = auth()->user();
        // Sacamos el usuario logueado, esto en caso de ser un candidato, si es empresa entonces hay que mostrarle
        // los canditados que están inscritos a sus ofertas
        $usuarios  = DB::table('users')->orderBy('id', 'asc')->where('id', $user->id)->get()->toArray();

        // Se obteien el curriculum para sacar las experiencias y formaciones
        $curriculums = DB::table('curriculums')->join('users','curriculums.crUsuario', '=', 'users.id')
        ->select('curriculums.crID', 'users.name as NombreUsuario', 'curriculums.crObservaciones')
        ->where('crUsuario', $user->id)->get()->toArray(); 
        //Obtenemos las formaciones
        $formaciones  = DB::table('formaciones')->orderBy('foID', 'asc')->where('foCurriculum', $curriculums[0]->crID)->get()->toArray();
        // Obtenemos las experiencias
        $experiencias  = DB::table('experiencias')->orderBy('exID', 'asc')->where('exCurriculum', $curriculums[0]->crID)->get()->toArray();
        

        $pdf = PDF::loadView('reporte1Curriculum', compact('usuarios', 'experiencias', 'formaciones'))->setPaper('a4', 'landscape');;
        return $pdf->stream('Reporte1.pdf');
    }
}
