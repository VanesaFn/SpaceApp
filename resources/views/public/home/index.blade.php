<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sunisoft</title>
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" />
    <!-- Core JS Files Bootstrap -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home_css.css') }}" rel="stylesheet">
    <link href="{{ asset('css/stilosR.css') }}" rel="stylesheet">
    <!-- Core CSS Files Bootstrap-->
    <script src="{{ asset('atlantis/assets/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('atlantis/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('atlantis/assets/js/core/bootstrap.min.js') }}"></script>
</head>

<body>
    <video autoplay muted loop id="myVideo">
        <source src="{{ asset('img/Star_background.mp4') }}" type="video/mp4">
    </video>
    <div class="container-fluid">
        <!-- Navbar-->
        <div class="row">
            <div class="col-4">
            </div>
            <div class="col">
                <nav class="navbar navbar-expand-sm">
                    <ul class="navbar-nav offset-1 ">
                        <li class="nav-item ml-4">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('about_us') }}">About Us</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('resources_public') }}">Resources</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="span">
                <div class="col">
                    <nav class="navbar navbar-expand-sm">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('sign_in') }}">Sign In</a>
                            </li>
                            <li class="nav-item active mt-1 ml-1">
                                <a class="btn btn-primary btn-sm" href="{{ route('sign_up') }}">Sign Up</a>
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
                <h1 class="p-1" id="titulo">Access portal to development and creation resources</h1>
                <br>
                <p id="parrafomin"> Access hundreds of resources to increase your Earth Observations skills.
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

                <h2 class="ml-5 p-2">Objective</h2>
                <p class="ml-5 text-justify" id="parrafo">The portal was created with the aim of achieving easy
                    access to development and creation resources, to help professionals of all levels, this portal will
                    have direct access links to training, resources, reference directories and also functions filtering
                    for better topic localization, gamification, scoring and suggestions. </p>

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
            <div class=" offset-1 col-2">
                <img class="" src="{{ asset('img/valorproyecto1.png') }}" width="500" height="500"
                    alt="">
            </div>
            <div class="col-6" style="margin-left: 300px;">

                <h2 class="p-3">Project value</h2>
                <p class="text-justify" id="parrafo">The value of the project lies mainly in generating a useful tool
                    for educators
                    as well as for students and self-taught programmers, thus providing an easy and objective training
                    opportunity, thus avoiding additional efforts or spending time in search of such resources. </p>
            </div>
        </div>

        <!-- 5 row -->
        <div class="row" style="margin-top: 200px;">
            <div class="col-4 offset-4">
                <h1 class="text-center"> Top Rated Resources </h1>
                <p class="ml-4 mt-5 text-center" style="font-size: 20px"> It is a selection of the most used and best
                    qualified resources which guarantee reliability and veracity of the information.</p>
            </div>
        </div>

        <div class="row " style="color: black; margin-left: 350px; margin-top:50px">
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Title</h5>
                        <p class="clasificacion">
                            <input id="radio1" type="radio" name="estrellas" value="5">
                            <!--
                            --><label class="star" for="radio1">★</label>
                            <!--
                            --><input id="radio2" type="radio" name="estrellas" value="4">
                            <!--
                            --><label class="star" for="radio2">★</label>
                            <!--
                            --><input id="radio3" type="radio" name="estrellas" value="3">
                            <!--
                            --><label class="star" for="radio3">★</label>
                            <!--
                            --><input id="radio4" type="radio" name="estrellas" value="2">
                            <!--
                            --><label class="star" for="radio4">★</label>
                            <!--
                            --><input id="radio5" type="radio" name="estrellas" value="1">
                            <!--
                            --><label class="star" for="radio5">★</label>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Title</h5>
                        <p class="clasificacion">
                            <input id="radio1" type="radio" name="estrellas" value="5">
                            <!--
                            --><label class="star" for="radio1">★</label>
                            <!--
                            --><input id="radio2" type="radio" name="estrellas" value="4">
                            <!--
                            --><label class="star" for="radio2">★</label>
                            <!--
                            --><input id="radio3" type="radio" name="estrellas" value="3">
                            <!--
                            --><label class="star" for="radio3">★</label>
                            <!--
                            --><input id="radio4" type="radio" name="estrellas" value="2">
                            <!--
                            --><label class="star" for="radio4">★</label>
                            <!--
                            --><input id="radio5" type="radio" name="estrellas" value="1">
                            <!--
                            --><label class="star" for="radio5">★</label>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Title</h5>
                        <p class="clasificacion">
                            <input id="radio1" type="radio" name="estrellas" value="5">
                            <!--
                        --><label class="star" for="radio1">★</label>
                            <!--
                        --><input id="radio2" type="radio" name="estrellas" value="4">
                            <!--
                        --><label class="star" for="radio2">★</label>
                            <!--
                        --><input id="radio3" type="radio" name="estrellas" value="3">
                            <!--
                        --><label class="star" for="radio3">★</label>
                            <!--
                        --><input id="radio4" type="radio" name="estrellas" value="2">
                            <!--
                        --><label class="star" for="radio4">★</label>
                            <!--
                        --><input id="radio5" type="radio" name="estrellas" value="1">
                            <!--
                        --><label class="star" for="radio5">★</label>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- 6 row -->
    <div class="row">

        <div class="col" style="margin-top: 300px;margin-left:300px">
            <div class=""
                style="background-image:url({{ asset('img/estadisticas1.png') }}); background-repeat: no-repeat; width:100%; height:160vh;">
            </div>

        </div>
    </div>
    </div>
</body>

</html>
