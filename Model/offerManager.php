<?php

class offerManager {
    private $_co;

    public function __construct($co) {$this->setDb($co);}

    public function get($par, $val) {
        $permission = [];
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

    public function setCo(PDO $co){
        $this->_co = $co;
    }

}

?>