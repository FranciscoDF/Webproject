<?php
class Views{
    private $_file;
    private $_t;

    public function __construct($action)
    {
        $this->_file = 'View/View'.$action.'.php';
    }

    // GENERE ET AFFICHE LA VIEW
    public function generate($data)
    {   
        /*$secteur= $data['secteur'];
        print_r($secteur->id_sector());*/
        //PARTIE MAIN DE LA VUE 
        $content = $this->generateFile($this->_file, $data);
        /*$temp = $data[1];
        $temps = $temp->user_username();
        print_r($temps);*/
        
        // TEMPLATE (HEADER+FOOTER css FORM)
        $view = $this->generateFile('View/template.php', array('t'=> $this->_t,'content' => $content));
        
        echo $view;
    }
    // GENERE UN FICHIER VUE ET RENVOIE LE RESUTLAT PRODUIT
    private function generateFile($file, $data)
    {
        if(file_exists($file))
        {
            extract($data);
            ob_start(); // Mise en tempon
            
            // INCLURE LE FICHIER VUE
            require $file;
            
            return ob_get_clean();
        }
        else
            throw new Exception('Fichier'.$file.'introuvable');

    }
}