<?php
    if (isset($_POST['email']) AND isset($_POST['nom']) AND isset($_POST['prenom'])){
    echo htmlspecialchars($_POST['email'])." ";
    echo htmlspecialchars($_POST['nom'])." ";
    echo htmlspecialchars($_POST['prenom'])." ";

    $mailvar = strip_tags($_POST['email']);
    $namevar = strip_tags($_POST['nom']);
    $fnamevar = strip_tags($_POST['prenom']);

    $f = fopen("$mailvar.txt","w");
    fwrite($f,"$mailvar, $namevar, $fnamevar");
} 
?>