<?php 

class db{
    private static $conn;

    public static function getConnection(){
        if(self::$conn === null){
            self::$conn = new PDO('mysql:localhost',"root","","projectlab2");
            return self::$conn;
        }
        else{
            return self::$conn;
        }
    }
}

?>