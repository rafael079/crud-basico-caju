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

    public function query(string $sql)
    {
        return $this->connection->query($sql);
    }

    public function delete(int $id)
    {
        return $this->connection->prepare("DELETE FROM post WHERE id={$id}");
    }

    public function getAll()
    {
        $query = $this->query("SELECT * FROM post ORDER BY id DESC");

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}