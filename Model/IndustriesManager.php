<?php

class industriesManager {
    private $_co;

    public function __construct($co) {$this->setCo($co);}

    public function get($par, $val) {
        $user = [];
        $request = "SELECT * FROM entreprise WHERE '{$par}' = '{$val}'";
        $query = $this->_co->query($request);
        
        while ($data = $query->fetch(PDO::FETCH_ASSOC))
            $user[]= new industries($data);

        return $user;
    }

    public function getList() {
        $industries = [];
        $query = $this->_co->query("SELECT * FROM entreprise");

        while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
            $industries[] = new industries($data);
        }
        
        return $industries;
    }

    public function delete(industries $industries){
        $this->_co->exec('DELETE FROM utilisateur WHERE id ='.$industries->id());
    }

    public function add(industries $industries) {
        $query = $this->_co->prepare('INSERT INTO entreprise(nom_entreprise, lieu_entreprise, evalMoy_entreprise, nbStagiaire_entreprise, description_entreprise, id_secteur) VALUES (:nom_entreprise, :lieu_entreprise, :evalMoy_entreprise, :nbStagiaire_entreprise, :description_entreprise, :id_secteur)');
        $query->execute([
            'nom_entreprise'=> $user->name_entreprise(),
            'lieu_entreprise'=> $user->lieu_entreprise(),
            'evalMoy_entreprise'=> $user->evalMoy_entreprise(),
            'nbStagiaire_entreprise'=> $user->nbStage_entreprise(),
            'description_entreprise'=> $user->des_entreprise(),
            'id_secteur'=> $user->id_secteur(),
        ]);
    }


    public function update(user $user) {
       /* $query = $this->_co->prepare('UPDATE utilisateur SET user_utilisateur = :user_utilisateur, mdp_utilisateur = :mdp_utilisateur, nom_utilisateur = :nom_utilisateur, prenom_utilisateur = :prenom_utilisateur, id_role = :id_role, id_promotion = :id_promotion, id_centre = :id_centre ');
        $query->execute([
            'user_utilisateur'=> $user->username_user(),
            'mdp_utilisateur'=> $user->password_user(),
            'nom_utilisateur'=> $user->fname_user(),
            'prenom_utilisateur'=> $user->lname_user(),
            'id_role'=> $user->id_role(),
            'id_promotion'=> $user->id_promo(),
            'id_centre'=> $user->id_center()
        ]);*/
    }

    public function setCo(PDO $co){
        $this->_co = $co;
    }

}

?>