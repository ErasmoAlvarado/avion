<?php

namespace app\Models;
// require_once './../public/assets/error.mp3';

use mysqli;
final class Users 
{
    protected $db_host = '127.0.0.1';
    protected $db_user = 'root';
    protected $db_pass = '';
    protected $conect;
    protected $db_name = 'avion';

    public function connection()
    {
        $this->conect = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
        if ($this->conect->connect_error) {
            die("se jodió :(");
        }
    }

    public function __construct() 
    {
        $this->connection();
    }

    public function allUser()
    {
        return $this->conect->query('SELECT * FROM User;')->fetch_all(MYSQLI_ASSOC);
    }

    public function register($nombre, $apellido, $correo, $cedula, $contrasena)
    {
        $stmt = $this->conect->prepare("INSERT INTO User (nombre, apellido, correo, cedula, contrasena) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $nombre, $apellido, $correo, $cedula, $contrasena);

        if ($stmt->execute()) {
            return "User registered successfully.";
        } else {
            return "Error: " . $stmt->error;
        }
    }
}

