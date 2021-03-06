<?php include_once "includes/incluir-declaracion-documento.php"; ?>
	<div class="container-fluid vista-juego" id="cargando">
		<br>
		<br>
		<div class="row text-center">
			<div class="col-md-4">
			</div>
			<div class="col-md-4" id="carga-spinner">
			</div>
			<div class="col-md-4">
			</div>
		</div>
		<br>
		<br>
		<br>
		<div class="row text-center">
			<div class="col-md-4">
			</div>
			<div class="col-md-4" id="carga-texto">
			</div>
			<div class="col-md-4">
			</div>
		</div>
		<br>
		<br>
	</div>	
	<div class="container-fluid vista-juego" id="bienvenida">
		<div class="row">	
			<div class="jumbotron jumbotron-fluid">
			  <div class="container text-center">
				<h1 class="display-4">Juego de cartas JD1</h1>
				<p class="lead">No encontrarás un tomato más fino</p>
				<br>
				<br>
				<br>
				<div class="row">
					<div class="col-6">
						<button type="button" class="btn btn-lg" id="boton-registro">Regístrate</button>
					</div>
					<div class="col-6">
						<button type="button" class="btn btn-lg" id="boton-login">Iniciar sesión</button>
					</div>
				</div>
				<!-- TODO agregar easter egg para poner mas br al pulsar un botón oculto camuflado -->
			  </div>
			</div>
		</div>
	</div>
	<div class="container-fluid vista-juego" id="login">
		<div class="row">
			<div class="col-md-4">
			</div>
			<div class="col-md-4 text-center">
				<br>
				<h1>Login</h1>
				<br>
				<form class="form-signin" id="form-login">
					<label for="inputEmail" class="sr-only">Email address</label>
					<input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Pon tu tomato" required autofocus>
					<br>
					<label for="inputPassword" class="sr-only">Password</label>
					<input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="La llave de tu tomato" required>
					<br>
					<!--
					<div class="checkbox" id="login-checkbox">
						<label>
							<input type="checkbox" value="remember-me" > Recuérdame, tomato
						</label>
					</div>
					-->
					<br>
					<button class="btn btn-lg btn-primary btn-block" type="submit" id="aceptar-login">Enter tomato!</button>
					<br>
					<br>
					<p id="login-no-tienes-cuenta">¿No tienes una cuenta?</p>
					<br>
					<br>
				</form>
			</div>
			<div class="col-md-4">
			</div>
		</div>
	</div>
	<div class="container-fluid vista-juego" id="registro">
		<div class="row">
			<div class="jumbotron jumbotron-fluid">
			  <div class="container text-center">
				<h1 class="display-4">Juego de cartas JD1</h1>
				<p class="lead">"Me he registrado y pasa esto..."</p>
				<br>
			  </div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
			</div>
			<br>
			<div class="col-md-4" id="area-registro">
				<h2>Rellena tus datos</h2>
				<form id="form-registro">
					<div class="form-group">
						<label for="nombre">Nombre de usuario</label>
						<input class="form-control" id="nombre" name="nombre" type="text" placeholder="Nombre de usuario">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input class="form-control" id="email" name="email" type="email" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="password">Contraseña</label>
						<input class="form-control" id="password" name="password" type="password" placeholder="Contraseña">
					</div>
					<br>
					<div class="form-group">
						<input class="form-control" id="enviar-registro" name="enviar" type="submit" value="Registrarse">
					</div>
				</form>
			</div>
			<div class="col-md-4">
			</div>
		</div>
		
	</div>
	<div class="container-fluid vista-juego text-center" id="registro-correcto">
		<br>
		<br>
		<div class="row">
			<div class="col-md-4">
			</div>
			<br>
			<div class="col-md-4" id="area-registro-correcto">
				<h2>Te has registrado con éxito</h2>
				<br>
				<p>Ya puedes comenzar a disfrutar del juego más popular en Twitch</p>
				<br>
				<button class="form-control" id="login-registro-correcto">Iniciar sesión</button>
			</div>
			<div class="col-md-4">
			</div>
		</div>
	</div>
	<div class="container-fluid vista-juego" id="menu-principal">
		<div class="row">
			<div class="jumbotron jumbotron-fluid">
			  <div class="container text-center">
				<h1 class="display-4">Juego de cartas JD1</h1>
				<p class="lead">No encontrarás un tomato más fino</p>
				<br>
				<span><i class="fas fa-user-circle"></i> Jugador | <i class="fas fa-gem"></i> 1866669</span>
				<!-- TODO agregar easter egg para poner mas br al pulsar un botón oculto camuflado -->
			  </div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-3 serie">
						<a href="#" class="contenido-interior" id="menu-jugar">
							<h4>¡Tomato!</h4>
							<br>
							<br>
							<img src="img/menu/jugar.png" class="img-fluid">
						</a>
					</div>
					<div class="col-md-3 serie">
						<div class="contenido-interior" id="menu-personajes">
							<h4>Personajes</h4>
							<br>
							<br>
							<img src="img/menu/personajes.png" class="img-fluid">
						</div>
					</div>
					<div class="col-md-3 serie">
						<div class="contenido-interior" id="menu-cartas">
							<h4>Cartas</h4>
							<br>
							<br>
							<img src="img/menu/cartas.png" class="img-fluid">
						</div>
					</div>
					<div class="col-md-3 serie">
						<div class="contenido-interior" id="menu-tienda">
							<h4>Tienda</h4>
							<br>
							<br>
							<img src="img/menu/tienda.png" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid vista-juego" id="vista-menu-cartas">	
			<div class="row">
				<div class="col-3">
					<img src="img/cartas/desconocido.png" class="img-fluid">
				</div>
				<div class="col-3">
					<img src="img/cartas/desconocido.png" class="img-fluid">
				</div>
				<div class="col-3">
					<img src="img/cartas/desconocido.png" class="img-fluid">
				</div>
				<div class="col-3">
					<img src="img/cartas/desconocido.png" class="img-fluid">
				</div>
				<div class="col-3">
					<img src="img/cartas/desconocido.png" class="img-fluid">
				</div>
				<div class="col-3">
					<img src="img/cartas/desconocido.png" class="img-fluid">
				</div>
				<div class="col-3">
					<img src="img/cartas/desconocido.png" class="img-fluid">
				</div>
				<div class="col-3">
					<img src="img/cartas/desconocido.png" class="img-fluid">
				</div>
			</div>  
		<button type="button" class="btn btn-lg boton-volver-menu">Volver</button>
	</div>
	<div class="container-fluid vista-juego" id="tablero">
		<div class="row zona-jugadores">
			<div class="col-sm-6 text-left">
				<i class="fas fa-user-circle"></i>
				<span>jugador</span>
				<span><i class="fas fa-caret-square-right"></i> 18</span>
			</div>
			<div class="col-sm-6 text-right">
				<span>10 <i class="fas fa-caret-square-left"></i></span>
				rival
				<i class="fas fa-user-circle"></i>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-10">
				<br>
				<div class="row" id="fila_rival">
					<div class="col-sm-3" align="center">
						<div class="carta text-center comun">
							<img src="img/cartas/9-Barrarroso.jpg" class="img-fluid">
							<br>							
							<i class="fas fa-utensil-spoon"></i> 3
							
							<i class="fas fa-shield-alt"></i> 4
							
							<i class="fas fa-heart"></i> 3
						</div>
					</div>
					<div class="col-sm-3" align="center">
						<div class="carta comun">
							<img src="img/cartas/2-lechuga01.png" class="img-fluid">
							<br>							
							<i class="fas fa-utensil-spoon"></i> 3
							
							<i class="fas fa-shield-alt"></i> 4
							
							<i class="fas fa-heart"></i> 3
						</div>
					</div>
					<div class="col-sm-3" align="center">
						<div class="carta rara">
							<img src="img/cartas/3-Nuuuuuul.png" class="img-fluid">
							<br>							
							<i class="fas fa-utensil-spoon"></i> 3
							
							<i class="fas fa-shield-alt"></i> 4
							
							<i class="fas fa-heart"></i> 3
						</div>
					</div>
					<div class="col-sm-3" align="center">						
						<div class="carta especial">
							<img src="img/cartas/4-maquinote19.png" class="img-fluid">
							<br>							
							<i class="fas fa-utensil-spoon"></i> 3
							
							<i class="fas fa-shield-alt"></i> 4
							
							<i class="fas fa-heart"></i> 3
						</div>		
					</div>
				</div>
				<br>
				<div class="row" id="fila_jugador">
					<div class="col-sm-3" align="center">
						<div class="carta epica">
							<img src="img/cartas/5-yyamicloud.jpg" class="img-fluid">
							<br>							
							<i class="fas fa-utensil-spoon"></i> 3
							
							<i class="fas fa-shield-alt"></i> 4
							
							<i class="fas fa-heart"></i> 3
						</div>
					</div>
					<div class="col-sm-3" align="center">
						<div class="carta legendaria">
							<img src="img/cartas/6-D4_Ghost.png" class="img-fluid">
							<br>							
							<i class="fas fa-utensil-spoon"></i> 3
							
							<i class="fas fa-shield-alt"></i> 4
							
							<i class="fas fa-heart"></i> 3
						</div>
					</div>
					<div class="col-sm-3" align="center">
						<div class="carta especial">
							<img src="img/cartas/7-Phoenix.png" class="img-fluid">
							<br>							
							<i class="fas fa-utensil-spoon"></i> 3
							
							<i class="fas fa-shield-alt"></i> 4
							
							<i class="fas fa-heart"></i> 3
						</div>
					</div>
					<div class="col-sm-3" align="center">
						<div class="carta legendaria">
							<img src="img/cartas/8-mine_g.png" class="img-fluid">
							<br>							
							<i class="fas fa-utensil-spoon"></i> 3
							
							<i class="fas fa-shield-alt"></i> 4
							
							<i class="fas fa-heart"></i> 3
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-2 text-center" id="mano-jugador">
				<div class="row">
					<div class="col" id="boton-mano-arriba">
						<i class="fas fa-caret-up fa-2x"></i>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<i class="fas fa-user-circle fa-2x"></i>
						<p>
							Rival
						</p>
						<h2>18</h2>
						<i class="fas fa-chevron-circle-up"></i>
						<h6><small>cartas restantes</small></h6>
					</div>
				</div>
				<div class="row">
					<div class="col" id="boton-mano-abajo">
						<i class="fas fa-caret-down fa-2x"></i>
					</div>
				</div>
			</div>
		</div>		
	</div>
<?php include_once "includes/incluir-cierre-documento.php"; ?>