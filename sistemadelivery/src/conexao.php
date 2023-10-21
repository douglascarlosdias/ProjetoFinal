<?php
class Conexao{

    public static function getConexao()
    {
        try {
            return new PDO("mysql:host=127.0.0.1;dbname=tiogogadelivery", "root", "");

        }catch(\PDOException $e){
            echo 'erro ao conectar com o banco de dados. ' .$e->getMessage();
            return null;
        }
    }
}