<?php
// Iniciar sesión
session_start();

// Deshabilitar todas las variables de sesión
$_SESSION = array();

// Destruir la sesión
session_destroy();

// Redirigir a la página de login
header("location: login.php");
exit;
?>
