<?php
include('config/bd.cfg.php');

spl_autoload_register(function($nomClasse) {
    $nomFichier = "$nomClasse.cls.php";
    if(file_exists("classes/$nomFichier")) {
    include("classes/$nomFichier");
    } else {
    echo "Fichier $nomFichier introuvable";
    }
});


/* $jour = '';
if(isset($_GET['jour'])) {
    $jour = $_GET['jour'];
}

class Router {
    $jour = '';
    public static function route() {
        $currentDate = Date('Y-m-d');

        $imageDuJour = new ImageDuJour($jour);
        $imageDuJour->afficher();
    } */

 


$commentaire = new Commentaire(1);
$commentaire->toutSansVote();
$commentaire->toutAvecVote();
$commentaire->obtenirNombreAime();



?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image du jour</title>
    <link rel="shortcut icon" href="ressources/images/favicon.png" type="image/png">
    <link rel="stylesheet" href="ressources/css/idj.css">
    <style>
        html {
            background-image: url(ressources/photos/darawar-fort.jpg);
        }
    </style>
</head>
<body>
    <div class="etiquette aime">
        <img src="ressources/images/aime-actif.png" alt="">752
    </div>
    <aside>
        <form action="">
            <textarea name="commentaire" id="commentaire"></textarea>
        </form>
        <ul class="commentaires">
            <?php 
                foreach($commentaire->toutSansVote() as $commentaire) :
            ?>
            <li class="v1">
                <?= $commentaire->com_texte; ?>
                <?php
                    //foreach($commentaire->obtenirNombreAime() as $vote) :
                ?>
                <div class="vote">
                    <span class="up">555</span>
                    <span class="down">2</span>
                </div>
                <?php
                    //endforeach;
                ?>
            </li>
            <?php
                endforeach;
            ?>
        </ul>
    </aside>
    <div class="info">
        <div class="date">
            <span class="premier">
                <a title="Premier jour" href="index.php?jour=2022-06-01">&#x2B70;</a>
            </span>
            <span class="prec">
                <a title="Jour précédent" href="index.php?jour=2022-06-19">&#x2B60;</a>
            </span>
            <span class="suiv">
                <a title="Jour suivant" href="index.php?jour=2022-06-21">&#x2B62;</a>
            </span>
            <span class="dernier">
                <a title="Aujourd'hui" href="index.php?jour=<?php $currentDate ?>">&#x2B72;</a>
            </span>
            <i>Lundi, 20 juin 2022</i>
        </div>
        <div class="etiquette etiquette-etendue description">Château de Čachtice (Slovaquie)</div>
    </div>
</body>
</html>