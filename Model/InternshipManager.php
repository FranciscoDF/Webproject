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
        $query = $this->_co->prepare('DELETE FROM offre WHERE id_offre = :id_offre');
        $result = $query->execute([
            'id_offre' => $internship->id_internship()
        ]);

        return $result;
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


    public function update(internship $internship) {
        $query = $this->_co->prepare('UPDATE offre SET nom_offre = :nom_offre, description_offre = :description_offre, lieu_offre = :lieu_offre, date_offre = :date_offre, duree_offre = :duree_offre, remu_offre = :remu_offre, nbPlace_offre = :nbPlace_offre, id_entreprise = :id_entreprise WHERE id_offre = :id_offre');
        $result = $query->execute([
            'id_offre'=> $internship->id_internship(),
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

    public function setCo(PDO $co){
        $this->_co = $co;
    }

}

?>