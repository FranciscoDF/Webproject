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
            case 'formadd' : $this->pageadd(); break;
            case 'add' : 
                $this->industriesadd(); 
                break;
            case 'formupdate' : 
                    $this->pageupdate(); 
                    break;
            case 'update' :
                    $this->industriesupdate(); 
                    break;
            
        }
    }

    private function pageadd(){
        $yo = $this->getBdd();

        $temp = new sectorManager($yo);
        $sector = $temp->getList();

        //$test[0] = $secteur;
        //print_r($test[0]);
      
        $this->_view = new Views('IndustriesAdd');
        $this->_view->generate(array('sector' => $sector));
    }

    private function pageupdate(){
        $yo = $this->getBdd();


        $temp = new sectorManager($yo);
        $secteur = $temp->getList();

        $temp1 = new industriesManager($yo);
        $industries = $temp1->getbyid($_POST['id_entreprise']);

        $test[0] = $secteur;
        $test[1] = $industries;

        $this->_view = new Views('IndustriesUpdate');
        $this->_view->generate(array('test' => $test));
    }

    private function industriesview() {
        $yo = $this->getBdd();
        $this->_industriesManager = new industriesManager($yo);
        $industries= $this->_industriesManager->getList();

        

        /*foreach  ($industries as $row) {
            $temps = $row[$i]->id_industries();
            print  'Pseudo :' . $temp ;
            $temps = '';
            $i++;
        }*/

        $this->_view = new Views('Industries');
        $this->_view->generate(array('industries' => $industries));
    }

    
    private function industriesadd() {
        
        if(isset($_POST['submit'])){
            
            $temp = new industries($_POST);
            $yo = $this->getBdd();
            $this->_industriesManager = new industriesManager($yo);
            $industries= $this->_industriesManager->add($temp);

            if ($industries){
                $message = 'Your industries has been added';
            } else 
            {
                $message = 'Sorry, a problem occured during the process. Please try again !';
            }
        }

        $this->_view = new Views('IndustriesAddValid');
        $this->_view->generate(array('message' => $message));

    }


    private function industriesupdate(){
        if(isset($_POST['submit'])){
            $temp = new industries($_POST);
            $yo = $this->getBdd();
            $this->_industriesManager = new industriesManager($yo);
            $industries= $this->_industriesManager->update($temp);

            if ($industries){
                $message = 'Your industries has been updated';
            } else {
                $message = 'Sorry, a problem occured during the process. Please try again !';
            }
        }
        $this->_view = new Views('IndustriesUpdateValid');
        $this->_view->generate(array('message' => $message));
    }


}


