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
                        src="<?php //echo ('storage/images/' . $value->photo) ?>"></td>
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
            <div class="profile-container">
                <img class="profile" src="" alt="profile" />
                <h1 class="name">Alan Doe</h1>
                <h3 class="tagline">Full Stack Developer</h3>
            </div>
            <!--//profile-container-->

            <div class="contact-container container-block">
                <ul class="list-unstyled contact-list">
                    <li class="email"><i class="fas fa-envelope"></i><a
                            href="mailto: yourname@email.com">alan.doe@website.com</a></li>
                    <li class="phone"><i class="fas fa-phone"></i><a href="tel:0123 456 789">0123 456 789</a></li>
                    <li class="website"><i class="fas fa-globe"></i><a
                            href="https://themes.3rdwavemedia.com/bootstrap-templates/resume/orbit-free-resume-cv-bootstrap-theme-for-developers/"
                            target="_blank">portfoliosite.com</a></li>
                    <li class="linkedin"><i class="fab fa-linkedin-in"></i><a href="#"
                            target="_blank">linkedin.com/in/alandoe</a></li>
                    <li class="github"><i class="fab fa-github"></i><a href="#" target="_blank">github.com/username</a>
                    </li>
                    <li class="twitter"><i class="fab fa-twitter"></i><a href="https://twitter.com/3rdwave_themes"
                            target="_blank">@twittername</a></li>
                </ul>
            </div>
            <!--//contact-container-->
            <div class="education-container container-block">
                <h2 class="container-block-title">Education</h2>
                <div class="item">
                    <h4 class="degree">MSc in Computer Science</h4>
                    <h5 class="meta">University of London</h5>
                    <div class="time">2016 - 2018</div>
                </div>
                <!--//item-->
                <div class="item">
                    <h4 class="degree">BSc in Applied Mathematics</h4>
                    <h5 class="meta">Bristol University</h5>
                    <div class="time">2012 - 2016</div>
                </div>
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

            <div class="interests-container container-block">
                <h2 class="container-block-title">Interests</h2>
                <ul class="list-unstyled interests-list">
                    <li>Climbing</li>
                    <li>Snowboarding</li>
                    <li>Cooking</li>
                </ul>
            </div>
            <!--//interests-->

        </div>
        <!--//sidebar-wrapper-->

        <div class="main-wrapper">

            <section class="section summary-section">
                <h2 class="section-title"><span class="icon-holder"><i class="fas fa-user"></i></span>Career Profile
                </h2>
                <div class="summary">
                    <p>Summarise your career here lorem ipsum dolor sit amet, consectetuer adipiscing elit. You can <a
                            href="https://themes.3rdwavemedia.com/bootstrap-templates/resume/orbit-free-resume-cv-bootstrap-theme-for-developers/"
                            target="_blank">download this free resume/CV template here</a>. Aenean commodo ligula eget
                        dolor aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                        ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu.</p>
                </div>
                <!--//summary-->
            </section>
            <!--//section-->

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

                <!--//item-->

            </section>
            <!--//section-->

            <section class="section projects-section">
                <h2 class="section-title"><span class="icon-holder"><i class="fas fa-archive"></i></span>Projects</h2>
                <div class="intro">
                    <p>You can list your side projects or open source libraries in this section. Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit. Vestibulum et ligula in nunc bibendum fringilla a eu lectus.
                    </p>
                </div>
                <!--//intro-->
                <div class="item">
                    <span class="project-title"><a
                            href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/coderpro-bootstrap-5-startup-template-for-software-projects/"
                            target="_blank">CoderPro</a></span> - <span class="project-tagline">A responsive website
                        template designed to help developers launch their software projects. </span>

                </div>
                <!--//item-->
                <div class="item">
                    <span class="project-title"><a
                            href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/launch-bootstrap-5-template-for-saas-businesses/"
                            target="_blank">Launch</a></span> - <span class="project-tagline">A responsive website
                        template designed to help startups promote their products or services.</span>
                </div>
                <!--//item-->
                <div class="item">
                    <span class="project-title"><a
                            href="https://themes.3rdwavemedia.com/bootstrap-templates/resume/devcard-bootstrap-5-vcard-portfolio-template-for-software-developers/"
                            target="_blank">DevCard</a></span> - <span class="project-tagline">A portfolio website
                        template designed for software developers.</span>
                </div>
                <!--//item-->
                <div class="item">
                    <span class="project-title"><a
                            href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/bootstrap-template-for-mobile-apps-nova-pro/"
                            target="_blank">Nova Pro</a></span> - <span class="project-tagline">A responsive Bootstrap
                        theme designed to help app developers promote their mobile apps</span>
                </div>
                <!--//item-->
                <div class="item">
                    <span class="project-title"><a
                            href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-web-development-agencies-devstudio/"
                            target="_blank">DevStudio</a></span> -
                    <span class="project-tagline">A responsive website template designed to help web
                        developers/designers market their services. </span>
                </div>
                <!--//item-->
            </section>
            <!--//section-->

            <section class="skills-section section">
                <h2 class="section-title"><span class="icon-holder"><i class="fas fa-rocket"></i></span>Skills &amp;
                    Proficiency</h2>
                <div class="skillset">
                    <div class="item">
                        <h3 class="level-title">Python &amp; Django</h3>
                        <div class="progress level-bar">
                            <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 99%"
                                aria-valuenow="99" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <!--//item-->

                    <div class="item">
                        <h3 class="level-title">Javascript</h3>
                        <div class="progress level-bar">
                            <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 98%"
                                aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <!--//item-->

                    <div class="item">
                        <h3 class="level-title">React &amp; Angular</h3>
                        <div class="progress level-bar">
                            <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 98%"
                                aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <!--//item-->

                    <div class="item">
                        <h3 class="level-title">HTML5 &amp; CSS</h3>
                        <div class="progress level-bar">
                            <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 95%"
                                aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <!--//item-->

                    <div class="item">
                        <h3 class="level-title">Ruby on Rails</h3>
                        <div class="progress level-bar">
                            <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 85%"
                                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <!--//item-->

                    <div class="item">
                        <h3 class="level-title">Sketch &amp; Photoshop</h3>
                        <div class="progress level-bar">
                            <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 60%"
                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <!--//item-->
                </div>
            </section>
            <!--//skills-section-->
        </div>
        <!--//main-body-->
    </div>
</body>

</html>