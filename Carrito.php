<!DOCTYPE html>
<html lang="es">
<head>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Menu</title>

	<!-- Normalize V8.0.1 -->
	<link rel="stylesheet" href="./css/normalize.css">

	<!-- MDBootstrap V5 -->
	<link rel="stylesheet" href="./css/mdb.min.css">

	<!-- Font Awesome V5.15.1 -->
	<link rel="stylesheet" href="./css/all.css">

	<!-- Sweet Alert V10.13.0 -->
	<script src="./js/sweetalert2.js"></script>

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
			<nav class="header-navbar full-box poppins-regular font-weight-bold">
				<ul class="list-unstyled full-box">
					<li>
						<a href="Index.php">Inicio<span class="full-box"></span></a>
					</li>
					<li>
						<a href="menu.php">Menú<span class="full-box"></span></a>
					</li>
					<li>
						<a href="Proveedor.php">Catalogo de Proveedores<span class="full-box"></span></a>
					</li>
				</ul>
			</nav>
			<div class="header-button full-box text-center btn-login-menu">
				<i class="fas fa-user-alt" onclick="show_popup_login()" data-mdb-toggle="tooltip" data-mdb-placement="bottom" title="Login"></i>
				<div class="div-bordered popup-login">

					<!-- Inicio de sesion -->
					<span class="text-center poppins-regular font-weight-bold">Inicio de sesión</span>
					<form class="full-box" action="">
						<div class="form-outline mb-4">
							<input type="email" class="form-control" name="login_email_cliente" id="login_email" maxlength="70" required="" placeholder="Email">
						</div>
						<div class="form-outline mb-4">
							<input type="password" class="form-control" name="login_clave_cliente" id="login_password" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required="" placeholder="Contraseña">
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
			<a href="carrito.php" class="header-button full-box text-center" data-mdb-toggle="tooltip" data-mdb-placement="bottom" title="Carrito">
				<i class="fas fa-shopping-bag"></i>
				<span class="badge bg-warning rounded-pill bag-count">2</span>
			</a>
		</div>
	</header>
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script>
        window.onload = function () {
            // Variables
            const baseDeDatos = [
                {
                  id: 1,
                  nombre: 'carne para hamburguesa',
                  precio: 270,
                  imagen: 'carne para hamburguesa.jpg'
              },
              {
                  id: 2,
                  nombre: 'Helado',
                  precio: 190,
                  imagen: 'Helado.jpg'
              },
              {
                  id: 3,
                  nombre: 'leche',
                  precio: 90,
                  imagen: 'leche.jpg'

              },
               {
                  id: 4,
                  nombre: 'mantequilla',
                  precio: 120,
                  imagen: 'mantequilla.jpg'
              },
              {
                  id: 5,
                  nombre: 'yogurt',
                  precio: 50,
                  imagen: 'yogurt.jpg'
              },
              {
                  id: 6,
                  nombre: 'salchicha',
                  precio: 194,
                  imagen: 'salchicha.jpg'
              }
              
            ];

          let carrito = [];
          let total = 0;
          const DOMitems = document.querySelector('#items');
          const DOMcarrito = document.querySelector('#carrito');
          const DOMtotal = document.querySelector('#total');
          const DOMbotonVaciar = document.querySelector('#boton-vaciar');

          // Funciones

          /**
          * Dibuja todos los productos a partir de la base de datos. No confundir con el carrito
          */
          function renderizarProductos() {
              baseDeDatos.forEach((info) => {
                  // Estructura
                  const miNodo = document.createElement('div');
                  miNodo.classList.add('card', 'col-sm-4');
                  // Body
                  const miNodoCardBody = document.createElement('div');
                  miNodoCardBody.classList.add('card-body');
                  // Titulo
                  const miNodoTitle = document.createElement('h5');
                  miNodoTitle.classList.add('card-title');
                  miNodoTitle.textContent = info.nombre;
                  // Imagen
                  const miNodoImagen = document.createElement('img');
                  miNodoImagen.classList.add('img-fluid');
                  miNodoImagen.setAttribute('src', info.imagen);
                  // Precio
                  const miNodoPrecio = document.createElement('p');
                  miNodoPrecio.classList.add('card-text');
                  miNodoPrecio.textContent = info.precio + '$mxn';
                  // Boton 
                  const miNodoBoton = document.createElement('button');
                  miNodoBoton.classList.add('btn', 'btn-primary');
                  miNodoBoton.textContent = '+';
                  miNodoBoton.setAttribute('marcador', info.id);
                  miNodoBoton.addEventListener('click', anyadirProductoAlCarrito);
                  // Insertamos
                  miNodoCardBody.appendChild(miNodoImagen);
                  miNodoCardBody.appendChild(miNodoTitle);
                  miNodoCardBody.appendChild(miNodoPrecio);
                  miNodoCardBody.appendChild(miNodoBoton);
                  miNodo.appendChild(miNodoCardBody);
                  DOMitems.appendChild(miNodo);
              });
          }

          /**
          * Evento para agregar un producto al carrito de la compra
          */
          function anyadirProductoAlCarrito(evento) {
              // Anyadimos el Nodo a nuestro carrito
              carrito.push(evento.target.getAttribute('marcador'))
              // Calculo el total
              calcularTotal();
              // Actualizamos el carrito 
              renderizarCarrito();

          }

          /**
          * Dibuja todos los productos guardados en el carrito
          */
          function renderizarCarrito() {
              // Vaciamos todo el html
              DOMcarrito.textContent = '';
              // Quitamos los duplicados
              const carritoSinDuplicados = [...new Set(carrito)];
              // Generamos los Nodos a partir de carrito
              carritoSinDuplicados.forEach((item) => {
                  // Obtenemos el item que necesitamos de la variable base de datos
                  const miItem = baseDeDatos.filter((itemBaseDatos) => {
                      // Coincide las id? Solo puede existir un caso
                      return itemBaseDatos.id === parseInt(item);
                  });
                  // Cuenta el numero de veces que se repite el producto
                  const numeroUnidadesItem = carrito.reduce((total, itemId) => {
                      // Coincide las id? Incremento el contador, en caso contrario no mantengo
                      return itemId === item ? total += 1 : total;
                  }, 0);
                  // Creamos el nodo del item del carrito
                  const miNodo = document.createElement('li');
                  miNodo.classList.add('list-group-item', 'text-right', 'mx-2');
                  miNodo.textContent = `${numeroUnidadesItem} x ${miItem[0].nombre} - ${miItem[0].precio}$`;
                  // Boton de borrar
                  const miBoton = document.createElement('button');
                  miBoton.classList.add('btn', 'btn-danger', 'mx-5');
                  miBoton.textContent = 'X';
                  miBoton.style.marginLeft = '1rem';
                  miBoton.dataset.item = item;
                  miBoton.addEventListener('click', borrarItemCarrito);
                  // Mezclamos nodos
                  miNodo.appendChild(miBoton);
                  DOMcarrito.appendChild(miNodo);
              });
          }

          /**
          * Evento para borrar un elemento del carrito
          */
          function borrarItemCarrito(evento) {
              // Obtenemos el producto ID que hay en el boton pulsado
              const id = evento.target.dataset.item;
              // Borramos todos los productos
              carrito = carrito.filter((carritoId) => {
                  return carritoId !== id;
              });
              // volvemos a renderizar
              renderizarCarrito();
              // Calculamos de nuevo el precio
              calcularTotal();
          }

          /**
          * Calcula el precio total teniendo en cuenta los productos repetidos
          */
          function calcularTotal() {
              // Limpiamos precio anterior
              total = 0;
              // Recorremos el array del carrito
              carrito.forEach((item) => {
                  // De cada elemento obtenemos su precio
                  const miItem = baseDeDatos.filter((itemBaseDatos) => {
                      return itemBaseDatos.id === parseInt(item);
                  });
                  total = total + miItem[0].precio;
              });
              // Renderizamos el precio en el HTML
              DOMtotal.textContent = total.toFixed(2);
          }

          /**
          * Varia el carrito y vuelve a dibujarlo
          */
          function vaciarCarrito() {
              // Limpiamos los productos guardados
              carrito = [];
              // Renderizamos los cambios
              renderizarCarrito();
              calcularTotal();
          }

          // Eventos
          DOMbotonVaciar.addEventListener('click', vaciarCarrito);

          // Inicio
          renderizarProductos();


        }
    
    </script>
</head>
<body>
    <div class="container">
        <div class="row">
            <!-- Elementos generados a partir del JSON -->
            <main id="items" class="col-sm-8 row"></main>
            <!-- Carrito -->
            <aside class="col-sm-4">
                <h2>Carrito</h2>
                <!-- Elementos del carrito -->
                <ul id="carrito" class="list-group"></ul>
                <hr>
                <!-- Precio total -->
                <p class="text-right">Total: <span id="total"></span>&euro;</p>
                <button id="boton-vaciar" class="btn btn-danger">Eliminar Compra </button>
				<a href="Pagos.php" class="btn btn-success btn-sm">Confirmar </button>
	</a>
	</div>
            </aside>
        </div>
    </div>
</body>
</html>

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