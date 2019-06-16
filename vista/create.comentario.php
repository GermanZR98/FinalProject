<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos/estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Skysound</title>
</head> 
<body>

    <div class="banner">
        <h3>Bienvenido: <?php echo $_SESSION["nombreusuario"]?></h3>
        <a class="btn btn-primary btn-sm card-title"  href="vista/miChart.php">Estadisticas</a>
        <a class="btn btn-primary btn-sm card-title"  href="index.php?mod=usuario&ope=indexUsuario">Mi Perfil</a>
        <a class="btn btn-primary btn-sm card-title" href="index.php?mod=usuario&ope=cerrarSesion">Cerrar Sesion</a>
        <a class="btn btn-primary btn-sm card-title" href="vista/index.video.php">Videoclips destacados</a>
        <div style="margin: auto;width:70%;text-align:center"></div>
    </div>

    <div class="login-page">
    <div class="form">  
    <form action="index.php" method="GET">

        <h1 class="titulo">Añadir comentario</h1>
        <input class="form-control" id="mod" name="mod" type="hidden" value="comentario">
        <input class="form-control" id="ope" name="ope" type="hidden" value="create">
        <input class="form-control" id="idc" name="idc" type="hidden" value="<?=$_GET["idc"]?>">

        <input class="form-control" id="com" name="com" type="text" value="" required placeholder="Comentario">
        <br>

        <input class="form-control" id="nom" name="nom" type="text" value="" readonly placeholder="<?=$nombre;?>">
        <br>
        
        <button class="btn btn-primary btn-sm card-title" type="submit">Añadir comentario</button> 
        <a class="btn btn-primary btn-sm card-title" href="index.php?mod=cancion&ope=index">Volver atrás</a> 
        </div>

        </form>
        
</body>
</html>