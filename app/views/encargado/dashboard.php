<?php 
session_start(); 
$_SESSION['rol'] = 'encargado'; // Esto debe venir de tu autenticación real
include '../layout/header.php'; 
include '../layout/sidebar.php'; 
include '../layout/footer.php'; ?>
