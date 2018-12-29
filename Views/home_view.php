<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Mise en mémoire tampon (rien ne s'affichera)
    ob_start();
?>

<section class="module-cover parallax fullscreen text-center" id="home">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="m-b-20"><strong>Un billet simple pour l'Alaska</strong></h2>
                <p class="m-b-40">Un roman écrit par Jean Forteroche</p>
            </div>
        </div> 
    </div>
</section>
<section class="les_chapitres">
    <div class="description">
        <h2>CHAPITRES</h2>
        <div>
            <p class="sous_titre">Venez découvrir les derniers épisodes</p>
        </div>
        
        <div class="row">
        <?php foreach ($lastChapters as $ticket) { ?>
            <div class="col-sm-4">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?=  $ticket['title'] ?></h5>
                    <div class="mb-1 text-muted"><?=  $ticket['created_at'] ?></div>
                    <p class="card-text"><?=  substr($ticket['content'], 0, 280).' '.'. . .' ?></p>
                    <br /><a href="<?= CURRENT_PATH ?>chapters?action=showChapter&id= <?= $ticket['id'] ?>" class="btn btn-primary">Voir plus</a>
                </div>
                </div>
            </div>
        <?php } ?>
        </div>     
        <br /><a class="btn btn-primary" href="<?= CURRENT_PATH ?>chapters?action=chapters" role="button">Voir plus de chapitres</a>
    </div>
</section>

<?php 
    // On recupere dans une variable le contenu du tampon 
    $content = ob_get_clean() ;

    // On intégre le template qui utilise la variable $content
    include 'Template/template.php'; 
?>