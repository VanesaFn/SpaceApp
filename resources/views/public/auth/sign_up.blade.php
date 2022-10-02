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
    <script src="{{ asset('atlantis/assets/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('atlantis/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('atlantis/assets/js/core/bootstrap.min.js') }}"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row" style="z-index: 40;">
            <div class="col-3 offset-4  ">
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
                                <a class="nav-link" href="#"><u>Log in</u></a>
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
        <form>
            <div class="row">
                <div class="col-4 offset-1">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Name" id="name_signUp">
                </div>
                <div class="col-4">
                    <label>Lastname</label>
                    <input type="text" class="form-control" placeholder="Lastname" id="lastname_signUp">
                </div>
                <div class="col-2">
                    <label>Country</label>
                    <select class="form-control" id="selCountry_signUp">
                        <option>Colombia</option>
                        <option>Brasil</option>
                        <option>Portugal</option>
                        <option>United States</option>
                        <option>France</option>
                    </select>
                </div>
            </div>
        </form>
        <p></p>
        <form>
            <div class="row" style="z-index:40 !important;">
                <div class="col-4 offset-1">
                    <label>Cellphone number</label>
                    <input type="text" class="form-control" placeholder="Number" id="number_signUp">
                </div>
                <div class="col-4">
                    <label>Email</label>
                    <input type="text" class="form-control" placeholder="Email" id="email_signUp">
                </div>
            </div>
        </form>
        <p></p>
        <form>
            <div class="row" style="z-index:40;">
                <div class="col-4 offset-1">
                    <label>Password</label>
                    <input type="text" class="form-control" placeholder="********" id="pass_signUp">
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
        </form>
        <p></p>
        <div class="row mt-4">
            <div class="col-11 text-center">
                <button type="button" class="button-34" id="btn_SignUp"
                type="submit">Create account</button>
            </div>
        </div>
        <div class="row" style="margin-top: -240px;">
            <div class="col-12 d-flex justify-content-end" >
                <img src="{{ asset('img/user_-removebg-preview.png') }}" alt="" width="450">
            </div>
        </div>
    </div>
</body>
</html>
