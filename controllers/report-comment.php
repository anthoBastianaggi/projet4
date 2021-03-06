<?php

function reportComment($page) {
    if(AuthService::is_role_admin()) {
        $profile = new Profile();
        $infoProfile = $profile->infoProfile($_SESSION['auth']->id);
        $comment = new Comments();
        $allSignaleCommentsValidate = $comment->getAllSignaleCommentValidate();
        $role = Auth::roleUser($_SESSION['auth']->role_id);
        include_once 'views/account/sections/report-comment/'.$page.'.php';
    } else {
        App::redirect('/projet4/profile?action=profile');
    }
}

function validateSignaleComment($page) {
    $comment = new Comments();
    $valideSignaleComment = $comment->validateSignaleComment();
    App::redirect('/projet4/report-comment?action=reportComment');
}

function deleteSignaleComment($page) {
    $comment = new Comments();
    $deleteSignaleComment = $comment->deleteSignaleComment();
    App::redirect('/projet4/report-comment?action=reportComment');
}