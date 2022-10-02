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
    <link href="{{ asset('css/app_public.css') }}" rel="stylesheet">
<<<<<<< HEAD
    <link href="{{ asset('css/stilosR.css') }}" rel="stylesheet">
=======
    <link href="{{ asset('css/home_css.css') }}" rel="stylesheet">
>>>>>>> 61503c57088b5c306ed2820db2de14c6c87a3fa5
    <!-- Core CSS Files Bootstrap-->
    <title>Sunisoft</title>
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" />
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
<<<<<<< HEAD
                    <ul class="navbar-nav ml-4">
                        <li class="nav-item  ">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('') }}">About us</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('resources_public') }}">Resources</a>
=======
                    <ul class="navbar-nav ">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('home')}}">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('about_us')}}">About us</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('resources_public')}}">Resources</a>
>>>>>>> 61503c57088b5c306ed2820db2de14c6c87a3fa5
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-2 offset-2">
                <div class="span">
                    <nav class="navbar navbar-expand-sm float-right">
                        <ul class="navbar-nav">
                            <li class="nav-item active mt-1">
                                <a class="button-34" href="{{route('sign_up')}}" style="text-decoration: none;">Sign Up</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <p></p>

        <div class="row">
            <div class="col-6">
                <img src="{{ asset('img/user_-removebg.png') }}" alt="">
            </div>
            <div class="col-6">
                <div class="row" style="margin-top: 145px;">
                    <div class="col-12 text-left">
                        <h3>Sign In</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-left">
                        <h5>Welcome to knowledge</h5>

                    </div>
                </div>
                <form method="POST" action="{{ route('login') }}">
                @csrf
                
                <div class="row">
                    <div class="col-10 text-left">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="Email" id="email_signIn" name="email">
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 text-left">
                        <label>Password</label>
                        <input type="text" class="form-control" placeholder="Enter your password" id="pass_signIn" name="password">
                    </div>
                </div>
                
                <div class="row mt-4">
                    <div class="col-10 text-center">
                        <button type="submit" class="button-34" id="btn_SignIn">Log In</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</body>
</html>
