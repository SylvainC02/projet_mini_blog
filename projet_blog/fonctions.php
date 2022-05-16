<?php

function recupAllCategories()
{
    include "connexiondb.php";
    $sqlQuery = "SELECT * FROM categorie";
    $titre = $db->prepare($sqlQuery);
    $titre->execute();
    $test = $titre->fetchAll(PDO::FETCH_ASSOC);
    return $test;
}

function recupCommentaire($id)
{
    include "connexiondb.php";
    $sqlQuery = "SELECT * FROM commentaire WHERE id_article = $id";
    $titre = $db->prepare($sqlQuery);
    $titre->execute();
    $test = $titre->fetchAll(PDO::FETCH_ASSOC);
    return $test;
}

function recupAllarticle()
{
    include "connexiondb.php";
    $sqlQuery = "SELECT * FROM article";
    $titre = $db->prepare($sqlQuery);
    $titre->execute();
    $test = $titre->fetchAll(PDO::FETCH_ASSOC);
    return $test;
}


function recupId($id)
{
    include "connexiondb.php";
    $sqlQuery = "SELECT id FROM article";
    $titre = $db->prepare($sqlQuery);
    $titre->execute();
    $test = $titre->fetchAll(PDO::FETCH_ASSOC);
    return $test[$id];
}



function afficherTitre($id)
{
    include "connexiondb.php";
    $sqlQuery = "SELECT titre FROM article WHERE id = $id";
    $titre = $db->prepare($sqlQuery);
    $titre->execute();
    $test = $titre->fetch(PDO::FETCH_ASSOC);
    return $test["titre"];
}



function afficherContenu($id)
{
    include "connexiondb.php";
    $sqlQuery = "SELECT contenu FROM article WHERE id = $id";
    $titre = $db->prepare($sqlQuery);
    $titre->execute();
    $test = $titre->fetch(PDO::FETCH_ASSOC);
    return $test["contenu"];
}


function afficherResume($id)
{
    include "connexiondb.php";
    $sqlQuery = "SELECT resume FROM article WHERE id = $id";
    $titre = $db->prepare($sqlQuery);
    $titre->execute();
    $test = $titre->fetch(PDO::FETCH_ASSOC);
    return $test["resume"];
}

function afficherDate($id)
{
    include "connexiondb.php";
    $sqlQuery = "SELECT date FROM article WHERE id = $id";
    $titre = $db->prepare($sqlQuery);
    $titre->execute();
    $test = $titre->fetch(PDO::FETCH_ASSOC);
    return $test["date"];
}

function afficherAuteur($id)
{
    include "connexiondb.php";

    $sqlQuery = "SELECT pseudo FROM user 
                 INNER JOIN article ON article.id_user=user.id
                 WHERE article.id = $id";

    $titre = $db->prepare($sqlQuery);
    $titre->execute();
    $test = $titre->fetch(PDO::FETCH_ASSOC);
    return $test["pseudo"];
}


function ajouterArticle($titre, $contenu, $resume, $categorie, $image)
{
    include "connexiondb.php";
    $date = date("Y-m-d");
    $idAuteur = $_SESSION['user']['id'];
    $sqlquery = $db->exec("INSERT INTO article VALUES (null, '$titre', '$date' , '$idAuteur', '$contenu', '$image', '$categorie', '$resume')");
}

// function afficherAuteurCommentaire($id)
// {
//     include "connexiondb.php";

//     $sqlQuery = "SELECT pseudo FROM user 
//                  INNER JOIN commentaire ON commentaire.auteur=user.id
//                  WHERE commentaire.id = $id";

//     $titre = $db->prepare($sqlQuery);
//     $titre->execute();
//     $test = $titre->fetch(PDO::FETCH_ASSOC);
//     return $test["auteur"];
// }

function ajouterCommentaire($idarticle, $contenu)
{
    include "connexiondb.php";
    $date = date("Y-m-d-H-i-s");
    $idAuteur = $_SESSION['user']['id'];
    $sqlquery = $db->exec("INSERT INTO commentaire VALUES (null, '$date', '$contenu', '$idAuteur', '$idarticle')");
}

function register($pseudo, $password, $email)
{
    include "connexiondb.php";
    $sqlquery = $db->exec("INSERT INTO user VALUES (null, '$pseudo', '$password', '$email')");
}

function getUserInfosByMail($email)
{
    include "connexiondb.php";
    $query = $db->query("SELECT * FROM user WHERE user.mail='$email'");
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function renameImage($titre)
{
    $search  = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'à', 'á', 'â', 'ã', 'ä', 'å', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ð', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ');
    $replace = array('A', 'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 'a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y');
    $titreImage = str_replace($search, $replace, $titre);
    $titreImage = str_replace(" ", "", (strtolower($titreImage)));

    return $titreImage;
}

function recupArticleParId($Idarticle)
{
    include "connexiondb.php";
    $query = $db->query("SELECT * FROM article WHERE id=$Idarticle");
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function afficherNomCategorie($id)
{
    include "connexiondb.php";
    $sqlQuery = "SELECT nom FROM categorie WHERE id = $id";
    $titre = $db->prepare($sqlQuery);
    $titre->execute();
    $test = $titre->fetch(PDO::FETCH_ASSOC);
    return $test["nom"];
}

function recupAllCommentaires($id)
{
    include "connexiondb.php";
    $sqlQuery = "SELECT contenu, date FROM commentaire WHERE id_article = $id";
    $titre = $db->prepare($sqlQuery);
    $titre->execute();
    $test = $titre->fetchAll(PDO::FETCH_ASSOC);
    return $test;
}


function afficherResumeCategorie($id)
{
    include "connexiondb.php";
    $sqlQuery = "SELECT resume FROM categorie WHERE id = $id";
    $titre = $db->prepare($sqlQuery);
    $titre->execute();
    $test = $titre->fetch(PDO::FETCH_ASSOC);
    return $test["resume"];
}

function recupArticleByCategorie($idCategorie)
{
    include "connexiondb.php";
    $sqlQuery = "SELECT * FROM article WHERE id_categorie = $idCategorie";
    $titre = $db->prepare($sqlQuery);
    $titre->execute();
    $test = $titre->fetchAll(PDO::FETCH_ASSOC);
    return $test;
}

function recupAllarticleByUser($id)
{
    include "connexiondb.php";
    $sqlQuery = "SELECT * FROM article WHERE id_user = $id";
    $titre = $db->prepare($sqlQuery);
    $titre->execute();
    $test = $titre->fetchAll(PDO::FETCH_ASSOC);
    return $test;
}