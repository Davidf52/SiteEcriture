<?php
 session_start() ;
require('../components/co_bdd.php'); 
 require('../components/header.php'); 
 require('../components/caroussel.html'); 
 require('../components/article.php');
 require('../components/footer.php');
$req = "SELECT * FROM users";

// Dans une variable $bg on relie la bdd a la requete 
$bg = $bdd->query($req);

// dans une variable $listeUsers on va chercher les données de la requete 
$listeUsers = $bg->fetchAll();
?>

