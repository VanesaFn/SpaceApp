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
    <link href="{{ asset('css/profile_public.css') }}" rel="stylesheet">
    <!-- Core CSS Files Bootstrap-->
    <script src="{{ asset('atlantis/assets/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('atlantis/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('atlantis/assets/js/core/bootstrap.min.js') }}"></script>

</head>

<body style="color: white; background-color: black;">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-3 offset-4">
                <nav class="navbar navbar-expand-sm">
                    <ul class="navbar-nav ">
                        <li class="nav-item ">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#">About us</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#">Resources</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-2 offset-2">
                <div class="span">
                    <nav class="navbar navbar-expand-sm float-right">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Log in</a>
                            </li>
                            <li class="nav-item active mt-1 ml-1">
                                <button type="button" class="btn btn-primary btn-sm">Sign Up</button>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-4 offset-1 text-center">
                <img src="{{ asset('img/user.png') }}" height="150" alt="...">
                <div class="row">
                    <div class="col-12 mt-4">
                        <a href="" class="text-light">
                            <h5>Emilio Hernandez</h5>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-2">
                        <a href="" class="text-light">
                            <h5>emilio@gmail.com</h5>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-2">
                        <a href="" class="text-light">
                            <h5>Colombia</h5>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-2">
                        <a href="" class="text-light">
                            <h5>Settings</h5>
                        </a>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <a href="" class="text-light"><img src="{{ asset('img/redes.png') }}" height="70"
                                alt="..."></a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="row">
                    <h2>My resources and repositories</h2>
                </div>
                <div class="row " style="color: black;">
                    <div class="col-6">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
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
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-primary">Update</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
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
        </div>
    </div>
</body>

</html>
