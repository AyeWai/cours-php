<?php 

$formulaire = '<form action="compte.php" method="post" >
<p>
        <input type="input" name="login" placeholder="Email"/><br />
        <input type="password" name="password" placeholder="Mot de passe"/><br />
        <input type="submit" value="Connexion" />
</p>
</form>';

echo $formulaire;

?>