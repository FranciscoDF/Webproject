<?php

class permissionManager {
    private $_co;

    public function __construct($co) {$this->setDb($co);}

    public function get($par, $val) {
        $permission = [];
        $request = "SELECT * FROM permission WHERE '{$par}' = '{$val}'";
        $query = $this->_co->query($request);
        
        while ($data = $query->fetch(PDO::FETCH_ASSOC))
            $permission[]= new permission($data);

        return $permission;
    }

    public function getList() {
        $permission = [];

        $query = $this->_co->$query("SELECT * FROM permission");

        while ($data = $query->fetch(PDO::FETCH_ASSOC))
            $permission = new permission($data);
        
        return $permission;
    }

    public function setCo(PDO $co){
        $this->_co = $co;
    }

}

?>