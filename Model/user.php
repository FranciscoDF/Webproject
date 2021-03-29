<?php
//require_once('Model.php');

class user //extends Model 
{
    private $_id_user;
    private $_username_user;
    private $_password_user;
    private $_fname_user;
    private $_lname_user;
    private $_id_role;
    private $_id_promo;
    private $_id_center;


    public function __construct($data) {
        $this->hydrate( $data);
    }

    public function hydrate(array $data){
        foreach ($data as $key => $value) {
            $method = 'set'.ucfirst($key);

            if (method_exists($this, $method))
                $this->$method($value);
        }
    }


    public function id_user() {return $this->_id_user;}
    public function username_user() {return $this->_username_user;}
    public function password_user() {return $this->_password_user;}
    public function fname_user() {return $this->_fname_user;}
    public function lname_user() {return $this->_lname_user;}
    public function id_role() {return $this->_id_role;}
    public function id_promo() {return $this->_id_promo;}
    public function id_center(){return $this->_id_center;}

    public function setId_utilisateur($id) {
        $id_user = (int) $id;
        if ($id_user > 0)
            $this->_id_user = $id_user;
    }

    public function setUser_utilisateur($username) {
        if (is_string($username) && strlen($username) <= 30)
            $this->_username_user = $username;
    }
    
    public function setMdp_utilisateur($password) {
        if (is_string($password) && strlen($password) <= 30)
            $this->_password_user = $password;
    }

    public function setNom_utilisateur($fname) {
        if (is_string($fname) && strlen($fname) <= 20)
            $this->_fname_user = $fname;
    }

    public function setPrenom_utilisateur($lname) {
        if (is_string($lname) && strlen($lname) <= 25)
            $this->_lname_user = $lname;
    }

    public function setId_role($id) {
        $this->_id_role = (int) $id;
    }

    public function setId_promotion($id) {
        $this->_id_promo = (int) $id;
    }

    public function setId_centre($id) {
        $this->_id_center = (int) $id;
    }

}

/*
function getUsers(){

    $pdoQuery = "SELECT * FROM `utilisateur` ";

    $req = $pdo->prepare($pdoQuery);
    $result =$req->execute();
    
    $verify = $pdo->query($pdoQuery);
    $fetch = $verify->fetch(PDO::FETCH_ASSOC);
    print_r($fetch);
*/


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
    function getId() {}
    function getUsername() {}
    function getPassword() {}
    function getFname() {}
    function getLname() {}
    function getRoleID() {}
    function getPromoID() {}
    function getCenterID() {}*/

?>