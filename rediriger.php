<?php

// On démarre la session AVANT d'écrire du code HTML

// session_start();


// On s'amuse à créer quelques variables de session dans $_SESSION

// $_SESSION['profil'] = 'admin';

// $_SESSION['mot de passe'] = 'admin';


	session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>BIENVENUE admin </h1>
    <p>

        <a href="projet.php">Lien vers projet.php</a><br />

        <a href="exo16.php">Lien vers exo16.php</a><br />


    </p>
</body>
</html>
<?php
session_destroy();
?>