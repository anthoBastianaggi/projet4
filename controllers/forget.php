<?php

function forget($page) {
    if(!empty($_POST) && !empty($_POST['email'])){
        $db = App::getDatabase();
        $auth = App::getAuth();
        $session = Session::getInstance();
        if($auth->resetPassword($db, $_POST['email'])) {
            $session->setFlash('success', 'Les instructions du rappel de mot de passe vous ont été envoyées par emails');
            App::redirect('/projet4/login?action=login');
        } else {
            $session->setFlash('danger', 'Aucun compte ne correspond à cet adresse.');
        }
    }
    include_once 'views/account/sections/log/forget/'.$page.'.php';
}