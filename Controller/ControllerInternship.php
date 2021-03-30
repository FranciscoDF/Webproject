<?php
require_once('View/View.php');

class ControllerInternship extends Model
{
    private $_internshipManager;
    private $_view;

    public function __construct($url) {
        /*if (isset($url) && count($url) > 1){
            throw new Exception('Page introuvable');
        }*/

        switch ($url[1]) {
            case 'view' : 
                $this->internshipview();
                break;
            case 'ajouter' : internshipadd(); break;
            case 'update' : internshipupdate(); break;
            case 'delete' : internshipdelete(); break;
        }
    }

    private function internshipview() {
        $yo = $this->getBdd();
        $this->_internshipManager = new internshipManager($yo);
        $internship= $this->_internshipManager->getList();

        

        /*foreach  ($user as $row) {
            $temps = $row[$i]->id_user();
            print  'Pseudo :' . $temp ;
            $temps = '';
            $i++;
        }*/

        $this->_view = new Views('Internship');
        $this->_view->generate(array('internship' => $internship));
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