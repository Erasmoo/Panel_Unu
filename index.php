<?php
session_start();

// Si el usuario no ha iniciado sesión, redirigir a login
if (!isset($_SESSION['role'])) {
    header("Location: app/views/login.php");
    exit();
}

// Redirigir según el rol del usuario
if ($_SESSION['role'] === 'admin') {
    header("Location: app/views/admin/dashboard.php");
} elseif ($_SESSION['role'] === 'encargado') {
    header("Location: app/views/encargado/dashboard.php");
} else {
    // En caso de rol desconocido, cerrar sesión y redirigir a login
    session_destroy();
    header("Location: app/views/login.php");
}
exit();
?>
