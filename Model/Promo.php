<?php

class promo extends Model{
    private $_id_promo;
    private $_name_promo;
    
    public function __construct($data) {
        $this->hydrate($data);
    }

    public function hydrate(array $data){
        foreach ($data as $key => $value) {
            $method = 'set'.ucfirst($key);

            if (method_exists($this, $method))
                $this->$method($value);
        }
    }


    public function id_promo() {return $this->_id_promo;}
    public function name_promo() {return $this->_name_promo;}

    public function setId_promotion($id) {
        $id_promo = (int) $id;
        if ($id_promo > 0)
            $this->_id_promo = $id_promo;
    }

    public function setNom_promotion($name) {
        if (is_string($name) && strlen($name) <= 30)
            $this->_name_promo = $name;
    }
    

}


?>