<?php

namespace app\Models;

class User
{
    private $id;
    private $username;
    private $passwordHash;
    private $role;
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }
   
    public function save($username, $password, $role)
    {
        $stmt = $this->conn->prepare("INSERT INTO users (username, password, role) VALUES (?, ?, ?)");
        $passwordHash = password_hash($password, PASSWORD_BCRYPT);
        return $stmt->execute([$username, $passwordHash, $role]);
    }

    public function findByUsername($username)
    {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function getAllUsers()
    {
        $stmt = $this->conn->query("SELECT id, username, role FROM users");
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}