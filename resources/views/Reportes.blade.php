@extends('layouts.app')
@section('PageTitle', 'Reportes')
@section('content')
<div class="card">
    <div class="card-header">Menú de Reportes</div>
    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
        <div id='div_media'>
            <nav>
                <ul id='menu'>
                    <a href="{{ url('curriculums') }}"><button id="Button1" class="Button1" onclick="CambiarColor(this)"><i class="fas fa-scroll"></i><br><label style="font-size: 20px; cursor: pointer;">-</label></button></a>
                    <a href="{{ url('usuarios') }}"><button id="Button2" class="Button1" onclick="CambiarColor(this)"><i class="fas fa-scroll"></i><br><label style="font-size: 20px; cursor: pointer;">-</label></button></a>
                    <a href="{{ url('ofertas') }}"><button id="Button3" class="Button1" onclick="CambiarColor(this)"><i class="fas fa-scroll"></i><br><label style="font-size: 20px; cursor: pointer;">-</label></button></a>
                    <a href="{{ url('categorias') }}"><button id="Button3" class="Button1" onclick="CambiarColor(this)"><i class="fas fa-scroll"></i><br><label style="font-size: 20px; cursor: pointer;">-</label></button></a>
                    <a href="{{ route('pdf', auth()->user()->id) }}"><button id="Button3" class="Button1" onclick="CambiarColor(this)"><i class="fas fa-scroll"></i><br><label style="font-size: 20px; cursor: pointer;">Curriculum</label></button></a>
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection