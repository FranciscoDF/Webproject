<?php
//require_once('Model.php');

class internship extends Model
{
    private $_id_internship;
    private $_name_internship;
    private $_des_internship;
    private $_lieu_internship;
    private $_date_internship;
    private $_duree_internship;
    private $_remu_internship;
    private $_nbPlace_internship;
    private $_id_entreprise;


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


    public function id_internship() {return $this->_id_internship;}
    public function name_internship() {return $this->_name_internship;}
    public function des_internship() {return $this->_des_internship;}
    public function lieu_internship() {return $this->_lieu_internship;}
    public function date_internship() {return $this->_date_internship;}
    public function duree_internship() {return $this->_duree_internship;}
    public function remu_internship() {return $this->_remu_internship;}
    public function nbPlace_internship(){return $this->_nbPlace_internship;}
    public function id_entreprise(){return $this->_id_entreprise;}


    public function setId_offre($id) {
        $id_internship = (int) $id;
        if ($id_internship > 0)
            $this->_id_internship = $id_internship;
    }

    public function setNom_offre($name) {
        if (is_string($name) && strlen($name) <= 30)
            $this->_name_internship= $name;
    }
    
    public function setDescription_offre($des) {
        if (is_string($des) && strlen($des) <= 30)
            $this->_des_internship = $des;
    }

    public function setLieu_offre($lieu) {
        if (is_string($lieu) && strlen($lieu) <= 20)
            $this->_lieu_internship = $lieu;
    }

    public function setDate_offre($date) {
        if (is_string($date) && strlen($date) <= 25)
            $this->_date_internship = $date;
    }

    public function setDuree_offre($duree) {
        if (is_string($duree) && strlen($duree) <= 25)
            $this->_duree_internship = $duree;
    }

    public function setRemu_offre($remu) {
        $this->_remu_internship = (float) $remu;
    }

    public function setNbPlace_offre($place) {
        if (is_string($place) && strlen($place) <= 25)
            $this->_nbPlace_internship = $place;
    }

    public function setId_entreprise($id) {
        $id_entreprise = (int) $id;
        if ($id_entreprise > 0)
            $this->_id_entreprise = $id_entreprise;
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