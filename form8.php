
<?php
session_start();


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
<title>formulaire</title>
<link rel="stylesheet" href="form8.css">
</head>
<body>
		<form method="post" action="form8.php"  >
    login	<input type="text" name="login"><br><br><br>
    Mot de passe<input type="password" name="password"><br><br>
    profil<select name="profil" id="select" >
    <option value=""></option>
    <option value="user">user</option>
    <option value="admin">admin</option>
    </select><br><br>
            <input type="submit" name="submit" value="connexion">
            
</form>
		


<?php

if(isset($_POST['submit'])){
extract($_POST);
if(!empty($profil) && !empty($password)){
if($profil=="admin" && $password=="admin"){
    header("location:rediriger.php");
    $_SESSION['$login']=$profil;
    }    
    elseif($profil=="user" && $password=="user"){
        header("location:redirig.php");
        $_SESSION['$login']=$profil;
    }
        else{
            echo("<p> login ou mot de passe incorrecte");
        }
    }
    }
   
?>
</body>
</html>
<?php
session_destroy();
?>