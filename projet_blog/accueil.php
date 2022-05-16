<?php
include 'header.php';
include 'fonctions.php';
$compteur = 0;
$articles = recupAllarticle();
?>

<div>
    <h1 class="titre">Monster Hunter</h1>
</div>
<div class="descriptionJeux">Monster Hunter est une série de jeux vidéo développés et édités par Capcom (et Nintendo pour la version 3DS Monster Hunter Generations). L'histoire de la licence débute par un premier opus sur console PlayStation 2 en 2004. S'en suivront de nombreux épisodes jusqu'à Monster Hunter : Rise sorti en mars 2021 sur Nintendo Switch.
    Dans Monster Hunter, le joueur incarne un chasseur évoluant dans un monde fantasy riche, rempli de monstres en tout genre. Et puisque les chasser et les capturer c'est votre dada, votre épanouissement est total. La collecte est aussi de la partie : minéraux, poissons et autres petits monstres peu ragoutants. Au fil de ses quêtes et de sa progression, le joueur peut améliorer ses armes et son équipement pour devenir une véritable machine à tuer du monstre baveux.
    Adaptée au cinéma en 2020 par Paul W.S. Anderson (à qui l'on doit aussi le portage sur grand écran de la saga Resident Evil), on y retrouve l'actrice Milla Jovovich en tête d'affiche. Malgré une critique du film peu enthousiaste, la saga Monster Hunter fait désormais partie de ces jeux d'aventure cross média ayant marqué toute une génération.</div>




<h2 class="titre2">Articles</h2>

<div class="container-fluid">
    <div class="row">

        <?php
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
                        $compteur++;
                    }
                    
                }
            }
         ?>
        
    </div>


</div>

<h2 class="titre2">Catégories</h2>

<div class="container-fluid">
    <div class="row">

        <?php
        $categories = recupAllCategories();
        for ($i = 1; $i < 100; $i++) {
            foreach ($categories as $categorie) {
                if ($i == $categorie["id"]) {
                    echo ('<div class="col-4">
                                 <div class="card text-center" style="width: ;">
                                 <a href="categorie.php?id=');
                    echo $categorie["id"];
                    echo ('"><img src="');
                    echo $categorie["image"];
                    echo ('" class="card-img-top" alt="..."></a>
                                 <div class="card-body">
                                 <a class="boutton" href="categorie.php?id=');
                    echo $categorie["id"];
                    echo ('">');
                    echo (afficherNomCategorie($i));
                    echo ('</a> <p class="card-text">');
                    echo (afficherResumeCategorie($i));
                    echo ("</div></div></div>");
                }
            }
        }
        ?>

    </div>
</div>
<?php include 'footer.php'; ?>