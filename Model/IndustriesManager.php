<?php

class industriesManager {
    private $_co;

    public function __construct($co) {$this->setCo($co);}

    public function get($par, $val) {
        $industries = [];
        $request = "SELECT * FROM entreprise WHERE '{$par}' = '{$val}'";
        $query = $this->_co->prepare($request);
        $query->execute();
        
        while ($data = $query->fetch(PDO::FETCH_ASSOC))
        $industries[]= new industries($data);

        return $industries;
    }

    public function getbyid($val) {
        $query = $this->_co->prepare("SELECT * FROM entreprise WHERE id_entreprise = '{$val}'");
        $query->execute();

        $data = $query->fetch(PDO::FETCH_ASSOC);
        $industries= new industries($data);

        return $industries;
    }

    public function getList() {
        $industries = [];
        $query = $this->_co->query("SELECT * FROM entreprise");

        while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
            $industries[] = new industries($data);
        }
        
        return $industries;
    }

    /*public function delete(industries $industries){
        $query = $this->_co->prepare('DELETE FROM entreprise WHERE id_entreprise = :id_entreprise');
        $result = $query->execute([
            'id_entreprise' => $industries->id_industries()
        ]);

        return $result;
    }*/

    public function add(industries $industries) {
        $query = $this->_co->prepare('INSERT INTO entreprise(nom_entreprise, lieu_entreprise, evalMoy_entreprise, nbStagiaire_entreprise, description_entreprise, id_secteur) VALUES (:nom_entreprise, :lieu_entreprise, :evalMoy_entreprise, :nbStagiaire_entreprise, :description_entreprise, :id_secteur)');
        $result = $query->execute([
            'nom_entreprise'=> $industries->name_entreprise(),
            'lieu_entreprise'=> $industries->lieu_entreprise(),
            'evalMoy_entreprise'=> $industries->evalMoy_entreprise(),
            'nbStagiaire_entreprise'=> $industries->nbStagiaire_entreprise(),
            'description_entreprise'=> $industries->description_entreprise(),
            'id_secteur'=> $industries->id_secteur(),
        ]);
    }


    public function update(user $industries) {
        $query = $this->_co->prepare('UPDATE utilisateur SET user_utilisateur = :user_utilisateur, mdp_utilisateur = :mdp_utilisateur, nom_utilisateur = :nom_utilisateur, prenom_utilisateur = :prenom_utilisateur, id_role = :id_role, id_promotion = :id_promotion, id_centre = :id_centre ');
        $result= $query->execute([
            'id_entreprise' => $industries->id_industries(),
            'nom_entreprise'=> $industries->name_entreprise(),
            'lieu_entreprise'=> $industries->lieu_entreprise(),
            'evalMoy_entreprise'=> $industries->evalMoy_entreprise(),
            'nbStagiaire_entreprise'=> $industries->nbStagiaire_entreprise(),
            'description_entreprise'=> $industries->description_entreprise(),
            'id_secteur'=> $industries->id_secteur(),
        ]);

        return $result;
    }

    public function setCo(PDO $co){
        $this->_co = $co;
    }

}

?>