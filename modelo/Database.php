<?php 

class Database {

    private $dbHost = "localhost" ;
    private $dbUser = "root" ;
    private $dbPass = "" ;
    private $dbName = "skysound2" ;

    private static $prp ;
	private static $pdo ;
    private static $instancia = null ;
    
    private function __construct() {$this->connect() ;} 
    private function __clone() {}
    public function __destruct() {$this->close() ;}

    public static function getInstance()
    {
        if (is_null(self::$instancia)) {
            self::$instancia = new Database() ;
        }
        return self::$instancia ;
    }

    private function connect() 
    { 
        try {
            self::$pdo = new PDO("mysql:host={$this->dbHost};dbname={$this->dbName};", 
                                $this->dbUser, 
                                $this->dbPass) ;

            self::$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, 0) ;
            
        } catch (Exception $e) {
            die("**ERROR: es imposible conectar con la base de datos. Póngase en contacto con el administrador") ;
        }
    }

    public function query($sql, $params=[]) 
    {
        self::$prp = self::$pdo->prepare($sql) ;
        
        $flg = self::$prp->execute($params) ;

        return ($flg) && (self::$prp->rowCount() > 0) ;
    }

    public function getRow($class="StdClass")
    {
        if (self::$prp) {
            return self::$prp->fetchObject($class) ;
        }
    }

    public function getLastId()
    {
        return self::$pdo->lastInsertId() ;
    }

    public function close() 
    {
        self::$pdo=null;
    }

    public function prepare($insert) { 
        return self::$pdo->prepare($insert); 
    } 
}

?>