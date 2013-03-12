<?php
    final class DataBase {
        private static $_driver = DRIVER;
        private static $_server = SERVER;
        private static $_port = PORT;
        private static $_user = USER;
        private static $_passwd = PASSWD;
        private static $_dbname = DBNAME;
        private static $_connect;
        
        private function __construct() {}
        
        public static function Conexion(){
            $dsn = self::$_driver.":host=".self::$_server.":".self::$_port.";dbname=".self::$_dbname;
       
            if(!isset(self::$_connect)){
                self::$_connect = new PDO($dsn, self::$_user, self::$_passwd,array(PDO::ATTR_PERSISTENT=>TRUE));
                self::$_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);                  
            }
            return self::$_connect;
        }
        
        public function Exec($query=''){
            return self::$_connect->exec($query);
        }
        
        public function Query($query){
            return self::$_connect->query($query);
        }
        
        public function __clone() {
            trigger_error('Este objeto no se puede clonar', E_USER_ERROR);
        }
    }
?>
