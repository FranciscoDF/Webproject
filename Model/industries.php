<?php

class industries {
    private $_id_entreprise;
    private $_nom_entreprise;
    private $_lieu_entreprise;
    private $_evalMoy_entreprise;
    private $_nbStagiaire_entreprise;
    private $_description_entreprise;
    private $_id_secteur;


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

    public function id_entreprise() {return $this->_id_entreprise;}
    public function nom_entreprise() {return $this->_nom_entreprise;}
    public function lieu_entreprise() {return $this->_lieu_entreprise;}
    public function evalMoy_entreprise() {return $this->_evalMoy_entreprise;}
    public function nbStagiaire_entreprise() {return $this->_nbStagiaire_entreprise;}
    public function description_entreprise() {return $this->_description_entreprise;}
    public function id_secteur() {return $this->_id_secteur;}

    public function setId_entreprise($id) {
        $id_entreprise = (int) $id;
        if ($id_entreprise > 0)
            $this->_id_entreprise = $id_entreprise;
    }

    public function setNom_entreprise($nom) {
        if (is_string($nom) && strlen($nom) <= 30)
            $this->_nom_entreprise = $nom;
    }
    
    public function setLieu_entreprise($lieu) {
        if (is_string($lieu) && strlen($lieu) <= 30)
            $this->_lieu_entreprise = $lieu;
    }

    public function setEvalMoy_entreprise($evalmoy) {
        if (is_string($evalmoy) && strlen($evalmoy) <= 20)
            $this->_evalMoy_entreprise = $evalmoy;
    }

    public function setNbStagiaire_entreprise($nbstagiaire) {
        $nbStagiaire_entreprise = (int) $nbstagiaire;
        if ( $nbstagiaire  >= 0)
            $this->_nbStagiaire_entreprise = $nbstagiaire;
    }

    public function setDescription_entreprise($description) {
        if (is_string($description) && strlen($description) <= 3000)
            $this->_description_entreprise = $description;
       
    }

    public function setId_secteur($id) {
        $this->_id_secteur = (int) $id;
    }

}