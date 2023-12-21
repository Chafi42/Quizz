<?php
require_once('../connexion.php');
//var_dump($_POST);
$statistique = 0;
$allUniqueAuthors = [];
foreach($pseudos as $pseudo){
    if(!in_array($pseudo['pseudo'], $allUniqueAuthors)){
        array_push($allUniqueAuthors, $pseudo['pseudo']);
    }
}





header('./index.php');
//die();
//var_dump($_POST);