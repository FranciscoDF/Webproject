<?php

class step extends Model{
    private $_id_step;
    private $_name_step;
    
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


    public function id_step() {return $this->_id_step;}
    public function name_step() {return $this->_name_step;}

    public function setId_etapes($id) {
        $id_step = (int) $id;
        if ($id_step > 0)
            $this->_id_step = $id_step;
    }

    public function setNom_etapes($name) {
        if (is_string($name) && strlen($name) <= 30)
            $this->_name_step = $name;
    }
    

}


?>