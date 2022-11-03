<?php session_start();
require('./co_bdd.php');
require('./header.php');
?>

<div class="titree">
    <h1> Voici l'article que tu as selectionné ! </h1>
</div>

<?php
// $req = 'SELECT * FROM article WHERE id = ?';
// $req = $bdd->prepare($req);
// $req->execute(array(
//     $_GET['id']

// ));
// $var = $req->fetch();

$req = 'SELECT users.pseudo, users.id as uad, article.name, article.texte, article.id 
FROM article INNER JOIN users ON id_users = users.id WHERE article.id= ?';
$req = $bdd->prepare($req);
$req->execute(array(
    $_GET['id']
));
$var = $req->fetch();

?>


<div class="presentation">
    <div class="nameart">
        <?php
        echo $var['name']; ?>
    </div>
    <div class="pseudoart">
        <div class="letout">
            <p>Écris par </p> &#160 : &#160<span> <?php echo $var['pseudo']; ?> </span>
        </div>
    </div>
    <div class="contenuart">
        <?php
        echo $var['texte']; ?>
    </div>
</div>