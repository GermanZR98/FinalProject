<?php  
//iniciamos session
if(isset($_SESSION["nombreusuario"])){
    $sesion=session_start();
    $nombre = $_SESSION["nombreusuario"];
    if ($nombre !== "admin"){
        header("Location: index.php?mod=cancion&ope=index");
    }else{
        header("Location: index.php?mod=cancion&ope=indexadmin");
    }
}

//     if ($nombre !== "admin"){
//         if (isset($nombre)) {
//             header("Location: index.php?mod=cancion&ope=index");
//         }
//     }else{
//         if (isset($nombre)) {
//             header("Location: index.php?mod=cancion&ope=indexadmin");
//         }
//     }
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="estilos/estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>


<div class="login-page">
<div class="form">    
<form action="index.php" method="GET">

        <img src="estilos/logo.png">
    
        <h1 class="titulo">LOGIN</h1>

        <input id="mod" name="mod" type="hidden" value="usuario">
        <input id="ope" name="ope" type="hidden" value="index" >

        <input class="form-control" id="nom" name="nom" type="text" value="" required  placeholder="Usuario">
        <br>

        <input class="form-control" id="con" name="con" type="password" value="" required  placeholder="Password">
        <br>

        <button class="btn btn-primary btn-sm card-title" type="submit">Entrar</button>

        <a class="btn btn-secondary btn-sm btn-sm card-title" href="index.php?mod=usuario&ope=create">Registro</a><br>
</form>

    
</body>
</html>

