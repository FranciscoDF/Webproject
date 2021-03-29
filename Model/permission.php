<?php

include 'Connexion_BDD.php';
class permission {
    private $_id_permission;
    private $_name_permission;
    

    public function hydrate(array $data){
        foreach ($data as $key => $value) {
            $method = 'set'.ucfirst($key);

            if (method_exists($this, $method))
                $this->$method($value);
        }
    }


    public function id_permission() {return $this->_id_permission;}
    public function name_permission() {return $this->_name_permission;}

    public function setId_permission($id) {
        $id_permission = (int) $id;
        if ($id_permission > 0)
            $this->_id_permission = $id_permission;
    }

    public function setName_permission($name) {
        if (is_string($name) && strlen($name) <= 30)
            $this->_name_permission = $name;
    }
    

}


?>