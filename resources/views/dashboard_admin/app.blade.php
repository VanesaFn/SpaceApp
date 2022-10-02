<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Tecnizona</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="shortcut icon" href="{{ asset('img/icono_stac.png') }}" />

	<!-- Core JS Files -->
	<script src="{{ asset('atlantis/assets/js/core/jquery.3.2.1.min.js') }}"></script>
	<script src="{{ asset('atlantis/assets/js/core/popper.min.js') }}"></script>
	<script src="{{ asset('atlantis/assets/js/core/bootstrap.min.js') }}"></script>
	<!-- jQuery UI -->
	<script src="{{ asset('atlantis/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('atlantis/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>
	<!-- jQuery Scrollbar -->
	<script src="{{ asset('atlantis/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
	<!-- Atlantis JS -->
	<script src="{{ asset('atlantis/assets/js/atlantis.min.js') }}"></script>
    <!-- Chart Circle -->
	<script src="{{asset('atlantis/assets/js/plugin/chart-circle/circles.min.js')}}"></script>
    <!-- Chart JS-->
	<script src="{{asset('atlantis/assets/js/plugin/chart.js/chart.min.js')}}"></script>
    <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Sparkline -->
	<script src="{{asset('atlantis/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>
    <!--JS de TECNIZONA HUB-->
	<script src="{{ asset('js/admin.js') }}"></script>
	<!-- Fonts and icons -->
	<script src="{{ asset('atlantis/assets/js/plugin/webfont/webfont.min.js') }}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ["{{ asset('atlantis/assets/css/fonts.css') }}"]},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
    <!--Select 2-->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

	<!-- CSS Files -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('atlantis/assets/css/atlantis.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-F3XE5QEQ44"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-F3XE5QEQ44');
    </script>
</head>
<body>
    <!--Boton Whatsapp-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send?phone=573225092395&text=Hola%20amig%40%20Tecnic%40%20%F0%9F%91%8B%0A%0ABienvenido%20a%20nuestra%20tienda%20Mayor%C3%ADsta%20Tecnizona%20donde%20encontrar%C3%A1s%20los%20mejores%20precios%20%F0%9F%92%B8%20en%20cuanto%20a%20tecnolog%C3%ADa%20%20se%20refiere%20%F0%9F%A6%BE%F0%9F%92%BB%F0%9F%93%B2%F0%9F%8E%81%2C%20En%20que%20podemos%20ayudarte%3F%20%F0%9F%98%83%20%0A%0AEquipo%20Comercial%20%F0%9F%91%A8%E2%80%8D%F0%9F%92%BB%F0%9F%91%A9%E2%80%8D%F0%9F%92%BB%F0%9F%A5%87%F0%9F%92%BB%F0%9F%93%B2%0ATecnizona" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
	<div class="wrapper sidebar_minimize">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="dark2">

				<a href="" class="logo">
                    <div class="avatar-sm float-left mr-2">
					    <img src="{{ asset('img/icono_stac.png') }}" class="navbar-brand" width="30" height="30">
                    </div>
                    <span style="color: white;">Tecnizona</span>
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="dark">
				<div class="container-fluid">
                   
                            <div class="collapse" id="search-nav">
                                <form class="navbar-left navbar-form nav-search mr-md-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button type="submit" class="btn btn-search pr-1">
                                                <i class="fa fa-search search-icon"></i>
                                            </button>
                                        </div>
                                        <input type="text" placeholder="Buscar ..." class="form-control">
                                    </div>
                                </form>
                            </div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                      
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
								<span class="notification"></span>
							</a>
							<ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
								<li>
									<div class="dropdown-title">Tienes  notificaciones</div>
								</li>
								<li>
									<div class="notif-center">
                                            <a href="#">
                                                <div class="notif-icon notif-primary"> <i class="fas fa-clipboard-check"></i> </div>
                                                <div class="notif-content">
                                                    <span class="block">
                                                         nuevos pedidos registrados
                                                    </span>
                                                    <span class="time">Hace </span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-icon notif-warning"> <i class="fas fas fa-child"></i> </div>
                                                <div class="notif-content">
                                                    <span class="center">
                                                        No hay pedidos registrados
                                                    </span>
                                                </div>
                                            </a>
									</div>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
								<i class="fas fa-user"></i>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="u-text">
												<h4></h4>
											</div>
										</div>
									</li>
									<li>
                                        <!--
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Mi Perfil</a>
                                        -->
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            Cerrar Sesión
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>
		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2" data-background-color="dark2">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
                    <!--
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="../../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Hizrian
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
                    -->
                    
				</div>
			</div>
		</div>
		<div class="main-panel">
			<div class="content">
				<div class="content">
                    
                    @yield('content')
                </div>
			</div>
			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
					</nav>
					<div class="copyright ml-auto">
						2022 © power by <a href="https://www.stac.com.co" style="text-decoration: none">STAC</a>
					</div>
				</div>
			</footer>
		</div>
	</div>
</body>

</html>
