<?php
require_once '../config/database.php';

class Usuario {
    private $conn;
    private $table = 'usuarios';

    public function __construct() {
        $database = new Database();
        $this->conn = $database->connect();
    }
    echo "Buscando usuario: " . $usuario;


    public function obtenerUsuario($usuario) {
        $query = "SELECT * FROM " . $this->table . " WHERE usuario = :usuario";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':usuario', $usuario);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
