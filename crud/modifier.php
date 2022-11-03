<?php 
session_start();
require('../components/co_bdd.php');


$req = 'UPDATE users SET pseudo =? WHERE id = ?';                
$req = $bdd ->prepare($req);
$req ->execute([$_POST['pseudo'], $_SESSION['id']]);

header('location: ../article/index.php'); 
?>

