<!DOCTYPE html>
<html lang="es">
<head>
	<title>Mis tableros - editar tablero</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="estilos/estilos.css" type="text/css">
</head>
<body>

<div class="fondoInterior">

	<div class="login-page">
    <div class="form">  
    <form action="index.php" method="GET">

	<h1 class="titulo">Editar Cancion ADMIN</h1>

    <input id="mod" name="mod" type="hidden" value="cancion">
    <input id="ope" name="ope" type="hidden" value="updateadmin">
	<input id="idc" name="idc" type="hidden" value="<?=$idcancion?>">

		<label for="nca">nombre de la canción: </label>
		<input id="nca" name="nca" type="text" value="<?=$nombre?>"  placeholder="Nombre" /> 
		<br>

		<label for="gen">Género: </label>
		<input id="gen" name="gen" type="text" value="<?=$genero?>"  placeholder="Género" /> 
		<br>

		<label for="alb">Álbum: </label>
		<input id="alb" name="alb" type="text" value="<?=$album?>"  placeholder="Álbum" /> 
		<br>

		<div style="margin: auto;width:70%;text-align:center">
        <button class="btn btn-primary btn-sm card-title" type="submit">Editar canción</button>
        <a class="btn btn-primary btn-sm card-title" href="index.php?mod=cancion&ope=indexadmin">Volver atrás</a>
		</div>

		</div>

		<br>
		</div>
		</div>
</div>
</body>
</html>



