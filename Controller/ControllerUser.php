<?php
require_once('View/View.php');

class ControllerUser extends Model
{
    private $_userManager;
    private $_view;

    public function __construct($url) {
        /*if (isset($url) && count($url) > 1){
            throw new Exception('Page introuvable');
        }*/

        switch ($url[1]) {
            case 'view' : 
                $this->userview();
                break;
            case 'ajouter' : useradd(); break;
            case 'update' : userupdate(); break;
            case 'delete' : userdelete(); break;
        }
    }

    private function userview() {
        $yo = $this->getBdd();
        $this->_userManager = new userManager($yo);
        $user= $this->_userManager->getList();

        

        /*foreach  ($user as $row) {
            $temps = $row[$i]->id_user();
            print  'Pseudo :' . $temp ;
            $temps = '';
            $i++;
        }*/

        $this->_view = new Views('User');
        $this->_view->generate(array('user' => $user));
    }

    private function useradd(user $user) {
        $this->_userManager = new userManager($_bdd);
        $user= $this->_userManager->add();
    }

    private function userupdate(user $user){
        $this->_userManager = new userManager($_bdd);
        $user= $this->_userManager->update();
    }

}