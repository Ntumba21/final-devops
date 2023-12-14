<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>inscription</h1>
    <form action="" method="post">
        <input type="radio" name= "genre" value="M"> Monsieur
        <input type="radio" name= "genre" value="Mme"> Madame
        <input type="radio" name= "genre" value="NB"> Non binaire <br><br>
        <input type="text" name="nom" placeholder="entrer votre nom: " required> <br><br>
        <textarea name="remarques" placeholder="remarques" cols="30" rows="5"></textarea>

        certification :
            <input type="checkbox" name="certif[]" value="azure"> Azure
            <input type="checkbox" name="certif[]" value="ciso"> Cisco
            <input type="checkbox" name="certif[]" value="aws"> AWS <br><br>
        <input type="submit" value="envoyer">

    </form>
    
</body>
</html>