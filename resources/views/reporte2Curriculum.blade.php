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
    <!-- <div class="container">
        <img style="float: left;" src="img/company.png">
        <h2 style='position: relative; text-align: center;'>Curriculum</h2>
        <h2 style='padding-top: 60px; color: #636b6f;'>Datos Personales</h2>
        <table class="table table-bordered" style=" text-align:center; margin-left:auto; margin-right:auto;">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Telefono</th>
                <th scope="col">Direccion</th>
                <th scope="col">Cedula</th>
                <th scope="col">Foto</th>
            </tr>
            @foreach ($usuarios as $key => $value)
            <tr>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->phone }}</td>
                <td>{{ $value->address }}</td>
                <td>{{ $value->cedula }}</td>
                <td><img class="imagen" style="width:50px; height:50px;"
                        src="<?php //echo ('storage/images/' . $value->photo) 
                                ?>"></td>
            </tr>
            @endforeach
        </table>
        <h2 style="color: #636b6f;">Experiencias</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Puesto</th>
                    <th scope="col">Empresa</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Fecha Inicio</th>
                    <th scope="col">Fecha Final</th>
                </tr>
            </thead>
            @foreach ($experiencias as $key => $value)
            <tr>
                <td>{{ $value->exPuesto }}</td>
                <td>{{ $value->exEmpresa }}</td>
                <td>{{ $value->exDescripcion }}</td>
                <td>{{ $value->exFechaInicio }}</td>
                <td>{{ $value->fechaFinal }}</td>
            </tr>
            @endforeach
        </table>
        <h2 style="color: #636b6f;">Formaciones</h2>
        <table class="table table-bordered">
            <tr>
                <th scope="col">Titulo</th>
                <th scope="col">Especialidad</th>
                <th scope="col">Institución</th>
                <th scope="col">Fecha</th>
            </tr>
            @foreach ($formaciones as $key => $value)
            <tr>
                <td>{{ $value->foTitulo }}</td>
                <td>{{ $value->foEspecialidad }}</td>
                <td>{{ $value->foInstitucion }}</td>
                <td>{{ $value->foFecha }}</td>
            </tr>
            @endforeach
        </table>
    </div> -->
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
            <!--//contact-container-->
            <div class="education-container container-block">
                <h2 class="container-block-title">Education</h2>
                @foreach ($formaciones as $key => $value)
                <div class="item">
                    <h4 class="degree">{{ $value->foTitulo }}</h4>
                    <h5 class="degree">{{ $value->foEspecialidad }}</h5>

                    <h5 class="meta">{{ $value->foInstitucion }}</h5>
                    <div class="time">{{ $value->foFecha }}</div>
                </div>
                @endforeach

                <!--//item-->
                <!-- <div class="item">
                    <h4 class="degree">BSc in Applied Mathematics</h4>
                    <h5 class="meta">Bristol University</h5>
                    <div class="time">2012 - 2016</div>
                </div> -->
                <!--//item-->
            </div>
            <!--//education-container-->

            <div class="languages-container container-block">
                <h2 class="container-block-title">Languages</h2>
                <ul class="list-unstyled interests-list">
                    <li>English <span class="lang-desc">(Native)</span></li>
                    <li>French <span class="lang-desc">(Professional)</span></li>
                    <li>Spanish <span class="lang-desc">(Professional)</span></li>
                </ul>
            </div>
            <!--//interests-->

            <!-- <div class="interests-container container-block">
                <h2 class="container-block-title">Interests</h2>
                <ul class="list-unstyled interests-list">
                    <li>Climbing</li>
                    <li>Snowboarding</li>
                    <li>Cooking</li>
                </ul>
            </div> -->
            <!--//interests-->
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