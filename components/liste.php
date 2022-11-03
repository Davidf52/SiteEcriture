<?php
session_start();
require('../components/co_bdd.php'); ?>
<?php require('../components/header.php');


$req = "SELECT * FROM article WHERE id_categorie = ? ";
$req = $bdd->prepare($req);
$req->execute(array(
    $_GET['id']
));


$art = $req->fetchAll(); ?>
<div class="titreliste">
    <h1>Voici la liste des<span> Articles</span> correspondant à ta recherche ! </h1>
</div>
<?php foreach ($art as $ar) {
?>
    <div class="choix">
        <h3> <?= $ar['name'] ?></h3>
        <a href="../components/affichagearticle.php?id=<?php echo $ar['id'] ?>">Choisir cet article ! </a>
    </div>
<?php } ?>