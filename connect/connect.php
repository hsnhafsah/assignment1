<?php

class Database
{
    protected $conn;

    public function __construct()
    {
        $this->conn = $this->connect();
    }

    public function connect() 
    {
        $dbHost = 'localhost';
        $dbName = 'users_db';
        $dbUser = 'root';
        $dbPass = '';

        try {
            $conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }
}

$db = new Database();
$connection = $db->connect(); 
