<?php
require_once('View/View.php');

class ControllerHome
{
    private $_view;

    public function __construct($url)
    {
        /*if (isset($url) && count($url) > 1)
            throw new Exception('Page introuvable');
        else*/
        $table=[];
        $this->_view = new Views('Home');
        $this->_view->generate($table);

    }
}