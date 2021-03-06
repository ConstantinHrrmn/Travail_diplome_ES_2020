<?php

/*
Ce fichier permet de rediriger l'utilisateur sur la page correspondante à l'abonnement qu'il possède avec son restaurant
*/

session_start();

var_dump($_SESSION);
include "../vars.php";

if(isset($_SESSION['sender'])){
    $id = $_SESSION['sender']; 
}
if(isset($_SESSION['etab'])){
    $id = $_SESSION['etab']->id; 
}

if(is_numeric($id)){ 
    $queryData = array(
        'i' => $id
      );
    $link = $path."etablishment/get/?level&".http_build_query($queryData);
    
    $json = file_get_contents($link);
    $data = json_decode($json);
    $level = $data->level;

    var_dump($level);

    // RESA BLOG
    if($level == 1){
        header("Location: ./resablog/index.php");
        exit();
    }
    // RESA PRO
    else if($level == 2){
        header("Location: ./resapro/index.php");
        exit();
    }
    // RESA FULL
    else if($level == 3){
        header("Location: ./resafull/index.php");
        exit();
    }
}