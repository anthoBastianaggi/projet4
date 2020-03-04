<?php

class Contact {
    /**
        * Contact constructor.
        * @param $id
    */
    function __construct() {
        global $db;
    }
    
    /**
        * Ajout d'un message de contact
        * @return array
    */
    public function addMessageContactIsConnected($authorContact, $subject, $content) {
        global $db;

        $reqContact= $db->prepare('INSERT INTO message(users_id, subject, content, sended_at) VALUES(?, ?, ?, NOW())');
        $reqContact->execute(array($authorContact, $subject, $content));
    }

    public function addMessageContact($firstnameContact, $lastnameConctact, $emailContact, $subject, $content) {
        global $db;

        $reqContact= $db->prepare('INSERT INTO message(firstname, lastname, email, subject, content, sended_at) VALUES(?, ?, ?, ?, ?, NOW())');
        $reqContact->execute(array($firstnameContact,$lastnameConctact, $emailContact, $subject, $content));
    }
}