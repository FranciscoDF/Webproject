<?php

class evaluationManager {
    private $_co;

    public function __construct($co) {$this->setCo($co);}

    public function get($par, $val) {
        $evaluation = [];
        $request = "SELECT * FROM evaluation WHERE '{$par}' = '{$val}'";
        $query = $this->_co->prepare($request);
        $query->execute();
        
        while ($data = $query->fetch(PDO::FETCH_ASSOC))
            $evaluation[]= new evaluation($data);

        return $evaluation;
    }

    public function getbyid($val) {
        $query = $this->_co->prepare("SELECT * FROM evaluation WHERE id_evaluation = '{$val}'");
        $query->execute();

        $data = $query->fetch(PDO::FETCH_ASSOC);
        $evaluation= new evaluation($data);

        return $evaluation;
    }

    public function getList() {
        $evaluation = [];

        $query = $this->_co->$query("SELECT * FROM evaluation");

        while ($data = $query->fetch(PDO::FETCH_ASSOC))
            $evaluation = new evaluation($data);
        
        return $evaluation;
    }

    public function setCo(PDO $co){
        $this->_co = $co;
    }

}

?>