<?php
require_once "Database.php";
require_once "sesion.php" ;


class usuario {

    private $idusuario ;
    private $correo ;
    private $contrasena ;
    private $nombreusuario ;

    //SETTERS

    public function setIdusuario($dta)        {$this->idusuario = $dta;}
    public function setCorreo($dta)        {$this->correo = $dta;}
    public function setContrasena($dta)        {$this->contrasena = $dta;}
    public function setNombreusuario($dta)        {$this->nombreusuario = $dta;}

    //GETTERS

    public function getIdusuario()            {return $this->idusuario;}
    public function getCorreo()            {return $this->correo;}
    public function getContrasena()            {return $this->contrasena;}
    public function getNombreusuario()            {return $this->nombreusuario;}

    public function __contruct() {}

        //OBTENER TODAS LAS CANCIONES

        public static function comprobar(){                                      

                if(isset($_GET["nom"]) && isset($_GET["con"])){
                    $nombre   = $_GET["nom"];
                    $password = $_GET["con"];
               
                    $db = Database::getInstance();

                    $db->query("SELECT * FROM usuario WHERE nombreusuario=:nom AND contrasena=:con;",
                                    [":nom" => $nombre,
                                     ":con" => $password]);

                                     
                    $resultado = $db->getRow();
                    session_start();
                   
                 
                    if ($resultado !== false) {
                        if($nombre !== "admin"){
                        $_SESSION["nombreusuario"]=$nombre;
                        header("Location: index.php?mod=cancion&ope=index");
                        }else{
                            $_SESSION["nombreusuario"]=$nombre;
                            header("Location: index.php?mod=cancion&ope=indexadmin");
                        }
                        
                    }else{
                        require_once "vista/login.index.php";
                        echo "El nombre o la contraseña no es correcta";
                    
                    }
                } else{
                    require_once "vista/login.index.php";
                }
            }


        public function insert(){
            $bd = Database::getInstance();
            $bd->query("INSERT INTO usuario(correo, contrasena, nombreusuario) VALUES (:cor, :con, :nom);",
            [":cor"=>$this->correo,
             ":con"=>$this->contrasena,
             ":nom"=>$this->nombreusuario]);
        }

        public static function getUsuario($idu){
            $bd = Database::getInstance();
            $bd->query("SELECT * FROM usuario WHERE idusuario=:idu ;",
            [":idu"=>$idu]) ;

            return $bd->getRow("usuario");
        }

        public static function getUsuarioByNombre($nom){
            $bd = Database::getInstance();
            $bd->query("SELECT * FROM usuario WHERE nombreusuario=:nom ;",
            [":nom"=>$nom]) ;

            return $bd->getRow("usuario");
        }

        public function verify(){
            $bd = Database::getInstance();
            return $bd->query("SELECT * FROM usuario WHERE nombreusuario=:nom;",
            [":nom"=>$this->nombreusuario]);
        } 

        public static function getAllUsuario($nombreusuario){
            $bd = Database::getInstance();
            $bd->query("SELECT * FROM usuario WHERE nombreusuario='$nombreusuario';");
        
            
            return $bd->getRow("usuario");
        }

        //update

        public function update(){
            $db = Database::getInstance() ;
            $db->query("UPDATE usuario SET nombreusuario=:cor WHERE idusuario=:idUsuario ;",
                            [":cor"=>$this->nombreusuario,
                            ":idUsuario"=>$this->idusuario]) ;
            
        }
}