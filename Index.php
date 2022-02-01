<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Congelados</title>

	<!-- Normalize V8.0.1 -->
	<link rel="stylesheet" href="./css/normalize.css">

	<!-- MDBootstrap V5 -->
	<link rel="stylesheet" href="./css/mdb.min.css">

	<!-- Font Awesome V5.15.1 -->
	<link rel="stylesheet" href="./css/all.css">

	<!-- Sweet Alert V10.13.0 -->
	<script src="./js/sweetalert2.js" ></script>

	<!-- General Styles -->
	<link rel="stylesheet" href="./css/style.css">

</head>
<body>

	<!-- Header -->
	<header class="header full-box">
	    <div class="header-brand text-center full-box">
	        <a href="Index.php">
	            <img src="./assets/img/frio.jpeg" alt="logo" class="img-fluid">
	        </a>
	    </div>

	    <div class="header-options full-box">
	        <nav class="header-navbar full-box poppins-regular font-weight-bold" >
	            <ul class="list-unstyled full-box">
	                <li>
	                    <a href="Index.php" >Inicio<span class="full-box" ></span></a>
	                </li>
	                <li>
	                    <a href="menu.php" >Menú<span class="full-box" ></span></a>
	                </li>
					<li>
						<a href="Proveedor.php">Catalogo de Proveedores<span class="full-box"></span></a>
					</li>
	            </ul>
	        </nav>
	        <div class="header-button full-box text-center btn-login-menu" >
	            <i class="fas fa-user-alt" onclick="show_popup_login()" data-mdb-toggle="tooltip" data-mdb-placement="bottom" title="Login" ></i>
	            <div class="div-bordered popup-login">

	                <!-- Inicio de sesion -->
	                <span class="text-center poppins-regular font-weight-bold">Sesión Iniciada</span>
	                <form class="full-box" action="">
	                    <div class="form-outline mb-4">
	                        <input type="email" class="form-control" name="login_email_cliente" id="login_email" maxlength="70" required="" placeholder="Reyna" >
	                    </div>
	                    <div class="form-outline mb-4">
	                        <input type="password" class="form-control" name="login_clave_cliente" id="login_password" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required="" placeholder="Usuario: Reyna123">
	                    </div>
	                    <p class="text-center">
	                        <button class="btn btn-info btn-sm w-100">Salir </button>
						<a href="ListaDespensa.php" class="btn btn-info btn-sm"><i class="fas fa-utensils fa-fw"></i> &nbsp; Compra rápida</a>
	                    </p>
	                </form>
	                <hr>
	                <p class="text-center full-box">¿No tienes cuenta? <a href="cliente.php">Regístrate aquí</a></p>

	                <!-- Cerrar sesion --
	                <div class="text-center full-box">
	                    <i class="fas fa-user-circle fa-4x"></i>
	                </div>
	                <span class="poppins-regular font-weight-bold">Nombre de usuario</span>
	                <div class="text-center full-box">
	                    <a href="#" class="btn btn-info btn-sm w-100"><i class="fas fa-user-cog fa-fw"></i> &nbsp; Mi cuenta</a>
	                </div>
	                <div class="text-center full-box">
	                    <a href="#" class="btn btn-info btn-sm w-100"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Dashboard</a>
	                </div>
	                <form class="full-box" action="">
	                    <button class="btn btn-raised btn-primary btn-sm w-100" ><i class="fas fa-door-open fa-fw"></i> &nbsp; Cerrar sesión</button>
	                </form>-->
	                
	            </div>
	        </div>
	        <a href="carrito.php" class="header-button full-box text-center" data-mdb-toggle="tooltip" data-mdb-placement="bottom" title="Carrito" >
	            <i class="fas fa-shopping-bag"></i>
	            <span class="badge bg-warning rounded-pill bag-count" >2</span>
	        </a>
	    </div>
	</header>


	<!-- Content -->
	<div class="banner">
	    <div class="banner-body">
	        <h3 class="text-uppercase">Congelados</h3>
	        <p>Enceuntras gran variedad de elimentos congelados</p>
	        <a href="menu.php" class="btn btn-warning"><i class="fas fa-hamburger fa-fw"></i> &nbsp; Ir al menu</a>
	    </div>
	</div>

	<div class="container container-web-page">
	    <h3 class="text-center text-uppercase poppins-regular font-weight-bold">Nuestros servicios</h3>
	    <br>
	    <div class="row">
	        <div class="col-12 col-sm-6 col-md-4">
	            <p class="text-center"><i class="fas fa-shipping-fast fa-5x"></i></p>
	            <h5 class="text-center text-uppercase poppins-regular font-weight-bold">Envíos a domicilio</h5>
	            <p class="text-center">Tendremos envios a domicilio a cualquier parte del pueblo.</p>
	        </div>
	        <div class="col-12 col-sm-6 col-md-4">
	            <p class="text-center"><i class="fas fa-utensils fa-5x"></i></p>
	            <h5 class="text-center text-uppercase poppins-regular font-weight-bold">Gran variedad de productos</h5>
	            <p class="text-center">Gracias a que colaboramos con muchas tiendas podras encontrar los productos que necesites para la despensa de su casa</p>
	        </div>
	        <div class="col-12 col-sm-6 col-md-4">
	            <p class="text-center"><i class="fas fa-store-alt fa-5x"></i></p>
	            <h5 class="text-center text-uppercase poppins-regular font-weight-bold">App de Despensa Digital</h5>
	            <p class="text-center">Con la aplicacion podras visualizar los productos y hacer las compras.</p>
	        </div>
	    </div>
	</div>

	<hr>

	<div class="container-fluid container-web-page">
	    <h3 class="text-center text-uppercase poppins-regular font-weight-bold">Productos más vendidos</h3>
	    <div class="container-cards full-box">

	        <div class="card shadow-1-strong">
	            <img class="card-img-top" src="./assets/platillos/salchicha.jpg" alt="nombre_platillo">
	            <div class="card-body text-center">
	                <h5 class="card-title font-weight-bold">Salchicha</h5>
	                <p class="card-text lead"><span class="badge bg-secondary">$25.00 </span></p>
	            </div>
	            <div class="card-body text-center">
	                <button type="button" class="btn btn-success btn-sm"><i class="fas fa-shopping-bag fa-fw"></i> &nbsp; Agregar</button>
	                &nbsp; &nbsp;
	                <a href="Detalles.php" class="btn btn-info btn-sm"><i class="fas fa-utensils fa-fw"></i> &nbsp; Detalles</a>
	            </div>
	        </div>

	        <div class="card shadow-1-strong">
	            <img class="card-img-top" src="./assets/platillos/costillas.jpg" alt="nombre_platillo">
	            <div class="card-body text-center">
	                <h5 class="card-title font-weight-bold">Costillas de cerdo</h5>
	                <p class="card-text lead"><span class="badge bg-secondary">$25.00 </span></p>
	            </div>
	            <div class="card-body text-center">
	                <button type="button" class="btn btn-success btn-sm"><i class="fas fa-shopping-bag fa-fw"></i> &nbsp; Agregar</button>
	                &nbsp; &nbsp;
	                <a href="Detalles.php" class="btn btn-info btn-sm"><i class="fas fa-utensils fa-fw"></i> &nbsp; Detalles</a>
	            </div>
	        </div>

	        <div class="card shadow-1-strong">
	            <img class="card-img-top" src="./assets/platillos/hamburguesa.jpg" alt="nombre_platillo">
	            <div class="card-body text-center">
	                <h5 class="card-title font-weight-bold">Carne para hamburgusesas</h5>
	                <p class="card-text lead"><span class="badge bg-secondary">$25.00 </span></p>
	            </div>
	            <div class="card-body text-center">
	                <button type="button" class="btn btn-success btn-sm"><i class="fas fa-shopping-bag fa-fw"></i> &nbsp; Agregar</button>
	                &nbsp; &nbsp;
	                <a href="Detalles.php" class="btn btn-info btn-sm"><i class="fas fa-utensils fa-fw"></i> &nbsp; Detalles</a>
	            </div>
	        </div>

	    </div>
	    <br>
	    <p class="text-center"><a href="menu.php" class="btn btn-primary"><i class="fas fa-hamburger fa-fw"></i> &nbsp; Ir al menu</a></p>
	</div>

	<hr>

	<div class="container container-web-page">
	    <div class="row justify-content-md-center">
	        <div class="col-12 col-md-6">
	            <figure class="full-box">
	                <img src="./assets/img/registration.png" alt="registration" class="img-fluid">
	            </figure>
	        </div>
	        <div class="w-100"></div>
	        <div class="col-12 col-md-6">
	            <h3 class="text-center text-uppercase poppins-regular font-weight-bold">Crea tu cuenta</h3>
	            <p class="text-justify">
	                Crea tu cuenta para poder realizar tus compras desde tu casa, es muy fácil y rápido.
	            </p>
	            <p class="text-center">
	                <a href="cliente.php" class="btn btn-primary" >Crear cuenta</a>
	            </p>
	        </div>
	    </div>
	</div>

	<!-- Footer -->
	<footer class="footer">
	    <div class="container">
	        <div class="row">
	            <div class="col-12 col-md-4">
	                <ul class="list-unstyled" >
	                    <li><h5 class="font-weight-bold" ><i class="far fa-copyright"></i> Despensa Digital</h5></li>
	                    <li> Todos los derechos reservados </li>
	                </ul>
	            </div>
	            <div class="col-12 col-md-4">
	                <ul class="list-unstyled" >
	                    <li><h5 class="font-weight-bold" >Despensa Digital</h5></li>
	                    <li><i class="fas fa-map-marker-alt fa-fw"></i> Maxcanú, Yucatan</li>
	                </ul>
	            </div>
	            <div class="col-12 col-md-4">
	                <ul class="list-unstyled" >
	                    <li><h5 class="font-weight-bold" >Siguenos en:</h5> </li>
	                    <li>
	                        <a href="https://es-la.facebook.com/CarlosAlfaroES/" class="footer-link" target="_blank" >
	                            <i class="fab fa-facebook fa-fw"></i> Facebook
	                        </a>
	                    </li>

	                    <li>
	                        <a href="https://www.youtube.com/c/CarlosAlfaro007" class="footer-link" target="_blank" >
	                            <i class="fab fa-youtube fa-fw"></i>
	                                Youtube
	                        </a>
	                    </li>
	                </ul>
	            </div>
	        </div>
	    </div>
	</footer>


	<!-- MDBootstrap V5 -->
	<script src="./js/mdb.min.js" ></script>

	<!-- General scripts -->
	<script src="./js/main.js" ></script>
</body>
</html>