<?php include 'header.php';
include 'fonctions.php';
$idCategorie = $_GET['id'];
?>

<h1 class="titre">Catégorie : <?php echo(afficherNomCategorie($idCategorie));?> </h1>

<div class="container-fluid">
    <div class="row">

        <?php
        


        $articles = recupArticleByCategorie($idCategorie);

            for ($i = 1; $i < 100; $i++) {
                foreach ($articles as $article) {
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
        
       
        ?>
        
    </div>


</div>

<?php include 'footer.php'; ?>