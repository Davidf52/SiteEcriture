<?php
session_start();
require('../components/co_bdd.php'); 
?>
<?php require('../components/header.php');
?>


<div class="allbox">
<div class="connectBox">
	<h1>Inscription</h1>
	<form method="post" action="inscription2.php">
    <label for="pseudo">Pseudo</label>
    <input name="pseudo" placeholder="Votre email" type="text" required>
		
        <label for="email">Email</label>
		<input name="email" placeholder="Votre email" type="email" required>

		<label for="password"> Mot de passe</label>
		<input name="mdp" placeholder="Votre mot de passe" type="password" required>
        <br>
		<input type="submit" value="S'inscrire">
	</form>
</div>
</div>



<?php require('../components/footer.php') ?>
