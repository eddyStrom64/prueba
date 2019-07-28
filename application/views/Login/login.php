<h3>Inicia sesión</h3>
<form action="Login/inicioSesion" method="POST" data-carga="">
	<div class="form-group">
		<input type="email" name="email" class="input-text" placeholder="Correo electrónico o usuario">
	</div>
	<div class="form-group">
		<input type="password" name="Password" class="input-text" placeholder="Contraseña">
	</div>
	<div class="checkbox clearfix">
		<div class="form-check checkbox-theme">
			<input class="form-check-input" type="checkbox" value="" id="rememberMe">
			<label class="form-check-label" for="rememberMe">
				Recuérdame
			</label>
		</div>
		<a href="#" id="recuperaCuenta">¿Olvistaste la contraseña?</a>
	</div>
	<div class="form-group">
		<button type="submit" id="ini-sesion" class="btn-md btn-theme btn-block">Inicia sesión</button>
	</div>
	<p class="none-2">¿No eres miembro? <a class="btn-registra" href="#">Registrate aquí</a></p>
</form>