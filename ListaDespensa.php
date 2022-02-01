<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lista de despensa</title>

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
	                    <a href="index.php" >Inicio<span class="full-box" ></span></a>
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
	                <span class="text-center poppins-regular font-weight-bold">Inicio de sesión</span>
	                <form class="full-box" action="">
	                    <div class="form-outline mb-4">
	                        <input type="email" class="form-control" name="login_email_cliente" id="login_email" maxlength="70" required="" placeholder="Email" >
	                    </div>
	                    <div class="form-outline mb-4">
	                        <input type="password" class="form-control" name="login_clave_cliente" id="login_password" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required="" placeholder="Contraseña" >
	                    </div>
	                    <p class="text-center">
	                        <button class="btn btn-info btn-sm w-100">Iniciar sesión</button>
	                    </p>
	                </form>
	                <hr>
	                <p class="text-center full-box">¿No tienes cuenta? <a href="Cliente.php">Regístrate aquí</a></p>

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
                    <!-- Content -->
	<div class="container container-web-page">
		<h3 class="font-weight-bold poppins-regular text-uppercase">Productos</h3>
		<p class="text-justify">Bienvenido al menú de productos congelados, acá encontrara una gran variedad de productos congelados como carne, salchichas, jamon, helados, etc."<i class="fas fa-hamburger fa-fw"></i><i class="fas fa-sort-alpha-down fa-fw"></i>Además, puede buscar los productos por nombre haciendo clic en el botón "<i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR"</p>

		<div class="container-fluid" style="border-top: 1px solid #E1E1E1; padding: 20px;">
			<div class="row align-items-center">
				<div class="col-12 col-sm-4 text-center text-sm-start">
					<div class="dropdown">
						<button class="btn btn-link dropdown-toggle" type="button" id="categorySubMenu" data-mdb-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-hamburger fa-fw"></i> &nbsp; Menú
						</button>
						<div class="dropdown-menu" aria-labelledby="categorySubMenu">
							<a class="dropdown-item" href="#">Menú 1</a>
							<a class="dropdown-item" href="#">Menú 2</a>
							<a class="dropdown-item" href="#">Menú 3</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-4 text-center">
					<button type="button" class="btn btn-link" data-mdb-toggle="modal" data-mdb-target="#saucerModal">
						<i class="fas fa-search fa-fw"></i> &nbsp; Buscar
					</button>
				</div>
				<div class="col-12 col-sm-4 text-center text-sm-end">
					<div class="dropdown">
						<button class="btn btn-link dropdown-toggle" type="button" id="OrderSubMenu" data-mdb-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-sort-alpha-down fa-fw"></i> &nbsp; Ordenar por
						</button>
						<div class="dropdown-menu" aria-labelledby="OrderSubMenu">
							<a class="dropdown-item" href="#">Ascendente (A-Z)</a>
							<a class="dropdown-item" href="#">Descendente (Z-A)</a>
							<a class="dropdown-item" href="#">Precio (Menor a Mayor)</a>
							<a class="dropdown-item" href="#">Precio (Mayor a Menor)</a>
						</div>
					</div>
				</div>
			</div>
	                
	            </div>
	        </div>
	        <a href="Carrito.php" class="header-button full-box text-center" data-mdb-toggle="tooltip" data-mdb-placement="bottom" title="Carrito" >
	            <i class="fas fa-shopping-bag"></i>
	            <span class="badge bg-warning rounded-pill bag-count" >2</span>
	        </a>
	    </div>
	</header>


	<!-- Content -->
	<section class="container-cart ">
	    <div class="container container-web-page">
	        <h3 class="font-weight-bold poppins-regular text-uppercase">Lista de Despensa</h3>
	        <hr>
	    </div>
	    
	    <div class="container" style="padding-top: 40px;">

	        <div class="row">
	            <div class="col-12 col-md-7 col-lg-8">
	                <div class="container-fluid">

	                    <h5 class="poppins-regular font-weight-bold full-box text-center">Helado</h5>
	                    <div class="bag-item full-box">
	                        <figure class="full-box">
	                            <img src="./assets/platillos/helado.jpg" class="img-fluid" alt="platillo_nombre">
	                        </figure>
	                        <div class="full-box">
	                            <div class="container-fluid">
	                                <div class="row">
	                                    <div class="col-12 col-lg-6 text-center mb-4">
	                                        <div class="row justify-content-center">
	                                            <div class="col-auto">
	                                                <div class="form-outline mb-4">
	                                                    <input type="text" value="1" class="form-control text-center" id="product_cant_1" pattern="[0-9]{1,10}" maxlength="10" style="max-width: 100px; ">
	                                                    <label for="product_cant_1" class="form-label">Cantidad</label>
	                                                </div>
	                                            </div>
	                                            <div class="col-auto">
	                                                <button type="button" class="btn btn-success" data-mdb-toggle="tooltip" data-mdb-placement="bottom" title="Actualizar cantidad" ><i class="fas fa-sync-alt fa-fw"></i></button>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="col-12 col-lg-4 text-center mb-4">
	                                        <span class="poppins-regular font-weight-bold" >SUBTOTAL: $5.00</span>
	                                    </div>
	                                    <div class="col-12 col-lg-2 text-center text-lg-end mb-4">
	                                        <button type="button" class="btn btn-danger" data-mdb-toggle="tooltip" data-mdb-placement="bottom" title="Quitar del carrito" >
	                                            <span aria-hidden="true"><i class="far fa-trash-alt"></i></span>
	                                        </button>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>


	                    <hr>


	                    <h5 class="poppins-regular font-weight-bold full-box text-center">Salchicha</h5>
	                    <div class="bag-item full-box">
	                        <figure class="full-box">
	                            <img src="./assets/platillos/salchicha.jpg" class="img-fluid" alt="platillo_nombre">
	                        </figure>
	                        <div class="full-box">
	                            <div class="container-fluid">
	                                <div class="row">
	                                    <div class="col-12 col-lg-6 text-center mb-4">
	                                        <div class="row justify-content-center">
	                                            <div class="col-auto">
	                                                <div class="form-outline mb-4">
	                                                    <input type="text" value="1" class="form-control text-center" id="product_cant_2" pattern="[0-9]{1,10}" maxlength="10" style="max-width: 100px; ">
	                                                    <label for="product_cant_2" class="form-label">Cantidad</label>
	                                                </div>
	                                            </div>
	                                            <div class="col-auto">
	                                                <button type="button" class="btn btn-success" data-mdb-toggle="tooltip" data-mdb-placement="bottom" title="Actualizar cantidad" ><i class="fas fa-sync-alt fa-fw"></i></button>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="col-12 col-lg-4 text-center mb-4">
	                                        <span class="poppins-regular font-weight-bold" >SUBTOTAL: $5.00</span>
	                                    </div>
	                                    <div class="col-12 col-lg-2 text-center text-lg-end mb-4">
	                                        <button type="button" class="btn btn-danger" data-mdb-toggle="tooltip" data-mdb-placement="bottom" title="Quitar del carrito" >
	                                            <span aria-hidden="true"><i class="far fa-trash-alt"></i></span>
	                                        </button>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>

	                </div> 
	            </div>
	            <div class="col-12 col-md-5 col-lg-4">
	                <div class="full-box div-bordered">
	                    <h5 class="text-center text-uppercase bg-success" style="color: #FFF; padding: 10px 0;">Mi lista</h5>
	                    <ul class="list-group bag-details">
	                        <a class="list-group-item d-flex justify-content-between align-items-center text-uppercase poppins-regular font-weight-bold">
	                         
	                        </a>
	                        <a class="list-group-item d-flex justify-content-between align-items-center text-uppercase poppins-regular font-weight-bold">
	                            Helado
	                         
	                        </a>
	                        <a class="list-group-item d-flex justify-content-between align-items-center" style="border-bottom: 1px solid #E1E1E1;"></a>
	                        <a class="list-group-item d-flex justify-content-between align-items-center text-uppercase poppins-regular font-weight-bold">
	                            Salchicha
	                    
	                    <p class="text-center">
						<a href="Pagos.php" class="btn btn-info btn-sm"><i class="fas fa-utensils fa-fw"></i> &nbsp;Guardar lista</a>
				</div>
	                    </p>
	                </div>
	            </div>
	        </div>


	    </div>

	    <!-- Carrito vacio --
	    <div class="container">
	        <p class="text-center" ><i class="fas fa-shopping-bag fa-5x"></i></p>
	        <h4 class="text-center poppins-regular font-weight-bold" >Carrito de compras vacío</h4>
	    </div> -->
	</section>

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