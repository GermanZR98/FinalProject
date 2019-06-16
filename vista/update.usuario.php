<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="estilos/estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Gugi|Montserrat" rel="stylesheet">
</head>
<body>

	<div class="login-page">
    <div class="form">

	<h1 class="titulo">Editar</h1>

    <form action="index.php" method="GET">
    <input id="mod" name="mod" type="hidden" value="usuario">
    <input id="ope" name="ope" type="hidden" value="update">
    <input id="idc" name="idc" type="hidden" value="<?=$datosUsuario->getNombreusuario();?>">

		<label for="cor"><strong>Nombre Usuario</strong></label>
		<input id="cor" name="cor" type="text" required value="<?=$datosUsuario->getNombreusuario();?>" /> 
		<br>

		<div style="margin: auto;width:70%;text-align:center">
			<button class="btn btn-primary btn-sm card-title" type="submit">Editar Usuario</button> <br>
			<a class="btn btn-primary btn-sm card-title" href="index.php?mod=cancion&ope=index">Volver atrás</a>
    	</div>

	</form>

	</div> <!-- login -->
	</div> <!-- form -->

</body>
</html>


