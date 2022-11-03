<?php
Function getCategory($bdd){

    $req = 'SELECT * FROM categorie';
    $req = $bdd->query($req);
    $categories = $req->fetchAll();

    return $categories ;

}



function recupereArticle($tt)
{
    global $bdd; 
    $req = "SELECT name,texte FROM article WHERE id=?";
    $req = $bdd->prepare($req);
    $req->execute(array(
        $tt
    ));
    $articles = $req->fetchAll();
    return $articles; 
}
?>