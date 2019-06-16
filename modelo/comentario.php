<?php
require_once "Database.php";

class comentario { 

    private $idcomentario;
    private $comentario;
    private $idcancion;
    private $nombre;

    //SETTERS
    public function setComentario($dta)        {$this->comentario = $dta;}
    public function setIdcancion($dta)        {$this->idcancion = $dta;}
    public function setNombre($dta)        {$this->nombre = $dta;}


    //GETTERS
    public function getIdcomentario()            {return $this->idcomentario;}
    public function getComentario()              {return $this->comentario;}
    public function getIdcancion()               {return $this->idcancion;}
    public function getNombre()                  {return $this->nombre;}

    public function __contruct() {}

    //OBTENER TODAS LAS CANCIONES

    public static function getAllcomentario($idc){
        $bd = Database::getInstance();
        $bd->query("SELECT * FROM comentario WHERE idcancion=:idc;",
        [":idc"=>$idc]);
        
        $datos = [];

        while($item = $bd->getRow("comentario")){
            array_push($datos,$item);
        }

        return $datos;
    }

    //INSERTAR comentarios EN LA BBDD 

    public function insert($nombreUsuario){
        $bd = Database::getInstance();
        $bd->query("INSERT INTO comentario(comentario, idcancion, nombre) VALUES (:com, :idc, :nom);",
        [":com"=>$this->comentario,
          ":idc"=>$this->idcancion,
          ":nom"=>$nombreUsuario]);

        $this->idcomentario = $bd->getLastId();
    }

    //BORRAR CANCIONES EN LA BBDD 

    public function delete(){
        $db = Database::getInstance() ;
        $db->query("DELETE FROM comentario WHERE idcomentario=:idco ;",
        [":idco"=>$this->idcomentario]) ;				   
        }
        

    public static function deleteComentario($id){
        $db = Database::getInstance() ;
        $db->query("DELETE FROM comentario WHERE idcomentario=:idco ;",
        [":idco"=>$id]) ;
        }

    //ACTUALIZAR CANCIONES EN LA BBDD 
        

    public function update(){
        $db = Database::getInstance() ;
        $db->query("UPDATE comentario SET comentario=:com WHERE idcomentario=:idco ;",
                        [":com"=>$this->comentario,
                        ":idco"=>$this->idcomentario]) ;
        
    }

    public static function getComentarios($id){
        $db = Database::getInstance() ;
        $db->query("SELECT * FROM comentario WHERE idcomentario=:idco ;",
                     [":idco"=>$id]) ;

        return $db->getRow("comentario") ;
    }
}

    ?>