<?php

class InternshipManager {
    private $_co;

    public function __construct($co) {$this->setCo($co);}

    public function get($par, $val) {
        $internship = [];
        $request = "SELECT * FROM offre WHERE '{$par}' = '{$val}'";
        $query = $this->_co->prepare($request);
        $query->execute();
        
        while ($data = $query->fetch(PDO::FETCH_ASSOC))
            $internship[]= new internship($data);

        return $internship;
    }

    public function getbyid($val) {
        $query = $this->_co->prepare("SELECT * FROM offre WHERE id_offre = '{$val}'");
        $query->execute();

        $data = $query->fetch(PDO::FETCH_ASSOC);
        $internship= new internship($data);

        return $internship;
    }

    public function getList() {
        $internship = [];
        $query = $this->_co->query("SELECT * FROM offre");

        while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
            $internship[] = new internship($data);
        }
        
        return $internship;
    }

    public function delete(internship $internship){
        $this->_co->exec('DELETE FROM offre WHERE id ='.$industries->id());
    }

    public function add(internship $internship) {
        $query = $this->_co->prepare('INSERT INTO offre(nom_offre, description_offre, lieu_offre, date_offre, duree_offre, remu_offre, nbPlace_offre, id_entreprise) VALUES (:nom_offre, :description_offre, :lieu_offre, :date_offre, :duree_offre, :remu_offre, :nbPlace_offre, :id_entreprise)');
        $result = $query->execute([
            'nom_offre'=> $internship->name_internship(),
            'description_offre'=> $internship->des_internship(),
            'lieu_offre'=> $internship->lieu_internship(),
            'date_offre'=> $internship->date_internship(),
            'duree_offre'=> $internship->duree_internship(),
            'remu_offre'=> $internship->remu_internship(),
            'nbPlace_offre'=> $internship->nbPlace_internship(),
            'id_entreprise'=> $internship->id_entreprise()
        ]);
            return $result;
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