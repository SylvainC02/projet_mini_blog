<?php
include 'header.php';
include 'fonctions.php';
$articlesUser = recupAllarticleByUser($_SESSION["user"]["id"]);
?>

<h1 class="titre">Voici vos articles</h1>

<div class="container-fluid">
    <div class="row">

        <?php
            if (!empty($articlesUser)) {
                for ($i = 1; $i < 100; $i++) {
                    foreach ($articlesUser as $article) {
                    if ($i == $article["id"]) {
                            echo ('<div class="col-4">
                                         <div class="card text-center" style="width: ;">
                                         <a href="articles.php?id=');
                            echo $article["id"];
                            echo ('"><img src="');
                            echo $article["image"];
                            echo ('" class="card-img-top" alt="..."></a>
                                         <div class="card-body">
                                         <a class="boutton" href="articles.php?id=');
                            echo $article["id"];
                            echo ('">');
                            echo (afficherTitre($i));
                            echo ('</a> <p class="card-text">');
                            echo (afficherResume($i));
                            echo ("</div></div></div>");
    
                        }
                        
                    }
                }
            }else {
                echo("<h2 class='titre2'>Désolé, vous n'avez aucun article.</h2>");
            }

            
         ?>
        
    </div>


</div>

<?php
include 'footer.php';
?>