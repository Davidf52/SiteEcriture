
<?php
require('../components/co_bdd.php'); 


$req = "INSERT INTO users(pseudo,email,mdp) VALUES (?,?,?)";

$bg = $bdd->prepare($req);

$bg->execute(array(
      $_POST['pseudo'],
      $_POST['email'],
      password_hash($_POST['mdp'], PASSWORD_BCRYPT)
));

header('Location: ../article/index.php');

