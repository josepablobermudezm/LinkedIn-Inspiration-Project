<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive Resume Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">

    <!-- FontAwesome JS-->
    <script defer src="{{ asset('js/all.min.js') }}"></script>
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="{{ asset('css/pillar-1.css') }}">

    <title>Reporte 4</title>
</head>

<body>

    <article class="resume-wrapper text-center position-relative">
        <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
            <header class="resume-header pt-4 pt-md-0">
                <div class="row">
                    @foreach ($usuarios as $key => $value)
                    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
                        <img class="picture" src="<?php echo ('storage/images/' . $value->photo) ?>" alt=""
                            style="width: 20em;">
                    </div>
                    <!--//col-->
                    <div class="col">
                        <div class="row p-4 justify-content-center justify-content-md-between">
                            <div class="primary-info col-auto">
                                <h6 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"
                                    style="font-size: 30px;">{{ $value->name }}
                                </h6>
                                <ul class="list-unstyled">
                                    <li class="mt-2"><a class="text-link" href="#"><i
                                                class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i>Ced:
                                            {{ $value->cedula }}</a></li>
                                    <li><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2"
                                                data-fa-transform="grow-6"></i>Email: {{ $value->email }}</a></li>
                                    <li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2"
                                                data-fa-transform="grow-6"></i>Tel: {{ $value->phone }}</a></li>
                                    <li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2"
                                                data-fa-transform="grow-6"></i>Dirección: {{ $value->address }}</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--//row-->
                    </div>
                    <!--//col-->
                    @endforeach
                </div>
                <!--//row-->
            </header>
            <div class="resume-body p-5">
                @foreach ($curriculums as $key => $value)
                <section class="resume-section summary-section mb-5">
                    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Perfil de Carrera</h2>
                    <div class="resume-section-content">
                        <p class="mb-0">{{$value->Observaciones}}</p>
                    </div>
                </section>
                @endforeach

                <!--//summary-section-->
                <div class="row">
                    <div class="col-lg-9">
                        <section class="resume-section experience-section mb-5">
                            <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Experiencias
                            </h2>
							@foreach ($experiencias as $key => $value)
                            <div class="resume-section-content">
                                <div class="position-relative">
                                    <article class="position-relative pb-5">
                                        <div class="resume-timeline-item-header mb-2">
                                            <div class="resume-position-title font-weight-bold mb-1">
                                                <b>{{$value->exPuesto}}</b>
												</div>
                                            <div class="">Empresa: {{$value->exEmpresa}}
                                            </div>
                                            <div class="resume-position-time">Desde: {{$value->exFechaInicio}},
                                                Hasta:
                                                {{$value->fechaFinal}}</div>
                                        </div>
                                        <!--//resume-timeline-item-header-->
                                        <div class="resume-timeline-item-desc">
                                            <p>{{$value->exDescripcion}}</p>
                                        </div>
                                        <!--//resume-timeline-item-desc-->
                                    </article>
                                </div>
                            </div>
							@endforeach
                        </section>
                        <!--//experience-section-->
                    </div>
                    <div class="col-lg-3">
                        <!--//skills-section-->
                        <section class="resume-section education-section mb-5">

                            <h2 class="resume-section-title text-uppercase font-weight-bold pb-1 mb-1">Educación</h2>
                            <div class="resume-section-content">
                                <ul class="list-unstyled">
                                    @foreach ($formaciones as $key => $value)
                                    <li class="mb-2">
                                        <div class="resume-degree font-weight-bold">{{ $value->foTitulo }}</div>
                                        <div class="resume-degree font-weight-bold">Especialidad:
                                            {{ $value->foEspecialidad }}</div>
                                        <div class="resume-degree-org">Institución: {{ $value->foInstitucion }}</div>
                                        <div class="resume-degree-time">Fecha: {{ $value->foFecha }}</div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
                <!--//row-->
            </div>
            <!--//resume-body-->
        </div>
    </article>
</body>

</html>