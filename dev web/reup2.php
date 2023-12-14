<?php
 session_start ();
 if(!isset($_SESSION["nom"])){
    header("location:inscription.php")
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     echo "Bonjour ";
     if ($_SESSION ["genre"] != "NB") echo $_SESSION["genre"]." ";
     echo $_SESSION["nom"]." ".$_SESSION["remarques"]. <br><br>
    
    ?>
    <a href="deconnect.php">deconnexion</a>
</body>
</html>