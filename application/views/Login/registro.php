<h3>¡Crea una cuenta!</h3>
<form action="Login/registro" method="POST" data-carga="">
	<div class="form-group">
		<input type="text" name="fullname" class="input-text" placeholder="Nombre completo">
	</div>
	<div class="form-group">
		<input type="email" name="email" class="input-text" placeholder="Correo electrónico">
	</div>
	<div class="form-group">
		<input type="password" name="Password" class="input-text" placeholder="Contraseña">
    </div>
    <div class="form-group">
		<select name="perfil" id="perfil" class="perfil form-control">
            <option value="0" class="alumno">Selecciona un perfil</option>
            <option value="1" class="alumno">Alumno</option>
            <option value="2" class="profesor">Profesor</option>
        </select>
	</div>
	<div class="form-group">
		<button type="submit" id="registro" class="btn-md btn-theme btn-block">Regístrate</button>
	</div>
	<p class="none-2">¿Ya eres miembro? <a class="btn-ini-sesion" href="#">Ingresa aquí</a></p>
</form>

