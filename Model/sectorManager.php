<?php

class sectorManager {
    private $_co;

    public function __construct($co) {$this->setCo($co);}

    public function get($par, $val) {
        $sector = [];
        $request = "SELECT * FROM secteur WHERE '{$par}' = '{$val}'";
        $query = $this->_co->query($request);
        
        while ($data = $query->fetch(PDO::FETCH_ASSOC))
            $sector[]= new sector($data);

        return $sector;
    }

    public function getList() {
        $sector = [];

        $query = $this->_co->$query("SELECT * FROM secteur");

        while ($data = $query->fetch(PDO::FETCH_ASSOC))
            $sector = new sector($data);
        
        return $sector;
    }

    public function setCo(PDO $co){
        $this->_co = $co;
    }

}

?>