<?php

include 'Connexion_BDD.php';
class center {
    private $_id_center;
    private $_name_center;
    

    public function hydrate(array $data){
        foreach ($data as $key => $value) {
            $method = 'set'.ucfirst($key);

            if (method_exists($this, $method))
                $this->$method($value);
        }
    }


    public function id_center() {return $this->_id_center;}
    public function name_center() {return $this->_name_center;}

    public function setId_center($id) {
        $this->_id_center = (int) $id;
        if ($id > 0)
            $this->_id_center = $id;
    }

    public function setName_center($name) {
        if (is_string($name) && strlen($name) <= 30)
            $this->_name_center = $name;
    }
    

}


?>