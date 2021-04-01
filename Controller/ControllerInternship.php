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
            case 'formadd' :
                $this->pageadd(); 
                break;
            case 'add' :
                $this->internshipadd();
                break;
            case 'formupdate' :
                $this->pageupdate();
                break;
            case 'update' :
                $this->internshipupdate();
                break;
            case 'delete' :
                $this->internshipdelete();
             break;
        }
    }

    private function internshipview() {
        $yo = $this->getBdd();
        $this->_internshipManager = new internshipManager($yo);
        $internship= $this->_internshipManager->getList();

        
        $this->_view = new Views('Internship');
        $this->_view->generate(array('internship' => $internship));
    }

    private function pageadd(){
        $yo = $this->getBdd();

        $temp = new industriesManager($yo);
        $industries = $temp->getList();

        $test[0] = $industries;

        $this->_view = new Views('InternshipAdd');
        $this->_view->generate(array('test' => $test));


    }

    private function pageupdate(){
        $yo = $this->getBdd();


        $temp = new industriesManager($yo);
        $industries = $temp->getList();

        $temp1 = new internshipManager($yo);
        $internship = $temp1->getbyid($_POST['id_offre']);

        $test[0] = $industries;
        $test[1] = $internship;

        $this->_view = new Views('InternshipUpdate');
        $this->_view->generate(array('test' => $test));
    }


    private function internshipadd() {
        
        if(isset($_POST['submit'])){
            $temp = new internship($_POST);
            $yo = $this->getBdd();
            $this->_internshipManager = new internshipManager($yo);
            $internship= $this->_internshipManager->add($temp);

            if ($internship){
                $message = 'Your offer has been added';
            } else {
                $message = 'Sorry, a problem occured during the process. Please try again !';
            }
        }

        $this->_view = new Views('InternshipAddValid');
        $this->_view->generate(array('message' => $message));

    }

    private function internshipupdate(){
        if(isset($_POST['submit'])){
            $temp = new internship($_POST);
            $yo = $this->getBdd();
            $this->_internshipManager = new internshipManager($yo);
            $internship= $this->_internshipManager->update($temp);

            if ($internship){
                $message = 'Your offer has been updated';
            } else {
                $message = 'Sorry, a problem occured during the process. Please try again !';
            }
        }
        $this->_view = new Views('InternshipUpdateValid');
        $this->_view->generate(array('message' => $message));
    }

    private function internshipdelete(){
      
        $yo = $this->getBdd();

        $temp = new internshipManager($yo);
        $internship = $temp->getbyid($_POST['id_offre']);
        $result = $temp->delete($internship);
        if ($result){
            $message = 'Your offer has been deleted';
        } else {
            $message = 'Sorry, a problem occured during the process. Please try again !';
        }

        $this->_view = new Views('InternshipDelete');
        $this->_view->generate(array('message' => $message));
        
    }

}