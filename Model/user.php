<?php

include 'Connexion_BDD.php';
class user {
    public $user_id;
    public $user_username;
    public $user_password;
    public $user_Fname;
    public $user_Lname;
    public $role_id;
    public $promo_id;
    public $center_id;
   
   

    /*
    function get(test, test1, test2, test3, test4, test5, test6, test7, $sort) {
        
        requete ici
        
        switch ($sort) { //https://www.php.net/manual/fr/array.sorting.php
        case 0: //on souhaite simplement récupérer les données sans conditions
            $query = $dbh->prepare("SELECT '{$test}' '{$test1}'  '{$test2}' '{$test3}' '{$test}' '{$test}' '{$test}'FROM utilisateurs");
            $query = $dbh->prepare('SELECT ":id, :username, :test2, :test3, :test4, :test5, :test6, :test7" FROM utilisateurs');
            $query->execute([
                'pseudo' => $_POST['pseudo'],
                'motDePasse' => $_POST['motDePasse'],
                'centre' => $_POST['center']
            ]);
            
            $ok = $query->fetch();

            $pdoQuery = "SELECT * FROM `utilisateur` ";

            $req = $pdo->prepare($pdoQuery);
            $result =$req->execute();
    
            $verify = $pdo->query($pdoQuery);
            $fetch = $verify->fetch(PDO::FETCH_ASSOC);
            $a['user']= jean.cadre asort($a['user'])

            break;
        case 1:
            echo "i égal 1";
            break;

        case 2:
            echo "i égal 2";
            break;
        case 3:
            echo "i égal 0";
            break;
        case 4:
            echo "i égal 1";
            break;
        case 5:
            echo "i égal 2";
            break;
        case 6:
            echo "i égal 0";
            break;
        case 7:
            echo "i égal 1";
            break;
        case 8:
            echo "i égal 2";
            break;
        case 9:

        }
    }
    /*function getId() {}
    function getUsername() {}
    function getPassword() {}
    function getFname() {}
    function getLname() {}
    function getRoleID() {}
    function getPromoID() {}
    function getCenterID() {}*/

    function modifyUsername() {}
    function modifyPassword() {}
    function modifyFname() {}
    function modifyLname() {}
    function modifyRoleID() {}
    function modifyPromoID() {}
    function modifyCenterID() {}
}

function getUsers(){
/*
    $pdoQuery = "SELECT * FROM `utilisateur` ";

    $req = $pdo->prepare($pdoQuery);
    $result =$req->execute();
    
    $verify = $pdo->query($pdoQuery);
    $fetch = $verify->fetch(PDO::FETCH_ASSOC);
    print_r($fetch);
*/

}




?>