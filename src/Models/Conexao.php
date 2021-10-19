<?php

namespace src\Models;

class Conexao{

   private static $instance;

   public static function getConn(){
       if(!isset(self::$instance)){
            self::$instance = new \PDO('mysql:host=localhost;dbname=comerciodb_ini3b18;charset=utf8','root','12345678');
                
       }
       return self::$instance;
   }

}