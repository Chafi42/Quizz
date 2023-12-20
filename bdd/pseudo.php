<?php

//var_dump($_POST);


if (
    isset($_POST['pseudo']) && !empty($_POST['pseudo'] &&
    isset($_POST['stat']) && !empty($_POST['stat'])));
    
    
    
    
    {
    require_once('./connexion.php');
    
    $requete = $database->prepare("INSERT INTO user (stat, pseudo) 
                    VALUES (:stat, :pseudo)");

    $result = $requete->execute([
        'stat' => $_POST['stat'],
        'pseudo' => $_POST['pseudo'],


    ]);
}