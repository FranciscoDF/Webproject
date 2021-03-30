<?php

class centerManager {
    private $_co;

    public function __construct($co) {$this->setCo($co);}

    public function get($par, $val) {
        $center = [];
        $request = "SELECT * FROM centre WHERE '{$par}' = '{$val}'";
        $query = $this->_co->query($request);
        
        while ($data = $query->fetch(PDO::FETCH_ASSOC))
            $promo[]= new promo($data);

        return $promo;
    }

    public function getbyid($val) {
        $query = $this->_co->query("SELECT * FROM centre WHERE id_centre = '{$val}'");
        
        $data = $query->fetch(PDO::FETCH_ASSOC);
        $center= new center($data);

        return $center;
    }

    public function getList() {
        $promo = [];

        $query = $this->_co->$query("SELECT * FROM promotion");

        while ($data = $query->fetch(PDO::FETCH_ASSOC))
            $promo = new promo($data);
        
        return $promo;
    }

    public function setCo(PDO $co){
        $this->_co = $co;
    }

}

?>