<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobales PHP</title>
</head>
<body>
    
    <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>

    <h1>Bonjour <?php 

    if(!isset($_GET['first_name'])){
        echo "anonyme";
    } else {
        echo $_GET['first_name'] ;
    }
    ?></h1>

    <form action="exercice.php" method="post">
        <p>Votre nom : <input type="text" name="first_name" /></p>
        <p><input type="submit" value="OK"></p>
    </form>



</body>
</html>