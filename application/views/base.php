<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Base</title>

	<link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">

</head>
<body>
	<h1>haja, tiene que ser .php todo archivo para poder utilizar correctamente las funciones php</h1>
	
	<h3> Pagina inicial distinta a la de base</h3>

	<p> Creación de controller <b>Inicio</b> como remplazo a la utilización de <b>Welcome</b></p>
		
	<p>Cambio en <b>config</b> --> <b>routes</b> de "welcome" a "Inicio"</p>

	<p>Cración de pagina de inicio "<b>base.php</b>" y cambio en la funcion <em>index()</em> de <b>Base</b></p>
		
	</p>

	<button type="button" class="btn btn-primary">Primary</button>

	<p>Cambio en <b>config</b> --> <b>autoload </b> --> Auto-load Helper Files ("url")</p>

	<script src="<?php echo base_url(); ?>bootstrap/js/jquery.slim.min.js"></script>
	<script src="<?php echo base_url(); ?>bootstrap/js/popper.min.js"></script>
	<script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
</body>
</html>