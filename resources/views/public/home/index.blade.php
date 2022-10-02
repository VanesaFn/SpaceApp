<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Core JS Files Bootstrap -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home_css.css') }}" rel="stylesheet">
    <!-- Core CSS Files Bootstrap-->
    <script src="{{ asset('atlantis/assets/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('atlantis/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('atlantis/assets/js/core/bootstrap.min.js') }}"></script>
</head>

<body>
    <div class="container-fluid">
        <!-- Navbar-->
        <div class="row">
            <div class="col-4">
            </div>
            <div class="col">
                <nav class="navbar navbar-expand-sm">
                    <ul class="navbar-nav offset-1 ">
                        <li class="nav-item ml-4">
                            <a class="nav-link" href="#">Inicio</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#">Sobre Nosotros</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#">Recursos</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="span">
                <div class="col">
                    <nav class="navbar navbar-expand-sm">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Iniciar Sesión</a>
                            </li>
                            <li class="nav-item active mt-1 ml-1">
                                <button type="button" class="btn btn-primary btn-sm">Registrarse</button>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <!-- 2 row -->
        <div class="row mt-5">
            <div class="col-4 offset-2 ">
                <br>
                <br>
                <h1 class="p-1" id="titulo">Portal de acceso a recursos de desarrollo y creación</h1>
                <br>
                <p id="parrafomin">Accede a cientos de recursos para aumentar tus habilidades sobre Earth Observations.
                </p>
            </div>
            <div class="col-5 ml-5">
                <img class="ml-5" src="{{ asset('img/planet.png') }}" width="530" height="415" alt="">
            </div>
        </div>
        <!-- 3 row -->
        <div class="text-center">
            <button type="button" class="button-34" id="">Conoce más</button>
        </div>


        <!-- 4 row -->
        <div class="row mt-5">
            <div class="col-7 ml-5 p-5" style="margin-top: 300px;">

                <h2 class="ml-5 p-2">Objetivos</h2>
                <p class="ml-5 text-justify" id="parrafo">El portal se creo con el objetivo de lograr un facil acceso
                    a los recursos de desarrollo y creación, para ayudar a los profesionales de todos los niveles, este
                    portal contara con enlaces directos de acceso a las capacitaciones, recursos, directorios de
                    referencias
                    y además funciones de filtrado para mejor localización de los temas, gamificación, puntuación y
                    sugerencias. </p>

            </div>
            <div class="col" style="margin-top: 300px;">
                <img class="ml-5" src="{{ asset('img/objetivo.png') }}" width="450" height="450" alt="">
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <!-- 5 row -->
        <div class="row mt-5">
            <div class=" offset-1 col">
                <img class="" src="{{ asset('img/valorproyecto.png') }}" width="500" height="500"
                    alt="">
            </div>
            <div class="col-6">

                <h2 class="ml-5 p-3">Valor del proyecto</h2>
                <p class="ml-5 text-justify" id="parrafo">El valor del proyecto radica principalmente en generar una
                    herramienta util tanto para los educadores como para los estudiantes y programadores autodidactas
                    brindando asi una oportunidad de capacitacion facil y objetiva, evitando asi esfuerzos adicionales o
                    gasto de tiempo en busqueda de dichos recursos </p>
            </div>
        </div>

        <!-- 5 row -->
        <div class="row" style="margin-top: 200px;">
            <div class="col-4 offset-4">
                <h1 class="text-center"> Recursos mejor calificados </h1>
                <p class="ml-4 mt-5 text-center" style="font-size: 20px"> Es una seleccion de recursos mas utilizados
                    y mejor calificados los cuales garantisan una fiabilidad y verazidad de la información</p>
            </div>

            <div class="row">
                <div class="col" style="margin-left: 350px;" >
                    <div class="card-deck" style="margin-top: 100px;">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <p class="card-text" style="color:black;  ">Some text inside the first card</p>
                            </div>
                        </div>
                        <div class="card bg-light">
                            <div class="card-body text-center" style="color:black; >
                                <p class="card-text">Some text inside the second card</p>
                            </div>
                        </div>
                        <div class="card bg-light">
                            <div class="card-body text-center" style="color:black; >
                                <p class="card-text">Some text inside the third card</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <!-- 6 row -->
            <div class="row">

                <div class="col offset-3" style="margin-top: 300px;">
                    <div class=""
                        style="background-image:url({{ asset('img/estadisticas.png') }}); background-repeat: no-repeat; width:100%; height:160vh;">
                    </div>

                </div>
            </div>
        </div>
</body>

</html>
