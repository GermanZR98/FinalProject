<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Skysound</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="estilos/estilos.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>


  <div class="login-page">
    <div class="form">
      <form action="index.php" method="GET" name="registro">

        <h1 class="titulo">Registro</h1>

        <input id="mod" name="mod" type="hidden" value="usuario">
        <input id="ope" name="ope" type="hidden" value="create">

        <input class="form-control" id="cor" name="cor" type="text" value="" required placeholder="Correo">
        <br>

        <input class="form-control" id="con" name="con" type="password" value="" required placeholder="Contraseña">
        <br>

        <input class="form-control" id="nom" name="nom" type="text" value="" required placeholder="Nombre" />
        <br>

        <button class="btn btn-primary btn-sm btn-sm card-title" id="bot" type="submit">Registrarse</button>
        <a class="btn btn-primary btn-sm card-title" href="index.php">Tengo cuenta</a>


      </form>

      <h2 id='result'></h2>

      <script>
        var cor = document.getElementById("cor");
        var con = document.getElementById("con");
        var nom = document.getElementById("nom");
        var bot = document.getElementById("bot");

        bot.addEventListener("click", function() {
          var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
          console.log(re.test(cor.value));
        });

        function validateEmail(email) {
          var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
          return re.test(email);
        }

        function validate() {
          var $result = $("#result");
          var cor = $("#cor").val();
          var nom = $("#nom").val();
          var con = $("#con").val();

          if (validateEmail(cor) && (nom != "") && (con.length > 3)) {
            document.registro.submit()
          } else {
            alert("El email no es correcto");
          }
          return false;
        }

        function validateform() {
          var nom = document.registro.nom.value;
          var con = document.registro.con.value;

          if (nom == null || nom == "") {
            alert("El nombre no puede estar en blanco");
            return false;
          } else if (con.length < 3) {
            alert("La contraseña tiene que tener mínimo 4 carácteres");
            return false;
          }
        }

        $("#bot").on("click", validateform);
        $("#bot").on("click", validate);
      </script>

</body>

</html>