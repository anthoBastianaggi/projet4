<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Buffering (nothing will be displayed)
    ob_start(); 
?>

<div class="section-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-5 textHeaderAddChapter">
                <div class="text-container">
                    <h2 class="section-title text-center text-uppercase">Ajouter un chapitre</h2>                   
                </div>
            </div>
            <div id="infobox-add-chapter" class="col-sm-12">
                <div class="box-shadow-full boxContainer">
                    <div class="row">   
                        <div class="col-md-12 col-md-offset-2">
                        <form class="form-horizontal" action="<?= CURRENT_PATH ?>chapters?action=addChapter" method="post">
                            <div class="form-group">
                                <label>Titre du chapitre</label>
                                <input type="text" name="titleTicket" class="form-control" placeholder="Entrez votre titre du chapitre">
                            </div>
                            <div class="form-group">
                                <label for="imageCard" id="imageCard">Choisir une image</label>
                                <input type="file" id="imageCard" name="imageCard" accept="image/png, image/jpeg">
                            </div>
                            <div class="form-group ">
                                <label for="exampleInputText3">Contenu</label>
                                <textarea id="contentTicket" name="contentTicket" class="form-control" placeholder="Entrez votre contenu"></textarea> 
                            </div>
                            <div class="col-md-12 text-center" id="btn-container">
                                <button type="submit" name="btnAjoutTicket" id="btnAdd" class="button button-a">Publier</button>
                                <button type="button" id="btnCancelAddChapter" class="btn btn-default">Annuler</button>
                            </div> 
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    // We recover in a variable the content of the buffer
    $content = ob_get_clean() ;

    // We integrate the template which uses the variable $content
    include 'template/template.php'; 
?>