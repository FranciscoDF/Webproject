<?php

class roleManager {
    private $_co;

    public function __construct($co) {$this->setDb($co);}

    public function get($par, $val) {
        $user = [];
        $request = "SELECT * FROM role WHERE '{$par}' = '{$val}'";
        $query = $this->_co->query($request);
        
        while ($data = $query->fetch(PDO::FETCH_ASSOC))
            $role[]= new role($data);

        return $role;
    }

    public function getList() {
        $role = [];

        $query = $this->_co->$query("SELECT * FROM role");

        while ($data = $query->fetch(PDO::FETCH_ASSOC))
            $role = new role($data);
        
        return $role;
    }

    public function setCo(PDO $co){
        $this->_co = $co;
    }

}

?>