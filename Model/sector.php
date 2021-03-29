<?php

include 'Connexion_BDD.php';
class sector {
    private $_id_sector;
    private $_name_sector;
    

    public function hydrate(array $data){
        foreach ($data as $key => $value) {
            $method = 'set'.ucfirst($key);

            if (method_exists($this, $method))
                $this->$method($value);
        }
    }


    public function id_sector() {return $this->_id_sector;}
    public function name_sector() {return $this->_name_sector;}

    public function setId_sector($id) {
        $id_sector = (int) $id;
        if ($id_sector > 0)
            $this->_id_sector = $id_sector;
    }

    public function setName_sector($name) {
        if (is_string($name) && strlen($name) <= 30)
            $this->_name_sector = $name;
    }
    

}


?>