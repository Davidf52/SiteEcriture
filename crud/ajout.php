<?php session_start();
require('../components/co_bdd.php');
require('../components/header.php');
require('../components/function.php');

$categories = getCategory($bdd);
?>


<div class="back">
    <a href="../article/index.php">Retour</a>
</div>

<div class="titreajout">
    <h1> Compose ton propre Article ! </h1>
</div>

<form action="../crud/ajout2.php" method="post">

    <div class="liste">
        <label for="liste"> Choix de la catégorie ! </label>

        <select name="categorie" id="liste">
            <?php
            foreach ($categories as $categorie) { ?>
                <option value="<?= htmlspecialchars( $categorie['id']) ?>">
                    <?= htmlspecialchars( $categorie['theme']); ?>

                </option>
            <?php } ?>
        </select>
    </div>

    <label for="name"> Entre le titre de ton Article ! </label>
        <input type="text" name="name" required>
    <br>
    <label for="texte">Compose ton Article ! </label>
        <input type="text" name="texte" required>
    <button>Envoyer mes salutations</button>
</form>