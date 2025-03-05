<?php 
session_start(); 
$_SESSION['role'] = 'encargado'; // Esto debe venir de tu autenticación real
include '../layout/header.php'; 
include '../layout/sidebar.php'; 
?>
<main>
    <h2>Bienvenido al Dashboard de Encargado</h2>
    <p>Aquí puedes gestionar tus casos asignados.</p>
</main>
<?php include '../layout/footer.php'; ?>
