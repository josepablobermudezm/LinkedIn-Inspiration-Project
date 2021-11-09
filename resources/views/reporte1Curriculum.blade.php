<!DOCTYPE html>
<html lang="en">

<head>
    <title>Reporte 1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FontAwesome JS -->
    <script defer src="{{ asset('js/all.min.js') }}"></script>
    <!-- Global CSS -->
    <script src="{{ asset('js/bootstrap.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="{{ asset('css/orbit-1.css') }}">
</head>

<body>
    <div class="wrapper mt-lg-5">
        <div class="sidebar-wrapper">
            @foreach ($usuarios as $key => $value)
            <div class="profile-container">
                <img class="profile" src="<?php echo ('storage/images/' . $value->photo) ?>"" alt=" profile"
                style="width: 15em;" />
                <h1 class="name">{{ $value->name }}</h1>
            </div>
            <!--//profile-container-->
            <div class="contact-container container-block">
                <ul class="list-unstyled contact-list">
                    <li class="email"><i class="fas fa-envelope"></i><a href="mailto: yourname@email.com">Email:
                            {{ $value->email }}</a></li>
                    <li class="phone"><i class="fas fa-phone"></i><a href="#">Tel: {{ $value->phone }}</a></li>
                    <li class="website"><i class="fas fa-globe"></i><a href="#" target="_blank">Dir:
                            {{ $value->address }}</a></li>
                    <li class="address"><i class="fab fa-twitter"></i><a href="#" target="_blank">Ced:
                            {{ $value->cedula }}</a></li>
                </ul>
            </div>
            @endforeach
            <!--//contact-container-->
            <!-- <div class="education-container container-block">
                <h2 class="container-block-title">Educación</h2>
                @foreach ($formaciones as $key => $value)
                <div class="item">
                    <h4 class="degree">{{ $value->foTitulo }}</h4>
                    <h5 class="degree">{{ $value->foEspecialidad }}</h5>

                    <h5 class="meta">{{ $value->foInstitucion }}</h5>
                    <div class="time">{{ $value->foFecha }}</div>
                </div>
                @endforeach
            </div> -->
            <!--//education-container-->

        </div>
        <!--//sidebar-wrapper-->

        <div class="main-wrapper">
            @foreach ($curriculums as $key => $value)
            <section class="section summary-section">
                <h2 class="section-title"><span class="icon-holder"><i class="fas fa-user"></i></span>Perfil de Carrera
                </h2>
                <div class="summary">
                    <p>{{$value->Observaciones}}</p>
                </div>
                <!--//summary-->
            </section>
            @endforeach
            <!--//section-->
            <section class="section experiences-section">
                <h2 class="section-title"><span class="icon-holder"><i class="fas fa-briefcase"></i></span>Experiencias
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
                <!--//item-->
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
            <!--//section-->
        </div>
        <!--//main-body-->
    </div>
</body>

</html>