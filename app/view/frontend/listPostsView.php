

<?php $title = 'Billet simple pour l\'Alaska'; ?>

<?php ob_start(); ?>

<div class='container-fluid'>

    <header class="row">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-10">
            <h1>Bienvenue sur mon blog !</h1>
            <p>Vous aller pouvoir y découvrir régulièrement des épisodes de mon
                nouveau livre " Billet simple pour l'Alaska". N'hésitez pas à commenter. Je serais très heureux
                d'avoir votre retour. Je vous souhaite une bonne lecture.</p>
        </div>
        <div class="col-lg-1"></div>
    </header>
    <section class="row">
            <div class="col-xs-6 col-lg-4">
        <?php
        while ($data = $posts->fetch()) {
            ?>
            <div id="container">
                <div class="post">
                    <h3>
                        <?= htmlspecialchars($data['title']) ?><br/>
                        <em> <?= $data['creation_date_fr'] ?></em>
                    </h3>

                    <p>
                        <?= nl2br(htmlspecialchars($data['content'])) ?>
                        <br /><br /><br />
                        <em><a href="index2.php?action=post&amp;id=<?= $data['id'] ?>">Commentaires</a></em>
                    </p>
                </div>
            </div>
            </div>
    </section>
    
    <?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
