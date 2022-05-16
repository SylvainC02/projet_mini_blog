<?php
include 'header.php';
include 'fonctions.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    $post = recuparticleParId($id);
    $titre = htmlspecialchars($_POST['titre']);
    $contenu = htmlspecialchars($_POST['contenu']);
    $resume = htmlspecialchars($_POST['resume']);
    $categorie = htmlspecialchars($_POST['categorie']);
    if (isset($_FILES['imagearticle']) &&  !empty($_FILES['imagearticle']['name'])) {
        $tailleMax = 2097152;
        $extensionValides = array('jpg', 'jpeg', 'gif', 'png');

        if ($_FILES['imagearticle']['size'] <= $tailleMax) {

            //strchr : prend tout ce qui vient apres le point (donc l'extension), substr pour enlever le point et lower pour eviter les JPG et tt
            $extensionUpload = strtolower(substr(strrchr($_FILES['imagearticle']['name'], "."), 1));


            $titreImage = renameImage($titre);

            if (in_array($extensionUpload, $extensionValides)) {
                $chemin = "images/" . $titreImage . "." . $extensionUpload;
                $resultat = move_uploaded_file($_FILES['imagearticle']['tmp_name'], $chemin);
                if ($resultat) {
                    ajouterArticle($titre, $contenu, $resume, $categorie, $chemin);
                }
            }
        }
    }
}
?>

<h1 class="titre">Ajouter un article</h1>

<form class="nouvelarticle" action="" method="POST" enctype="multipart/form-data">
    <h2 class="legend">Veuillez remplir les champs</h2>

    <div class="titreNouveauarticle">

        <label for="titre">Le titre : </label>
        <input type="text" id="titre" name="titre" placeholder="Titre...">

    </div>

    <div>
        <label for="contenu">Contenu : </label>
        <textarea id="contenu" name="contenu" placeholder="Contenu..."></textarea>

    </div>

    <div>

        <label for="resume">Resume : </label>
        <textarea type="text" id="resume" name="resume" placeholder="Resume..."></textarea>

    </div>

    <div>
        <label>Selectionnez une catégorie : </label>
        <select name="categorie" id="categorie">
            <?php
            $categories = recupAllCategorie();
            foreach ($categories as $categorie) {
                echo ("<option value='");
                echo $categorie['id'];
                echo ("'>");
                echo ($categorie["nom"]);
                echo ("</option>");
            }
            ?>

        </select>

    </div>

    <div>
        <label>Image : </label>
        <input type="file" name="imagearticle">
    </div>

    <div>
        <input type="submit" value="Ajouter">
    </div>
</form>

<?php
include 'footer.php';
?>