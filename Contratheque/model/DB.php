<?php

namespace Contratheque\Model;

use PDO;
use PDOException;

class DB {

    private $pdo; 

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=creha-ouest-contratheque;charset=utf8';
        $user = 'root';
        $password = '';

        try {
            $pdoConnexion = new PDO(
                $dsn,
                $user,
                $password,
                array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING

                )
                );
        } catch (PDOException $exception) {
            echo 'Connexion échouée : '. $exception->getMessage();
        }
        $this->pdo = $pdoConnexion;
    }

    public function getPdo(){
        return $this->pdo;
    }
}