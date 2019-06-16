<!DOCTYPE html>
<html lang="es">
<head>
	<title>Mis tableros - editar tablero</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="estilos/estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="banner">
        <h3>Bienvenido: <?php echo $_SESSION["nombreusuario"]?></h3>
        <a class="btn btn-primary btn-sm card-title"  href="index.php?mod=sugerencia&ope=indexadmin">SUGERENCIAS</a>
        <a class="btn btn-primary btn-sm card-title" href="index.php?mod=usuario&ope=cerrarSesion">Cerrar Sesion</a>
        <div style="margin: auto;width:70%;text-align:center"></div>
    </div>

	<div class="login-page">
    <div class="form">  
    <form action="index.php" method="GET">

	<h1 class="titulo">Editar ADMIN</h1>

    <input class="form-control" id="mod" name="mod" type="hidden" value="comentario">
    <input class="form-control" id="ope" name="ope" type="hidden" value="updateadmin">
	<input class="form-control" id="idc" name="idc" type="hidden" value="<?=$idcomentario?>">


		<label for="com">Comentario: </label>
		<input class="form-control" id="com" name="com" type="text" value="<?=$comentario?>" /> 
		<br>

		<button class="btn btn-primary btn-sm card-title" type="submit">Editar comentario</button>
		<a class="btn btn-primary btn-sm card-title" href="index.php?mod=cancion&ope=indexadmin">Volver atrás</a>

		</div>
		<br>
</body>
</html>



