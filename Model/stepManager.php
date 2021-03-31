<?php

class stepManager {
    private $_co;

    public function __construct($co) {$this->setCo($co);}

    public function get($par, $val) {
        $step = [];
        $request = "SELECT * FROM etapes WHERE '{$par}' = '{$val}'";
        $query = $this->_co->prepare($request);
        $query->execute();
        
        while ($data = $query->fetch(PDO::FETCH_ASSOC))
            $step[]= new step($data);

        return $step;
    }

    public function getbyid($val) {
        $query = $this->_co->prepare("SELECT * FROM etapes WHERE id_etapes = '{$val}'");
        $query->execute();

        $data = $query->fetch(PDO::FETCH_ASSOC);
        $step= new step($data);

        return $step;
    }

    public function getList() {
        $step = [];

        $query = $this->_co->$query("SELECT * FROM etapes");

        while ($data = $query->fetch(PDO::FETCH_ASSOC))
            $step = new step($data);
        
        return $step;
    }

    public function setCo(PDO $co){
        $this->_co = $co;
    }

}

?>