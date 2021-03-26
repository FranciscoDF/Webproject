<?php

class role {
    public $role_id;
    public $role_nom;
   
   
    function getId() {
    
    }
}

function getRoles(){

    include 'Connecion_BDD.php';

    $pdoQuery = "SELECT * FROM `role` ";

    $req = $pdo->prepare($pdoQuery);
    $result =$req->execute();
    
    $verify = $pdo->query($pdoQuery);
    $fetch = $verify->fetch(PDO::FETCH_ASSOC);
    print_r($fetch);



}




?>