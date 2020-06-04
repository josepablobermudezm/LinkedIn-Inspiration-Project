<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuarios;
use App;
use PDF;

class ReportGeneratorController extends Controller
{
    public function Reporte1(){
        $usuarios = usuarios::all();
        $pdf = PDF::loadView('reporte1', compact('usuarios'))->setPaper('a4', 'landscape');;
        return $pdf->stream('Reporte1.pdf');
    }
}
