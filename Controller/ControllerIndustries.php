<?php
require_once('View/View.php');

class ControllerIndustries extends Model
{
    private $_industriesManager;
    private $_view;

    public function __construct($url) {
        /*if (isset($url) && count($url) > 1){
            throw new Exception('Page introuvable');
        }*/

        switch ($url[1]) {
            case 'view' : 
                $this->industriesview();
                break;
            case 'ajouter' : industriesadd(); break;
            case 'update' : industriesupdate(); break;
            case 'delete' : industriesdelete(); break;
        }
    }

    private function industriesview() {
        $yo = $this->getBdd();
        $this->_industriesManager = new industriesManager($yo);
        $industries= $this->_industriesManager->getList();

        

        /*foreach  ($user as $row) {
            $temps = $row[$i]->id_user();
            print  'Pseudo :' . $temp ;
            $temps = '';
            $i++;
        }*/

        $this->_view = new Views('Industries');
        $this->_view->generate(array('industries' => $industries));
    }

    private function useradd(user $industries) {
        $this->_industriesManager = new industriesManager($_bdd);
        $industries= $this->_industriesManager->add();
    }

    private function userupdate(user $industries){
        $this->_industriesManager = new industriesManager($_bdd);
        $industries= $this->_industriesManager->update();
    }

}