<?php
	require 'app.php';
	use App\Cliente;
	$propiedades = Cliente::all();
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Crear cuenta</title>

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
	        <a href="Carrito.php" class="header-button full-box text-center" data-mdb-toggle="tooltip" data-mdb-placement="bottom" title="Carrito" >
	            <i class="fas fa-shopping-bag"></i>
	            <span class="badge bg-warning rounded-pill bag-count" >2</span>
	        </a>
	    </div>
	</header>


	<!-- Content -->
	<div class="container container-web-page">
	    <h3 class="font-weight-bold poppins-regular text-uppercase">Crear cuenta</h3>
	    <p class="text-justify">Al crear una cuenta en nuestro sitio web usted acepta nuestros <a href="#">términos y condiciones</a>. La información introducida en el formulario debe de ser clara, precisa y legitima. Para crear una cuenta debe de llenar todos los campos que son obligatorios marcados con el icono <i class="fab fa-font-awesome-alt"></i></p>
	    <hr>
	    <div class="row">
	        <div class="col-12">
	            <form class="div-bordered" action="" style="padding: 15px;">

	                <fieldset>
				        <legend><i class="far fa-address-card"></i> &nbsp; Información personal</legend>
	                    <div class="container-fluid">
	                        <div class="row">
	                            <div class="col-12 col-md-6">
	                                
	                         
								
		<?php foreach( $propiedades as $propiedad ): ?>
			<div class="col-12 col-md-4">
	                                <div class="form-outline mb-4">
	                                    <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,35}" class="form-control" name="cliente_nombre_reg" id="cliente_nombre" maxlength="35">
	                                    <label for="cliente_nombre" class="form-label">Nombres:<?php echo $propiedad->nombres; ?></label>
	                                </div>
	                            </div>

	                            <div class="col-12 col-md-4">
	                                <div class="form-outline mb-4">
	                                    <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,35}" class="form-control" name="cliente_apellido_reg" id="cliente_apellido" maxlength="35">
	                                    <label for="cliente_apellido" class="form-label">Apellidos:<?php echo $propiedad->apellido; ?></label>
	                                </div>
	                            </div>

	                            <div class="col-12 col-md-4">
	                                <div class="form-outline mb-4">
	                                    <input type="text" pattern="[0-9()+]{8,20}" class="form-control" name="cliente_telefono_reg" id="cliente_telefono" maxlength="20">
	                                    <label for="" class="form-label">Telefono: <?php echo $propiedad->telefono; ?></label>
	                                </div>
	                            </div>
							

									<legend><i class="fas fa-user-lock"></i> &nbsp; Información de inicio de sesión</legend>
	                    <div class="container-fluid">
	                        <div class="row">
	                            <div class="col-12 col-md-4">
	                                <div class="form-outline mb-4">
	                                    <input type="email" class="form-control" name="cliente_email_reg" id="cliente_email" maxlength="47">
	                                    <label for="cliente_email" class="form-label">Correo: <?php echo $propiedad->correo; ?></label>
	                                </div>
	
	                            <div class="col-12 col-md-4">
	                                <div class="form-outline mb-4">
	                                    <input type="password" class="form-control" name="cliente_clave_2_reg" id="cliente_clave_2" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" >
	                                    <label for="cliente_clave_2" class="form-label">Contraseña: <?php echo $propiedad->contraseña; ?></label>
	                                </div>
	                            </div>
				
		<?php endforeach ?>


	                        </div>
	                    </div>
	                </fieldset>

	                <br><br>

	                <fieldset>
	                    <legend><i class="fas fa-map-marked-alt"></i> &nbsp; Información de envió</legend>
	                    <div class="container-fluid">
	                        <div class="row">
	                            <div class="col-12 col-md-4">
	                                <div class="form-outline mb-4">
	                                    <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}" class="form-control" name="cliente_provincia_reg" id="cliente_provincia" maxlength="30">
	                                    <label for="cliente_provincia" class="form-label">Estado, provincia o departamento <i class="fab fa-font-awesome-alt"></i></label>
	                                </div>
	                            </div>
	                            <div class="col-12 col-md-4">
	                                <div class="form-outline mb-4">
	                                    <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}" class="form-control" name="cliente_ciudad_reg" id="cliente_ciudad" maxlength="30">
	                                    <label for="cliente_ciudad" class="form-label">Ciudad o pueblo <i class="fab fa-font-awesome-alt"></i></label>
	                                </div>
	                            </div>
	                            <div class="col-12 col-md-4">
	                                <div class="form-outline mb-4">
	                                    <input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{4,70}" class="form-control" name="cliente_direccion_reg" id="cliente_direccion" maxlength="70">
	                                    <label for="cliente_direccion" class="form-label">Calle o dirección de casa <i class="fab fa-font-awesome-alt"></i></label>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </fieldset>

	           

	                <p class="text-center" style="margin-top: 40px;">
	                    <button type="submit" class="btn btn-info btn-sm"><i class="far fa-paper-plane"></i> &nbsp; CREAR CUENTA</button>  
	                </p>
					<a href="Pagos.php" class="btn btn-info btn-sm"><i class="fas fa-utensils fa-fw"></i> &nbsp;Formas de Pago</a>
				</div>
	                <p class="text-center">
	                    <small>Los campos marcados con <i class="fab fa-font-awesome-alt"></i> son obligatorios</small>
	                </p>
	            </form>
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
	                    <li><i class="fas fa-map-marker-alt fa-fw"></i> Maxcanú, Yúcatan</li>
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