$(document).ready(function() {

    $('.nouveauCommentaire').submit(function(e) {
        e.preventDefault();

        let contenu = $("#contenu").val();
        let idArticle = $("#idArticle").val();

        $.post('traitementCommentaires.php', {
            commentaire: contenu,
            idArticle: idArticle

        }, function(data) {
            $('#commentairesAjax').append("<div class='commentaire'>" + contenu + "</div>");


        })
    })
})