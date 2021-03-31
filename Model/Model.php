<?php

abstract class Model //revoir classe abstraite
{
    private static $_bdd;
    private static function setBdd()
    {
        //self:: = reference à la table actuellent tandis que $this-> = ref à l'object actuel
        self::$_bdd =new PDO ('mysql:host=localhost;dbname=projet;charset=utf8','root','');
        self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    protected function getBdd()
    {
        if(self::$_bdd == null) {
            self::setBdd();
        }
        return self::$_bdd;
    }
    /*protected function getAll($table, $obj)
    {
        $var = [];
        $req = self::$_bdd->prepare(' SELECT * FROM ' .$table.' ORDER BY id desc ' );
        $reque->excute();
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor();
    }*/
}
?>