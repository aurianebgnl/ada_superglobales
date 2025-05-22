<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobales PHP</title>
</head>
<body>
    
    <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>

    <form action="exercice.php" method="post">
        <p>Votre nom : <input type="text" name="first_name" /></p>
        <p><input type="submit" value="OK"></p>
    </form>

    <h1>Bonjour <?php 

    if(isset($_GET['first_name'])){
        $_SESSION['first_name'] = $_GET['first_name'];
        echo $_SESSION['first_name'] ;
    } else if(isset($_POST['first_name'])){
        $_SESSION['first_name'] = $_POST['first_name'];
        echo $_SESSION['first_name'] ;
    } else if(isset($_SESSION['first_name'])){
        echo $_SESSION['first_name'] ;
    }  else {
        echo "anonyme";
    }
    ?></h1>

    <!-- <?php
    print_r($_SESSION);
    ?> -->

    <form action="clear-session.php" method="POST">
        <input type="submit" value="Reset" />
    </form>
   
</body>
</html>