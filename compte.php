<?php

if(isset($_POST['login']) AND isset($_POST['password']) AND $_POST['login'] == "admin" && $_POST['password'] == "hello"){
    echo "Bonjour Admin, ceci est votre tableau de bord";
}
else{

    header("login.php");
}
?>