<?php
    if (isset($_POST['email']) AND isset($_POST['nom']) AND isset($_POST['prenom'])){
    echo htmlspecialchars($_POST['email']);
    echo htmlspecialchars($_POST['nom']);
    echo htmlspecialchars($_POST['prenom']);
} 
?>