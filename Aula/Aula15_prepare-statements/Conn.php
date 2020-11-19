<?php

class Conn{

    
    public static $Host = "127.0.0.1";
    public static $User = "root";
    public static $Pass = "123456";
    public static $Dbname = "celke";
    private static $Connect = null;

    private static function Conectar(){
        try{
            if(self::$Connect == null):
        self::$Connect = new PDO("mysql:dbname=".self::$Dbname.";host=".self::$Host, 
        self::$User, self::$Pass);
            endif;
        } catch (Exception $ex) {
            echo "Mensagem: " . $ex->getMessage ();
            die;
        }
        return self::$Connect;
    }

    


    public function getConn(){

        return self::Conectar();
    } 
    
    
    

    
}

?>