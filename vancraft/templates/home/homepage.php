<?php $title = "VanCraft - Page d'accueil"; ?>

<?php ob_start(); ?>
<div class="main">
    <div class="title-container">
        <div class="title-text-container">
            <h1 class="title-title">VanCraft</h1>
            <h4 class="title-subtitle">Une aide communautaire à la réalisation de son véhicule aménagé.</h4>
        </div>
       <div class="title-logo-container">
            <img src="images/logo/logo.svg" alt="VanCraft Logo"/>
       </div>
    </div>

    <div class="content-post-container">
        <div class="title-btn-post-container">
            <h3 class="header-title-post">Questions populaires</h3>
            <button class="btn-orange"><b>Poser une question</b></button>
        </div>
        <hr class="horizontal-rule">

        <!-- parent's div for first child and last child -->
        <div>
            <div class="post-container">
                <div class="row-container">
                    <div class="post-title">
                        <?= $posts[0]->title ?>
                    </div>
                    <div class="views-votes-container">
                        <div class="post-stat">
                            <?= $posts[0]->votes ?> votes
                        </div>
                        <div class="post-stat">
                            <?= $posts[0]->answers ?> réponses
                        </div>
                        <div class="post-stat">
                            <?= $posts[0]->views ?> vues
                        </div>
                    </div>
                </div>
                <div class="tag-container">
                    <div class="btn-orange">Armaflex</div>
                    <div class="btn-orange">Styrodur</div>
                    <div class="btn-orange">Laine de verre</div>
                    <div class="btn-orange">Isolation</div>
                </div>
            </div>
            <div class="post-container">
                <?= $posts[1]->title ?>
                <?= $posts[1]->votes ?>
            </div>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('templates/layout.php'); ?>