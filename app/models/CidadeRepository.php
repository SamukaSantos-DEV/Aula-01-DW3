<?php

require_once '../../config/database.php';
require_once 'Cidade.php';

class CidadeRepository
{
    private $conn;

    public function __construct($connection)
    {
        $db = Database::getInstance();
        $this->conn = $db->getConnection();
    }

    public function findAll()
    {
        $query = "SELECT * FROM cidade";
        $result = $this->connection->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function findById($id)
    {
        $query = "SELECT * FROM cidade WHERE id = ?";
        $stmt = $this->connection->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function create($nome, $estado)
    {
        $query = "INSERT INTO cidade (nome, estado) VALUES (?, ?)";
        $stmt = $this->connection->prepare($query);
        $stmt->bind_param("ss", $nome, $estado);
        return $stmt->execute();
    }

    public function update($id, $nome, $estado)
    {
        $query = "UPDATE cidade SET nome = ?, estado = ? WHERE id = ?";
        $stmt = $this->connection->prepare($query);
        $stmt->bind_param("ssi", $nome, $estado, $id);
        return $stmt->execute();
    }

    public function delete($id)
    {
        $query = "DELETE FROM cidade WHERE id = ?";
        $stmt = $this->connection->prepare($query);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}