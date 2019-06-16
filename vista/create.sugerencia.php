<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skysound</title>
    <link rel="stylesheet" href="estilos/estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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

    <h1 class="titulo">Añadir sugerencia</h1>

        <input id="mod" name="mod" type="hidden" value="sugerencia">
        <input id="ope" name="ope" type="hidden" value="create">

        <input id="art" name="art" type="text" value=""  required placeholder="Artista">
        <br>

        <input id="nca" name="nca" type="text" value="" required placeholder="Nombre Canción">
        <br>
        
        <!-- <div class="form-group">
          <select class="form-control" name="gen" id="gen" placeholder="Género">
            <option>Género</option>
            <option>espera</option>
            <option>45</option>
          </select>
        </div> -->

		<input id="alb" name="alb" type="text" value="" required placeholder="Álbum" /> 
        <br>

        <div style="margin: auto;width:70%;text-align:center">
        <button class="btn btn-primary btn-sm card-title" type="submit">Crear sugerencia</button>
        </div>

        </form>

        <div style="margin: auto;width:70%;text-align:center">
        <a class="btn btn-primary btn-sm card-title" href="index.php?mod=sugerencia&ope=index">Volver atrás</a>
        </div>
  
</body>
</html>