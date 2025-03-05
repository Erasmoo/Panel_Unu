<?php 
session_start(); 
$_SESSION['role'] = 'admin'; // Esto debe venir de tu autenticación real
include '../layout/header.php'; 
include '../layout/sidebar.php'; 
?>
<main>
    <h2>Bienvenido al Dashboard de Administrador</h2>
    <p>Aquí puedes ver un resumen de los casos registrados.</p>
</main>
<?php include '../layout/footer.php'; ?>
