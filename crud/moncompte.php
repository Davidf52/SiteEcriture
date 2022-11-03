<?php
session_start();
require('../components/co_bdd.php'); 
 require('../components/header.php'); 



$req = 'SELECT email FROM users WHERE id=?';
$req = $bdd->prepare($req);
$req->execute(array(
    $_SESSION['id']
));
$vas = $req->fetch();
?>

<?php
$req = 'SELECT pseudo FROM users WHERE id =?';
$req = $bdd->prepare($req);
$req->execute(array($_SESSION['id']));

$user = $req->fetch();
?>

<?php
$req = 'SELECT mdp FROM users WHERE id =?';
$req = $bdd->prepare($req);
$req->execute(array($_SESSION['id']));
$motdp = $req->fetch();
?>

<div class="compte">
    <ul>
    <li><p>email : <?php echo $vas['email'] ?></p></li>
    <li><p>pseudo : <?php echo $user['pseudo'] ?></p></li>
    <div class="liencompte"> <a href="../components/mesarticles.php"> Si tu veux voir tes Quiz, clique ici </a></div>
    <div class="formulaire">
        <p class="pmoncompte">Si tu souhaites modifier ton pseudo, il suffit de le remplacer ci dessous et de valider</p>
        <div class="app-form-group ">
            <form class="formmodif" action="../crud/modifier.php" method="post">
                <input class="app-form-control" name='pseudo' type='text' value="<?php echo $user['pseudo'] ?>">
                <input class="boutons" value="Valider" type=submit>
            </form>
        </div>
    </div>
    <div class="formulaire">
        <p class="pmoncompte">Si tu souhaites modifier ton mot de passe, il suffit de le remplacer ci dessous et de valider</p>
        <div class="app-form-group ">
            <form class="formmodif" action="../crud/modifiermdp.php" method="post">
                <input class="app-form-control" name='pseudo' type='text' value="<?php echo $motdp['mdp'] ?>">
                <input class="boutons" value="Valider" type=submit>
            </form>
        </div>
    </div>
    <br>
    <li><p>mot de passe : <?php echo $motdp['mdp']?></p></li>
    </ul>
</div>
