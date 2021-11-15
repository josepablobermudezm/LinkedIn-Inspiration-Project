@extends('layouts.app')
@section('PageTitle', 'Reportes')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menú de reportes</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div id='div_media'>
                        <nav>
                            <ul id='menu' style="text-align: center;">
                                <?php if (auth()->user()->tipoUsuario == 'C') { ?>
                                    <a href="{{ route('pdf', auth()->user()->id) }}"><button id="Button3" class="Button1" onclick="CambiarColor(this)"><i class="fas fa-scroll"></i><br><label style="font-size: 20px; cursor: pointer;">Estilo 1</label></button></a>
                                    <a href="{{ route('pdfCurriculum2', auth()->user()->id) }}"><button id="Button3" class="Button1" onclick="CambiarColor(this)"><i class="fas fa-scroll"></i><br><label style="font-size: 20px; cursor: pointer;">Estilo 2</label></button></a>
                                    <a href="{{ route('pdfCurriculum3', auth()->user()->id) }}"><button id="Button3" class="Button1" onclick="CambiarColor(this)"><i class="fas fa-scroll"></i><br><label style="font-size: 20px; cursor: pointer;">Estilo 3</label></button></a>
                                    <a href="{{ route('pdfCurriculum4', auth()->user()->id) }}"><button id="Button3" class="Button1" onclick="CambiarColor(this)"><i class="fas fa-scroll"></i><br><label style="font-size: 20px; cursor: pointer;">Estilo 4</label></button></a>
                                <?php } ?>
                            </ul>                            
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection