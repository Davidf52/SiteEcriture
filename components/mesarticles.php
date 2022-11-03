<?php
session_start();
require('../components/header.php');
require('../components/co_bdd.php');
require('../components/function.php');

if (isset($_GET['idt']) && !empty($_GET['idt'])) {
    $lesArticles = recupereArticle($_GET['idt']);
}


if (!empty($_SESSION)) {
$req = 'SELECT users.pseudo, users.id as uad, article.name, article.texte, article.id 
FROM article INNER JOIN users ON id_users = users.id WHERE  users.id= ?';
$req = $bdd->prepare($req);
$req->execute(array(
    $_SESSION['id'],
));
$titres = $req->fetchAll();
}
?>

<div class="tacreation">
        <h1> Voici la liste des questionnaires que tu as créé ! </h1>
    </div>

    <div class="mesarticles">
        <?php

        $t = 'a';
        foreach ($titres as $titre) {

        ?>

            <div class="leQuizz <?= $t ?>">
                <?= $titre['name']; ?>
                <div class="liencomptedeux">

                    <a href="../crud/delete.php?idt=<?= $titre['id'] ?>">Supprimer ce Quiz </a><br>
                    <a href="../components/mesarticles.php?idt=<?= $titre['id'] ?>">Afficher mon Quiz </a>

                </div>
            </div>

        <?php
   
            $t++;
        } ?>

        <?php if (isset($_GET['idt']) && !empty($_GET['idt'])) { ?>

            <?php foreach ($lesArticles as $learticle) {  ?>

                Nom : <?= $learticle['name'] ?> <br>
                Écrit : <?= $learticle['texte'] ?>
                <br>

        <?php }
        } ?>

    </div>