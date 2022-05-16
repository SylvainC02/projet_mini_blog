<?php include 'header.php';
include "fonctions.php";
$id = $_GET['id'];
$commentaires = recupAllCommentaires($id);

?>



<h1 class="titrearticle"><?php echo (afficherTitre($id)); ?></h1>

<div class="auteur">
<?php echo (afficherAuteur($id) . ', '); ?>

<?php echo (afficherDate($id)); ?>
</div>

<div class="contenuarticle"><?php echo (afficherContenu($id)); ?></div>

<!--<a class="btn btn-primary" href="modifierarticle.php?id=<?php echo $id ?>">Editer</a>-->

<h2>Commentaires de l'article : </h2>

<div id="commentaire">

      <?php
      if (!empty($commentaires)) {
            foreach ($commentaires as $commentaire) {
                  echo ('<div class=commentaire> '. $commentaire["date"]. 
                        '<div>'.$commentaire["contenu"]. '</div>
                        </div>');
            }
      }
      ?>
</div>

<div id="commentairesAjax">

</div>


<h2>Ajouter un commentaire</h2>

<form class="nouveauCommentaire" action="traitementCommentaires.php" method="post">
      <span>
            <label for="resume">Votre Commentaire : </label>
      </span>

      <div>
            <textarea type="text" id="contenu" name="contenu" placeholder="Contenu..."></textarea>
      </div>

      <div>
            <input id="ajouterCommentaire" type="submit" value="Ajouter">
      </div>

      <div>
            <input type='hidden' value="<?php echo$id ?>" id="idArticle" name="idArticle">
      </div>

</form>

      <?php include 'footer.php'; ?>

