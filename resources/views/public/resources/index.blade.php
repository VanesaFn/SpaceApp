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
    <video autoplay muted loop id="myVideo">
        <source src="{{ asset('img/Star_background.mp4')}}" type="video/mp4">
      </video>
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
                            <a class="nav-link" href="{{route('sign_in')}}">Sign In</a>
                        </li>
                        <li class="nav-item active mt-1 ml-1">
                            <a class="btn btn-primary btn-sm" href="{{route('sign_up')}}">Sign Up</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-7 offset-1 mt-3">
                <h1>Resources and repository</h1>
            </div>
            <div class="col-4 text-center mt-4">
                <form class="form-inline" action="/action_page.php">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="row mt-5 ml-5">
                    <div class="col-6">
                        <div class="card">
                            <img class="card-img-top" src="img_avatar1.png" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">John Doe</h4>
                                <p class="card-text">Some example text.</p>
                                <a href="#" class="btn btn-primary">See Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <img class="card-img-top" src="img_avatar1.png" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">John Doe</h4>
                                <p class="card-text">Some example text.</p>
                                <a href="#" class="btn btn-primary">See Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 ml-5">
                    <div class="col-6">
                        <div class="card">
                            <img class="card-img-top" src="img_avatar1.png" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">John Doe</h4>
                                <p class="card-text">Some example text.</p>
                                <a href="#" class="btn btn-primary">See Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <img class="card-img-top" src="img_avatar1.png" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">John Doe</h4>
                                <p class="card-text">Some example text.</p>
                                <a href="#" class="btn btn-primary">See Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">

            </div>
            <div class="col-5 mr-5">
                <div class="row mt-5 ml-5">
                    <h2>Filters</h2>
                </div>
                <div class="row  mt-3 ml-5">
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>
                <ul class="list-group mt-3 ml-2 mr-5">
                    <li class="list-group-item list-group-item-dark">
                        <img class="card-img-top" src="img_avatar1.png" alt="descripcion filtro">
                    </li>
                    <li class="list-group-item list-group-item-dark">
                        <img class="card-img-top" src="img_avatar1.png" alt="descripcion filtro">
                    </li>
                    <li class="list-group-item list-group-item-dark">
                        <img class="card-img-top" src="img_avatar1.png" alt="descripcion filtro">
                    </li>
                    <li class="list-group-item list-group-item-dark">
                        <img class="card-img-top" src="img_avatar1.png" alt="descripcion filtro">
                    </li>
                    <li class="list-group-item list-group-item-dark">
                        <img class="card-img-top" src="img_avatar1.png" alt="descripcion filtro">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
