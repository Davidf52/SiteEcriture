<?php 
session_start();
require('../components/co_bdd.php');
$variable = $bdd -> prepare('DELETE FROM article WHERE id=?');
$variable -> execute(array($_GET['idt']));

header('location: ../components/mesarticles.php');