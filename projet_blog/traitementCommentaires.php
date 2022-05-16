<?php
session_start();

include "fonctions.php";
if (isset($_POST) && !empty($_POST)) {
    
    $idArticle = $_POST["idArticle"];
    $contenu = $_POST["commentaire"];
    $contenu = addslashes($contenu);


    ajouterCommentaire($idArticle, $contenu);
}
