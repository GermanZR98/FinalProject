<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comentarios</title>
    <link rel="stylesheet" href="estilos/estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Gugi|Montserrat" rel="stylesheet">
</head>
<body>

<div class="banner">
        <h3>Bienvenido: <?php echo $_SESSION["nombreusuario"]?></h3>
        <a class="btn btn-primary btn-sm card-title"  href="index.php?mod=sugerencia&ope=indexadmin">SUGERENCIAS</a>
        <a class="btn btn-primary btn-sm card-title" href="index.php?mod=usuario&ope=cerrarSesion">Cerrar Sesion</a>
        <div style="margin: auto;width:70%;text-align:center"></div>
    </div>

<div class="fondoInterior">

    <h1 class="titulo">Comentario ADMIN</h1> 

    <?php
        foreach($datos as $item){
    ?>

    <div class="login-page">
    <div class="form">   

    [
    <?=$item->getComentario();?> |
    <?=$item->getNombre();?> ]
    <br>
    
    
    <a href="index.php?mod=comentario&ope=deleteadmin&idc=<?=$item->getIdcomentario();?>">Borrar</a> -
    <a href="index.php?mod=comentario&ope=updateadmin&idc=<?=$item->getIdcomentario();?>">Editar</a><br>
    </div>
    <br>

    <?php
        }
    ?>

    <a class="btn btn-primary btn-sm card-title" href="index.php?mod=cancion&ope=indexadmin">Volver atrás</a>

</body>
</html>