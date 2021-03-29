<?php
require_once('Views/View.php');

class ControllerUser
{
    private $_userManager;
    private $_view; 

    public function __construct($url) {
        if (isset($url) && count($url) > 1){
            throw new Exception('Page introuvable');
        } else
            $this->user();
    }

    private function user() {
        $this->_userManager = new userManager;
        $user= $this->_userManager->getList();

        $this->_view = new View('User');
        $this->_view->generate(array('utiisateur' => $user));
    }

}