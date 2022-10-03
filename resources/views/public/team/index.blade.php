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
  <link href="{{ asset('css/home_css.css') }}" rel="stylesheet">

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
  <div class="row">
    <div class="col-12 text-center">
      <h3>Team</h3>
    </div>
  </div>
  <p></p>
  <form>
    <div class="row mt-5">
      <div class="col-2 offset-3">
        <img src="{{ asset('img/vane.png') }}" alt="" width="150" class="rounded-circle">
      </div>
      <div class="col-2">
        <img src="{{ asset('img/Cris.png') }}" alt="" width="150" class="rounded-circle">
      </div>
      <div class="col-2">
        <img src="{{ asset('img/Dowe.png') }}" alt="" width="150" class="rounded-circle">
      </div>
    </div>
  </form>
  <div class="row mt-4">
    <div class="col-2 offset-4">
      <img src="{{ asset('img/hanna.png') }}" alt="" height="150" width="150" class="rounded-circle">
    </div>
    <div class="col-2">
      <img src="{{ asset('img/Felipe.png') }}" alt="" height="150" width="150" class="rounded-circle">
    </div>
  </div>
</body>
</html>