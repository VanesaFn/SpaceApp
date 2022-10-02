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
  <div class="row">
    <div class="col-12 text-center">
      <h3>Team</h3>
    </div>
  </div>
  <div class="row">
    <img src="{{ asset('img/user_-removebg-preview.png') }}" alt="" width="450">
  </div>
</body>
</html>