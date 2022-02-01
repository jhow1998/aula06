<?php

class Conexao{

   
    public static $host = HOST;
    public static $user = USER;
    public static $pass = PASS;
    public static $db = DBNAME;

    private static $conexao = null;

    //metodo conectar

    private static function conectar(){
        try {
           if(self::$conexao == null):
             self::$conexao = new PDO('mysql:host=' . self::$host . ';dbname=' . self::$db, self::$user, self::$pass);
           endif; 
        } catch (PDOException $e) {
             echo 'Mensagem'.$e->getMessage();
             die();   
        }
        return self::$conexao;
    }

    public function getconexao(){
        return self::conectar();
    }

}




?>