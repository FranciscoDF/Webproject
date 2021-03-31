<?php

class abilityManager {
    private $_co;

    public function __construct($co) {$this->setCo($co);}

    public function get($par, $val) {
        $ability = [];
        $request = "SELECT * FROM competence WHERE '{$par}' = '{$val}'";
        $query = $this->_co->prepare($request);
        $query->execute();
        
        while ($data = $query->fetch(PDO::FETCH_ASSOC))
            $ability[]= new ability($data);

        return $ability;
    }

    public function getbyid($val) {
        $query = $this->_co->prepare("SELECT * FROM competence WHERE id_competence = '{$val}'");
        $query->execute();

        $data = $query->fetch(PDO::FETCH_ASSOC);
        $ability= new ability($data);

        return $ability;
    }

    public function getList() {
        $ability = [];

        $query = $this->_co->$query("SELECT * FROM competence");

        while ($data = $query->fetch(PDO::FETCH_ASSOC))
            $ability = new ability($data);
        
        return $ability;
    }

    public function setCo(PDO $co){
        $this->_co = $co;
    }

}

?>