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
    <!-- Core CSS Files Bootstrap-->
    <script src="{{ asset('atlantis/assets/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('atlantis/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('atlantis/assets/js/core/bootstrap.min.js') }}"></script>
</head>

<body>
    <div class="row">
        <div class="col-3 offset-4  ">
            <nav class="navbar navbar-expand-sm">
                <ul class="navbar-nav ml-4 ">
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
    </div>
    </div>
    <div class="row mb-4">
        <div class="col-7 text-center offset-2">
            <h1>article name</h1>
        </div>
        <div class="col-3 text-center mt-2">
            <button type="button" class="btn btn-primary btn-sm">Back</button>
        </div>
    </div>
    <div class="row">
        <div class="col-3 offset-1">
            <div class="card">
                <img class="card-img-top" src="{{ asset('img/nasalogo.png') }}" alt="Card image">
                <div class="card-body">
                    <!--aqui pone las estrellas cristhian-->
                </div>
            </div>
        </div>
        <div class="col-7 ml-5 mt-1">
            <div id="accordion">

                <div class="card">
                    <div class="card-header">
                        <a class="card-link" data-toggle="collapse" href="#collapseOne">
                            Training and education of the European space agency
                        </a>
                    </div>
                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                        <div class="card-body">
                            https://eo4society.esa.int/training-education/
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                            Formation of the European Organization for the Exploitation of Meteorological Satellites (EUMETSAT)
                        </a>
                    </div>
                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            https://eo4society.esa.int/training-education
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                           Espacio para mas links
                        </a>
                    </div>
                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            Lorem ipsum..
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
