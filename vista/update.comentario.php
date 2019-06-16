<!DOCTYPE html>
<html lang="es">
<head>
	<title>Mis tableros - editar tablero</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="estilos/estilos.css" type="text/css">	
</head>
<body>
	<h1 class="titulo">Editar comentario</h1>

	
    <form action="index.php" method="GET">
    <input id="mod" name="mod" type="hidden" value="comentario">
    <input id="ope" name="ope" type="hidden" value="update">
	<input id="idc" name="idc" type="hidden" value="<?=$idcomentario?>">


		<div id="formInner">
		<label for="com">Comentario: </label>
		<input id="com" name="com" type="text" value="<?=$comentario?>" /> 
		<br>
		</div>

		<div id="texto2">
        <button type="submit">Editar comentario</button> |
        
		<a href="index.php?mod=cancion&ope=index">Volver atrás</a>
		</div>
</body>
</html>



