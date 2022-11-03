<?php
session_start();
require('../components/co_bdd.php');
// ajout du titre du questionnaire 
$req = 'INSERT INTO article (name,texte,id_categorie,id_users) VALUES (?,?,?,?)';
$bg = $bdd->prepare($req);
$bg->execute(array(
    $_POST['name'],
    $_POST['texte'],
    $_POST['categorie'],
    $_SESSION['id']

));
header('Location: ../article/index.php');
