<?php 

$formulaire = '<form action="compte.php" method="post" >
<p>
        <input type="input" name="email" placeholder="Email"/><br />
        <input type="password" name="nom" placeholder="Mot de passe"/><br />
        <input type="submit" value="Connexion" />
</p>
</form>';

echo $formulaire;

?>