<!DOCTYPE html>
<html lang="en">

<head>
    <title>Reporte 2</title>
    <link rel="shortcut icon" href="img/favicon.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FontAwesome JS -->
    <script defer src="{{ asset('js/all.min.js') }}"></script>
    <!-- Global CSS -->
    <script src="{{ asset('js/bootstrap.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="{{ asset('css/orbit-2.css') }}">
</head>

<body>
   
    <div class="wrapper mt-lg-5">

        <div class="sidebar-wrapper">
            @foreach ($usuarios as $key => $value)
            <div class="profile-container">
                <img class="profile" src="<?php echo ('storage/images/' . $value->photo) ?>"" alt=" profile" style="width: 15em;" />
                <h2 class="name">{{ $value->name }}</h2>
            </div>
            <!--//profile-container-->
            <div class="contact-container container-block">
                <ul class="list-unstyled contact-list">
                    <li class="email"><i class="fas fa-envelope"></i><a href="mailto: yourname@email.com"> Email:
                            {{ $value->email }}</a></li>
                    <li class="phone"><i class="fas fa-phone"></i><a href="#">Tel: {{ $value->phone }}</a></li>
                    <li class="website"><i class="fas fa-globe"></i><a href="#" target="_blank">Dir:
                            {{ $value->address }}</a></li>
                    <li class="address"><i class="fab fa-twitter"></i><a href="#" target="_blank">Ced:
                            {{ $value->cedula }}</a></li>
                </ul>
            </div>
            @endforeach
        </div>
        <!--//sidebar-wrapper-->

        <div class="main-wrapper">


            @foreach ($curriculums as $key => $value)
            <section class="section summary-section">
                <h2 class="section-title"><span class="icon-holder"><i class="fas fa-user"></i></span>Perfil de Carrera
                </h2>
                <div class="summary">
                   <p>{{($value->Observaciones)}}</p>
                </div>
                <!--//summary-->
            </section>
            @endforeach

            <section class="section experiences-section">
                <h2 class="section-title"><span class="icon-holder"><i class="fas fa-briefcase"></i></span>Experiences
                </h2>

                @foreach ($experiencias as $key => $value)
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">{{$value->exPuesto}}</h3>
                        </div>
                        <!--//upper-row-->
                        <div class="company">Empresa: {{$value->exEmpresa}}</div>
                        <div class="company">Desde: {{$value->exFechaInicio}}, Hasta: {{$value->fechaFinal}}</div>
                    </div>
                    <!--//meta-->
                    <div class="details">
                        <p> {{$value->exDescripcion}}</p>
                    </div>
                    <!--//details-->
                </div>
                @endforeach

            </section>

            <section class="section experiences-section">
                <h2 class="section-title"><span class="icon-holder"><i class="fas fa-briefcase"></i></span>Educación
                </h2>
                @foreach ($formaciones as $key => $value)
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">{{ $value->foTitulo }}</h3>
                        </div>
                        <!--//upper-row-->
                        <div class="company">Especialidad: {{ $value->foEspecialidad }}</div>
                        <div class="company">Institución: {{ $value->foInstitucion }}</div>
                        <div class="company">Fecha: {{ $value->foFecha }}</div>

                    </div>
                    <!-- //meta-->

                    <!--//details -->
                </div>
                @endforeach
                <!--//item-->
            </section>
        </div>
        <!--//main-body-->


    </div>
</body>

</html>