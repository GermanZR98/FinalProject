<?php
require_once "Database.php";

class cancion {

    private $idcancion ;
    private $artista ;
    private $ncancion ;
    private $reproduccion ;
    private $cancion ;
    private $idGen ;
    private $album ;

    private $nombreusuario ; 

    //SETTERS

    public function setIdcancion($dta)        {$this->idcancion = $dta;}
    public function setArtista($dta)          {$this->artista = $dta;}
    public function setNcancion($dta)         {$this->ncancion = $dta;}
    public function setReproduccion($dta)     {$this->reproduccion = $dta;}
    public function setCancion($dta)          {$this->cancion = $dta;}
    public function setIdGen($dta)            {$this->idGen = $dta;}
    public function setAlbum($dta)            {$this->album = $dta;}


    //GETTERS

    public function getIdcancion()            {return $this->idcancion;}
    public function getArtista()              {return $this->artista;}
    public function getNcancion()             {return $this->ncancion;}
    public function getReproduccion()         {return $this->reproduccion;}    
    public function getCancion()              {return $this->cancion;}
    public function getIdGen()                {return $this->idGen;}
    public function getAlbum()                {return $this->album;}



    public function __contruct() {}

    //OBTENER TODAS LAS CANCIONES

    public static function getAllCancioness(){
        $bd = Database::getInstance();
        $bd->query("SELECT * FROM canciones;");
        
        $datos = [];

        while($item = $bd->getRow("cancion")){
            array_push($datos,$item);
        }
        return $datos;
    }

    //INSERTAR CANCIONES EN LA BBDD 

    public function insert(){
        $bd = Database::getInstance();
        $bd->query("INSERT INTO canciones(artista, ncancion, idGen, album) VALUES (:art, :nca, :gen, :alb);",
        [":art"=>$this->artista,
         ":gen"=>$this->idGen,
         ":alb"=>$this->album,
         ":nca"=>$this->ncancion]);
    }

    //BORRAR CANCIONES EN LA BBDD 

    public function delete(){
        $db = Database::getInstance() ;
        $db->query("DELETE FROM canciones WHERE idcancion=:idcan ;",
        [":idcan"=>$this->idcancion]) ;				   
        }
        

    public static function deleteCancion($id){
        $db = Database::getInstance() ;
        $db->query("DELETE FROM canciones WHERE idcancion=:idcan ;",
        [":idcan"=>$id]) ;
        }

    //ACTUALIZAR CANCIONES EN LA BBDD 
    
    public function update(){
        $db = Database::getInstance() ;
        $db->query("UPDATE canciones SET ncancion=:nca, idGen=:idGen, album=:alb WHERE idcancion=:idc ;",
                        [":nca"=>$this->ncancion,
                        ":idGen"=>$this->idGen,
                        ":alb"=>$this->album,
                        ":idc"=>$this->idcancion]) ;
        
    }

    public static function getCancionn($id){
        $db = Database::getInstance() ;
        $db->query("SELECT * FROM canciones WHERE idcancion=:idc ;",
                     [":idc"=>$id]) ;

        return $db->getRow("cancion") ;
    }


}



?>