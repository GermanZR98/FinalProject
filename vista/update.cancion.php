<!DOCTYPE html>
<html lang="es">
<head>
	<title>Mis tableros - editar tablero</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="estilos/estilos.css" type="text/css">
</head>
<body>
	<h1 class="titulo">Editar Cancion</h1>

	
    <form action="index.php" method="GET">
    <input id="mod" name="mod" type="hidden" value="cancion">
    <input id="ope" name="ope" type="hidden" value="update">
	<input id="idc" name="idc" type="hidden" value="<?=$idcancion?>">


		<div id="formInner">
		<label for="nca">nombre de la canción: </label>
		<input id="nca" name="nca" type="text" value="<?=$nombre?>" /> 
		<br>
		<label for="gen">Género: </label>
		<input id="gen" name="gen" type="text" value="<?=$genero?>" /> 
		<br>
		<label for="alb">Álbum: </label>
		<input id="alb" name="alb" type="text" value="<?=$album?>" /> 
		<br>
		</div>
		<br>
		<div id="texto2">
        <button type="submit">Editar canción</button> |
        <a href="index.php?mod=cancion&ope=index">Volver atrás</a>
		</div>
</body>
</html>



