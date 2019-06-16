<?php 

class sesion {


    public function iniciar()
    {
        session_start();
    }

    public function obtenerSesion()
    {
        return $_SESION;
    }

    public function get($key)
    {
        return !empty($_SESSION[$key]) ? $_SESSION[$key] : null; 
    }

    public function estado()
    {
        return session_status();
    }

    public function cerrar()
    {
        session_unset();
        session_destroy();
    }
}


?>