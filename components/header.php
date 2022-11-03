<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../stylehead.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <title>bibliothèque</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.html">Read & Write</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../article/index.php">Accueil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Lire ou Écrire
                        </a>
                        <?php if (!empty($_SESSION)) {  ?>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#article"> Lire</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="../crud/ajout.php">Écrire</a>
                                </li>
                            </ul>

                        <?php } else { ?>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#article"> Lire</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" id="alert" onclick="alerte();">Écrire</a>
                                </li>
                            </ul>
                        <?php  } ?>
                    </li>
                    <li class="nav-item">
                        <?php if (!empty($_SESSION)) {  ?>
                            <a class="nav-link" href="../crud/deconnexion.php">Deconnexion</a>

                        <?php } ?>
                    <li class="nav-item">
                        <?php if (!empty($_SESSION)) { ?>
                            <a class="nav-link" href="../crud/moncompte.php">Mon Compte </a>
                        <?php } ?>
                    <li class="nav-item">
                        <?php if (empty($_SESSION)) { ?>
                            <a class="nav-link" href="../crud/connexion.php">Connexion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="../crud/inscription.php">Inscription</a>
                    </li>
                <?php } ?>
                </ul>

            </div>
        </div>
    </nav>