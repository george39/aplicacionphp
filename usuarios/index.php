
<?php include '../extend/header.php'; ?>

<div class="row">
	<div class="col s12">
		<div class="card">
			<div class="card-content">
				<span class="card-title">Alta de usuarios</span>
				<!-- ins_usuarios es una instancia que se agrega para identificarlo mas rapido y enctype="multipart/form-data es para enviar una foto del usuario-->
				<form class="form" action="ins_usuarios.php" method="post" enctype="multipart/form-data">
					<div class="input-field">
				<!-- onblur="may(this.value, this.id"> es para dejar enviar todos los datos del formulario en mayusculas -->
						<input type="text" name="nick" required autofocus title="DEBE DE TENER ENTRE 8 Y 15 CARACTERES, SOLO LETRAS" pattern="[A-Za-z]{8,15}" id="nick" onblur="may(this.value, this.id)">
						<label for="nick">Nick</label>
					</div>

					<!-- para validar si el usuario existe en la bd -->
					<div class="validacion"></div>

					<!-- para ingresar contraseña -->
					<div class="input-field">
						<input type="password" name="pas1" title="CONTRASEÑA CON NUMEROS, LETRAS MAYUSCULAS Y MINUSCULAS ENTRE 8 Y 15 CARACTERES" pattern="[A-Za-z0-9]{8,15}" id="pas1" required>
						<label for="pas1">Contraseña</label>
					</div>

					<!-- para verificar contraseña -->
					<div class="input-field">
						<input type="password" name="pas1" title="CONTRASEÑA CON NUMEROS, LETRAS MAYUSCULAS Y MINUSCULAS ENTRE 8 Y 15 CARACTERES" pattern="[A-Za-z0-9]{8,15}" id="pas2" required>
						<label for="pas2">Verificar contraseña</label>
					</div>

					<!-- para el nivel del usuario -->
					<select name="nivel" required>
						<option value="" disabled selected>ELIGE UN NIVEL DE USUARIO</option>
						<option value="ADMINISTRADOR">ADMINISTRADOR</option>
						<option value="ASESOR">ASESOR</option>
					</select>

					<!-- para el nombre de usuario -->
					<div class="input-field">
						<input type="text" name="nombre" title="Nombre de usuario" id="nombre" onblur="may(this.value, this.id)" required pattern="[A-Z/s ]+">
						<label for="nombre">Nombre completo del usuario</label>
					</div>

					<!-- para el correo de usuario -->
					<div class="input-field">
						<input type="email" name="correo" title="Correo electronico" id="correo" >
						<label for="corre">Correo electronico</label>
					</div>

					<!-- para la foto del usuario-->
					<div class="file-field input-field">
						<div class="btn">  
							<span>Foto</span>
							<input type="file" name="foto" >
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
						
					</div>
<button type="submit" class="btn black" id="btn_guardar">Guardar<i class="material-icons">send</i> </button>
				</form> 
			</div>
		</div>
	</div>
</div>

<?php include '../extend/script.php'; ?>
<!-- hacemos llamado a los javascripts-->
	<script src="../js/validacion.js"></script>

	

</body>
</html>
