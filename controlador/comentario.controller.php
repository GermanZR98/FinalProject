<?php
require_once "modelo/comentario.php";
require_once "modelo/usuario.php";

class controllercomentario
{

    public function __construct()
    { }

    public function index()
    {
        $sesion = session_start();
        if (!isset($_SESSION["nombreusuario"])) {
            header("location: index.php");
        }
        if (isset($_GET["idc"])) :
            $datos = comentario::getAllcomentario($_GET["idc"]);
            require_once "vista/index.comentario.php";
        else :
            header('Location:index.php?mod=cancion&ope=index');
        endif;
    }

    public function indexadmin()
    {
        if (isset($_GET["idc"])) {
            $sesion = session_start();
            $nombre = $_SESSION["nombreusuario"];
            if (!isset($_SESSION["nombreusuario"])) {
                header("location: index.php");
            }
            if ($nombre !== "admin") {
                if (isset($nombre)) {
                    header("Location: index.php");
                }
            } else if (isset($nombre)) {
                $datos = comentario::getAllcomentario($_GET["idc"]);
                require_once "vista/index.comentarioadmin.php";
            }
        }
    }

    public function create()
    {
        $idcancion = ($_GET["idc"]);
        $sesion = session_start();
        $nombre = $_SESSION["nombreusuario"];
        if (!isset($_SESSION["nombreusuario"])) {
            header("location: index.php");
        }
        if (isset($_GET["com"])) :
            $comentario = new comentario();
            $comentario->setComentario($_GET["com"]);
            $comentario->setIdcancion($_GET["idc"]);
            $comentario->setNombre($_GET["nom"]);
            $comentario->insert($nombre);
            header("Location:index.php?mod=comentario&ope=index&idc=$idcancion");
        else :
            require_once "vista/create.comentario.php";
        endif;
    }

    public function deleteadmin()
    {

        $idcomentario = ($_GET["idc"]);
        $comentario = comentario::getComentarios($idcomentario);
        $idcancion = $comentario->getIdcancion();

        if ((isset($idcancion)) && (isset($idcomentario))) comentario::deleteComentario($idcomentario);
        header("Location:index.php?mod=comentario&ope=indexadmin&idc=$idcancion");
    }

    public function updateadmin()
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
                $id = $_GET["idc"] ?? "";
                if (!empty($id)) :
                    $tab = comentario::getComentarios($_GET["idc"]);
                    $idcancion = $tab->getIdcancion();
                    if (isset($_GET["com"])) :
                        $tab->setComentario($_GET["com"]);
                        $tab->update();
                        header("Location:index.php?mod=comentario&ope=indexadmin&idc=$idcancion");
                    else :
                        $comentario = $tab->getComentario();
                        $idcomentario = $tab->getIdcomentario();
                        require_once "vista/update.comentarioadmin.php";
                    endif;
                else :
                endif;
            }
        }
    }
}
