<?php $title = "Vancraft - Poser une question" ?>

<?php ob_start(); ?>
<div class="main">
    <div class="send-post-container">
        <form action="index.php?action=submit-post" method="post">
            <div><label for="title"><b>Titre</b></label></div>
            <div><input autocomplete="off" class="post-field" type="text" name="title" placeholder="Soyez spécifique et faites comme si vous posez la question à vous-même."></div>
            <div><label for="content"><b>Contenu</b></label></div>
            <div><textarea class="post-field content" autocomplete="off" name="content" placeholder="Quels sont les détails de votre question ? Développez le contenu de votre titre ici."></textarea></div>
            <div><label for="title"><b>Mots-clefs</b></label></div>
            <div><input autocomplete="off" class="post-field" type="text" name="tags" placeholder="Ajouter jusqu'à 5 mots-clefs (tags) à votre question."></div>
            <div><input class="btn-orange" type="submit" value="Envoyer la question" style="margin-left: 0;"></div>
        </form>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('templates/layout.php');