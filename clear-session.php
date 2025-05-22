<?php session_start();

session_destroy();
header('Location: exercice.php');
exit();
?>