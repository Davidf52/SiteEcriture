<?php
require('../components/header.php');
require('../components/co_bdd.php');
?>


<!-- <div class="connexion">
    <h1>Connexion</h1>
    <form action="connexion2.php" method="post">
        <input type="email" name="email" placeholder="Votre email">
        <input type="password" name="mdp" placeholder="Votre mot de passe">
        <input type="submit" value="Se connecter">
    </form>
    <a href="../crud/inscription.php">  <p>Si tu n'as pas encore de compte, clique ICI pour t'inscrire ! </p></a>
</div> --> 
 <div class="allbox">
<div class="connectBox">
	<h1>Connexion</h1>
	<form method="post" action="connexion2.php">
		<label for="email">Email</label>
		<input name="email" placeholder="Votre email" type="email" required>
		<label for="password"> Mot de passe</label>
		<input name="mdp" placeholder="Votre mot de passe" type="password" required>
        <br>
		<input type="submit" value="Se connecter">
	 <a href="../crud/inscription.php">Inscris-toi</a></p>
	</form>
</div>
</div>

<?php require('../components/footer.php') ?>