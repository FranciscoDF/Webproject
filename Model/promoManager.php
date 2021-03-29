<?php

class promoManager {
    private $_co;

    public function __construct($co) {$this->setDb($co);}

    public function get($par, $val) {
        $promo = [];
        $request = "SELECT * FROM promotion WHERE '{$par}' = '{$val}'";
        $query = $this->_co->query($request);
        
        while ($data = $query->fetch(PDO::FETCH_ASSOC))
            $promo[]= new promo($data);

        return $promo;
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