<?php
session_start();
session_destroy();
header("Location: ../views/layout/login.php");
exit();
?>
