<?php

include 'Connexion_BDD.php';
class role {
    private $_id_role;
    private $_name_role;
    

    public function hydrate(array $data){
        foreach ($data as $key => $value) {
            $method = 'set'.ucfirst($key);

            if (method_exists($this, $method))
                $this->$method($value);
        }
    }


    public function id_role() {return $this->_id_role;}
    public function name_role() {return $this->_name_role;}

    public function setId_role($id) {
        $this->_id_role = (int) $id;
        if ($id > 0)
            $this->_id_role = $id;
    }

    public function setName_role($name) {
        if (is_string($name) && strlen($name) <= 30)
            $this->_name_role = $name;
    }
    

}


?>