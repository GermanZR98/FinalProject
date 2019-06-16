<?php
require_once "modelo/sugerencia.php";

class controllersugerencia
{

  public function __construct()
  { }

  public function index()
  {

    $sesion = session_start();
    if (!isset($_SESSION["nombreusuario"])) {
      header("location: index.php");
    }
    $datos = sugerencia::getAllSugerenciass();
    require_once "vista/index.sugerencia.php";
  }

  public function indexadmin()
  {

    $sesion = session_start();
    $nombre = $_SESSION["nombreusuario"];
    if (!isset($_SESSION["nombreusuario"])) {
      header("location: index.php");
    }
    if ($nombre !== "admin") {
      if (isset($nombre)) {
        header("Location: index.php");
      }
    } else {
      if (isset($nombre)) {
        $datos = sugerencia::getAllSugerenciass();
        require_once "vista/index.sugerenciaadmin.php";
      }
    }
  }

  public function create()
  {
    $sesion = session_start();
    $nombre = $_SESSION["nombreusuario"];
    if (!isset($_SESSION["nombreusuario"])) {
      header("location: index.php");
    }
    if (isset($_GET["art"])) :
      $sugerencia = new sugerencia();
      $sugerencia->setArtista($_GET["art"]);
      $sugerencia->setNcancion($_GET["nca"]);
      $sugerencia->setAlbum($_GET["alb"]);
      $sugerencia->insert();
      header('Location:index.php?mod=sugerencia&ope=index');
    else :
      require_once "vista/create.sugerencia.php";
    endif;
  }

  public function delete()
  {
    if (isset($_GET["idc"])) sugerencia::deleteSugerencia($_GET["idc"]);
    header('Location:index.php?mod=cancion&ope=index');
  }

  public function deleteadminsugerencia()
  {
    if (isset($_GET["idc"])) sugerencia::deleteSugerencia($_GET["idc"]);
    header('Location:index.php?mod=sugerencia&ope=indexadmin');
  }
}
