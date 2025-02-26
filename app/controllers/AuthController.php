<?php
session_start();
require_once __DIR__ . '/../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $db = new Database();
    $conn = $db->connect();

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE usuario = :usuario");
    $stmt->bindParam(':usuario', $usuario);

    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    
    
    

    if (!$user) {
        echo "El usuario no existe en la base de datos.";
    } elseif (hash('sha256', $password) !== $user['password']) {
        echo "Las contraseñas NO coinciden.";
    } else {
        echo "Inicio de sesión exitoso!";
        $_SESSION['usuario'] = $user['usuario'];
        $_SESSION['rol'] = $user['rol'];
        if ($user['rol'] === 'admin') {
            header("Location: ../views/admin.php");
        } else {
            header("Location: ../views/encargado.php");
        }
        exit();
    }
    
}
?>
