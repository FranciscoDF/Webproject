<?php

class ability extends Model{

    private $_id_ability;
    private $_name_ability;
    
    public function __construct($data) {
        $this->hydrate( $data);
    }

    public function hydrate(array $data){
        foreach ($data as $key => $value) {
            $method = 'set'.ucfirst($key);

            if (method_exists($this, $method))
                $this->$method($value);
        }
    }


    public function id_ability() {return $this->_id_ability;}
    public function name_ability() {return $this->_name_ability;}

    public function setId_competence($id) {
        $id_ability = (int) $id;
        if ($id_ability > 0)
            $this->_id_ability = $id_ability;
    }

    public function setNom_competence($name) {
        if (is_string($name) && strlen($name) <= 30)
            $this->_name_ability = $name;
    }
    

}


?>