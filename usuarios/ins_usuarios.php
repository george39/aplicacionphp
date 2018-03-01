<?php
#hacemos llamado a la conexion 
include '../conexion/conexion.php';
#validadmos si se esta enviando por metodo post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	# trae las variables o datos que vienen desde el formulario. Htmlentities es para los ataques de javascripts
	$nick = $con->cubrid_real_escape_string(htmlentities($_POST['nick']));
	$pas1 = $con->cubrid_real_escape_string(htmlentities($_POST['pas1']));
	$pas1 = sha1($pas1);  #para encriptar las contraseñas
	$nivel = $con->cubrid_real_escape_string(htmlentities($_POST['nivel']));
	$nombre = $con->cubrid_real_escape_string(htmlentities($_POST['nombre']));
	$correo = $con->cubrid_real_escape_string(htmlentities($_POST['correo']));
}else {
	echo "<script>
		alert('Utiliza el formulario');
		location.href='index.php';
		</script>";
}

?>