<?php
require_once "modelo/cancion.php";

class controllercancion{

    public function __construct(){}

    public function index(){
      $sesion=session_start();
      if (!isset($_SESSION["nombreusuario"])){
        header("location: index.php");
      }
      $datos = cancion::getAllCancioness();
      require_once "vista/index.cancion.php";
    }

    public function indexadmin(){
      $sesion=session_start();
      $nombre = $_SESSION["nombreusuario"];
      if (!isset($_SESSION["nombreusuario"])){
          header("location: index.php");
      }

      if ($nombre !== "admin"){
        if (isset($nombre)) {
            header("Location: index.php");
        }
      }else{
        if (isset($nombre)) {
          $datos = cancion::getAllCancioness();
          require_once "vista/index.cancionadmin.php";
        }
      }   
    }

    public function deleteadmin(){
		if (isset($_GET["idc"])) cancion::deleteCancion($_GET["idc"]) ;
		header('Location:index.php?mod=cancion&ope=indexadmin');
    }
    
    public function updateadmin(){
		$id = $_GET["idc"]??"";
		if (!empty($id)):
      $tab = cancion::getCancionn($_GET["idc"]) ;
			if (isset($_GET["nca"])):
        $tab->setNcancion($_GET["nca"]) ;
        $tab->setIdGen($_GET["gen"]) ;
        $tab->setAlbum($_GET["alb"]) ;
        $tab->update();
        $this->indexadmin();
			else:
        $nombre = $tab->getNcancion();
        $idcancion = $tab->getIdcancion();
        $genero = $tab->getIdGen();
        $album = $tab->getAlbum();
        require_once "vista/update.cancionadmin.php";
      endif;
        else:

		endif;
  }
}