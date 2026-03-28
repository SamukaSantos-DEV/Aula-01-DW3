<?php

class Database
{
    private static $instance = null;
    private $connection;
    private function __construct()
    {
        $host = "localhost";
        $dbname = "imobiliariajg";
        $username = "root";
        $password = "";

        try {
            $pdo = new PDO(
                "mysql:host=$host;dbname=$dbname;charset=utf8",
                $username,
                $password,
            );
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo "Conectado com sucesso!";
        } catch (PDOException $e) {
            die("Erro na conexão: " . $e->getMessage());
        }
    }
}

?>