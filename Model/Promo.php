<?php

include 'Connexion_BDD.php';
class promo {
    private $_id_promo;
    private $_name_promo;
    

    public function hydrate(array $data){
        foreach ($data as $key => $value) {
            $method = 'set'.ucfirst($key);

            if (method_exists($this, $method))
                $this->$method($value);
        }
    }


    public function id_promo() {return $this->_id_promo;}
    public function name_promo() {return $this->_name_promo;}

    public function setId_promo($id) {
        $this->_id_promo = (int) $id;
        if ($id > 0)
            $this->_id_promo = $id;
    }

    public function setName_promo($name) {
        if (is_string($name) && strlen($name) <= 30)
            $this->_name_promo = $name;
    }
    

}


?>