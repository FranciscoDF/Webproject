<?php

class role extends Model
{
    private $_id_role;
    private $_name_role;
    
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


    public function id_role() {return $this->_id_role;}
    public function name_role() {return $this->_name_role;}

    public function setId_role($id) {
        $type = gettype($id);
        if ($type == 'int')
            $this->_id_role = $id_role;

        /*$id_role = (int) $id;
        if ($id_role > 0)
            $this->_id_role = $id_role;*/
    }

    public function setNom_role($name) {
        if (is_string($name) && strlen($name) <= 30)
            $this->_name_role = $name;
    }
    

}


?>