

<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>Accueil</title>
</head>

<body>
<h5><?php 
    require "config.php";
    echo $sitename;
?></h5>

<p><?php echo "Hello, World!"; ?></p>

<?php 
    require "jeu.php";
    echo $formulaire;
?>;
</body>
</html>