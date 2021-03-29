<?php

class offer {
    private $_id_offer;
    private $_name_offer;
    private $_description_offer;
    private $_location_offer;
    private $_date_offer;
    private $_duration_offer;
    private $_remu_offer;
    private $_nbPlace_offer;
    private $_id_company;

    public function hydrate(array $data){
        foreach ($data as $key => $value) {
            $method = 'set'.ucfirst($key);

            if (method_exists($this, $method))
                $this->$method($value);
        }
    }


    public function id_offer() {return $this->_id_offer;}
    public function name_offer() {return $this->_name_offer;}
    public function description_offer() {return $this->_desciption_offer;}
    public function location_offer() {return $this->_location_offer;}
    public function date_offer() {return $this->_date_offer;}
    public function duration_offer() {return $this->_duration_offer;}
    public function remu_offer() {return $this->_remu_offer;}
    public function nbPlace_offer(){return $this->_nbPlace_offer;}
    public function id_company(){return $this->_id_company;}

    public function setId_offer($id) {
        $id_offer = (int) $id;
        if ($id_offer > 0)
            $this->_id_offer = $id_offer;
    }

    public function setName_offer($name) {
        if (is_string($name) && strlen($name) <= 50)
            $this->_name_offer = $name;
    }
    
    public function setDescription_offer($description) {
        if (is_string($description) && strlen($description) <= 50)
            $this->_description_offer = $description;
    }

    public function setLocation_offer($location) {
        if (is_string($location) && strlen($location) <= 50)
            $this->_location_offer = $location;
    }

    public function setDate_offer($date) {
        if (is_string($date) && strlen($date) <= 10)
            $this->_date_offer = $date;
    }
//////////
    public function setId_role($id) {
        $this->_id_role = (int) $id;
    }

    public function setId_promo($id) {
        $this->_id_promo = (int) $id;
    }

    public function setId_center($id) {
        $this->_id_center = (int) $id;
    }

}