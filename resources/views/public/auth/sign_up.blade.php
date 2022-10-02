<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Core JS Files Bootstrap -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app_public.css') }}" rel="stylesheet">
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 offset-4">
                <nav class="navbar navbar-expand-sm">
                    <ul class="navbar-nav ">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('home')}}">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('about_us')}}">About us</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('resources_public')}}">Resources</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-2 offset-2">
                <div class="span">
                    <nav class="navbar navbar-expand-sm float-right">
                        <ul class="navbar-nav">
                            <li class="nav-item active mt-1">
                                <a class="button-34" href="{{route('sign_in')}}" style="text-decoration: none;">Sign In</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <p></p>
        <div class="row ">
            <div class="col-11 offset-1">
                <h3>Sign Up</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-11 offset-1">
                <h5>Upload and download knowledge</h5>
            </div>
        </div>
        <p></p>
        <form method="POST" action="{{ route('register') }}">
        @csrf
            <div class="row">
                <div class="col-4 offset-1">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Name" id="name" name="name">
                </div>
                <div class="col-4">
                    <label>Lastname</label>
                    <input type="text" class="form-control" placeholder="Lastname" id="last_name" name="last_name">
                </div>
                <div class="col-2">
                    <label>Country</label>
                    <select class="form-control" id="selCountry_signUp" name="pais">
                        <option>Colombia</option>
                        <option>Brasil</option>
                        <option>Portugal</option>
                        <option>United States</option>
                        <option>France</option>
                    </select>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-4 offset-1">
                    <label>Cellphone number</label>
                    <input type="text" class="form-control" placeholder="Number" id="phone" name="phone">
                </div>
                <div class="col-4">
                    <label>Email</label>
                    <input type="text" class="form-control" placeholder="Email" name="email">
                </div>
            </div>
            <div class="row">
                <div class="col-4 offset-1">
                    <label>Password</label>
                    <input type="text" class="form-control" placeholder="********" name="password">
                </div>
                <div class="col-2">
                    <label>Preferences</label>
                    <select class="form-control" id="selPrefer_signUp">
                        <option>Sun</option>
                        <option>Stars</option>
                        <option>Planets</option>
                        <option>News</option>
                        <option>Art</option>
                    </select>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-11 text-center">
                    <button class="button-34" id="btn_SignUp" type="submit">Create account</button>
                </div>
            </div>
        </form>
        <div class="row" style="margin-top: -220px;">
            <div class="offset-10 col-2 d-flex justify-content-end" >
                <img src="{{ asset('img/user_-removebg.png') }}" alt="" width="450">
            </div>
        </div>
    </div>
</body>
</html>
