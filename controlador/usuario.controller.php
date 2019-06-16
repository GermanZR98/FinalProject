<?php

require_once "modelo/usuario.php";
require_once "modelo/sesion.php";

class controllerUsuario
{

    private $sesion;

    public function __construct()
    {
        $this->sesion = new Sesion();
    }

    public function index()
    {
        if (isset($_SESSION["nombreusuario"])) {
            header("Location: index.php?mod=cancion&ope=index");
        }

        if ($_SERVER["REQUEST_METHOD"] == "GET") {

            usuario::comprobar();
        }
    }

    public function indexUsuario()
    {

        $sesion = session_start();
        if (!isset($_SESSION["nombreusuario"])) {
            header("location: index.php");
        }

        $datosUsuario = usuario::getAllUsuario($_SESSION["nombreusuario"]);
        require_once "vista/index.usuario.php";
    }



    public function cerrarSesion()
    {
        session_start();
        session_unset();
        session_destroy();
        header("Location: index.php");
    }



    public function create()
    {
        $usuario = new Usuario();
        require_once "vista/create.usuario.php";

        if (isset($_GET["cor"])) {
            $usuario->setCorreo($_GET["cor"]);
            $usuario->setContrasena($_GET["con"]);
            $usuario->setNombreusuario($_GET["nom"]);

            if ($usuario->verify() == false) {
                $usuario->insert();
                header("location: index.php?mod=usuario&ope=index");
            } else {
                require_once "vista/create.usuario.php";
                echo ("El nombre de usuario ya existe");
            }
        }
    }

    public function update()
    {

        $sesion = session_start();
        $sesionIniciada = $_SESSION["nombreusuario"];
        if (!isset($sesionIniciada)) {
            header("location: index.php");
        }
        $datosUsuario = usuario::getAllUsuario($sesionIniciada);

        $id = $_GET["idc"];

        if (!empty($sesionIniciada)) {

            $tab = usuario::getAllUsuario($sesionIniciada);
            if (isset($_GET["cor"])) {

                $usuario = usuario::getUsuarioByNombre($_GET["cor"]) ?? "";

                if ($usuario != "") {

                    if ($usuario->verify() == false) {
                        $tab = usuario::getAllUsuario($sesionIniciada);
                        $tab->setNombreusuario($_GET["cor"]);
                        $tab->update();
                        session_unset();
                        session_destroy();
                        header("location: vista/index.validar.php");
                    } else {
                        $correo = $tab->getCorreo();
                        require_once "vista/update.usuario.php";
                        echo "El nombre de usuario ya existe";
                    }
                } else {
                    $tab = usuario::getAllUsuario($sesionIniciada);
                    $tab->setNombreusuario($_GET["cor"]);
                    $tab->update();
                    session_unset();
                    session_destroy();
                    header("location: vista/index.validar.php");
                }
            } else {
                $correo = $tab->getCorreo();
                require_once "vista/update.usuario.php";
            }
        }
    } //funcion
}
