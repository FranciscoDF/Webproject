<?php
require_once('Views/View.php');

class ControllerUser
{
    private $_userManager;
    private $_view; 

    public function __construct($url) {
        echo 'il faut appeler la fonction : '.$url[1];
        if (isset($url) && count($url) > 1){
            throw new Exception('Page introuvable');
        }
    }

    private function userview() {
        $this->_userManager = new userManager;
        $user= $this->_userManager->getList();

        $this->_view = new View('User');
        $this->_view->generate(array('user' => $userView));
    }

    private function useradd(user $user) {
        $this->_userManager = new userManager;
        $user= $this->_userManager
    }

}