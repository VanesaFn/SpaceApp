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
    <!-- Core CSS Files Bootstrap-->
    <title>Sunisoft</title>
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" />
    <script src="{{ asset('atlantis/assets/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('atlantis/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('atlantis/assets/js/core/bootstrap.min.js') }}"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
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
                            <li class="nav-item active mt-1">
                                <button type="button" class="button-34" >Sign Up</button>
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
                <div class="row">
                    <div class="col-10 text-left">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="Email" id="email_signIn">
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 text-left">
                        <label>Password</label>
                        <input type="text" class="form-control" placeholder="Enter your password" id="pass_signIn">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-10 text-center">
                        <button type="button" class="button-34" id="btn_SignIn"
                        type="submit">Log In</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
