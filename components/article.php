<?php

require('../components/co_bdd.php');
$req = "SELECT * FROM categorie";

$req = $bdd->query($req);

$categorie = $req->fetchAll();

?>


<div class="article">
    <div class="titrecat" id='article'>
        <h1> Catégories des Articles à lire </h1>
    </div>
    <div class="lienajout">
        <?php if (!empty($_SESSION)) { ?>
            <a href="../crud/ajout.php"> Ajoute tes propres Articles </a><br>
        <?php } ?>
    </div>
    <div class="cards">
        <?php foreach ($categorie as $cat) { ?>
            <div class="card">
                <?php
                if ($cat['id'] == 1) {
                    echo '<div alt="horreur" style="background: url(../image/horreur.jpg); width:100%; height:500px;color:white;> </div>"';
                } elseif ($cat['id'] == 2) {
                    echo '<div alt="drôle" style="background: url(../image/clown.jpg); width:100%; height:500px; text-align: end;> </div>"';
                } elseif ($cat['id'] == 3) {
                    echo '<div alt="science" style="background: url(../image/bacterie.jpg); color:white;width:100%; height:500px;> </div>"';
                }
                ?>

                <div class="card-body">
                    <h5 class="card-title"><span><?=htmlspecialchars( $cat['theme']) ?></span></h5>
                    <p class="description">Voici la liste des d'article<span> <?= $cat["theme"] ?></span>, ajoutés par nos utilisateurs !</p>
                    <a href="../components/liste.php?id=<?=htmlspecialchars( $cat['id']) ?>" class="btn btn-primary">Rechercher</a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>