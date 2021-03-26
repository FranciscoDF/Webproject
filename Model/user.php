<?php

class user {
    public $user_id;
    public $user_username;
    public $user_password;
    public $user_Fname;
    public $user_Lname;
    public $role_id;
    public $promo_id;
    public $center_id;
   
   
    function getId() {
    
    }
}

function getUsers(){

    include 'Connecion_BDD.php';

    $pdoQuery = "SELECT * FROM `utilisateur` ";

    $req = $pdo->prepare($pdoQuery);
    $result =$req->execute();
    
    $verify = $pdo->query($pdoQuery);
    $fetch = $verify->fetch(PDO::FETCH_ASSOC);
    print_r($fetch);



}












?>