</main>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

<script src="../js/materialize.min.js"></script> 
<script src="../cdn/sweetalert2.js"></script>

<!-- para inicializar todo con materialize -->
<!-- para que funcione el boton de menu en pantalla pequeña e inicializar todo-->
<script>
	$('.button-collpase').sideNav();
	$('select').material_select();  /* inicializa el select para que se vea */
	

/* funcion para transformar todo en letras mayusculas */
function may(obj, id){
	obj = obj.toUpperCase();
	document.getElementById(id).value = obj;
	}
</script>

 