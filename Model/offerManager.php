<?php

class offerManager {
    private $_co;

    public function __construct($co) {$this->setDb($co);}

    public function get($par, $val) {
        $offer = [];
        $request = "SELECT * FROM offre WHERE '{$par}' = '{$val}'";
        $query = $this->_co->query($request);
        
        while ($data = $query->fetch(PDO::FETCH_ASSOC))
            $offer[]= new offer($data);

        return $offer;
    }

    public function getList() {
        $offer = [];

        $query = $this->_co->$query("SELECT * FROM offre");

        while ($data = $query->fetch(PDO::FETCH_ASSOC))
            $offer = new offer($data);
        
        return $offer;
    }

    public function delete(offer $offer){
        $this->_co->exec('DELETE FROM offre WHERE id ='.$offer->id());
    }

    public function add(offer $offer) {
        $query = $this->_co->prepare('INSERT INTO offre(nom_offre, description_offre, lieu_offre, date_offre, duree_offre, remu_offre, nbPlace_offre, id_entreprise) VALUES (:nom_offre, :description_offre, :lieu_offre, :date_offre, :duree_offre, :remu_offre, :nbPlace_offre, :id_entreprise)');
        $query->execute([
            'nom_offre'=> $offer->name_offer(),
            'description_offre'=> $offer->description_offer(),
            'lieu_offre'=> $offer->location_offer(),
            'date_offre'=> $offer->date_offer(),
            'duree_offre'=> $offer->duration_offer(),
            'remu_offre'=> $offer->remu_offer(),
            'nbPlace_offre'=> $offer->nbPlace_offer(),
            'id_entreprise'=> $offer->id_company()
        ]);
    }


    public function update(user $user) {
        $query = $this->_co->prepare('UPDATE offre SET nom_offre = :nom_offre, description_offre = :description_offre, lieu_offre = :lieu_offre, date_offre = :date_offre, duree_offre = :duree_offre, remu_offre = :remu_offre, nbPlace_offre = :nbPlace_offre, id_entreprise = :id_entreprise');
        $query->execute([
            'nom_offre'=> $offer->name_offer(),
            'description_offre'=> $offer->description_offer(),
            'lieu_offre'=> $offer->location_offer(),
            'date_offre'=> $offer->date_offer(),
            'duree_offre'=> $offer->duration_offer(),
            'remu_offre'=> $offer->remu_offer(),
            'nbPlace_offre'=> $offer->nbPlace_offer(),
            'id_entreprise'=> $offer->id_company()
        ]);
    }

    public function setCo(PDO $co){
        $this->_co = $co;
    }

}

?>