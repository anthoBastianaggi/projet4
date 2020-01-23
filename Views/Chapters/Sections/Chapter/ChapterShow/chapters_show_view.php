<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Mise en mémoire tampon (rien ne s'affichera)
    ob_start(); 
?>
<section id="showChapters">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-5 textHeaderShowChapters">
                <div class="text-container">
                    <h2 class="section-title text-center text-uppercase"><?= $showChapter['title'] ?></h2>                    
                </div>
            </div>
            <div class="col-md-8">
                <article class="col-lg-12">
                    <div class="card mb-3">
                        <div class="blog-thumb">
                            <a href="https://bit.ly/2LHKl61">
                                <img src="https://i.ibb.co/HrtN39y/services1.jpg" alt="" />
                                <div class="meta-info">
                                    Written by <span class="author">Jean Forteroche</span> <span class="date"><?= $showChapter['created_at'] ?></span>
                                </div>
                            </a>
                        </div>
                        <div class="card-block">
                            <div class="card-block-container">
                                <div class="headerChapter">
                                    <h3 class="card-header mb-3"><a href=""><?= $showChapter['title'] ?></a></h3>
                                </div>                             
                                <div class="blog-content home-blog">                       
                                    <?= $showChapter['content'] ?>
                                </div>
                                <div class="card-footer">
                                    <div class="btn-body-card">
                                        <div class="btn-card">
                                            <a href="<?= CURRENT_PATH ?>chapters?action=updateChapter&id=<?= $_GET['id'] ?>" class="btn btn-default stat-item">
                                            <i class="fa fa-pencil"></i>
                                            </a>
                                            <a href="<?= CURRENT_PATH ?>chapters?action=deleteChapter&id=<?= $_GET['id'] ?>" class="btn btn-default stat-item">
                                            <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>   
                            </div>                            
                        </div>
                        
                    </div>                  
                </article>
            </div>
            <aside class="col-md-4">
                <div class="card mb-3">
                    <h3 class="card-header mb-3">Join our Newsletter</h3>
                    <form class="form-horizontal">
                        <div class="form-group">
                        <div class="col-sm-12">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">Join Us</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card mb-3">
                    <h3 class="card-header mb-3">A propos du roman</h3>
                    <div class="list-group  mb-3">
                        <div class="list-group-about-container">    
                            <p class="list-group-item-text"> 
                                Des plaines verdoyantes, aux montagnes acérées ...</br>                
                                À travers un format inédit et résolument moderne, je souhaite vous faire découvrir mon nouveau roman :
                                </br><strong>« Un billet simple pour l'Alaska»</strong>    
                            </p>
                            <p class="list-group-item-text">
                                Êtes vous prêt pour le voyage le plus glacial de votre vie ... ?
                            </p>
                            <div class="meta-info">
                                <span class="author">- Jean Forteroche -</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <h3 class="card-header mb-3">Les derniers chapitres</h3>
                    <div class="list-group mb-3">
                        <?php foreach ($lastChapters as $ticket) { ?>
                            <div class="list-group-container">
                                <a href="#" class="">
                                    <h4 class="list-group-item-heading"><?=  $ticket['title'] ?></h4>
                                    <p class="list-group-item-text">
                                        <?=  substr($ticket['content'], 0, 300).' '.'. . .' ?>
                                    </p>
                                </a>
                            </div>
                        <?php } ?>                
                    </div>
                </div>            
            </aside>
        </div>
    </div>
</section>

<section id="commentChapter">
    <div class="container">
        <div class="row">        
            <div class="col-md-8">
                <div class="col-lg-12">
                    <div class="card-block">
                        <h3>Commentaires</h3>
                        <div class="card-block-container">
                            <?php foreach ($allComments as $comment) { ?>                           
                                <div class="panel panel-white post panel-shadow">
                                    <div class="post-heading">
                                        <div class="pull-left image">
                                            <p class="comment-author">
                                                <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                                                <span class="comment-author-name">Jean Forteroche</span>
                                                <span class="says">made a post.</span>
                                            </p>    
                                            <h6 class="text-muted time"><?= $comment['created_at'] ?></h6>                          
                                        </div>
                                        <div class="dropdownOptions">
                                            <i class="fa fa-ellipsis-v"></i>
                                            <ul class="dropdownListOptions">
                                                <li class="dropdownItemOptions">
                                                    <a href="<?= CURRENT_PATH ?>comments?action=updateComment&id=<?= $comment['id'] ?>" class="btn btn-default stat-item">
                                                        <i class="fa fa-pencil"></i>
                                                        <span>Modifier</span>
                                                    </a>
                                                </li>
                                                <li class="dropdownItemOptions">
                                                    <a href="<?= CURRENT_PATH ?>comments?action=deleteComment&id=<?= $comment['id'] ?>" class="btn btn-default stat-item">
                                                        <i class="fa fa-trash"></i>
                                                        <span>Supprimer</span>
                                                    </a>
                                                </li>
                                                <li class="dropdownItemOptions">
                                                    <a href="<?= CURRENT_PATH ?>comments?action=signalComment&id=<?= $_GET['id'] ?>" class="btn btn-default stat-item">
                                                        <i class="fa fa-flag"></i>
                                                        <span>Signaler</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> 
                                    <div class="post-description"> 
                                        <p><?= $comment['content'] ?></p>                          
                                    </div>
                                </div>
                            <?php } ?>
                        </div>                                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="addComments">
    <div class="container">
        <div class="row" id="comment_add">        
            <div class="col-md-8">
                <div class="col-lg-12">
                    <div class="card-block">
                        <h3>Laisser un commentaire</h3>
                        <div class="card-block-container">
                            <form class="form-horizontal" action="<?= CURRENT_PATH ?>comments?action=addComment&id=<?= $_GET['id'] ?>" method="post">
                                <div class="form-group ">
                                    <textarea id="commentChapter" name="commentChapter" class="form-control" placeholder="Entrez votre commentaire"></textarea> 
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12" id="btnAddComment">
                                        <button type="submit" name="btnAddComment" class="btn btn-primary">Envoyé commentaire</button>
                                    </div>
                                </div>
                            </form>
                        </div>                                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
    // On recupere dans une variable le contenu du tampon 
    $content = ob_get_clean() ;

    // On intégre le template qui utilise la variable $content
    include 'Template/template.php'; 
?>