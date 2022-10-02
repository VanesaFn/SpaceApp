<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <!-- Core JS Files Bootstrap -->
  <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
  <link href="{{ asset('css/stilosR.css') }}" rel="stylesheet">
  <!-- Core CSS Files Bootstrap-->
	<script src="{{ asset('atlantis/assets/js/core/jquery.3.2.1.min.js') }}"></script>
	<script src="{{ asset('atlantis/assets/js/core/popper.min.js') }}"></script>
	<script src="{{ asset('atlantis/assets/js/core/bootstrap.min.js') }}"></script>
</head>
<body>
    <div class="container-fluid">
    
        <div class="row">
            <div class="col-4">
            </div>
            <div class="col">
                <nav class="navbar navbar-expand-sm">
                </nav>
            </div>
            <div class="span">
                <div class="col">
                    <nav class="navbar navbar-expand-sm">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Bienvenid@</a>
                            </li>
                                <a class="nav-link" href="#">Usuario</a>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="offset-4 text-center">
            <nav class="navbar navbar-expand-sm">
                <h1>Subir un recurso</h1>
            </nav>
        </div>
        <form>
            <div class="row mt-5">
                <div class="col-4 offset-1 ">
                    <label>Nombre del recurso</label>
                    <input type="text" class="form-control" placeholder="Nombre" id="nombreid">
                </div>
                <div class="col-4 offset-1">
                    <label>Seleccione categoria</label>
                    <select class="form-control" id="selectCate">
                        <option>Ciencia</option>
                        <option>Analitica</option>
                        <option>Predicción</option>
                        <option>Programación</option>
                    </select>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-4 offset-1">
                    <label>Descripción</label>
                    <textarea rows="4" type="text" class="form-control" placeholder="Descripción" id="descrip"></textarea>
                </div>
                <div class="col-4 offset-2">
                    <br>
                    <br>
                    <br>
                    <br>
                    <button class="button-34" type="submit">Registrar</button>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-4 offset-1">
                    <label>Contenido del recurso</label>
                    <input type="file" class="form-control" id="ContenR"></input>
                </div>
                <div class="col-12 float-right  text-right pr-5" style="margin-top: -310px;">
                    <img src="{{ asset('img/coheteR.png')}}" width="400" alt="">
                </div>
            </div>
        </form>
        
    </div>
</body>
</html>