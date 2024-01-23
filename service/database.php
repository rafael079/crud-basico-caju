<?php

class Database
{
    private $database = 'caju_database';
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';

    private PDO $connection;

    public function __construct()
    {
        $this->connection = new PDO("mysql:host={$this->host};dbname={$this->database}", $this->user, $this->password);
    }

    public function query(string $sql, array $params)
    {
        $query = $this->connection->prepare($sql);
        return $query->execute($params);
    }

    public function delete(int $id)
    {
        return $this->query("DELETE FROM post WHERE id=:id", [':id' => $id]);
    }

    public function getAll()
    {
        $query = $this->connection->query("SELECT * FROM post ORDER BY id DESC");

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById(int $id)
    {
        $query = $this->connection->query("SELECT * FROM post WHERE id={$id}");

        return $query->fetchObject();
    }
}