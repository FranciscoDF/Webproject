<?php
require_once('View/View.php');

class ControllerApplication extends Model
{
    private $_applicationManager;
    private $_view;

    public function __construct($url) {
        /*if (isset($url) && count($url) > 1){
            throw new Exception('Page introuvable');
        }*/

        switch ($url[1]) {
            case 'view' : 
                $this->applicationview();
                break;
            case 'ajouter' : applicationadd(); break;
            case 'update' : applicationupdate(); break;
            case 'delete' : applicationdelete(); break;
        }
    }

    private function applicationview() {
        $yo = $this->getBdd();
        $this->_applicationManager = new applicationManager($yo);
        $application= $this->_applicationManager->getList();

        

        /*foreach  ($user as $row) {
            $temps = $row[$i]->id_user();
            print  'Pseudo :' . $temp ;
            $temps = '';
            $i++;
        }*/

        $this->_view = new Views('Application');
        $this->_view->generate(array('application' => $application));
    }

    private function useradd(user $application) {
        $this->_applicationManager = new applicationManager($_bdd);
        $application= $this->_applicationManager->add();
    }

    private function userupdate(user $application){
        $this->_applicationManager = new applicationManager($_bdd);
        $application= $this->_applicationManager->update();
    }

}