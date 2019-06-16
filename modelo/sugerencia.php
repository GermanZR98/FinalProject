<?php
require_once "Database.php";

class sugerencia {

    private $idcancion ;
    private $artista ;
    private $ncancion ;
    private $album ;

    //SETTERS

    public function setIdcancion($dta)        {$this->idcancion = $dta;}
    public function setArtista($dta)          {$this->artista = $dta;}
    public function setNcancion($dta)         {$this->ncancion = $dta;}
    public function setAlbum($dta)            {$this->album = $dta;}

    //GETTERS

    public function getIdcancion()            {return $this->idcancion;}
    public function getArtista()              {return $this->artista;}
    public function getNcancion()             {return $this->ncancion;}
    public function getAlbum()                {return $this->album;}

    public function __contruct() {}

    //OBTENER TODAS LAS CANCIONES

    public static function getAllSugerenciass(){
        $bd = Database::getInstance();
        $bd->query("SELECT * FROM sugerencia;");
        
        $datos = [];

        while($item = $bd->getRow("sugerencia")){
            array_push($datos,$item);
        }
        return $datos;
    }

     //INSERTAR CANCIONES EN LA BBDD 

     public function insert(){
        $bd = Database::getInstance();
        $bd->query("INSERT INTO sugerencia(artista, ncancion, album) VALUES (:art, :nca, :alb);",
        [":art"=>$this->artista,
         ":nca"=>$this->ncancion,
         ":alb"=>$this->album]);
    }

    //BORRAR CANCIONES EN LA BBDD 

    public function delete(){
        $db = Database::getInstance() ;
        $db->query("DELETE FROM sugerencia WHERE idcancion=:idcan ;",
        [":idcan"=>$this->idcancion]) ;				   
        }

    public static function deleteSugerencia($id){
        $db = Database::getInstance() ;
        $db->query("DELETE FROM sugerencia WHERE idcancion=:idcan ;",
        [":idcan"=>$id]) ;
        }

    //ACTUALIZAR CANCIONES EN LA BBDD 
        
    public function update(){
        $db = Database::getInstance() ;
        $db->query("UPDATE sugerencia SET ncancion=:nca, album=:alb WHERE idcancion=:idc ;",
                        [":nca"=>$this->ncancion,
                        ":alb"=>$this->album,
                        ":idc"=>$this->idcancion]) ;
        
    }

    public static function getSugerenciaa($id){
        $db = Database::getInstance() ;
        $db->query("SELECT * FROM sugerencia WHERE idcancion=:idc ;",
                     [":idc"=>$id]) ;

        return $db->getRow("sugerencia") ;
    }


}

?>