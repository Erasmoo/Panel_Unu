<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['usuario'])) {
    header("Location: /login.php");
    exit();
}
$rol = $_SESSION['role'] === 'admin' ? 'Administrador' : 'Encargado';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
    <link rel="stylesheet" href="/public/css/style.css">
    
    </head>
    
<body>
    <header>
        <h1>Panel de Administración</h1>
        <div class="perfil">
            <span><?php echo $_SESSION['usuario']; ?> (<?php echo $rol; ?>)</span>
            <a href="/app/controllers/logout.php">Cerrar sesión</a>
        </div>
    </header>