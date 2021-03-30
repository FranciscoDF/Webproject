<?php

class roleManager {
    private $_co;

    public function __construct($co) {$this->setCo($co);}

    public function get($par, $val) {
        $role = [];
        $query = $this->_co->query("SELECT * FROM role WHERE '{$par}' = '{$val}'");
        
        while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
            $role[]= new role($data);
            $test = new role($data);
            print_r($test->name_role());
        }

        return $role;
    }

    public function getbyid($val) {
        $query = $this->_co->query("SELECT * FROM role WHERE id_role = '{$val}'");
        
        $data = $query->fetch(PDO::FETCH_ASSOC);
        $role= new role($data);

        return $role;
    }
    
    public function getList() {
        $role = [];

        $query = $this->_co->$query("SELECT * FROM role");

        while ($data = $query->fetch(PDO::FETCH_ASSOC))
            $role[] = new role($data);
        
        return $role;
    }

    public function setCo(PDO $co){
        $this->_co = $co;
    }

}

?>