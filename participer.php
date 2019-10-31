<?php
    if (isset($_POST['email']) AND isset($_POST['nom']) AND isset($_POST['prenom'])){
    echo htmlspecialchars($_POST['email'])." ";
    echo htmlspecialchars($_POST['nom'])." ";
    echo htmlspecialchars($_POST['prenom'])." ";

    $mailvar = htmlspecialchars($_POST['email']);
    $namevar = htmlspecialchars($_POST['nom']);
    $fnamevar = htmlspecialchars($_POST['prenom']);

    if(file_exists("participants/$mailvar.txt")){
        echo "Adresse email déjà existante";
    }
    else {
        $f = fopen("participants/$mailvar.txt","w");
        fwrite($f,"$mailvar;$namevar;$fnamevar");
    }
    
} 
?>