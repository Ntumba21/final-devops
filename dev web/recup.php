<?php
 session_start ();
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
    <h1>recuperation des infos</h1>

    <?php
        $_SESSION
        echo "Bonjour ";
        if ($_SESSION["genre"] != "NB") echo $_SESSION["genre"]." ";
        echo $_SESSION["nom"]." ".$_SESSION["remarques"]. <br><br>
        
        echo "<hr>"
        echo $_POST["certif"]

    
        echo <a href="recup"></a>
    ?>
</body>
</html>