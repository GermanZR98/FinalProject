<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="estilos/estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Gugi|Montserrat" rel="stylesheet">
</head>
<body>

    <!---->
    <div class="banner">
    <div style="margin: auto;width:70%;text-align:center"></div>
    <h3>Bienvenido: <?php echo $_SESSION["nombreusuario"]?></h3>
    <div style="margin: auto;width:70%;text-align:center"></div>
    </div>
    <!---->

    <div class="login-page">
    <div class="form">  

    <h1 class="titulo">Mi perfil</h1>

    <strong>Correo:</strong>      <?=$datosUsuario->getCorreo();?>  <br>
    <strong>Contraseña:</strong>  <?=$datosUsuario->getContrasena();?> <br>
    <strong>Nombre:</strong>      <?=$datosUsuario->getNombreusuario();?> <br>

    <br>

    <a class="btn btn-secondary btn-sm btn-sm card-title" href="index.php?mod=usuario&ope=update&idc=<?=$datosUsuario->getNombreusuario();?>">Editar Nombre</a>
    <div style="margin: auto;width:70%;text-align:center">
    <a class="btn btn-primary btn-sm card-title" href="index.php?mod=cancion&ope=index">Volver atrás</a>
    </div>

    </div>
    </div>

</div>

</body>
</html>