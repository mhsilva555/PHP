<?php

namespace src\models;
use core\Model;

class Crud extends Model {

    private static $pdo;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if(!isset(self::$pdo)) {
            try {
                $options = array(
                    \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                );
                self::$pdo = new \PDO('mysql:host=localhost;dbname=mvc', 'root', '', $options);
            } catch (PDOException $e) {
                echo 'Erro ao conectar ao conectar ao banco de dados::' . $e->getMessase();
            }
        }

        return self::$pdo;
    }

    public static function Read($query)
    {
        $ready = self::$pdo->query($query);
        $rows = $ready->fetchAll();
        return $rows;
    }

    public static function Create($data){
        $ready = self::Read("SELECT usuario FROM usuarios WHERE usuario = '{$data['usuario']}'");

        if(count($ready) > 0){
            return false;
        }else {
            $create = self::$pdo->prepare("INSERT INTO usuarios (usuario, email, senha) VALUES (?, ?, ?)");
            $create->execute(array(
                'usuario' => $data['usuario'],
                'email' => $data['email'],
                'senha' => md5($data['senha']),
            ));
        }
    }
}