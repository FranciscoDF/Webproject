<?php

class center extends Model{
    private $_id_center;
    private $_name_center;
    
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


    public function id_center() {return $this->_id_center;}
    public function name_center() {return $this->_name_center;}

    public function setId_centre($id) {
        $id_center = (int) $id;
        if ($id_center > 0)
            $this->_id_center = $id_center;
    }

    public function setNom_centre($name) {
        if (is_string($name) && strlen($name) <= 30)
            $this->_name_center = $name;
    }
    

}


?>